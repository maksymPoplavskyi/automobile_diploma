<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Helper extends Model
{
    protected $connection = 'mysql';

    protected $table = 'helpers';

    protected $fillable = ['title, text, image'];
}
