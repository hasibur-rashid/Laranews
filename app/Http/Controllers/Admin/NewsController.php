<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsStatusEnum;
use App\Model\Category;
use App\Model\Media;
use App\Model\News;
use App\Model\Pulling;
use App\Model\Tag;
use Crypt;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{

    //----------------------------------------------------- News--------------------------------------------------------
    public function index()
    {
        $news_list = News::orderBy('created_at', 'desc')->orderBy('news_lang', 'asc')->orderBy('category', 'asc')->orderBy('is_rss', 'asc')->get();
        return view('admin.news.news', compact('news_list'));
    }


    public function create($id = null)
    {
        $news = new News();
        if ($id != null) {
            $news = News::findorfail($id);
        }
        $categories = Category::orderBy('category_name')->where('category_parent_id', null)->get();
        $tags = Tag::orderBy('tag_title')->get();
        return view('admin.news.add-new', compact('tags', 'categories', 'news'));
    }


    public function store(Request $request)
    {
        try {
            $tags = implode('|', $request->tag_id);
            $medias = implode('|', $request->medias);

            $news = new News();
            $news->news_lang = $request->news_lang;
            $news->news_provider = $request->news_provider;
            $news->news_title = $request->news_title;
            $news->news_description = $request->news_description;
            $news->status = NewsStatusEnum::PUBLISHED;
            $news->news_posted_by = $request->news_posted_by;
            $news->category = $request->category_id;
            $news->tag = $tags;
            $news->is_fetured = (!empty($request->is_fetured)) ? 1 : 0;
            $news->news_medias = $medias;
            $news->save();

            return redirect()->back()->with('message', 'News Save Successfully.');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('message', 'Something went wrong, Please try again.');
        }

    }


    public function getMediaAjax()
    {
        try {
            $medias = Media::orderBy('created_at', 'desc')->get();

            $data_html = '';

            if (isset($medias)) {
                $data_html .= '<ul class="media_list">';

                foreach ($medias as $media) {
                    $data_html .= '<li><a href="javascript:;" class="thumbnail img-check" id="media_file_' . $media->id . '" data-url="' . asset(Storage::url($media->media_url)) . '" data-id="' . $media->id . '" style="display: block; position: relative;">
                             <div style="background-image: url(' . asset(Storage::url($media->media_url)) . ');" class="media_file">
                             </div>
                           <div class="caption">
                               <span></span>
                           </div>
                           <div class="clearfix"></div></a></li>';
                }
                $data_html .= '</ul>';
            }

            return response()->json(['medias' => $data_html]);
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('message', 'Something went wrong, Please try again.');
        }

    }


    public function destroy($id)
    {
        try{
            $news = News::findOrFail($id);
            $news->delete();

            return redirect()->back()->with('message', 'Delete Successfully.');

//            Session::flash('message', 'Successfully deleted the nerd!');
//            return response()->json($news);

        }
        catch(\Exception $e){
            dd($e);
            return redirect()->back()->with('message', 'Something went wrong, Please try again.');
        }
    }


    //-----------------------------------------------News Sources-------------------------------------------------------
    public function sourcesList(Request $request)
    {
        return view('admin.news.sources');
    }

    public function addNewsSource(Request $request)
    {

    }

    public function deleteNewsSource(Request $request)
    {

    }


    //--------------------------------------------------Polling---------------------------------------------------------
    public function pullList(Request $request)
    {
        $items = Pulling::orderBy('published_at', 'desc')->orderBy('question', 'asc')->get();
        return view('admin.news.polling', compact('items'));
    }

    public function addPull(Request $request)
    {
        try {
            $data_generate = '';
            if (isset($_GET['edit_id'])) {

                if (isset($_GET['edit_id'])) $item = Pulling::find(Crypt::decrypt($_GET['edit_id']));
                return response()->json(['success' => true, 'item' => $item]);

            } else {
                $item = new Pulling();
                if (!empty($request->id)) {
                    $item = Pulling::find($request->id);
                }

                if (isset($item)) {

                    $request->validate([
                        'question' => 'required|string|max:255',
                        'status' => 'required|numeric|max:4',
                        'language' => 'required|string|max:8',
//                        'published_at' => 'required|date',

                    ]);

                    DB::beginTransaction();
                    $item->question = $request->question;
                    $item->status = $request->status;
                    $item->language = $request->language;
                    $item->published_at = $request->published_at;
                    $item->save();
                    DB::commit();
                }
                return redirect()->back()->with('message', 'Save Successfully.');

            }
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('message', 'Something went wrong, Please try again.');
        }
    }

    public function deletePull($id)
    {
        try {
            $item = Pulling::findOrFail($id);
            $item->delete();
            return redirect()->back()->with('message', 'Delete Successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Something went wrong, Please try again.');
        }
    }

}
