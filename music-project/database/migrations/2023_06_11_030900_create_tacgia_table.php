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
        Schema::create('tacgia', function (Blueprint $table) {
            $table->increments('ma_tgia');
            $table->string('ten_tgia',100);
            $table->string('hinh_tgia',100);
            // $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tacgia');
    }
};
