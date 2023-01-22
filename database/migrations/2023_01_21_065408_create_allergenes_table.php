<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: 2023_01_21_065408_create_allergenes_table.php
 * User: ${USER}
 * Date: 21.${MONTH_NAME_FULL}.2023
 * Time: 6:54
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('allergenes', function (Blueprint $table) {
            $table->id();

            $table->string('all_labelling');
            $table->string('all_name');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('allergenes');
    }
};
