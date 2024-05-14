<?php

namespace App\Http\Controllers;

use App\Models\Measures;
use App\Models\Sensor;
use Illuminate\Http\Request;

class MeasuresController extends Controller
{
    public function store(Request $request)
    {

        //$measure = new Measures();
        $measure = Measures::create($request->all());
        


        return response()->json(['measure' => $measure], 201);
    }
}
