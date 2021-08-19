<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KurumsalMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kurumsal', function (Blueprint $table) {
            $table->id();
            $table->string("kurumsalBaslik");
            $table->string("kurumsalGorsel");
            $table->longText("kurumsalIcerik");          
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
        Schema::dropIfExists('kurumsal');
    }
}
