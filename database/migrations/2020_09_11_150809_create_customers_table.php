<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('payment_methods_id');
            $table->foreignId('delivery_addresses_id');
            $table->foreignId('billing_addresses_id');
            $table->foreignId('shopper_groups_id');
            $table->string('first_name');
            $table->string('middle_name')->nullable(true);
            $table->string('last_name');
            $table->string('phone',16);
            $table->string('email');           
            $table->boolean('active');
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
        Schema::dropIfExists('customers');
    }
}
