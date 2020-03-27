<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFAHStatsToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer( 'fah_score' )->default( 0 );
            $table->integer( 'fah_rank' )->default( 0 );
            $table->integer( 'fah_total_users' )->default( 0 );
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
            $table->dropColumn( 'fah_score' );
            $table->dropColumn( 'fah_rank' );
            $table->dropColumn( 'fah_total_users' );
        });
    }
}
