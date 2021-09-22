<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->text("name");
            $table->text("description");
            $table->text("companyname");
            $table->text("location");
            $table->text("phonenumber");
            $table->text("email");
            $table->text("qualification");
            $table->text("salary");
            $table->text("languages");
            $table->text("skills");
            $table->unsignedInteger("experience");
            $table->text("is_live")->default(("yes"));
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
        Schema::dropIfExists('jobs');
    }
}
