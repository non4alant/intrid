<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'color';

    protected $fillable = [
        'id',
        'name'
    ];

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
