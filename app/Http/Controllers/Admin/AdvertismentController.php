<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Advertisement;
use Illuminate\Http\Request;
use DB;
use Crypt;
use Validator;
use Illuminate\Support\Facades\Storage;

class AdvertismentController extends Controller
{
    
    public function list()
    {
        $items = Advertisement::orderBy('created_at')->get();
        return view('admin.advertisments.advertisments', compact('items'));
    }


    public function add(Request $request)
    {
        try {
            $data_generate = '';
            if (isset($_GET['edit_id'])) {

                $item = Advertisement::find(Crypt::decrypt($_GET['edit_id']));
                    
                return response()->json(['success' => true, 'item' => $item]);

            } else {
                $item = new Advertisement();
                if (!empty($request->id)) {
                    $item = Advertisement::find($request->id);
                }

                if (isset($item)) {

                    //Validation rulles
                    $request->validate([
                        'add_title' => 'required|max:255',
                        'add_description' => 'required|string',
                        'add_rate' => 'required|numeric',
                        'add_position' => 'required|integer',
                        'status' => 'required|integer',
                        'add_image' => 'nullable|image',
                        'start' => 'required|string',
                        'end' => 'required|string',
                    ]);

                    DB::beginTransaction();

                    if(!empty($request->file('add_image'))) {

                        if(!empty($request->id)) {
                            Storage::delete('advertisement/'.$item->add_image);
                        }

                        $path = Storage::putFile('advertisement', $request->file('add_image'));
                        $item->add_image = $path;
                    }
                
                    $item->add_title = $request->add_title;
                    $item->add_description = $request->add_description;
                    $item->add_rate = $request->add_rate;
                    $item->add_position = $request->add_position;
                    $item->status = $request->status;
                    $item->ad_start = date('Y-m-d',strtotime($request->start));
                    $item->ad_end = date('Y-m-d',strtotime($request->end));
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

    
    public function delete($id)
    {
        try{
            $item = Advertisement::findOrFail($id);
            $item->delete();
            return redirect()->back()->with('message', 'Delete Successfully.');
        }
        catch(\Exception $e){
            return redirect()->back()->with('message', 'Something went wrong, Please try again.');
        }
    }
}
