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

            $table->dropColumn('author'); //elimino la colonna
            $table->foreignId('author_id')->nullable()->constrained(); //creo il foreign ID
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

            $table->string('author', 30)->nullable();
            $table->dropForeign(('author_id'));
            $table->dropColumn('author_id');
        });
    }
}
