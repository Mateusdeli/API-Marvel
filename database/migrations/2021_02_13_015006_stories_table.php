<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StoriesTable extends Migration
{
    public function up()
    {
        Schema::create('tb_stories', function(Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('resourceURI')->nullable();
            $table->string('type', 100)->nullable();
            $table->date('modified')->nullable();
            $table->foreignId('character_id')->constrained('tb_characters');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_stories');
    }
}
