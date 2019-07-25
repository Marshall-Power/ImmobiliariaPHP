<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    public $fillable = [
        'name', 'postal_code','province_id'
    ];


    public static $rules = [
        'name' => 'required|string',
        'postal_code' => 'required|integer',
        'province_id' => 'required|integer'
    ];

    public function province() {
        return $this->belongsTo(Province::class);
    }
}
