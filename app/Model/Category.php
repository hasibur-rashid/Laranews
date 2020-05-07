<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['category_name', 'category_parent_id', 'category_image','category_lang',];

    public function news()
    {
        return $this->hasMany('App\Model\News');
    }
    
    // Get Parent Category
    public function getParentCategory()
    {
        return $this->belongsTo(Category::class,'category_parent_id');
    }

    // getChildCategory
    public function getChildCategory()
    {
        return $this->hasMany(Category::class,'category_parent_id');
    }
}
