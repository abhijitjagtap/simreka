<?php

namespace App\Http\Controllers\Simreka;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SimrekaController extends Controller
{
    //
    public function index()
    {
        return view('simreka.index');
    }
}
