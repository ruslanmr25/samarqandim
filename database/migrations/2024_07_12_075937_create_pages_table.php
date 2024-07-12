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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("menu_id")->nullable();
            $table->foreign("menu_id")->references("id")->on("menus")->onDelete("cascade");
            $table->string("title_uz", 1000)->nullable();
            $table->string("title_en", 1000)->nullable();
            $table->string("title_ru", 1000)->nullable();
            $table->string("title_kr", 1000)->nullable();
            $table->longText("body_uz")->nullable();
            $table->longText("body_en")->nullable();
            $table->longText("body_ru")->nullable();
            $table->longText("body_kr")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
