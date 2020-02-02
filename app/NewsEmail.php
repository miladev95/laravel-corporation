<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsEmail extends Model
{
    protected $table = "news_email";
    protected $guarded = ['id'];
}
