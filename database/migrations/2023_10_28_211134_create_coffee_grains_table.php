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
        Schema::create('coffee_grains', function (Blueprint $table) {
            $table->id();
            $table->string('lote');
            $table->string('nf')->nullable();
            $table->integer('slip')->default(0);
            $table->integer('qtd')->default(0);
            $table->string('prod')->nullable();
            $table->string('safra');
            $table->string('bebida');
            $table->string('cheiro');
            $table->string('aspecto');
            $table->float('mofo')->default(0);
            $table->integer('def')->default(0);
            $table->float('umid')->default(0);
            $table->float('imp')->default(0);
            $table->float('broca')->default(0);
            $table->float('num18')->default(0);
            $table->float('num17')->default(0);
            $table->float('num16')->default(0);
            $table->float('num15')->default(0);
            $table->float('num14')->default(0);
            $table->float('num13')->default(0);
            $table->float('num12')->default(0);
            $table->float('num10_11')->default(0);
            $table->float('numfundo_b')->default(0);

            $table->unsignedBigInteger('stock_id');
            $table->foreign('stock_id')->references('id')->on('stocks');

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
        Schema::dropIfExists('coffee_grains');
    }
};