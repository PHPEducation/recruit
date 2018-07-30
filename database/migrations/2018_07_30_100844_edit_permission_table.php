<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditPermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permissions', function (Blueprint $table) {
            $table->string('guard_name')->unique()->change();
            $table->softDeletes();
        });
        Schema::table('roles', function (Blueprint $table) {
            $table->string('name')->unique()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('permissions', 'delete_at'))
        {
            Schema::table('permissions', function (Blueprint $table)
            {
                $table->dropColumn('delete_at');
            });
        }
        if (Schema::hasColumn('roles', 'delete_at'))
        {
            Schema::table('roles', function (Blueprint $table)
            {
                $table->dropColumn('delete_at');
            });
        }
    }
}
