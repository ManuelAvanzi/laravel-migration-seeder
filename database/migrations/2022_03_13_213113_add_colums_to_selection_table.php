<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumsToSelectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('selection', function (Blueprint $table) {
            $table->string("hotel");
            $table->int("phone number");
            $table->string("hotel description");
            $table->string("airline company",30)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('selection', function (Blueprint $table) {
            //
        });
    }
}
