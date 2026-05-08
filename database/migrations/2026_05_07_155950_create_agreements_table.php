<?php

Use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('agreements', function (Blueprint $table) {
            $table->id();
            $table->string('agreement_number')->unique();
            $table->date('agreement_date');
            $table->string('author_name');
            $table->string('author_nik')->nullable();
            $table->text('author_address')->nullable();
            $table->string('author_phone')->nullable();
            $table->string('author_email');
            $table->string('book_title');
            $table->uuid('verification_token')->unique();
            $table->uuid('publisher_sign_token')->unique();
            $table->uuid('author_sign_token')->unique();
            $table->string('pdf_path')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
	        {
			        Schema::dropIfExists('agreements');
				    }
    };
