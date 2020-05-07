<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $table = 'advertisements';
    protected $fillable = ['add_title', 'add_description', 'add_rate', 'add_image', 'add_position','status', 'add_lifetime',];

}
