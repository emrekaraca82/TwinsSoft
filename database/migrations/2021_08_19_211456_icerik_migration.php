<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IcerikMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icerik', function (Blueprint $table) {
            $table->id();
            $table->string("icerikBaslik");
            $table->string("icerikLink");
            $table->longText("icerikDetay");
            $table->string("icerikKeyword");
            $table->string("icerikGorsel");
            $table->integer("icerikSira");
            $table->tinyInteger("icerikDurum");
            $table->datetime("icerikKayit");
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
        Schema::dropIfExists('icerik');
    }
}
