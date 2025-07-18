<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $table = 'tasks';

     public function getcategory()
     {
         //belongsTo hasMany hasOne

         return $this-> belongsTo( related:  Category::class,foreignKey: 'category_id',ownerKey:'id' );

     }

}
