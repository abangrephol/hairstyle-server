<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFramesImageToFramesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('frames', function (Blueprint $table) {
            $table->renameColumn('image','image_layout');
			$table->string('image_background');
			$table->string('image_foreground');						
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('frames', function (Blueprint $table) {
            $table->renameColumn('image_layout','image');
			$table->dropColumn(['image_background','image_foreground']);
        });
    }
}
