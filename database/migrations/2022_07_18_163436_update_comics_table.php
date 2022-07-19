<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->string('title');
            $table->string('description');
            $table->string('thumb');
            $table->float('price',2,2);
            $table->string('series');
            $table->date('sale_date');
            $table->string('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('description');
            $table->dropColumn('thumb');
            $table->dropColumn('price');
            $table->dropColumn('series');
            $table->dropColumn('sale_date');
            $table->dropColumn('type');
        });
    }
}
