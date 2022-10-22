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
        Schema::create('earnings_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('earnings_id')->constrained('earnings');
            $table->foreignId('menu_id')->constrained('menus');
            $table->text('menu_name')->nullable(false);
            $table->unsignedBigInteger('order_price')->nullable(false);
            $table->unsignedBigInteger('order_num')->nullable(false);
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
        Schema::dropIfExists('earnings_details');
    }
};
