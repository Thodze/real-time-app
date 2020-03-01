<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;
use App\User;

class Reply extends Model
{
    public function questions() {
        return $this->belongsTo(Question::class);
    }

    public function users() {
        return $this->belongsTo(User::class);
    }
}
