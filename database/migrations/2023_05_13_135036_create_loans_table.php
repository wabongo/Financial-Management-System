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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('loan_Id');
            $table->text('borrower');
            $table->decimal('loan_amount', 10, 2);
            $table->decimal('interest_rate', 5, 2);
            $table->text('loan_type');
            $table->text('loan_term');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('payment_frequency');
            $table->decimal('payment_amount', 10, 2);
            $table->decimal('outstanding_balance', 10, 2);
            $table->text('status');
            $table->date('last_updated');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
