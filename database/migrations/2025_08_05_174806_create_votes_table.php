<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('miss_id')->constrained('misses')->onDelete('cascade');
            $table->foreignId('transaction_id')->constrained('transactions')->onDelete('cascade');
            $table->string('moyen_paiement', 50)->nullable();
            $table->decimal('montant', 10, 2)->nullable();
            $table->dateTime('timestamp')->useCurrent();
            $table->string('numero_telephone', 20)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('ip_adresse', 50)->nullable();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('votes');
    }
};
