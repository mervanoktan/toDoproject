<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class category extends Model
{
    use HasFactory, softDeletes;
    protected $table = 'categories';
 public function getTasks(){
     return $this->hasMany(Task::class,'category_id',localKey:'id');
 }
  public function getuser(){
     return $this->belongsTo(User::class,'user_id','id');
  }
}
