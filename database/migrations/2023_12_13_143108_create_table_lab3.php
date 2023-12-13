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
        Schema::create('oblik', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surname');
            $table->string('gendre');
            $table->string('birthday');
            $table->string('degree');
            $table->string('specify');
            $table->string('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_lab3');
    }
};
