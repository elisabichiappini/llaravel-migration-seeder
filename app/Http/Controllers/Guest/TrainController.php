<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index() 
    {
        $trains = Train::where('orario_partenza', '>=', now()->toDateString())->orderBy('orario_partenza')->get();
        return view('trains', compact('trains'));
    }
}
