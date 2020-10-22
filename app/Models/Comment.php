<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
   // Disables an item instead of permanently deleting it
   use SoftDeletes;
   protected $softDelete = true; 

   //Adds 'comments' table 
   protected $table = 'comments';

   // Adds many-to-one relationship with Subject
   public function subject(){
    return $this->belongsTo('App\Models\Subject');
    }
}
