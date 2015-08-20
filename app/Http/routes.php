<?php
Route::get('/', function ()
{
	/**
	 * @var \Illuminate\Database\Eloquent\Collection $alumnos
	 */
	$alumnos = \Intisana\Models\Usuario::whereTipoUsr(3)->take(3)->get();

	return $alumnos->load([
		'perfil' => function ($query)
		{
			$query->with('hijos');
		}
	]);
});