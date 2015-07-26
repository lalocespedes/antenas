<?php
	
namespace lalocespedes\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
/**
* 
*/
class Clients extends Eloquent
{
	protected $table = 'clients';
	
	protected $fillable = [
		'client_nombre',
		'client_activo',
		'client_calle',
		'client_colonia',
		'client_NoExt',
		'client_NoInt',
		'client_codigoPostal',
		'client_ciudad',
		'client_estado',
		'client_pais',
		'client_tel',
		'client_celular',
		'client_correo',
		'client_notas',
		'client_rfc',
		'client_etiqueta',
	];
	
}
