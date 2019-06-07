<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_fees_table', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('fees_title')->nullable();
            $table->text('fees_description')->nullable();
            $table->string('fees_courses')->nullable();
            $table->string('fees_batch')->nullable();
            $table->string('fees_category')->nullable();
            $table->string('fees_type')->nullable();
            $table->string('fees_amount')->nullable();
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
        Schema::dropIfExists('create_fees_table');
    }
}
