<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBallotBoxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ballot_box', function(Blueprint $table){
            $table->increments('id');
            $table->integer('candidate_id')->unsigned()->nullable();
            $table->integer('portfolio_id')->unsigned()->nullable();
            $table->integer('voter_id')->unsigned()->nullable();
            $table->string('status');
            $table->string('voting_time');
            $table->timestamps();
            $table->foreign('voter_id')->references('id')->on('voter');
            $table->foreign('candidate_id')->references('id')->on('candidate');
            $table->foreign('portfolio_id')->references('id')->on('portfolio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ballot_box');
    }
}
