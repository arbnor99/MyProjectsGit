<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
    public function student(){
        return $this->belongsTo('App\Models\Student');
    }
}
