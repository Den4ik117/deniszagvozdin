<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateArticlesTable1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
//            $table->id();
//            $table->string('title');
            $table->text('description')->change();
//            $table->string('slug');
//            $table->string('og_title');
            $table->text('og_description')->change();
//            $table->foreignId('user_id');
            $table->text('preview')->change();
            $table->mediumText('content_md')->change();
            $table->mediumText('content_html')->change();
            $table->boolean('visible')->change();
            $table->integer('priority')->default(0);
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
        Schema::table('articles', function (Blueprint $table) {
//            $table->id();
//            $table->string('title');
            $table->string('description')->change();
//            $table->string('slug');
//            $table->string('og_title');
            $table->string('og_description')->change();
//            $table->foreignId('user_id');
            $table->string('preview')->change();
            $table->text('content_md')->change();
            $table->text('content_html')->change();
            $table->string('visible')->change();
            $table->dropColumn('priority');
//            $table->timestamps();
        });
    }
}
