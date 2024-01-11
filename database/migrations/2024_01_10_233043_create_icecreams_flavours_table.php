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
        Schema::create('icecreams_flavours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('productId');
            $table->unsignedBigInteger('flavourId');
            $table->unsignedBigInteger('icecreamId');
            
            $table->foreign('productId')->references('id')->on('products')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('flavourId')->references('id')->on('flavours')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('icecreamId')->references('id')->on('icecreams')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('icecreams_flavours');
    }
};
