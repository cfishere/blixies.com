<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->json('items');
            $table->foreignId('invoices_id')->nullable(true);
            $table->foreignId('customers_id')->nullable(true);
            $table->foreignId('taxcodes_id')->nullable(true);
            $table->string('customer_notes')->nullable(true);         
            $table->json('delivery_details')->nullable(true);                        
            $table->json('discounts')->nullable(true);           
            $table->decimal('itemsTotalPrice',3,2);
            $table->string('status')->default('new');
            $table->text('comments')->nullable(true);
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
        Schema::dropIfExists('orders');
    }
}
