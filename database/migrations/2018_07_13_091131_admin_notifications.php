<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminNotifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('adminnotifications', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('Admin_id')->unsinged();
          $table->string('headline');
          $table->longText('brief');
          $table->string('file_name')->nullable();
          $table->timestamp('create_time')->useCurrent();
          $table->string('file')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adminnotifications');
    }
}
