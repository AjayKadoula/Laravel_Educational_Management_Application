<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ParentsDetail extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('ParentsDetail', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('user_id')->unsinged();
           $table->integer('student_id')->unsigned();
           $table->string('first_name');
           $table->string('last_name');
           $table->string('relation');
           $table->date('Guardians_dob')->nullable();
           $table->string('education')->nullable();
           $table->string('occupation')->nullable();
           $table->string('income')->nullable();
           $table->string('test')->nullable();
           $table->string('email')->unique();
           $table->string('mobile_phone');
           $table->string('office_phone1')->nullable();
           $table->string('office_phone2')->nullable();
           $table->string('office_address_line1')->nullable();
           $table->string('office_address_line2')->nullable();
           $table->string('city')->nullable();
           $table->string('state')->nullable();
           $table->string('country_id')->nullable();
           $table->string('test1')->nullable();
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
         Schema::dropIfExists('ParentsDetail');
     }
}
