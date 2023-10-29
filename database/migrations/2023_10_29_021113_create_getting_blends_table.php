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
        Schema::create('getting_blends', function (Blueprint $table) {
            $table->id();

            $table->string('code');

            $table->unsignedInteger('admin_user_id');
            $table->foreign('admin_user_id')->references('id')->on('admin_users');

            $table->unsignedBigInteger('stock_id');
            $table->foreign('stock_id')->references('id')->on('stocks');

            $table->unsignedBigInteger('blend_details_id');
            $table->foreign('blend_details_id')->references('id')->on('blend_details');

            $table->integer('qtd');
            $table->boolean('finished')->default(false);

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
        Schema::dropIfExists('getting_blends');
    }
};
