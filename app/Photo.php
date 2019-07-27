<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'path',
        'house_id',
    ];

    public function house() {
        return $this->belongsTo(House::class);
    }
}
