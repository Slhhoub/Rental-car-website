<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contras', function (Blueprint $table) {
            $table->id();
            $table->String('customer');
            $table->String('car');
            $table->dateTime('star_date');
            $table->dateTime('end_date');
            $table->String('duration');
            $table->String('prix');
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
        Schema::dropIfExists('contras');
    }
};
