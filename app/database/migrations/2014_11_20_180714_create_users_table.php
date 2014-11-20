<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('firstname');
            $table->string('surname');
            $table->date('birthdate');
            $table->enum('sex', array('male', 'female'));
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();       // created_at, updated_at
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
    {
        Schema::drops('users');
    }
}
