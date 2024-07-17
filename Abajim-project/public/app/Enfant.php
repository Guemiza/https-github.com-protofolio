<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\School_level;

class Enfant extends Model
{
    
    protected $table = 'enfant';
    protected $foreignKeys = [
        'level_id' => 'level_id', 
    ];
    protected $fillable = [
    'id',
       'nom',
       'prenom',
       'sexe',
       'level_id',
       'parent_id',
       'path'
    ];
    public function level()
    {
        return $this->belongsTo(School_level::class, $this->foreignKeys['level_id'], 'id');
    }
}
