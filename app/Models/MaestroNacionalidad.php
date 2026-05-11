<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MaestroNacionalidad
 *
 * @property int $id
 * @property int $codigo
 * @property string $descripcion
 * @property bool $activo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Collection|Postulante[] $postulantes
 */
class MaestroNacionalidad extends Model
{
    protected $table = 'maestro_nacionalidad';

    protected $casts = [
        'codigo' => 'int',
        'activo' => 'bool',
    ];

    protected $fillable = [
        'codigo',
        'descripcion',
        'activo',
    ];

    public function postulantes()
    {
        return $this->hasMany(Postulante::class, 'nacionalidad', 'codigo');
    }
}
