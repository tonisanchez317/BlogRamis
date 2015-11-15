<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInfoWorksTable extends Migration
{

    public function up()
    {


        Schema::table('works', function (Blueprint $table) {
            $table->text('description')->nullable()->after('picture');
        });
    }

    public function down()
    {
        Schema::table('works', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }

}
