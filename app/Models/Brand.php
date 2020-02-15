<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $connection = 'mysql';

    protected $table = 'brands';

    public $timestamps = false;

    protected $fillable = ['name'];

}
