<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('self_identity_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avatar',255)->nullable();
            $table->text('address')->nullable();
            $table->string('phone',20)->nullable();
            $table->text('about_self')->nullable();
            $table->string('cv_path',255)->nullable();
            $table->string('whatsapp_phone',20)->nullable();
            $table->string('github',255)->nullable();
            $table->string('facebook',255)->nullable();
            $table->string('linkd_in',255)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        User::create([
            'name' => "Md Naimul Islam",
            'self_identity_name' => "Software Developer (Laravel)",
            'address' => "Uttara Azampur Kachabazar, Dhakkhinkhan, Dhaka, Bangladesh",
            'email' => "naimcse56@gmail.com",
            'phone' => "+8801873868060",
            'about_self' => "I’m a Laravel Developer since 2019 with expertise in building scalable, high-performance web applications. I specialize in working with PostgreSQL, MySQL, and Vue.js for frontend development, and have experience managing both shared and VPS servers. Over the years, I’ve built multi-database applications, including custom accounting systems, tailored to meet specific business needs. I’m passionate about creating innovative, seamless digital experiences that drive results and help businesses grow. Whether you need a custom application or a complete digital transformation, I’m here to bring your ideas to life with top-notch development solutions. Let’s collaborate!",
            'password' => Hash::make("cse56@com"),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
