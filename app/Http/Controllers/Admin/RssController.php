<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Enum\AllEnum;
use Illuminate\Http\Request;
use App\Model\RssLink;
use App\Model\News;
use App\Model\Category;
use DB;
use Crypt;

class RssController extends Controller
{

    //-----------------------------------------------------RSS FEED SOURCE LIST-----------------------------------------
    public function list()
    {
        $items = RssLink::orderBy('status', AllEnum::STATUS_ACTIVE)->orderBy('rss_priority','asc')->orderBy('rss_lang')->orderBy('rss_country')->orderBy('rss_category')->orderBy('rss_provider')->get();
        return view('admin.rss.rss', compact('items'));
    }

    // add rss sources and update methode
    public function add(Request $request)
    {
        try {

            $data_generate = '';

            if (isset($_GET['edit_id']) || isset($_GET['lang'])) {

                if(isset($_GET['lang'])){
                    $categories = Category::where('category_lang',$_GET['lang'])->get();
                    return response()->json(['success' => true,'categories'=>$categories]);
                }
                else{
                    $item = RssLink::find(Crypt::decrypt($_GET['edit_id']));
                    $categories = Category::where('category_lang',$item->rss_lang)->get();

                    return response()->json(['success' => true, 'item' => $item, 'categories'=>$categories]);
                }
                
            } else {
                $item = new RssLink();
                if (!empty($request->id)) {
                    $item = RssLink::find($request->id);
                }

                if (isset($item)) {
                    DB::beginTransaction();
                    $item->rss_link = $request->rss_link;
                    $item->rss_provider = $request->rss_provider;
                    $item->rss_category = $request->rss_category;
                    $item->rss_country = $request->rss_country;
                    $item->rss_lang = $request->rss_language;
                    $item->rss_priority = $request->rss_priority;
                    $item->status = $request->status;
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

    // delete rss sources from the list
    public function delete($id)
    {
        try {
            $item = Category::findOrFail($id);
            $item->delete();
            return redirect()->back()->with('message', 'Delete Successfully.');

        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Something went wrong, Please try again.');
        }
    }


    //-----------------------------------------------GET DATA FROM RSS FEED SOURCE--------------------------------------

    // fire rss
    public function fireRss()
    {

        $feed = feedMe($link);

        foreach ($feed->channel->item as $item) {
            $description = '';
            $media_thumbnail = '';
            $category = '';
            $media = '';

            $title = (string)$item->title;
            $date = (string)date('Y-m-d H:i:s', strtotime($item->pubDate));
            if (!empty($item->description)) $description = (string)$item->description;
            elseif (!empty($item->children("content", true)->encoded)) $description = (string)$item->children("content", true)->encoded;
            $link = (string)$item->link;
            $source = (string)$item->source;
            $category = (string)$item->category;

            if (!empty($item->children('media', True))) {
                $media = (string)$item->children('media', True)->content->attributes()['url'];
            } elseif (!empty($item->image)) {
                $media = (string)$item->image->url;
            }
            if (!empty($item->children('media', True))) {
                $media_thumbnail = (string)$item->children('media', True)->thumbnail->attributes()['url'];
            }

            dd($title, $date, $description, $link, $source, $category, $media);

        }


        dd($feed);
    }

    // rss add to news
    public function rssAddToNews($id)
    {
        ini_set('allow_url_fopen', 'on');

        $news_count = 0;
        $rss = RssLink::findorfail($id);

        $link = $rss->rss_link;
        $feed = feedMe($link);


        $news_list = [];

        foreach ($feed->channel->item as $item) {
            $description = '';
            $media_thumbnail = '';
            $category = '';
            $media = '';
            $lang = '';
            $provider = '';

            if (!empty($feed->channel->language)) $lang = (string)$feed->channel->language;
            if (!empty($feed->channel->title)) $provider = (string)$feed->channel->title;

            // dd($item->image->url);

            $title = (string)$item->title;
            $date = (string)date('Y-m-d H:i:s', strtotime($item->pubDate));
            if (!empty($item->description)) $description = (string)$item->description;
            elseif (!empty($item->children("content", true)->encoded)) $description = (string)$item->children("content", true)->encoded;
            $link = (string)$item->link;
            $source = (string)$item->source;
            $category = (string)$item->category;

            $category_id = '';
            if(!empty($rss->rss_category)){
                $category_id = $rss->rss_category;
            }
            if(!empty($category)){
                $category_id = Category::where('category_name','LIKE','%'.$category.'%')->first();
            }

            if (!empty($item->children('media', True))) {
                $media = (string)$item->children('media', True)->content->attributes()['url'];
            } elseif (!empty($item->image)) {
                $media = (string)$item->image->url;
                if(empty($item->image->url)){
                    $media = (string)$item->image;
                }
            }
            
            if (!empty($item->children('media', True))) {
                $media_thumbnail = (string)$item->children('media', True)->thumbnail->attributes()['url'];
            }

            $news_array = News::select('news_title')->whereDate('created_at', date('Y-m-d'))->get();

            // check the title to another news title in the database for today date
            $check_text = newsTextCheck($title, $news_array);

            if ($check_text == false) {
                $news = new News();
                $news->news_lang = $rss->rss_lang;
                $news->news_provider = $provider;
                $news->news_title = $title;
                $news->news_description = $description;
                $news->category = $category_id;
                $news->tag = 0;
                $news->is_rss = AllEnum::NEWS_TYPE_RSS_FEED; // this news come from rss feed
                $news->status = AllEnum::STATUS_ACTIVE; // for published this news
                $news->rss_url = $link;
                $news->rss_media = $media;
                $news->rss_media_thumbnail = $media_thumbnail;
                $news->created_at = $date;
                $news->updated_at = $date;
                $news->save();
                $news_count++;
            }

        }

        return redirect()->back()->with('message', 'Rss news added successfully total ' . $news_count . ' news');
    }
        

    // fire
    public function fire($id)
    {
        ini_set('allow_url_fopen', 'on');

        $rss = RssLink::findorfail($id);

        $link = $rss->rss_link;


        $feed = feedMe($link);

        // dd($feed);

        // $feed = simplexml_load_file($link, null, LIBXML_NOCDATA);

        $news_list = [];

        foreach ($feed->channel->item as $item) {
            $description = '';
            $media_thumbnail = '';
            $category = '';
            $media = '';
            $lang = '';
            $provider = '';

            if (!empty($feed->channel->language)) $lang = (string)$feed->channel->language;
            if (!empty($feed->channel->title)) $provider = (string)$feed->channel->title;

            // dd($item->image->url);

            $title = (string)$item->title;
            $date = (string)date('Y-m-d H:i:s', strtotime($item->pubDate));
            if (!empty($item->description)) $description = (string)$item->description;
            elseif (!empty($item->children("content", true)->encoded)) $description = (string)$item->children("content", true)->encoded;
            $link = (string)$item->link;
            $source = (string)$item->source;
            $category = (string)$item->category;

            if (!empty($item->children('media', True))) {
                $media = (string)$item->children('media', True)->content->attributes()['url'];
            } elseif (!empty($item->image)) {
                $media = (string)$item->image->url;
                if(empty($item->image->url)){
                    $media = (string)$item->image;
                }
            }
            
            if (!empty($item->children('media', True))) {
                $media_thumbnail = (string)$item->children('media', True)->thumbnail->attributes()['url'];
            }

            $news_list[] = [
                'provider' => $provider,
                'title' => $title,
                'description' => $description,
                'link' => $link,
                'source' => $source,
                'category' => $category,
                'media' => $media,
                'media_thumbnail' => $media_thumbnail,
                'language' => $lang,
                'created_at' => $date,
            ];

            $items = $news_list;

        }

        return view('admin.rss.rss-test', compact('items'));


    }
}
