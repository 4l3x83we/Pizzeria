<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: 2023_01_21_065305_create_additives_table.php
 * User: ${USER}
 * Date: 21.${MONTH_NAME_FULL}.2023
 * Time: 6:53
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('additives', function (Blueprint $table) {
            $table->id();

            $table->string('add_labelling');
            $table->string('add_name');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('additives');
    }
};
