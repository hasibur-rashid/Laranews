<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->ipAddress('visitor_ip');
            $table->integer('news_id')->unsigned();
            $table->timestamps();

            // $table->foreign('news_id')
            //     ->references('id')
            //     ->on('news');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('likes', function (Blueprint $table) {
        //     $table->dropForeign('likes_news_id_foreign');
        // });
        
        Schema::dropIfExists('likes');
    }
}
