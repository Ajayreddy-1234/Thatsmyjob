<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone_number');
            $table->string('location');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('job_interest');
            $table->string('tenth_percentage')->nullable();
            $table->string('tenth_school')->nullable();
            $table->string('tenth_passing_year')->nullable();
            $table->string('twelfth_stream')->nullable();
            $table->string('twelfth_percentage')->nullable();
            $table->string('twelfth_school')->nullable();
            $table->string('twelfth_passing_year')->nullable();
            $table->string('diploma_name')->nullable();
            $table->string('diploma_percentage')->nullable();
            $table->string('diploma_school')->nullable();
            $table->string('diploma_passing_year')->nullable();
            $table->string('ug_name')->nullable();
            $table->string('ug_percentage')->nullable();
            $table->string('ug_college')->nullable();
            $table->string('ug_passing_year')->nullable();
            $table->string('pg_name')->nullable();
            $table->string('pg_percentage')->nullable();
            $table->string('pg_college')->nullable();
            $table->string('pg_passing_year')->nullable();
            $table->string('doctorate_name')->nullable();
            $table->string('doctorate_percentage')->nullable();
            $table->string('doctorate_college')->nullable();
            $table->string('doctorate_passing_year')->nullable();
            $table->longText('other_education')->nullable();
            $table->integer('experience');
            $table->string('current_salary')->nullable();
            $table->string('expected_salary')->nullable();
            $table->string('notice_period');
            $table->longText('job_role_preference')->nullable();
            $table->longText('languages')->nullable();
            $table->longText('skills')->nullable();
            $table->unsignedBigInteger('added_by');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('candidates');
    }
}
