<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralBriefsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('generalbriefs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('contact_person');
			$table->string('email', 255);
			$table->string('company');
			$table->string('industry');
			$table->string('since');
			$table->string('website');
			$table->text('background');
			$table->text('reaction');
			$table->text('nutshell');
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
		Schema::drop('generalbriefs');
	}

}
