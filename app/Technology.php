<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $fillable=[
      'category',
      'title',
      'content',
      'link',
      'image',
      'author'
    ];
}
