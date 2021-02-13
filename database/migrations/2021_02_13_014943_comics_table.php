<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ComicsTable extends Migration
{
    public function up()
    {
        Schema::create('tb_comics', function(Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->date('modified')->nullable();
            $table->string('diamondCode')->nullable();
            $table->string('format')->nullable();
            $table->foreignId('character_id')->constrained('tb_characters');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_comics');
    }
}
