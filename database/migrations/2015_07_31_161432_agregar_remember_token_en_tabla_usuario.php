<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AgregarRememberTokenEnTablaUsuario extends Migration {
	/**
	 * Run the migrations.
	 * @return void
	 */
	public function up() {
		Schema::table('usuario', function (Blueprint $table)
		{
			$table->timestamps();
			$table->rememberToken();
		});
	}

	/**
	 * Reverse the migrations.
	 * @return void
	 */
	public function down() {
		Schema::table('usuario', function (Blueprint $table)
		{
			$table->dropTimestamps();
			$table->dropRememberToken();
		});
	}
}
