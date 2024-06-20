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
            $table->unsignedBigInteger('patient_id');
            $table->string('tooth_number')->nullable();
            $table->string('dentist')->nullable();
            $table->string('procedure')->nullable();
            $table->decimal('charge', 8, 2);
            $table->decimal('paid', 8, 2);
            $table->decimal('balance_remaining', 8, 2);
            $table->text('remarks')->nullable();
            $table->boolean('signature')->default(false);
            $table->timestamp('payment_date')->nullable();
            $table->timestamps();
            $table->string('status')->default('ongoing');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
        Schema::table('payments', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
