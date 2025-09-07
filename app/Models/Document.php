<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [

        'libelle',
        'pdf',
        'slug',
        'categorie_id'
    ];


    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class, 'categorie_id',);
    }


}
