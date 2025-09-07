<?php

namespace App\Filament\Resources\Documents\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class DocumentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Select::make('categorie_id')
                    ->label('Catégorie')
                    ->relationship('categorie', 'libelle')
                    ->required(),

                TextInput::make('libelle')
                    ->required(),

                FileUpload::make('pdf')
                    ->label('Document PDF')
                    ->disk('public')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('documents')
                    ->maxSize(10240)
                    ->required(),

            ]);
    }
}
