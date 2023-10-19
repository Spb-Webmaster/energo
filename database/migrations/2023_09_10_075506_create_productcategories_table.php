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
        Schema::create('productcategories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();


            $table->string('title')->index();
            $table->integer('sorting')
                ->default(0);
            $table->string('img')->nullable();
            $table->tinyText('slug')->nullable();
            $table->text('description')->nullable();
            $table->json('params')->nullable();



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productcategories');
    }
};
