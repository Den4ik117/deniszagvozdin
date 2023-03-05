<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_articles', function (Blueprint $table) {
//            $table->id();
//            $table->string('title');
//            $table->string('slug');
//            $table->string('author');
//            $table->text('content');
//            $table->timestamps();

            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('slug')->unique();
//            $table->string('og_title');
            $table->text('lead');
//            $table->text('og_description');
            $table->string('author');
//            $table->text('preview');
//            $table->mediumText('content_md')->nullable();
            $table->mediumText('content');
            $table->boolean('visible');
            $table->integer('priority');
            $table->timestamp('published_at');
//            $table->timestamps();

            //            $table->id();
//            $table->string('title');
//            $table->text('description')->change();
//            $table->string('slug');
//            $table->string('og_title');
//            $table->text('og_description')->change();
//            $table->foreignId('user_id');
//            $table->text('preview')->change();
//            $table->mediumText('content_md')->change();
//            $table->mediumText('content_html')->change();
//            $table->boolean('visible')->change();

//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_articles');
    }
}
