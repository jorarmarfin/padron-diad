<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MaestroPai
 *
 * @property int $id
 * @property int $codigo
 * @property string $descripcion
 * @property bool $activo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Collection|Postulante[] $postulantes
 */
class MaestroPai extends Model
{
    protected $table = 'maestro_pais';

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
        return $this->hasMany(Postulante::class, 'pais_nacimiento', 'codigo');
    }
}
