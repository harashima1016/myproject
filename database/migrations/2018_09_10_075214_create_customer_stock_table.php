<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_stock', function (Blueprint $table) {
            $table->integer('customer_id')->comment('顧客ID');
            $table->string('vod')->comment('VOD');
            $table->string('itv')->comment('ITV');
            $table->string('stb_lease')->comment('STBリース');
            $table->string('wifi_maintenance')->comment('WiFi保守');
            $table->string('wifi_consign')->comment('WiFi委託');
            $table->string('mw_wifi')->comment('MW光 WiFiプラス');
            $table->string('mw')->comment('MW光');
            $table->string('mw_tel')->comment('MW光 MWひかり電話');
            $table->string('mw_net')->comment('MWネット');
            $table->text('otherwise')->comment('その他レンタルリース');
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
        Schema::dropIfExists('customer_stock');
    }
}
