<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $connection = 'mysql';

    protected $table = 'images';

    protected $fillable = ['image', 'created_at', 'automobile_id'];

    public function automobile()
    {
        return $this->belongsTo(Automobile::class);
    }
}
