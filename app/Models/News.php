<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $connection = 'mysql';

    protected $table = 'news';

    protected $fillable = ['title, text, image'];

}
