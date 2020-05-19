<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostjobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postjobs', function (Blueprint $table) {
            $table->increments('id');
            //$table->unsignedBigInteger('user_id');
            $table->string('company');
            $table->string('title');
            $table->text('description');
            $table->string('salary');
            $table->date('deadline');
            $table->string('document');
            $table->timestamps();

            /*
            Foreign key constraint with SQL- 
            */
            // $table->foreign('user_id')
            //     ->references('id')
            //     ->on('users')
            //     ->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('postjobs');
    }
}
