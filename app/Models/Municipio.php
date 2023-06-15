<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Municipio
 * 
 * @property int $id_municipio
 * @property string|null $nombre_municipio
 * 
 * @property Collection|Mudanza[] $mudanzas
 *
 * @package App\Models
 */
class Municipio extends Model
{
	protected $table = 'municipio';
	protected $primaryKey = 'id_municipio';
	public $timestamps = false;

	protected $fillable = [
		'nombre_municipio'
	];

	public function mudanzas()
	{
		return $this->hasMany(Mudanza::class, 'id_origen');
	}
}
