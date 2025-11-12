<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientFavoriteCar extends Model
{
    protected $table = 'client_favorite_cars';
    protected $fillable = ['client_id', 'car_id'];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
