<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";
    protected $guarded = ['id'];

    public function NewsComment(){
        return $this->belongsToMany("App\NewsComment")->withTimestamps();
    }
}
