<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MaestroUbigeo
 *
 * @property int $id
 * @property string $codigo
 * @property string $departamento
 * @property string $provincia
 * @property string $distrito
 * @property bool $activo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Collection|Postulante[] $postulantes
 */
class MaestroUbigeo extends Model
{
    protected $table = 'maestro_ubigeo';

    protected $casts = [
        'activo' => 'bool',
    ];

    protected $fillable = [
        'codigo',
        'departamento',
        'provincia',
        'distrito',
        'activo',
    ];

    public function postulantes()
    {
        return $this->hasMany(Postulante::class, 'ubigeo_domicilio', 'codigo');
    }
}
