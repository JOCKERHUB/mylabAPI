<?php

namespace App\Http\Controllers;

use App\Models\Measures;
use App\Models\Sensor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SensorController extends Controller
{
    public function index()
    {
        //$sensor = Sensor::with('measures')->latest()->find(2);
        //$sensors = Sensor::with('measures')->get();
        $sensors = Sensor::with(['measures' => function ($query) {
            $query->latest();
        }])->get();

        //$latest_measure = $sensor->measures()->latest()->first();


        return view('sensori', compact('sensors'));
    }

    public function add()
    {
        return view('nuovo-sensore');
    }

    public function addSensor(Request $request)  {
        $sensor = new Sensor;
        $sensor->name = $request->name;
        $sensor->description = $request->description;
        $sensor->vendor = $request->vendor;

        $sensor->type = $request->type;
        $sensor->user_id = Auth::user()->id;
        $sensor->save();

        $measure = new Measures;
        $measure->val = 0;
        if ($request->type == 'temperatura') {
            $measure->unit = '°C';
        } elseif ($request->type == 'umidità') {
            $measure->unit = '%';
        } else {
            $measure->unit = 'kw/h';
        }
        $measure->sensor_id = $sensor->id;
        $measure->save();

        return redirect('sensori')->with('success','');
    }
}
