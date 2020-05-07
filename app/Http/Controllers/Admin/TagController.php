<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Tag;
use DB;
use Crypt;

class TagController extends Controller
{
    
    public function list()
    {
        $items = Tag::orderBy('tag_title')->orderBy('tag_lang')->get();
        return view('admin.tags.tags', compact('items'));
    }


    public function add(Request $request)
    {
        try {
            $data_generate = '';
            if (isset($_GET['edit_id'])) {

                if (isset($_GET['edit_id'])) $item = Tag::find(Crypt::decrypt($_GET['edit_id']));
                return response()->json(['success' => true, 'item' => $item]);

            } else {
                $item = new Tag();
                if (!empty($request->id)) {
                    $item = Tag::find($request->id);
                }

                if (isset($item)) {

                    $request->validate([
                        'tag_title' => 'required|string|max:255',
                        'tag_slug' => 'required|string|max:255',
                        'tag_lang' => 'required|string|max:255',
                    ]);

                    DB::beginTransaction();
                    $item->tag_title = $request->tag_title;
                    $item->tag_slug = $request->tag_slug;
                    $item->tag_lang = $request->tag_lang;
                    $item->save();
                    DB::commit();
                }
//                return response()->json(['success' => true, 'item' => $item, 'message'=>'Save Successfully.']);

                return redirect()->back()->with('message', 'Save Successfully.');

            }
        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Something went wrong, Please try again.');
        }
    }


    public function delete($id)
    {
        try{
        $item = Tag::findOrFail($id);
        $item->delete();

//            return response()->json(['success' => true, 'message'=>'Delete Successfully.']);
       
        return redirect()->back()->with('message', 'Delete Successfully.');

        }
        catch(\Exception $e){
            dd($e);
            return redirect()->back()->with('message', 'Something went wrong, Please try again.');
        }
        
    }


    public function update($id, Request $request)
    {
        $task = Task::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();

        $task->fill($input)->save();

        Session::flash('flash_message', 'Task successfully added!');

        return redirect()->back();
    }

}
