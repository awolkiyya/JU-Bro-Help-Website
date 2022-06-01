<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Programmes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('programmes', function (Blueprint $table) {
            $table->id();//1
            $table->string('level');//BSC
            $table->string('type');//regular
            $table->string('semister');//2
            $table->integer('department_id');//1
            $table->foreign('department_id')->reference('id')->on("departments")->onDelete("cascade");
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
