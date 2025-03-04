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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->string('title', 255)->nullable();
            $table->string('slug', 255)->unique();
            $table->date('post_date')->default(date("Y-m-d"));
            $table->string('thumbnail_img', 255)->nullable();
            $table->text('details')->nullable();
            $table->unsignedBigInteger('views')->default(25);
            $table->unsignedBigInteger('likes')->default(0);
            $table->unsignedBigInteger('dislikes')->default(0);
            $table->boolean('is_featured')->default(0);
            $table->boolean('is_publish')->default(0);
            $table->mediumText('meta_description')->nullable();
            $table->string('meta_keywords',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
