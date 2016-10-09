<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProjectTechnology extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_technology', function (Blueprint $table) {
            $table->integer('project_id')
                  ->unsigned()
                  ->default(0);
            $table->foreign('project_id')
                  ->references('id')->on('projects')
                  ->delete('cascade');
            $table->integer('technology_id')
                  ->unsigned()
                  ->default(0);
            $table->foreign('technology_id')
                  ->references('id')->on('technologies')
                  ->delete('cascade');
            $table->primary(['project_id', 'technology_id']);
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
        Schema::drop('project_technology');
    }
}
