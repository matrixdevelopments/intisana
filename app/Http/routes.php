<?php
Route::get('/', function ()
{
	/**
	 * @var \Illuminate\Database\Eloquent\Collection $alumnos
	 */
	$alumnos = \Intisana\Models\Usuario::whereTipoUsr(2)->take(3)->get();
	$alumnos->each(function ($alumno)
	{
		echo $alumno->email;
	});
});
