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
        Schema::create('sandwiches', function (Blueprint $table) {
            $table->id(); 
            $table->string('titel', 255);
            $table->text('omschrijving');
            $table->text('symbolen');
            $table->decimal('prijs', 11, 2);
            $table->text('image_path');
            $table->text('duurzaamheid');
            $table->text('reviews');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sandwiches');
    }
};
