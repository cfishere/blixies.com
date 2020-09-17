<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customers_id');
            $table->foreignId('orders_id');
            $table->string('billToName',60);
            $table->string('billToAddr1',60);
            $table->string('billToAddr2',60);
            $table->string('billToCity',40);
            $table->string('billToRegion',30);
            $table->string('billToCountry',4);
            $table->string('billToPostal',10);
            $table->string('billToPhone',16);
            $table->string('status')->default('due');
            $table->date('due')->default(Carbon::parse('tomorrow'));
            $table->string('pmtMethod')->default('stripe');
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
        Schema::dropIfExists('invoices');
    }
}
