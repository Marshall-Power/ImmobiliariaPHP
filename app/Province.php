<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Zone
class Province extends Model
{
    protected $fillable =
    [
        'id',
        'name'
    ];
    /*
        public function zones()
        {
            return $this->hasMany(Zone::class);
        }
    */
}
