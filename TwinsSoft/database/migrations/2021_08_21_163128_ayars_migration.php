<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AyarsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayars', function (Blueprint $table) {
            $table->id();
            $table->string("SiteUrl")->nullable();
            $table->string("Title");
            $table->string("Description");
            $table->string("Keywords");
            $table->string("Author");
            $table->string("Tel");
            $table->string("Gsm");
            $table->string("Fax");
            $table->string("Mail");
            $table->string("Adres");
            $table->string("Il");
            $table->string("Ilce");
            $table->string("Mesai");
            $table->string("SmtpHost");          
            $table->string("SmtpUser");
            $table->string("SmtpPassword");
            $table->string("SmtpPort");         
            $table->string("SmtpSecure");
            $table->string("Facebook")->nullable();
            $table->string("Twitter")->nullable();
            $table->string("Instgram")->nullable();
            $table->string("Youtube")->nullable();
            $table->string("Google")->nullable();
            $table->string("Recaptha")->nullable();
            $table->string("Map")->nullable();
            $table->string("Analystic")->nullable();
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
        Schema::dropIfExists('ayars');
    }
}
