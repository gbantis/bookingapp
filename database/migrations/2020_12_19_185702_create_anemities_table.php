<?php

/*
 * This file is part of PHP CS Fixer.
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnemitiesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('anemities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->constrained('rooms')->onDelete('cascade');
            $table->boolean('is_wifi')->nullable();
            $table->boolean('is_heating')->nullable();
            $table->boolean('is_firstaidkit')->nullable();
            $table->boolean('is_iron')->nullable();
            $table->boolean('is_dryer')->nullable();
            $table->boolean('is_coffeemaker')->nullable();
            $table->boolean('is_air')->nullable();
            $table->boolean('is_tv')->nullable();
            $table->boolean('is_washingmachine')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('anemities');
    }
}
