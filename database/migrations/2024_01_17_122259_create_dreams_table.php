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
        Schema::create('dreams', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('about');
            $table->boolean('is_done')->default(0);
            $table->unsignedBigInteger('percent')->nullable();
            $table->timestamps();

            $table->softDeletes();//метод softDeletes, для возсожности вернуть удаленные данные
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dreams');
    }
};
