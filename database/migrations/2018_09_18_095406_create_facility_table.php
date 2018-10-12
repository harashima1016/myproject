<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facility', function (Blueprint $table) {
            $table->increments('id')->comment('施設ID');
            $table->string('facility_name')->nullable(true)->comment('施設名');
            $table->string('type')->nullable(true)->comment('タイプ');
            $table->integer('room')->nullable(true)->comment('部屋数');
            $table->integer('floor')->nullable(true)->comment('フロア数');
            $table->string('transaction_status')->nullable(true)->comment('取引状況');
            $table->string('sales_status')->nullable(true)->comment('運営状況');
            $table->string('postalcode')->nullable(true)->comment('郵便番号');
            $table->string('prefecture')->nullable(true)->comment('都道府県');
            $table->string('address')->nullable(true)->comment('住所');
            $table->string('katagaki')->nullable(true)->comment('方書');
            $table->string('tel')->nullable(true)->comment('電話番号');
            $table->string('manager')->nullable(true)->comment('支配人');
            $table->string('manager_phone_number')->nullable(true)->comment('支配人 携帯電話');
            $table->string('division1')->nullable(true)->comment('担当事業部1');
            $table->string('department1')->nullable(true)->comment('部署1');
            $table->string('staff1')->nullable(true)->comment('担当者名1');
            $table->string('staff_phone_number1')->nullable(true)->comment('担当者携帯1');
            $table->string('remarks1')->nullable(true)->comment('備考1');
            $table->string('division2')->nullable(true)->comment('担当事業部2');
            $table->string('department2')->nullable(true)->comment('部署2');
            $table->string('staff2')->nullable(true)->comment('担当者名2');
            $table->string('staff_phone_number2')->nullable(true)->comment('担当者携帯2');
            $table->string('remarks2')->nullable(true)->comment('備考2');
            $table->string('division3')->nullable(true)->comment('担当事業部3');
            $table->string('department3')->nullable(true)->comment('部署3');
            $table->string('staff3')->nullable(true)->comment('担当者名3');
            $table->string('staff_phone_number3')->nullable(true)->comment('担当者携帯3');
            $table->string('remarks3')->nullable(true)->comment('備考3');
            $table->integer('customer_id')->unique()->unsigned()->comment('顧客ID');
            $table->string('wifi')->nullable(true)->comment('WiFi販売');
            $table->string('fixtures')->nullable(true)->comment('備品販売');
            $table->string('tv')->nullable(true)->comment('TV販売');
            $table->string('tableware')->nullable(true)->comment('食器販売');
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
        Schema::dropIfExists('facility');
    }
}
