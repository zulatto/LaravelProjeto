<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    public $timestamps = true;

    protected $fillable = ['cliente', 'container', 'tipo', 'data'];

}