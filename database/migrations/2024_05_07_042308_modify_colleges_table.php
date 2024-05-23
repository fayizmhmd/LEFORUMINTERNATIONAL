<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        $colleges = DB::table('colleges')->get();

        foreach ($colleges as $college) {
            $images = json_encode([$college->image]);
            DB::table('colleges')->where('id', $college->id)->update(['image' => $images]);
        }

        Schema::table('colleges', function (Blueprint $table) {
            $table->json('image')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('colleges', function (Blueprint $table) {
            //
        });
    }
};
