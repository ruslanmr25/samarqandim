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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            $table->string("person_uz")->nullable();
            $table->string("person_ru")->nullable();
            $table->string("person_en")->nullable();

            $table->string("description_uz", 300)->nullable();
            $table->string("description_en", 300)->nullable();
            $table->string("description_ru", 300)->nullable();


            $table->text("body_uz")->nullable();
            $table->text("body_en")->nullable();
            $table->text("body_ru")->nullable();



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
        Schema::dropIfExists('comments');
    }
};
