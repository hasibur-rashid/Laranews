<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $fillable = ['tag_title','tag_slug','tag_lang'];

    public function news()
    {
        return $this->belongsToMany('App\Model\News');
    }
}
