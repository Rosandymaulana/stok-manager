<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**database\migrations\2023_03_06_062953_create_type_products_table.php
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_products');
    }
};
