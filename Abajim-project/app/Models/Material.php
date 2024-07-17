<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SectionMat;
class Material extends Model
{
    public $table = 'materials';
    protected $foreignKeys = [
        'section_id' => 'section_id', 
    ];
  
    protected $fillable = [
        'id',
        'name',
        'section_id',
        'path'
 
     ];
     public function section()
     {
         return $this->belongsTo(SectionMat::class, $this->foreignKeys['section_id'], 'id');
     }
}
