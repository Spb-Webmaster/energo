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
        Schema::create('cummins', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->index();
            $table->integer('user_id')->nullable();
            $table->string('sky')->index();
            $table->string('slug')->index()->unique()->nullable();
            $table->string('img')->nullable();
            $table->string('description')->index()->nullable();
            $table->string('shortdescription')->index()->nullable();
            $table->string('price')->nullable();
            $table->string('analogs')->index()->nullable();

            $table->json('params')->nullable();

            $table->integer('sorting')
                ->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cummins');
    }
};
