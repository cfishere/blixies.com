<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();                 
            $table->foreignId('inventories_id')->nullable(true);
            $table->foreignId('delivery_options_id')->nullable(true);
            $table->foreignId('categories_id')->default(null);          
            $table->string('name', 40);
            $table->json('colors')->nullable(true);
            $table->json('sizes')->nullable(true);
            $table->json('styles')->nullable(true);
            $table->json('materials')->nullable(true);
            $table->json('custom_options')->default(null);
            $table->boolean('printable')->default(1);
            $table->json('images')->default(null);            
            $table->decimal('price_base',5,2)->default(0.00);
            $table->json('quantities_pricing_table')->nullable(true);
            $table->boolean('published')->default(false);
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
}
