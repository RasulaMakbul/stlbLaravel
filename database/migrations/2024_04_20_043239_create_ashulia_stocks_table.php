<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ashulia_stocks', function (Blueprint $table) {
            $table->id();
            $table->integer('total_stock');
            $table->tinyInteger('status')->default(0)->comment('0=sale,1=incoming');
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
        Schema::dropIfExists('ashulia_stocks');
    }
};
