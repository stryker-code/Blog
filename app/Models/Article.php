<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    //use SoftDeletes;
    /**
     * The users that belong to the article.
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
