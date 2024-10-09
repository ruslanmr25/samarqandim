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
        Schema::create('expeditions', function (Blueprint $table) {
            $table->id();
            $table->string("title_uz", 1000)->nullable();
            $table->string("title_en", 1000)->nullable();
            $table->string("title_ru", 1000)->nullable();

            $table->longText("body_uz")->nullable();
            $table->longText("body_en")->nullable();
            $table->longText("body_ru")->nullable();

            $table->string("description_uz", 500)->nullable();
            $table->string("description_en", 500)->nullable();
            $table->string("description_ru", 500)->nullable();

            $table->string("image_path");


            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expeditions');
    }
};
