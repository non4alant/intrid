<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offer';

    protected $fillable = [
        'id',
        'brand_id',
        'color_id',
        'size_id',
        'count',
    ];

    public function offer()
    {
        return $this->hasMany(Offer::class, 'offer_ibfk_1');
    }

    public function color()
    {
        return $this->hasMany(Offer::class, 'offer_ibfk_2');
    }

    public function size()
    {
        return $this->hasMany(Offer::class, 'offer_ibfk_3');
    }


}
