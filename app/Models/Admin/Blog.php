<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    public $timestamps = false;
     protected $fillable = [
         'id',
         'title',
         'alias',
         'date',
         'img',
         'description',
         'blog_content'
     ];
}
