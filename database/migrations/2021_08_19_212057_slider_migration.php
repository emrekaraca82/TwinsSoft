<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SliderMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider', function (Blueprint $table) {
            $table->id();
            $table->string("SliderBaslik");
            $table->string("SliderLink");
            $table->string("SliderLinkYazi");
            $table->string("SliderGorsel");
            $table->integer("SliderSira");
            $table->tinyInteger("SliderDurum");
            $table->datetime("SliderKayit");
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
        Schema::dropIfExists('slider');
    }
}
