<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    protected $connection = 'mysql';

    protected $table = 'models';

    public $timestamps = false;

    protected $fillable = ['name'];

    public function automobile()
    {
        return $this->belongsTo(Automobile::class);
    }

    public function brand()
    {
        return $this->hasOne(Brand::class, 'id', 'brand_id');
    }
}
