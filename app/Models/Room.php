<?php

/*
 * This file is part of PHP CS Fixer.
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'user_id',
        'cover_image',
        'price',
        'type',
        'guests',
        'beds',
        'country',
        'city',
    ];

    public function anemities()
    {
        return $this->hasOne(Anemities::class);
    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
