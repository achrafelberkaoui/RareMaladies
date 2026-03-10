<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaladieRare extends Model
{
    protected $fillable = ['name','description','symptoms','treatments'];
}
