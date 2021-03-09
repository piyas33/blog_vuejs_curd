<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $table = "blogs";
    protected $fillable = [
        'title','title_bn','description','description_bn'
    ];
}
