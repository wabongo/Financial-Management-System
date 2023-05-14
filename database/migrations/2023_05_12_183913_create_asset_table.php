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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('type');
            $table->unsignedInteger('purchase_price');
            $table->unsignedInteger('current_value');
            $table->decimal('depreciation_rate', 5, 2);
            $table->unsignedInteger('useful_life');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
