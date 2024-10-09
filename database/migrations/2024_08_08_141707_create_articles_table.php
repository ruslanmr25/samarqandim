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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string("title_uz")->nullable();
            $table->string("title_ru")->nullable();
            $table->string("title_en")->nullable();

            $table->string("description_uz", 300)->nullable();
            $table->string("description_en", 300)->nullable();
            $table->string("description_ru", 300)->nullable();

            $table->text("body_uz")->nullable();
            $table->text("body_en")->nullable();
            $table->text("body_ru")->nullable();


            $table->string("imagePath");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcements');
    }
};
