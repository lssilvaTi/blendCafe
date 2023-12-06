<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getting_blend_coffee_grain', function (Blueprint $table) {
            $table->id();
            $table->foreignId('getting_blend_id')->constrained()->onDelete('cascade');
            $table->foreignId('coffee_grain_id')->constrained()->onDelete('cascade');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('getting_blend_coffee_grain');
    }
};
