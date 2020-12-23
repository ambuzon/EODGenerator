<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    // Disables an item instead of permanently deleting it
    use SoftDeletes;
    protected $softDelete = true;

    //Adds 'subjects' table 
    protected $table = 'subjects';

    //Add one-to-many relationship with comments
    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
}
