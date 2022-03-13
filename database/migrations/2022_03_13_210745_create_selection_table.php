<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selection', function (Blueprint $table) {
            $table->id();
            $table->string("description", 100);
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
        Schema::dropIfExists('selection');
    }
}
