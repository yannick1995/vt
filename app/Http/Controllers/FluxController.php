<?php

namespace App\Http\Controllers;

use App\Models\Flux;
use Illuminate\Http\Request;

class FluxController extends Controller
{
    public function create()
    {

    }

    public function displayCreationForm()
    {
        return view('flux-creation');
    }

    public function list()
    {
        $flux = Flux::all();
        return view('flux-list', ['flux' => $flux]);
    }
}
