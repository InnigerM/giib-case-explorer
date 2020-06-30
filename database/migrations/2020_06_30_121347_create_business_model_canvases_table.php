<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessModelCanvasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_model_canvases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id');
            $table->longText('key_partners');
            $table->longText('key_activities');
            $table->longText('key_resources');
            $table->longText('value_proposition');
            $table->longText('customer_relationship');
            $table->longText('channels');
            $table->longText('customer_segments');
            $table->longText('cost_structure');
            $table->longText('revenue_stream');
            $table->timestamps();

            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_model_canvases');
    }
}
