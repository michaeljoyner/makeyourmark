<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebBriefsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('webbriefs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('generalbrief_id')->unsigned();
			$table->tinyInteger('hasdomain');
			$table->string('domain');
			$table->tinyInteger('webhosting');
			$table->text('webhosting_details');
			$table->string('webtype');
			$table->text('webtype_details');
			$table->string('webcm');
			$table->text('webcm_details');
			$table->text('websocial');
			$table->text('webtarget');
			$table->text('webrequirements');
			$table->text('webdirection');
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
		Schema::drop('webbriefs');
	}

}
