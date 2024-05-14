<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measures extends Model
{
    use HasFactory;

    protected $fillable = [
        'val',
        'unit',
        'sensor_id',
    ];

    public function sensor()
    {
        return $this->belongsTo(Sensor::class);
    }
}
