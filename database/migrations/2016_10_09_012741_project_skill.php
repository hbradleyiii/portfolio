<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProjectSkill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_skill', function (Blueprint $table) {
            $table->integer('project_id')
                  ->unsigned()
                  ->default(0);
            $table->foreign('project_id')
                  ->references('id')->on('projects')
                  ->delete('cascade');
            $table->integer('skill_id')
                  ->unsigned()
                  ->default(0);
            $table->foreign('skill_id')
                  ->references('id')->on('skills')
                  ->delete('cascade');
            $table->primary(['project_id', 'skill_id']);
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
        Schema::drop('project_skill');
    }
}
