<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_group', function (Blueprint $table) {
            $table->increments('id')->comment('ホテル系列ID');
            $table->string('hotel_group')->nullable(true)->comment('ホテル系列');
            $table->string('address')->nullable(true)->comment('住所');
            $table->string('katagaki')->nullable(true)->comment('方書');
            $table->string('tel')->nullable(true)->comment('電話番号');
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
        Schema::dropIfExists('hotel_group');
    }
}
