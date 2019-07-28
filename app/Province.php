<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Zone
class Province extends Model
{
    public static $rules = [
        'name' => 'required|string'
    ];

    protected $fillable =
    [
        'id',
        'name'
    ];

    public function zones()
    {
        return $this->hasMany(Zone::class);
    }

}
