<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function client() {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function employee() {
        return $this->belongsTo(User::class, 'employee_id');
    }

    public function house() {
        return $this->belongsTo(House::class);
    }
}
