<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
    protected $fillable = [

        'libelle',
        'pdf',
        'slug',
        'categorie_id'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($document) {
            $document->slug = Str::slug($document->libelle . '-' . time());
        });
    }


    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class, 'categorie_id',);
    }


}
