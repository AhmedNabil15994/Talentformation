<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpeningsTable extends Migration
{
    public function up()
    {
        Schema::create('openings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_ar')->required();
            $table->string('title_en')->required();
            $table->text('brief_ar')->required();
            $table->text('brief_en')->required();
            $table->longText('description_ar')->nullable();
            $table->longText('description_en')->nullable();
            $table->longText('job_details')->nullable();
            $table->integer('views')->default(0);
          
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('openings');
    }
}
