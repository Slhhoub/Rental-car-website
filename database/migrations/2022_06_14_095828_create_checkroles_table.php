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
        Schema::create('checkroles', function (Blueprint $table) {
            $table->id();
            $table->String('email');
            $table->boolean('Our_Cars')->nullable()->default(false);
            $table->boolean('Customers')->nullable()->default(false);
            $table->boolean('Cars')->nullable()->default(false);
            $table->boolean('Contract')->nullable()->default(false);
            $table->boolean('Table_Customers')->nullable()->default(false);
            $table->boolean('Table_Cars')->nullable()->default(false);
            $table->boolean('Table_Contract')->nullable()->default(false);
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
        Schema::dropIfExists('checkroles');
    }
};
