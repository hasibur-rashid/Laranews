<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use DB;
use Crypt;


class UserController extends Controller
{
    //admin user
    public function adminUserList()
    {
        $items = User::where('user_type', 3)->orderBy('user_name')->get();
        return view('admin.users.admin-users', compact('items'));
    }

     public function addAdminUser(Request $request)
    {
        try {
            $data_generate = '';
            if (isset($_GET['edit_id'])) {

                if (isset($_GET['edit_id'])) $item = User::find(Crypt::decrypt($_GET['edit_id']));
                return response()->json(['success' => true, 'item' => $item]);

            } else {
                $item = new User();
                if (!empty($request->id)) {
                    $item = User::find($request->id);
                }

                if (isset($item)) {

                    $request->validate([
                        'user_image' => 'nullable|image',
                        'user_name' => 'required|string',
                        'user_email' => 'required|email',
                        'user_mobile' => 'required',
                        'user_password' => 'required',
                        'user_status' => 'required|integer',
                        'user_type' => 'required|integer',
                    ]);

                    DB::beginTransaction();
                    $item->user_image = $request->user_image;
                    $item->user_name = $request->user_name;
                    $item->user_email = $request->user_email;
                    $item->user_mobile = $request->user_mobile;
                    $item->user_password = $request->user_password;
                    $item->user_status = $request->user_status;
                    $item->user_type = 3;
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

     public function deleteAdminUser($id)
    {
        try {
            $item = User::findOrFail($id);
            $item->delete();
            return redirect()->back()->with('message', 'Delete Successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Something went wrong, Please try again.');
        }
    }

    //subscriber list
    public function subscriberList()
    {
        return view('admin.users.subscribers');
    }

    //user profile details
    public function userProfile()
    {
        return view('admin.users.profile');
    }
}
