<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJudgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judges', function (Blueprint $table) {
            $table->id();
            $table->text('picture');
            $table->string('name');
            $table->string('occupation');
            $table->string('institution');
            $table->string('type')->nullable();
            $table->unsignedBigInteger('competition_id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
            // $table->foreign('competition_id')->references('id')->on('competitions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('judges');
    }
}
