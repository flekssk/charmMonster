<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLevelsToRequestLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('request_log', function (Blueprint $table) {
            $table->dropColumn('level');
        });
        Schema::table('request_log', function (Blueprint $table) {
            $table->string('level', '20')->default(null)->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('request_log', function (Blueprint $table) {
            //
        });
    }
}
