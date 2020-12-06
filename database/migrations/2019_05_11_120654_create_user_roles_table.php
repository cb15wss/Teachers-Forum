<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
          //  $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('role_id');
          //  $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
           // $table->foreign('user_id')->references('id')->on('users');
          //  $table->foreign('role_id')->references('id')->on('roles');

          //  $table->primary(['user_id', 'role_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_roles');
    }
}
