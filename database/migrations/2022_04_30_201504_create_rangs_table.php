<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rangs', function (Blueprint $table) {
            $table->id();
            $table->integer('cat_id');
            $table->integer('tur_id');
            $table->integer('rulon');
            $table->integer('miqdori');
            $table->string('rang');
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
        Schema::dropIfExists('rangs');
    }
}
