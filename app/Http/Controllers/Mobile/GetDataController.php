<?php

namespace App\Http\Controllers\Mobile;

use Illuminate\Http\Request;
use App\Repositories\GetRepository;
use App\Http\Controllers\Controller;

class GetDataController extends Controller
{
    private $getrepository;

    public function __construct(GetRepository $getrepository){

        $this->getrepository = $getrepository;
    }

    public function getdocument(Request $request){

        return $this->getrepository->getdocument($request);
    }
}
