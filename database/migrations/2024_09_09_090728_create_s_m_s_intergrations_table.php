<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSMSIntergrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_m_s_intergrations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('receiver')->nullable();
            $table->text('message')->nullable();
            $table->text('status')->nullable();
            $table->text('response')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('s_m_s_intergrations');
    }
}
