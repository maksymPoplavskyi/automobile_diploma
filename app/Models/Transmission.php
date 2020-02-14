<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transmission extends Model
{
    protected $connection = 'mysql';

    protected $table = 'transmissions';

    public $timestamps = false;

    protected $fillable = ['name'];
}
