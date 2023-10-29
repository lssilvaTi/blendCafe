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
        Schema::create('blend_details', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();

            $table->integer('min_def')->nullable();
            $table->integer('max_def')->nullable();

            $table->float('min_umid')->nullable();
            $table->float('max_umid')->nullable();

            $table->float('min_imp')->nullable();
            $table->float('max_imp')->nullable();

            $table->float('min_broca')->nullable();
            $table->float('max_broca')->nullable();

            $table->float('min_num18')->nullable();
            $table->float('max_num18')->nullable();

            $table->float('min_num17')->nullable();
            $table->float('max_num17')->nullable();

            $table->float('min_num16')->nullable();
            $table->float('max_num16')->nullable();

            $table->float('min_num15')->nullable();
            $table->float('max_num15')->nullable();

            $table->float('min_num14')->nullable();
            $table->float('max_num14')->nullable();

            $table->float('min_num13')->nullable();
            $table->float('max_num13')->nullable();

            $table->float('min_num12')->nullable();
            $table->float('max_num12')->nullable();

            $table->float('min_num10_11')->nullable();
            $table->float('max_num10_11')->nullable();

            $table->float('min_numfundo_b')->nullable();
            $table->float('max_numfundo_b')->nullable();

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
        Schema::dropIfExists('blend_details');
    }
};