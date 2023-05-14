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
        Schema::create('savings', function (Blueprint $table) {
            $table->id();
            $table->string('account_Id');
            $table->string('account_holder');
            $table->string('account_type');
            $table->string('account_number');
            $table->string('bank_name');
            $table->decimal('balance', 10, 2);
            $table->decimal('interest_rate', 5, 2);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('status');
            $table->date('last_updated');
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
        Schema::dropIfExists('savings');
    }
};
