<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('misses', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 100);
            $table->string('prenom', 100);
            $table->integer('age');
            $table->string('pays', 100)->nullable();
            $table->string('email', 255)->unique();
            $table->string('telephone', 20)->nullable();
            $table->text('bio')->nullable();
            $table->string('photo_principale', 255)->nullable();
            $table->string('mot_de_passe', 255);
            $table->enum('statut', ['pending', 'active', 'reject'])->default('pending');
            $table->timestamp('date_inscription')->useCurrent();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('misses');
    }
};
