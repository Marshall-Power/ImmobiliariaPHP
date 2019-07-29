<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{

    public static $rules = [
        'name' => 'required',
        'address' => 'required',
        'zone_id' => 'required|string',
        'price' => 'required|numeric',
        'size' => 'required|numeric',
        'latitude' => 'required|string',
        'longitude' => 'required|string',
        'climate_id' => 'required',
        'employee_id' => 'required',
        'housetype_id' => 'required',
        'contract_id' => 'required',
        'rooms' => 'required|numeric',
        'bathrooms' => 'required|numeric',
        'air_conditioner' => 'nullable|bool',
        'elevator' => 'nullable|bool',
        'date_published' => 'nullable|bool',
        'avaiable' => 'nullable|bool',
        'furnished' => 'nullable|bool',
        'description_es' => 'required|string',
        'description_ca' => 'required|string'
    ];

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
        'furnished',
        'description_es',
        'description_ca'
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
