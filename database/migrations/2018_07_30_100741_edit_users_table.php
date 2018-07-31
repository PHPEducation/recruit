<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->nullable();
            $table->tinyInteger('is_member')->default(0);
            $table->tinyInteger('is_active')->default(0);
            $table->string('confirm_code')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->dateTime('birthday')->nullable();
            $table->string('address')->nullable();
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
            $table->dropColumn('avatar');
            $table->dropColumn('is_member');
            $table->dropColumn('is_active');
            $table->dropColumn('confirm_code');
            $table->dropColumn('gender');
            $table->dropColumn('birthday');
            $table->dropColumn('address');
        });
    }
}
