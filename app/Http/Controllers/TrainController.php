<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //
    public function index()
    {
        $trains = Transport::all();
        return view('layout.appLayout', compact('trains'));
    }
}
