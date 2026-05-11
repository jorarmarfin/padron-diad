<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CatalogoMaestroLenguasIndigena
 *
 * @property int $id
 * @property string $categoria
 * @property int $codigo_categoria
 * @property int $codigo
 * @property string|null $lengua
 * @property string|null $familia_linguistica
 * @property string|null $ambito
 * @property string|null $pueblos_que_la_hablan
 * @property string|null $resolucion_alfabeto
 * @property string|null $condicion_descripcion
 * @property bool $activo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Collection|Postulante[] $postulantes
 */
class CatalogoMaestroLenguasIndigena extends Model
{
    protected $table = 'catalogo_maestro_lenguas_indigenas';

    protected $casts = [
        'codigo_categoria' => 'int',
        'codigo' => 'int',
        'activo' => 'bool',
    ];

    protected $fillable = [
        'categoria',
        'codigo_categoria',
        'codigo',
        'lengua',
        'familia_linguistica',
        'ambito',
        'pueblos_que_la_hablan',
        'resolucion_alfabeto',
        'condicion_descripcion',
        'activo',
    ];

    public function postulantes()
    {
        return $this->hasMany(Postulante::class, 'lengua_indigena_codigo_categoria', 'codigo');
    }
}
