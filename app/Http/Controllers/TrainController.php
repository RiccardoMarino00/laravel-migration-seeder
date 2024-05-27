<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //
    public function index()
    {
        $trains = Transport::whereDate('orario_di_partenza',' >=' , today())->get();
        return view('layout.appLayout', compact('trains'));
    }
}
