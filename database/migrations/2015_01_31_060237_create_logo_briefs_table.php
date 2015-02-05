<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogoBriefsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('logobriefs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('generalbrief_id')->unsigned();
			$table->tinyInteger('haslogo');
			$table->text('colour');
			$table->text('logodirection');
			$table->text('logorestrictions');
			$table->text('logorequirements');
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
		Schema::drop('logobriefs');
	}

}
