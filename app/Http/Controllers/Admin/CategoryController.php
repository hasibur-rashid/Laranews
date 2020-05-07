<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Model\Category;
use DB;
use Crypt;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    //
    public function list()
    {
        $items = Category::orderBy('category_name', 'category_image', 'asc')->where('category_parent_id', null)->get();
        return view('admin.categories.categories', compact('items'));
    }

    //
    public function add(Request $request)
    {
        try {

            $data_generate = '';
            if (isset($_GET['edit_id'])) {
                $item = Category::find(Crypt::decrypt($_GET['edit_id']));

                return response()->json(['success' => true, 'item' => $item]);
            } else {
                $item = new Category();
                if (!empty($request->id)) {
                    $item = Category::find($request->id);
                }

                if (isset($item)) {
                    DB::beginTransaction();
                    $item->category_name = $request->category_name;
                    $item->category_slug = $request->category_slug;
                    $item->category_parent_id = $request->category_parent_id;
                    $item->category_lang = $request->category_lang;

                    $photo = $request->file('category_image');
                    if (!empty($photo)) {
                        // $path = 'uploads/category_image/';
                        // $photo_name = uploadFile($path, $category->category_image, $photo);
                        // $item->category_image = $photo_name;

                        if(!empty($request->id)) {
                            Storage::delete('category/'.$item->add_image);
                        }

                        $path = Storage::putFile('category', $photo);
                        $item->category_image = $path;
                    }
                    
                    $item->save();
                    DB::commit();
                }

                return redirect()->back()->with('message', 'Save Successfully.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Something went wrong, Please try again.');
        }
    }

    public function delete($id)
    {
        try{
            $item = Category::findOrFail($id);
            $item->delete();
            return redirect()->back()->with('message', 'Delete Successfully.');

        }
        catch(\Exception $e){
            dd($e);
            return redirect()->back()->with('message', 'Something went wrong, Please try again.');
        }
    }
}
