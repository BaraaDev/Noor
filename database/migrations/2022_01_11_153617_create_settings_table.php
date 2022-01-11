<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration {

	public function up()
	{
		Schema::create('settings', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
            $table->string('keyword')->nullable();
			$table->text('content');
			$table->string('location')->nullable();
			$table->string('phone')->nullable();
			$table->string('whatsApp')->nullable();
			$table->string('facebook')->nullable();
			$table->string('twitter')->nullable();
			$table->string('linkedin')->nullable();
			$table->string('youtube')->nullable();
			$table->string('instagram')->nullable();
            $table->string('telegram')->nullable();
			$table->string('email')->nullable();
			$table->boolean('status')->default('1');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('settings');
	}
}
