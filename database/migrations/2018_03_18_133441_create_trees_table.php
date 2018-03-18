<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tree_id');
            $table->string('tree_name');
            $table->string('tree_age');
            $table->string('tree_location_lat');
            $table->string('tree_location_lng');
            $table->string('tree_category');
            $table->string('tree_capacity');
            $table->string('tree_note');
            $table->string('tree_status');
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
        Schema::dropIfExists('trees');
    }
}
