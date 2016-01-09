<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEyePointsToHairstylesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hairstyles', function (Blueprint $table) {
            $table->string('left_eye');
			$table->string('right_eye');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hairstyles', function (Blueprint $table) {
            $table->dropColumn(['left_eye','right_eye']);
        });
    }
}
