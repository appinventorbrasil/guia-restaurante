<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = ['name', 'description', 'photo', 'phone', 'google_maps', 'schedules', 'user_id'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function averageEvaluation(){
        return $this->comments()->avg('evaluation');
    }
}
