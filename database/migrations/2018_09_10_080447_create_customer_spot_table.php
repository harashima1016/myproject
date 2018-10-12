<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerSpotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_spot', function (Blueprint $table) {
            $table->integer('customer_id')->comment('顧客ID');
            $table->string('wifi_sale')->comment('WiFi販売');
            $table->string('fixture_sale')->comment('備品販売');
            $table->string('tv_sale')->comment('TV販売');
            $table->string('tableware_sale')->comment('食器販売');
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
        Schema::dropIfExists('customer_spot');
    }
}
