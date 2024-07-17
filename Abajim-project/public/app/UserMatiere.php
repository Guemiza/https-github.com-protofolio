<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMatiere extends Model
{
    protected $table = 'user_matiere';
    protected $foreignKeys = [
        'matiere_id' => 'matiere_id', 
    ];
    protected $fillable = [
       'matiere_id',
       'teacher_id',
    ];
    // public function matiere()
    // {
    //     return $this->belongsTo(matiere::class, $this->foreignKeys['matiere'], 'id');
    // }
}
