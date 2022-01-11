<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealEstateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_estate', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('Area');
            $table->string('bedroom');
            $table->string('bathroom');
            $table->string('garage');
            $table->string('building');
            $table->string('location_id');
            $table->string('type_id');
            $table->string('category_id');
            $table->boolean('status')->default('1');
            $table->string('user_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('real_estate');
    }
}
