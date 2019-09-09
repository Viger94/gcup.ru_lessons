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
            $table->string('name', 50)->unique()->comment('имя роли');
            $table->string('slug', 50)->unique()->comment('слаг поля');
            $table->timestamps();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('role_slug')->references('slug')->on('user_roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_roles', function (Blueprint $table) {
            $table->dropForeign('role_slug');
        });
        Schema::dropIfExists('user_roles');
    }
}
