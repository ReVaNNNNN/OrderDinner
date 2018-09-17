<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->tinyInteger('email_verified')->after('email')->default(0);
            $table->integer('role_id')->after('password')->default(2)->unsigned();
            $table->tinyInteger('test')->after('role_id')->default(0);
            $table->tinyInteger('subscription')->after('test')->default(0);
            $table->string('surname', 50)->after('subscription')->nullable();
            $table->string('username', 50)->after('surname')->nullable();
            $table->string('department', 50)->after('username')->nullable();
            $table->softDeletes();

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
            $table->dropColumn('email_verified');
            $table->dropColumn('role_id');
            $table->dropColumn('test');
            $table->dropColumn('subscription');
            $table->dropColumn('name');
            $table->dropColumn('surname');
            $table->dropColumn('username');
            $table->dropColumn('department');
            $table->dropSoftDeletes();
        });
    }
}
