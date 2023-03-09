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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->String('prenom');
            $table->String('nom');
            $table->String('numr_cart');
            $table->String('city');
            $table->String('address');
            $table->integer('telephone');
            $table->date('star_date');
            $table->date('end_date');
            $table->String('numr_car');
            $table->String('duration');
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
        Schema::dropIfExists('clients');
    }
};
