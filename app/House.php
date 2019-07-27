<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = [
        'name',
        'address',
        'latitude',
        'longitude',
        'zone_id',
        'price',
        'size',
        'rooms',
        'bathrooms',
        'air_conditioner',
        'climate_id',
        'elevator',
        'employee_id',
        'housetype_id',
        'contract_id',
        'date_published',
        'avaiable',
    ];

    public function zone()
    {
        return $this->belongsTo(Zone::Class);
    }
    public function climate()
    {
        return $this->belongsTo(Climate::Class);
    }
    public function employee()
    {
        return $this->belongsTo(User::Class);
    }
    public function housetype()
    {
        return $this->belongsTo(HouseType::Class);
    }
    public function contract()
    {
        return $this->belongsTo(Contract::Class);
    }
    public function photos() {
        return $this->hasMany(Photo::class);
    }
}
