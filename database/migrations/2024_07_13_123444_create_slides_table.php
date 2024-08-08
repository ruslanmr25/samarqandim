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
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->string("title_uz", 1000)->nullable();
            $table->string("title_en", 1000)->nullable();
            $table->string("title_ru", 1000)->nullable();
            $table->string("title_kr", 1000)->nullable();
            $table->string("description_uz", 1000)->nullable();
            $table->string("description_en", 1000)->nullable();
            $table->string("description_ru", 1000)->nullable();
            $table->string("description_kr", 1000)->nullable();
            $table->string("imagePath", 1000);
            $table->smallInteger("status")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slides');
    }
};
