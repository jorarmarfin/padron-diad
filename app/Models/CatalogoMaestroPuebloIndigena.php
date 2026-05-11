<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CatalogoMaestroPuebloIndigena
 *
 * @property int $id
 * @property string $categoria
 * @property int $codigo_categoria
 * @property int $codigo
 * @property string|null $pueblo
 * @property string|null $pertenencia_descripcion
 * @property string|null $otras_denominaciones
 * @property string|null $ambito
 * @property string|null $presencia_departamentos
 * @property bool $activo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Collection|Postulante[] $postulantes
 */
class CatalogoMaestroPuebloIndigena extends Model
{
    protected $table = 'catalogo_maestro_pueblo_indigenas';

    protected $casts = [
        'codigo_categoria' => 'int',
        'codigo' => 'int',
        'activo' => 'bool',
    ];

    protected $fillable = [
        'categoria',
        'codigo_categoria',
        'codigo',
        'pueblo',
        'pertenencia_descripcion',
        'otras_denominaciones',
        'ambito',
        'presencia_departamentos',
        'activo',
    ];

    public function postulantes()
    {
        return $this->hasMany(Postulante::class, 'pueblo_indigena_codigo_categoria', 'codigo_categoria');
    }
}
