<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver_unit extends Model
{
    protected $connection = 'mysql';

    protected $table = 'driver_units';

    public $timestamps = false;

    protected $fillable = ['name'];
}
