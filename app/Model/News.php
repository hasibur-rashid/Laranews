<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['news_lang', 'news_provider', 'news_title','news_description', 'status', 'viewed', 'news_posted_by', 'category_id', 'tag_id', 'is_fetured', 'rss_url',];

    public function tags()
    {
        return $this->belongsToMany('App\Model\Tag');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class,'category');
    }
}
