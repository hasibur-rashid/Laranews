<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Model\Media;
use DB;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Media::orderBy('created_at', 'desc')->get();
        return view('admin.media.media', compact('medias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $photos = $request->file('media_file');

            if (!empty($photos[0])) {
                DB::beginTransaction();
                foreach ($photos as $photo) {
                    $image_name = Storage::putFile('news-image', $photo);
                    $media = new Media();
                    $media->media_url = $image_name;
                    $media->media_type = 1;
                    $media->save();
                }
                DB::commit();

                $medias = Media::orderBy('created_at', 'desc')->get();

                $data_html = '';
                if (isset($medias)) {
                    $data_html .= '<ul class="media_list">';
                    foreach ($medias as $media) {
                        $data_html .= '<li>';

                        $data_html .= '<div class="thumbnail">';
                        $data_html .= '<div style="background-image: url(' . asset(Storage::url($media->media_url)) . ');" class="media_file">';
                        $data_html .= '</div>';
                        $data_html .= '<a class="delete_media" href="javascript:;" onchange="deleteImage(' . $media->id . ')"><i class="fa fa-cross"></i></a>';
                        $data_html .= '<div class="caption">';
                        $data_html .= '<span>' . $media->media_title . '</span>';
                        $data_html .= '</div>';
                        $data_html .= '</div></div>';
                        $data_html .= '</li>';
                    }
                    $data_html .= '</ul>';
                }

                return response()->json([$data_html]);
            }

            return response()->json(['success' => false]);
            // return redirect()->back()->with('message','Image upload successfully.');

        } catch (\Exception $e) {
            return response()->json(['success' => false]);
            // return redirect()->back()->with('message','Something wrong please try again later.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $media = Media::findorfail($id);
            Storage::delete($media->media_url);
            $media->delete();

        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Something wrong, Please try again.');
        }

    }
}
