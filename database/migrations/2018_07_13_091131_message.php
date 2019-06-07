<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Message extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('message', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('message_from')->unsinged();
          $table->integer('message_to')->unsinged();
          $table->text('title');
          $table->longText('body');
          $table->enum('status', ['0', '1']);
          $table->timestamp('create_time')->useCurrent();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message');
    }
}
