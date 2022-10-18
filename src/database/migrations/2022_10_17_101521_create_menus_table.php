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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_subcategory_id')->constrained('menu_subcategories');
            $table->text('name')->default(null);
            $table->text('description')->default(null)->nullable();
            $table->unsignedBigInteger('price')->default(null);
            $table->unsignedBigInteger('turn')->default(null);
            $table->unsignedBigInteger('create_user')->nullable(false);
            $table->unsignedBigInteger('update_user')->default(null)->nullable();
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
        Schema::dropIfExists('menus');
    }
};
