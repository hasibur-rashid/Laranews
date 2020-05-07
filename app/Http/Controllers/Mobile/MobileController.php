<?php

namespace App\Http\Controllers\Mobile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\News;

class MobileController extends Controller
{
    // categoriesApi
    public function categoriesApi(Request $request)
    {
        $language = $request->language;
        $categories = Category::orderBy('category_name')->where('category_lang',$language)->get();
        return response()->json(['error'=>true,'categories'=>$categories]);
    }

    // news list
    public function newesApi(Request $request)
    {
        $language = $request->language;
        $news = News::orderBy('created_at','desc')->where('news_lang',$language)->paginate(20);
        return response()->json(['error'=>false,'news'=>$news]);
    }

}
