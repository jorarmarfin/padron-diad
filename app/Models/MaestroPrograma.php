<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MaestroPrograma
 *
 * @property int $id
 * @property int $codigo
 * @property string $nivel_academico
 * @property string $programa
 * @property string $tipo_autorizacion
 * @property string $vigencia
 * @property string $efi
 * @property bool $activo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Collection|Postulante[] $postulantes
 */
class MaestroPrograma extends Model
{
    protected $table = 'maestro_programas';

    protected $casts = [
        'codigo' => 'int',
        'activo' => 'bool',
    ];

    protected $fillable = [
        'codigo',
        'nivel_academico',
        'programa',
        'tipo_autorizacion',
        'vigencia',
        'efi',
        'activo',
    ];

    public function postulantes()
    {
        return $this->hasMany(Postulante::class, 'codigo_programa_ingreso', 'codigo');
    }
}
