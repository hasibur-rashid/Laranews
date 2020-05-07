<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RssLink extends Model
{
    protected $table = 'rss_links';
    protected $fillable = ['rss_link','status'];
}
