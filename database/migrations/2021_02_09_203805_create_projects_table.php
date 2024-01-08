<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->boolean('verified')->default(0);
            $table->text('goalid'); // Needs go to, move to different table to link projects and goals/subgoals
            $table->string('title');
            $table->string('education');
            $table->text('category')->nullable();
            $table->text('excerpt');
            $table->text('body');
            $table->string('reference_url')->nullable();
            $table->string('image_name')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
