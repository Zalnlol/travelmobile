<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MFGCar;
class MGFCarController extends Controller
{
    public function index()
    {
        $mfg = MFGCar::all();
        return view('Admin-Rental.mfg-index', compact('mfg'));
    }
    public function create()
    {
        return view('Admin-Rental.mfg-create', compact('mfg'));
    }
    
}
