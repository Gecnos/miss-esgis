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
            $table->string('voter_email');
            $table->string('voter_phone')->nullable();
            $table->decimal('amount', 8, 2); // Amount paid for the vote
            $table->string('payment_method'); // e.g., 'Mobile Money', 'Credit Card'
            $table->string('transaction_id')->nullable(); // Payment gateway transaction ID
            $table->enum('status', ['pending', 'completed', 'failed'])->default('pending');
            $table->timestamps();
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