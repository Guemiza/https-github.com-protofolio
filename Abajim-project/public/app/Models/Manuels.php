<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Material;

class Manuels extends Model
{
    public $table = 'manuels';
    protected $foreignKeys = [
        'material_id' => 'material_id', 
    ];
    
 
    protected $fillable = [
        'id',
       'name',
       'logo',
       'material_id',
       'matiereps_id',

    ];
    public function matiere()
    {
        return $this->belongsTo(Material::class, $this->foreignKeys['material_id'], 'id');
    }
}
