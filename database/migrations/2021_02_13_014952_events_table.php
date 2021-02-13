<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EventsTable extends Migration
{
    public function up()
    {
        Schema::create('tb_events', function(Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('resourceURI')->nullable();
            $table->date('modified')->nullable();
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->foreignId('character_id')->constrained('tb_characters');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_events');
    }
}
