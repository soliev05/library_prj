<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name',256);
            $table->string('author',64);
            $table->string('genre',64);
            $table->integer('year_publish');
            $table->integer('year_write');
            $table->string('discription',256);
            $table->integer('count_page');
            $table->string('urlImage',256)->default();
            $table->string('urlFileBook',256)->default();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
        // Schema::table('books', function (Blueprint $table) {
        //     $table->dropColumn('genre');
        // });
    }
}
