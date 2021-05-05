<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUcretlerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ucretler', function (Blueprint $table) {
            
            $table->id();
            $table->dateTime('baslangıc_tarihi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('bitis_tarihi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('ucret');
            $table->text('periyot');

            $table->unsignedBigInteger('diyetisyen_id');

            $table->foreign('diyetisyen_id')->references('id')->on('diyetisyenler');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ucretler');
    }
}
