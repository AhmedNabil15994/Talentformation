<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoinTeamsTable extends Migration
{
    public function up()
    {
        Schema::create('join_teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->required();
            $table->string('email')->required();
            $table->string('phone')->required();
            $table->string('designation')->required();
            $table->text('file')->nullable();

            $table->text('company_name')->nullable();
            $table->text('work_from')->nullable();
            $table->text('work_to')->nullable();
            $table->text('current_salary')->nullable();
            $table->text('expected_salary')->nullable();
            $table->integer('opening_id')->nullable();
          
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('join_teams');
    }
}
