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
        Schema::create('dc_comics', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('title');
            $table->string('slug');
            $table->text('description', 350);
            $table->decimal('price', total: 8, places: 2);
            $table->string('series');
            $table->date('sale_date');
            $table->string('type', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dc_comics');
    }
};
