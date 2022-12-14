<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'country_id',
        'city_id',
        'address',
        'home',
        'flat',
        'client_id',
    ];


    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    public function city()
    {
        return $this->belongsTo(AddressCity::class, 'city_id', 'id');
    }

    public function country()
    {
        return $this->belongsTo(AddressCountry::class, 'country_id', 'id');
    }
}
