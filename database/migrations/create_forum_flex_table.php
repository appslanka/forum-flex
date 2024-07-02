<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
       // $prefix = config('database.table_prefix', '');
            $prefix = config(' forum-flex.table_prefix', '');
        // todo Need to ensure this (should not affect exiting database)
        // Schema::create('users', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     $table->rememberToken();
        //     $table->timestamps();
        // });

        Schema::create($prefix .'threads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            $table->foreignId('user_id')->constrained()->on('users')->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->on('categories')->onDelete('cascade');
            $table->timestamps();
        });   

         Schema::create($prefix .'posts', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->foreignId('user_id')->constrained()->on('users')->onDelete('cascade');
            $table->foreignId('thread_id')->constrained()->on('threads')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create($prefix .'categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $prefix = config('database.table_prefix', '');
        // Schema::dropIfExists('users');
        Schema::dropIfExists($prefix .'threads');
        Schema::dropIfExists($prefix .'posts');
        Schema::dropIfExists($prefix .'categories');
    }
};
