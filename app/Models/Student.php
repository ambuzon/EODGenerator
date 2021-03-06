<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    // Disables an item instead of permanently deleting it
    use SoftDeletes;
    protected $softDelete = true;

    protected $fillable = [
        'LastName',
        'FirstName',
        'MiddleName',
        'MiddleInitial',
        'Nickname',
        'Gender'
    ];

    public $primaryKey = 'Id';
}
