<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    //

    protected $fillable = [
        'name',
        'description',
        'available',
    ];

    protected $hidden = [];

    public function isAvailable():bool
    {
        return isset($this->available) && $this->available;
    }
}
