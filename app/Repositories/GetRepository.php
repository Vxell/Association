<?php

namespace App\Repositories;

use App\Models\Document;

class GetRepository{

    public function getdocument($slug){

        $document = Document::where('slug',$slug)->first();

        if (is_null($document)) {

            return response()->json([

                'Not Found'=>"Document Non trouvé"

            ]);

        }

        return response()->json($document);
    }
}
