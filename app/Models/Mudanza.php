<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mudanza
 *
 * @property int $id_mudanza
 * @property int|null $id_user
 * @property int|null $id_origen
 * @property int|null $id_destino
 * @property int|null $id_peso_mudanza
 * @property float|null $presupuesto
 * @property float|null $total
 * @property string|null $status
 *
 * @property Municipio|null $municipio
 * @property PesoMudanza|null $peso_mudanza
 * @property User|null $user
 *
 * @package App\Models
 */
class Mudanza extends Model
{
	protected $table = 'mudanzas';
	protected $primaryKey = 'id_mudanza';
	public $timestamps = false;

	protected $casts = [
		'id_user' => 'int',
		'id_origen' => 'int',
		'id_destino' => 'int',
		'id_peso_mudanza' => 'int',
		'presupuesto' => 'float',
		'total' => 'float'
	];

	protected $fillable = [
		'id_user',
		'id_origen',
		'id_destino',
		'id_peso_mudanza',
		'presupuesto',
		'total',
		'status'
	];

	public function municipioO()
	{
		return $this->belongsTo(Municipio::class, 'id_origen');
	}
    public function municipioD()
    {
        return $this->belongsTo(Municipio::class, 'id_destino');
    }

	public function peso_mudanza()
	{
		return $this->belongsTo(PesoMudanza::class, 'id_peso_mudanza');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}
}
