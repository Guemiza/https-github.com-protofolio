<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLevel extends Model
{
     
    protected $table = 'user_level';
    protected $foreignKeys = [
        'level_id' => 'level_id', 
    ];
    protected $fillable = [
       'level_id',
       'teacher_id',
    ];
    // public function level()
    // {
    //     return $this->belongsTo(School_level::class, $this->foreignKeys['level_id'], 'id');
    // }
}
