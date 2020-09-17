<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('sku',25)->unique();
            $table->string('name', 40);
            $table->foreignId('mfgs_id')->nullable(true);
            $table->foreignId('vendors_id')->nullable(true);
            $table->foreignId('inventory_categories_id')->nullable(true);
            $table->foreignId('storages_id', 7)->nullable(true);
            $table->foreignId('package_types_id', 5)->nullable(true);
            $table->decimal('weight',5,2)->default(0.00);            
            $table->jsonb('product_dimensions')->nullable(true);
            $table->text('description')->nullable(true);
            $table->json('specifications')->nullable(true);            
            $table->tinyInteger('stocklevel')->default(0);            
            $table->integer('incoming')->default(0);
            $table->integer('outgoing')->default(0);
            $table->json('price_each_cogs')->nullable(true);
            $table->boolean('published')->default(1);
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
        Schema::dropIfExists('inventories');
    }
}
