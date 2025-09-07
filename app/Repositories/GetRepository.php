<?php

namespace App\Repositories;

use App\Models\Document;

class GetRepository{

    public function getdocument($slug){

        $document = Document::where('slug',$slug)->first();

        if (is_null($document)) {

            return response()->json([

                'Not Found'=>"Document Non trouvé"

            ],400);

        }

        return response()->json($document,200);
    }

    public function getalldocument(){

        $document = Document::all();

        if (is_null($document)) {

            return response()->json([
                "Not found" => 'Aucun Document Trouvé'
            ],400);

        }

        return  response()->json($document, 200);
    }
}
