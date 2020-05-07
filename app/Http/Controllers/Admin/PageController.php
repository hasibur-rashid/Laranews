<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Page;
use Illuminate\Http\Request;
use DB;
use Crypt;

class PageController extends Controller
{
    public function staticPageList()
    {
        $items = Page::orderBy('page_title')->get();
        return view('admin.pages.pages', compact('items'));
    }

    public function addStaticPage(Request $request)
    {
        try {
            $data_generate = '';
            if (isset($_GET['edit_id'])) {

                if (isset($_GET['edit_id'])) $item = Page::find(Crypt::decrypt($_GET['edit_id']));
                return response()->json(['success' => true, 'item' => $item]);

            } else {
                $item = new Page();
                if (!empty($request->id)) {
                    $item = Page::find($request->id);
                }

                if (isset($item)) {

                    $request->validate([
                        'page_title' => 'required|string|max:128',
                        'page_slug' => 'required|string|max:128',
                        'page_details' => 'required|string',
                        'status' => 'required|numeric|max:4',
                        'page_image' => 'nullable|image',
                    ]);

                    DB::beginTransaction();
                    $item->page_title = $request->page_title;
                    $item->page_slug = $request->page_slug;
                    $item->page_details = $request->page_details;
                    $item->status = $request->status;
                    $item->page_image = $request->page_image;
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

    public function deleteStaticPage($id)
    {
        try {
            $item = Page::findOrFail($id);
            $item->delete();
            return redirect()->back()->with('message', 'Delete Successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Something went wrong, Please try again.');
        }
    }

    public function menuList()
    {
        return view('admin.pages.menu');
    }
}
