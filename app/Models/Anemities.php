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

class Anemities extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'is_wifi',
        'is_heating',
        'is_firstaidkit',
        'is_iron',
        'is_dryer',
        'is_coffeemaker',
        'is_air',
        'is_tv',
        'is_washingmachine',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
