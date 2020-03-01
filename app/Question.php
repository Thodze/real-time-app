<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Reply;
use App\Category;

class Question extends Model
{
    public function users() {
        return $this->belongsTo(User::class);
    }

    public function relies() {
        return $this->hasMany(Reply::class);
    }

    public function categories() {
        return $this->belongsTo(Category::class);
    }
}
