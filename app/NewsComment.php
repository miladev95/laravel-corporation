<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsComment extends Model
{
    protected $table = "news_comment";
    protected $guarded = ['id'];

    public function news(){
        return $this->belongsTo('App\News')->withTimestamps();
    }

}
