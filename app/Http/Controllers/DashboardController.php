<?php

namespace App\Http\Controllers;

use App\Models\Measures;
use App\Models\Sensor;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $sensors = Sensor::all()->count();

        $latest_sensor_measures = Measures::latest()->first();

        return view('dashboard', compact('sensors', 'latest_sensor_measures'));
       
    }
}
