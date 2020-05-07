<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->tinyInteger('news_lang')->unsigned();
            $table->string('news_provider');
            $table->string('news_title');
            $table->text('news_description');
            $table->tinyInteger('status')->unsigned();
            $table->integer('viewed')->unsigned()->default(0);
            $table->string('news_posted_by');
            $table->tinyInteger('category_id')->unsigned();
            $table->tinyInteger('tag_id')->unsigned();
            $table->tinyInteger('is_fetured')->unsigned();
            $table->text('rss_url');
            $table->timestamps();
            $table->softDeletes();

            // $table->foreign('category_id')
            //     ->references('id')
            //     ->on('categories')
            //     ->onDelete('cascade');

            // $table->foreign('tag_id')
            //     ->references('id')
            //     ->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('news', function (Blueprint $table) {
        //     $table->dropForeign('news_category_id_foreign');
        //     $table->dropForeign('news_tag_id_foreign');
        // });
        
        Schema::dropIfExists('news');
    }
}
