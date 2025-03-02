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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('company_name', 255)->nullable();
            $table->string('company_address', 255)->nullable();
            $table->string('designation', 200)->nullable();
            $table->date('start_date')->default(date("Y-m-d"));
            $table->date('end_date')->default(date("Y-m-d"));
            $table->boolean('currently_working')->default(1);
            $table->mediumText('responsibility')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
