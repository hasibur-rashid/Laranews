<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('add_title');
            $table->string('add_description');
            $table->string('add_rate');
            $table->integer('media_id')->unsigned();
            $table->tinyInteger('add_position');
            $table->tinyInteger('status');
            $table->tinyInteger('add_lifetime');
            $table->timestamps();
            $table->softDeletes();

            // $table->foreign('media_id')
            //     ->references('id')
            //     ->on('media');
            //     //->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('advertisements', function (Blueprint $table) {
        //     $table->dropForeign('advertisements_media_id_foreign');
        // });
        
        Schema::dropIfExists('advertisements');
    }
}
