<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // test è una parola scelta per comprendere meglio phpMyAdmin
        Schema::create('test_', function (Blueprint $table) {
            $table->id();
            $table->string("description, 100");
            $table->string("country destination");
            
            //

            

            $table->smallInteger("number of people");
            $table->string("airline company");
            $table->date("departure date");
            $table->date("arriving date");
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
        Schema::dropIfExists('test_');
    }
}
