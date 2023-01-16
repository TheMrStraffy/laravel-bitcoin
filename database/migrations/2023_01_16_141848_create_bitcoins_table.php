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
        Schema::create('bitcoins', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->float('price',8,1);
            $table->float('open',8,1);
            $table->float('high',8,1);
            $table->float('change',3,1);
            $table->string('volume');
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
        Schema::dropIfExists('bitcoins');
    }
};
