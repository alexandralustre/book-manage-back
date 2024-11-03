<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();                    // Primary key
            $table->string('title');         // Title of the book
            $table->string('author');        // Author of the book
            $table->integer('published_year'); // Published year
            $table->string('genre');         // Genre of the book
            $table->text('description');     // Description of the book
            $table->timestamps();            // Created at and Updated at timestamps
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
    }
}
