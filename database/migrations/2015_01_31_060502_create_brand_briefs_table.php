<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandBriefsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('brandbriefs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('generalbrief_id')->unsigned();
			$table->text('brandmaterials');
			$table->text('branduse');
			$table->text('brandspecifics');
			$table->text('branddirection');
			$table->text('brandcolour');
			$table->text('brandrestrictions');
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
		Schema::drop('brandbriefs');
	}

}
