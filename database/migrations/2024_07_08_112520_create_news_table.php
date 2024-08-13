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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->foreignId("category_id")->references("id")->on("news_categories");
            $table->string("title_uz", 1000)->nullable();
            $table->string("title_en", 1000)->nullable();
            $table->string("title_ru", 1000)->nullable();
            $table->string("title_kr", 1000)->nullable();
            $table->longText("body_uz")->nullable();
            $table->longText("body_en")->nullable();
            $table->longText("body_ru")->nullable();
            $table->longText("body_kr")->nullable();


           
            $table->integer("views")->default(0);
            $table->softDeletes();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
