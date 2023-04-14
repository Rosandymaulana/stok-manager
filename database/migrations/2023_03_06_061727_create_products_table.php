<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**database\migrations\2023_03_06_061727_create_products_table.php
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->char('product_ID', 5)->primary();
            $table->string('product_name');
            $table->integer('buy_rate');
            $table->foreignId('type')->constrained('type_products');
            $table->integer('initial_quantity');
            $table->string('description');
            $table->string('image');
            $table->string('document', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
