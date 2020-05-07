<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news_list = News::orderBy('created_at','desc')->get();

        return view('frontend.index',compact('news_list'));
    }


}
