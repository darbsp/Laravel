<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_id');
            $table->string('username')->index();
            $table->string('salutation');
            $table->string('forename');
            $table->string('surname');
            $table->string('email')->unique();
            $table->integer('login_count');
            $table->string('job_title');
            $table->binary('image');
            $table->rememberToken();
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('staff');
    }
}
