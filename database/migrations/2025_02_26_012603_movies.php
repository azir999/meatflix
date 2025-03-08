<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id(); 
            $table->string('cover');
            $table->string('title');
            $table->foreignId('producer_id')->constrained('producers')->onDelete('cascade');
            $table->string('actor_actress');
            $table->string('synopsis');
            $table->timestamps();

           
        });
    }

    public function down(): void
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropForeign(['producer_id']); 
        });

        Schema::dropIfExists('movies');
    }
};

