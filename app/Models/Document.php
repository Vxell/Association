<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [

        'libelle',
        'pdf',
        'slug'
    ];
}
