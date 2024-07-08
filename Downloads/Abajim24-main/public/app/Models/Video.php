<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Manuels;
class Video extends Model
{

    protected $foreignKeys = [
        'user_id' => 'user_id', 
    ];
   
    protected $fillable = [
        'id',
       'video',
       'manuel_id',
       'titre',
      'description',
      'page',
      'numero',
      'user_id',
      'views',
      'likes',
      'dislikes',
      'thumbnail',
      'titleAll',
     ];
     public $timestamps = true;
     
     public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function teachers()
    {
        return $this->belongsTo(User::class, $this->foreignKeys['user_id'], 'id');
    }
    public function manuel()
    {
        return $this->belongsTo(Manuels::class, $this->foreignKeys['manuel_id'], 'id');
    }
}