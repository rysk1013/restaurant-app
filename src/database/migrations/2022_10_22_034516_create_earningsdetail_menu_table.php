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
        Schema::create('earningsdetail_menu', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('earnings_id');
            $table->unsignedBigInteger('menu_id');
            $table->foreign('earnings_id')->references('id')->on('earnings')->onDelete('cascade');
            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('earningsdetail_menu');
    }
};
