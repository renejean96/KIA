<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePupilAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pupil_addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('pupilId');
            $table->string('country');
            $table->string('province');
            $table->string('district');
            $table->string('sector');
            $table->string('cell');
            $table->string('village');           
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
        Schema::dropIfExists('pupils_address');
    }
}
