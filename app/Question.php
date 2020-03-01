<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Reply;
use App\Category;

class Question extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function rely() {
        return $this->hasMany(Reply::class);
    }

    public function categoriy() {
        return $this->belongsTo(Category::class);
    }
}
