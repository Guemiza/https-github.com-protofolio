<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Material;

class School_level extends Model
{
    protected $fillable = [
        'id',
         'name'
 
     ];
   
    //  public function materials()
    //  {
    //      return $this->hasMany(SectionMat::class, 'section_id');
    //  }
}
