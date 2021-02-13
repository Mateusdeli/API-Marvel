<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CharactersTable extends Migration
{
    public function up()
    {
        Schema::create('tb_characters', function(Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('resourceURI')->nullable();
            $table->date('modified')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_characters');
    }
}
