<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_detail', function (Blueprint $table) {
            $table->increments('customer_detail_id')->comment('顧客詳細ID');
            $table->integer('customer_id')->comment('顧客ID');
            $table->integer('tel_number')->comment('電話番号');
            $table->string('contract_start_date')->comment('契約開始日');
            $table->string('prefecture')->comment('都道府県');
            $table->string('address')->comment('住所');
            $table->string('additional_information')->comment('方書');
            $table->string('remarks')->comment('備考');
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
        Schema::dropIfExists('customer_detail');
    }
}
