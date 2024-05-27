<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('f_a_q_s', function (Blueprint $table) {
            $table->unsignedBigInteger('college_id')->nullable()->after('id');

            $table->foreign('college_id')->references('id')->on('colleges')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('f_a_q_s', function (Blueprint $table) {
            $table->dropColumn('college_id');
        });
    }
};
