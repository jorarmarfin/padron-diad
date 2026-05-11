<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MaestroFacultadesUnidade
 *
 * @property int $id
 * @property int $codigo
 * @property string $tipo
 * @property string $nombre
 * @property string $vigencia
 * @property bool $activo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Collection|Postulante[] $postulantes
 */
class MaestroFacultadesUnidade extends Model
{
    protected $table = 'maestro_facultades_unidades';

    protected $casts = [
        'codigo' => 'int',
        'activo' => 'bool',
    ];

    protected $fillable = [
        'codigo',
        'tipo',
        'nombre',
        'vigencia',
        'activo',
    ];

    public function postulantes()
    {
        return $this->hasMany(Postulante::class, 'codigo_facultad_unidad_ingreso', 'codigo');
    }
}
