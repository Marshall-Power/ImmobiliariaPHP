<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseType extends Model
{
  protected $fillable = [
    'name',
];
  /* Descomentar esto cuando el modelo House esté hecho
  public function users()
      {
          return $this->hasMany(House::class);
      }*/
}
