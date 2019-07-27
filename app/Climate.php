<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Climate extends Model
{
    protected $fillable = [
        'name',
    ];

    public function house()
    {
        return $this->hasMany(House::Class);
    }
}
