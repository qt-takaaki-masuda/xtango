<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTangosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tangos', function (Blueprint $table) {
            $table->unsignedInteger('sort')->after('title');
            $table->string('image_file_name', 256)->nullable()->after('sort');
            $table->string('description', 512)->nullable()->after('image_file_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tangos', function (Blueprint $table) {
            $table->dropColumn('sort');
            $table->dropColumn('image_file_name');
        });
    }
}
