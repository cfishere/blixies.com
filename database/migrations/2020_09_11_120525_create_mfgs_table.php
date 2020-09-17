<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMfgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mfgs', function (Blueprint $table) {
            $table->id();
            $table->string('number')->unique();
            $table->string('name',50);
            $table->string('addr1',40);
            $table->string('addr2',40);
            $table->string('city',40);
            $table->string('region',20);
            $table->string('country',20);
            $table->string('postal',10);
            $table->string('ph',16);
            $table->string('ph2',16)->nullable(true);
            $table->string('fax',16)->nullable(true);
            $table->string('contact',50)->nullable(true);
            $table->string('email',60);           
            $table->string('code')->nullable(true);
            $table->string('catalog_link')->nullable(true);
            $table->string('website');
            $table->string('notes')->nullable(true); 
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
        Schema::dropIfExists('mfgs');
    }
}
