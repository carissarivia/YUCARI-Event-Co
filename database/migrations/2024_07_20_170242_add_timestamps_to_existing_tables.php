<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimestampsToExistingTables extends Migration
{
    public function up()
    {
        Schema::table('data_member', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('laporan_feedback', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('laporanpenjualan', function (Blueprint $table) {
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('data_member', function (Blueprint $table) {
            $table->dropTimestamps();
        });

        Schema::table('laporan_feedback', function (Blueprint $table) {
            $table->dropTimestamps();
        });

        Schema::table('laporanpenjualan', function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }
}
