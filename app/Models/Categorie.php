<?php

namespace App\Models;

use App\Models\Document;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [

        'libelle',
        'description'
    ];


    public function documents(): BelongsToMany
    {
        return $this->belongsToMany(Document::class);
    }

}
