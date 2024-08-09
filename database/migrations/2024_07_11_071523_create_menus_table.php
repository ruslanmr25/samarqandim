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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string("name_uz", 1000)->nullable();
            $table->string("name_en", 1000)->nullable();
            $table->string("name_ru", 1000)->nullable();
            $table->string("name_kr", 1000)->nullable();

            $table->smallInteger("level");
            $table->string("path", 1000)->unique();

            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')->on('menus');
            $table->string("external_link")->nullable();
            $table->integer("priority");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
