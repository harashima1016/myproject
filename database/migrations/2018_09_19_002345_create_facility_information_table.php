<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilityInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facility_information', function (Blueprint $table) {
            $table->increments('id')->comment('設備情報ID');
            $table->integer('facility_id')->comment('施設ID');
            $table->string('lan')->nullable(true)->comment('LAN設備');
            $table->string('vod')->nullable(true)->comment('VOD');
            $table->string('cs')->nullable(true)->comment('CS');
            $table->string('bs')->nullable(true)->comment('BS');
            $table->string('foreign_news')->nullable(true)->comment('海外ニュース');
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
        Schema::dropIfExists('facility_information');
    }
}
