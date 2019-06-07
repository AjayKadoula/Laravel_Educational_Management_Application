<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentsDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('StudentsDetail', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id')->unsinged();
          $table->string('first_name');
          $table->string('middle_name')->nullable();
          $table->string('last_name');
          $table->string('national_student_id')->nullable();
          $table->string('batch_id')->nullable();
          $table->date('date_of_birth');
          $table->string('birth_place')->nullable();
          $table->string('nationality_id');
          $table->string('language')->nullable();
          $table->string('religion')->nullable();
          $table->string('blood_group')->nullable();
          $table->string('student_category_id')->nullable();
          $table->enum('gender', ['male', 'female']);
          $table->string('checkbox')->nullable();
          $table->string('demo')->nullable();
          $table->string('height')->nullable();
          $table->string('demo1')->nullable();
          $table->string('demo2')->nullable();
          $table->string('demo3')->nullable();
          $table->string('demo4')->nullable();
          $table->string('demo5')->nullable();
          $table->string('demo6')->nullable();
          $table->string('dem')->nullable();
          $table->string('dem1')->nullable();
          $table->string('demo7')->nullable();
          $table->text('address_line1');
          $table->text('address_line2');
          $table->string('city');
          $table->string('state');
          $table->string('pin_code');
          $table->string('country_id');
          $table->string('phone1');
          $table->string('phone2')->nullable();
          $table->string('email')->unique();
          $table->timestamp('create_time')->useCurrent();
          $table->string('student_image');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('StudentsDetail');
    }
}
