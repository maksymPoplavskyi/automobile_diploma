<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Automobile extends Model
{
    protected $connection = 'mysql';

    protected $table = 'automobiles';

    public $timestamps = true;

    protected $fillable = [
        'model_id, year, mileage,
        location_id, damage_id, current_rate,
        transmission_id', 'additional_id', 'VIN', 'status',
        'created_at', 'updated_at'
    ];

    public function model()
    {
        return $this->hasOne(Models::class, 'id', 'model_id');
    }

    public function location()
    {
        return $this->hasOne(Location::class, 'id', 'location_id');
    }

    public function damage()
    {
        return $this->hasOne(Damage::class, 'id', 'damage_id');
    }

    public function transmission()
    {
        return $this->hasOne(Transmission::class, 'id', 'transmission_id');
    }

    public function additional()
    {
        return $this->hasOne(Additional::class, 'id', 'additional_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'automobile_id');
    }
}
