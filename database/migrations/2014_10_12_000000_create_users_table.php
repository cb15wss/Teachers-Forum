<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('confirmed')->nullable();
            $table->string('institution_name');
            $table->string('password');
            $table->string('avatar_path')->nullable()->index();
            $table->string('user_title', 20)->nullable()->index();
            $table->integer('primary_role')->nullable()->unsigned();
            $table->string('about_me', 120)->nullable();
            $table->string('card', 120)->nullable();
            $table->rememberToken();
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
