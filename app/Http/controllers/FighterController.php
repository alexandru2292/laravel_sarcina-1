<?php

namespace App\Http\Controllers;

use App\Fighter;
use Illuminate\Http\Request;

class FighterController extends Controller
{
    //
    public function getFighterDB(){
        $fighterObject = new Fighter;
        $fighters = $fighterObject->getLuptatori();

        return view('fighter', [
                'fighters'=>$fighters
        ]);
    }
    public function redirectFighter(){
       return view('layoutf');
    }
}
