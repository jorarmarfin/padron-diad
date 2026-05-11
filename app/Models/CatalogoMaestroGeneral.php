<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CatalogoMaestroGeneral
 *
 * @property int $id
 * @property int $catalogo_codigo
 * @property string $catalogo
 * @property int $codigo
 * @property string $descripcion
 * @property bool $activo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Collection|Postulante[] $postulantes
 */
class CatalogoMaestroGeneral extends Model
{
    protected $table = 'catalogo_maestro_general';

    protected $casts = [
        'catalogo_codigo' => 'int',
        'codigo' => 'int',
        'activo' => 'bool',
    ];

    protected $fillable = [
        'catalogo_codigo',
        'catalogo',
        'codigo',
        'descripcion',
        'activo',
    ];

    public function postulantes()
    {
        return $this->hasMany(Postulante::class, 'modalidad_estudio_catalogo_codigo', 'codigo');
    }
}
