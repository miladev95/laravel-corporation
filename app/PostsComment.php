<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostsComment extends Model
{
    protected $table = "posts_comment";
    protected $guarded = ['id'];

    public function PostsComment(){
        return $this->belongsTo("App\Posts")->withTimestamps();
    }
}
