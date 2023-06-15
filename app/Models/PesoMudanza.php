<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PesoMudanza
 * 
 * @property int $id_peso_mercancia
 * @property string|null $cantidad_peso
 * @property float|null $presio
 * 
 * @property Collection|Mudanza[] $mudanzas
 *
 * @package App\Models
 */
class PesoMudanza extends Model
{
	protected $table = 'peso_mudanza';
	protected $primaryKey = 'id_peso_mercancia';
	public $timestamps = false;

	protected $casts = [
		'presio' => 'float'
	];

	protected $fillable = [
		'cantidad_peso',
		'presio'
	];

	public function mudanzas()
	{
		return $this->hasMany(Mudanza::class, 'id_peso_mudanza');
	}
}
