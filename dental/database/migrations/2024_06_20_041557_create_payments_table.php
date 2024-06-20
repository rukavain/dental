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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->string('tooth_number');
            $table->string('dentist');
            $table->string('procedure');
            $table->decimal('charge', 10, 2);
            $table->decimal('paid', 10, 2);
            $table->decimal('balance_remaining', 10, 2);
            $table->string('remarks')->nullable();
            $table->boolean('signature')->default(false);
            $table->date('payment_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
