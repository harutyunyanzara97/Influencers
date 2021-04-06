<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->string('title');
            $table->longText('details')->nullable();
            $table->unsignedBigInteger('category_id')->nullable(false);
            $table->text('description')->nullable();
            $table->string('hashtags')->nullable();
            $table->integer('per_post_rate');
            $table->text('images')->nullable();
            $table->string('location')->nullable();
            $table->string('url');
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->timestamps();
        });
//        Schema::table('campaigns', function($table) {
//            $table->foreign('user_id')->references('id')->on('users');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('campaigns');
        Schema::enableForeignKeyConstraints();

    }
}
