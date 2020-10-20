<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    // Disables an item instead of permanently deleting it
    use SoftDeletes;
    protected $softDelete = true;
}
