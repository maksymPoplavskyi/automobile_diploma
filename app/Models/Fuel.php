<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    protected $connection = 'mysql';

    protected $table = 'fuels';

    public $timestamps = false;

    protected $fillable = ['name'];

    public function additional()
    {
        return $this->belongsTo(Additional::class);
    }
}
