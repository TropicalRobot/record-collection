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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('release_date')->nullable();
            $table->unsignedBigInteger('format_id');
            $table->enum('release_type', ['single', 'album', 'ep', 'compilation', 'miscellaneous'])->nullable();
            $table->binary('image_url')->nullable();
            $table->timestamps();

            $table->foreign('format_id')->references('id')->on('item_formats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
