<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = [
        'content', 'authorNickname', 'likes', 'shares', 'comments'
    ];
}
