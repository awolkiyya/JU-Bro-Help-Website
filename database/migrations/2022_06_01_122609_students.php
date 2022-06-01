<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Students extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('students', function (Blueprint $table) {
            $table->id();//1
            $table->string("stu_Id");//ru 0631/10
            $table->string("fname");//awol
            $table->string("lname");//baba
            $table->string("email");//awol@gmail.com
            $table->string("year");//2011
            $table->integer("programe_id");//1
            $table->foreign("programe_id")->reference("id")->on("programmes")->onDelete("cascade");
            $table->integer("age");
            $table->string("sex");
            $table->string("phone_No");
            $table->binary("image");
            $table->integer('status');//1
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
