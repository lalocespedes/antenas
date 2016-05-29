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
	
	public function direccion()
	{
		return "{$this->client_calle} {$this->client_colonia} {$this->client_NoExt} {$this->client_NoInt}";
	}

	public function setClientNumber()
	{

		//if(!$this->client_numbere) {
			
			//generar numero de cleinte automatico
			//$this->attributes['slug'] = Str::slug($value);
		//}

	}
}
