<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsComment extends Model
{
    protected $table = "news_comment";
    protected $guarded = ['id'];
}
