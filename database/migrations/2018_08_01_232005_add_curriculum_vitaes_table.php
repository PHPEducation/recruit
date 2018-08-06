<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCurriculumVitaesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curiculum_vitaes', function (Blueprint $table){
           $table->increments('id');
           $table->integer('user_id');
           $table->longText('description')->nullable();
           $table->longText('basic_information')->nullable();
           $table->longText('skills')->nullable();
           $table->longText('experiences')->nullable();
           $table->longText('studies')->nullable();
           $table->longText('activities')->nullable();
           $table->longText('socials')->nullable();
           $table->longText('external_sources')->nullable();
           $table->tinyInteger('is_pass')->default(0);
           $table->integer('created_by');
           $table->integer('updated_by');
           $table->integer('deleted_by')->nullable();
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
        Schema::dropIfExists('curriculum_vitaes');
    }
}
