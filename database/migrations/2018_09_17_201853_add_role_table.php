<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('user_roles', function (Blueprint $table) {
           $table->increments('id');
           $table->string('role', 50);
           $table->timestamps();
       });

       Schema::table('users', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('user_roles');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_role_id_foreign');
        });

        Schema::dropIfExists('user_roles');
    }
}
