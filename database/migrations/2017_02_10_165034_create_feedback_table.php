<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('feedback_type_id');
            $table->foreign('feedback_type_id')->references('id')->on('feedback_types')->onUpdate('cascade');
            $table->integer('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade');
            $table->string('subject');
            $table->text('details');
            $table->text('suggestions');
            $table->string('attachment')->nullable();
            $table->string('initial')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('region_id')->nullable();
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
        Schema::dropIfExists('feedback');
    }
}
