<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('result1');
            $table->integer('result2');
            $table->integer('result3');
            $table->integer('result4');
            $table->integer('result5');
            $table->integer('result6');
            $table->integer('typeA');
            $table->integer('typeB');
            $table->integer('typeC');
            $table->integer('typeD');
            $table->integer('typeE');
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
        Schema::dropIfExists('users');
    }
}
