<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentDocument extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('StudentDocument', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('student_id')->unsigned();
        $table->string('document_type');
        $table->string('StudentDocument');
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
      Schema::dropIfExists('StudentDocument');
  }
}
