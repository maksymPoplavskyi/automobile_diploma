<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    protected $connection = 'mysql';

    protected $table = 'models';

    public $timestamps = false;

    protected $fillable = ['name'];
}
