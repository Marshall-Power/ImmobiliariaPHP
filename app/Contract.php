<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
     protected $fillable = [
    'rent',
    'buy',
];

public function house()
{
    return $this->hsaMany(House::Class);
}
}
