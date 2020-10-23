<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('STUDENTS', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->string('LastName')->nullable();
            $table->string('FirstName');
            $table->string('MiddleName')->nullable();
            $table->string('MiddleInitial')->nullable();
            $table->string('Nickname')->nullable();
            $table->string('Gender');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
