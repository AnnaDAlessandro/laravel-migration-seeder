<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Trains;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){

        $trains= Trains::where('Orario_di_partenza','>=',today())->get();
        return view('pages.welcome',compact('trains'));
    }
}
