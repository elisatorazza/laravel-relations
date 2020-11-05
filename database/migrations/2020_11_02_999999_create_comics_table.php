<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            //$table->foreignId('author_id')->constrained();
            $table->id();
            $table->string('title', 30);
            $table->string('original_title', 30)->nullable();
            $table->smallInteger('number');
            $table->string('edition', 30);
            $table->string('author', 30);
            $table->smallInteger('n_pages');
            $table->float('price', 6,2);
            $table->boolean('color')->default(false);
            $table->year('year');
            $table->string('cover')->default('https://picsum.photos/200/300');
            $table->string('reading', 3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
}
