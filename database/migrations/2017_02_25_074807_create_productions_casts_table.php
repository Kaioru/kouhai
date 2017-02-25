<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionsCastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productions_casts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('production_id');
            $table->integer('cast_id');
            $table->integer('character_id');
            $table->integer('creator_id')->nullable();
            $table->integer('updater_id')->nullable();
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
        Schema::dropIfExists('productions_casts');
    }
}
