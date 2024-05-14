<?php

namespace App\Http\Controllers;

use App\Models\Measures;
use App\Models\Sensor;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
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
        } elseif ($request->type == 'humidity') {
            $measure->unit = '%';
        } else {
            $measure->unit = 'kw/h';
        }
        $measure->sensor_id = $sensor->id;
        $measure->save();

        return redirect('sensori')->with('success','');
    }

    public function show(Sensor $sensor)
    {
        $measures = Measures::where('sensor_id', $sensor->id)->get();

        $labels = $measures->pluck('created_at')->toArray();
        $labels = array_map(function ($value) {
            return Carbon::parse($value)->format('d/m/Y H:i');
        }, $labels);
        
        if ($sensor->type == 'temperature') {
            $title = "Temperatura in tempo reale °C";
        } elseif ($sensor->type == 'humidity') {
            $title = "Umidita' in tempo reale %";

        } else {
            $title = "Consumo energetico kw/h";
        }

        $chart = app()->chartjs
        ->name('lineChartTest')
        ->type('line')
        ->size(['width' => 400, 'height' => 200])
        ->labels($labels)
        ->datasets([
            [
                "label" => "$title",
                'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                "data" => $measures->pluck('val')->toArray(),
                "fill" => false,
            ],
            
        ])
        ->options([]);
        

        
        return view('dettagli-sensore', compact('sensor', 'chart'));
    }
}
