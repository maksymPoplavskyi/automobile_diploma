<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Additional extends Model
{
    protected $connection = 'mysql';

    protected $table = 'additionals';

    public $timestamps = false;

    protected $fillable = ['color', 'engine', 'fuel_id', 'has_key', 'driver_unit_id', 'state'];

    public function fuel()
    {
        return $this->hasOne(Fuel::class, 'id', 'fuel_id');
    }

    public function driver_unit()
    {
        return $this->hasOne(Driver_unit::class, 'id', 'driver_unit_id');
    }
}
