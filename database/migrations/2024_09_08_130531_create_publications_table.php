<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('title')->sortable();
            $table->text('description')->sortable();
            $table->text('details')->sortable();
            $table->text('image')->nullable();
            $table->text('file')->nullable();
            $table->text('tags')->nullable();
            $table->text('category')->nullable();
            $table->text('created_by_id')->nullable();
            $table->text('author')->nullable();
            $table->text('other_authors')->nullable();
            $table->text('publication_year')->nullable();
            $table->text('publisher')->nullable();
            $table->text('isbn')->nullable();
            $table->text('pages')->nullable();
            $table->text('volume')->nullable();
            $table->text('edition')->nullable();
            $table->text('language')->nullable();
            $table->text('country')->nullable();
            $table->text('city')->nullable();
            $table->integer('views')->default(0);
            $table->integer('downloads')->default(0);
            $table->integer('likes')->default(0);
            $table->integer('dislikes')->default(0);
            $table->integer('comments')->default(0);
            $table->integer('shares')->default(0);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
}
