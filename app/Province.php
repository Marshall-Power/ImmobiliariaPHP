<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\House
class Province extends Model
{
    protected $fillable =
    [
        'id',
        'name'
    ];
    /*
        public function houses()
        {
            return $this->hasMany(House::class);
        }
    */
}
