<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseType extends Model
{
  protected $fillable = [
    'name',
];
  public function users()
      {
        return $this->hasMany(House::class);
      }
}
