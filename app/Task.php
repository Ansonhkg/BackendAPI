<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    //App\Task::incomplete();
    // public static function incomplete(){
    //    return static::where('completed', 0)->get();
    // }

    // App\Task::incomplete()->get();
    public function scopeIncomplete($query){
        return $query->where('completed', 0);
    }

    
}
