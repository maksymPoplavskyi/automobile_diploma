<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Damage extends Model
{
    protected $connection = 'mysql';

    protected $table = 'damages';

    public $timestamps = false;

    protected $fillable = ['name'];
}
