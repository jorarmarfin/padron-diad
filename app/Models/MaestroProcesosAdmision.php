<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MaestroProcesosAdmision
 *
 * @property int $id
 * @property string $sede_filial
 * @property string $tipo_proceso
 * @property string $nivel_academico
 * @property string $anio
 * @property int $numero_convocatoria
 * @property int $codigo_entidad_unidad
 * @property int|null $codigo_entidad_programa
 * @property string|null $unidad
 * @property string|null $programa
 * @property int $vacante_convocatoria
 * @property Carbon $fecha_inicio
 * @property Carbon $fecha_fin
 * @property Carbon $fecha_inicio_carga
 * @property Carbon $fecha_fin_carga
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Collection|Postulante[] $postulantes
 */
class MaestroProcesosAdmision extends Model
{
    protected $table = 'maestro_procesos_admision';

    protected $casts = [
        'numero_convocatoria' => 'int',
        'codigo_entidad_unidad' => 'int',
        'codigo_entidad_programa' => 'int',
        'vacante_convocatoria' => 'int',
        'fecha_inicio' => 'datetime',
        'fecha_fin' => 'datetime',
        'fecha_inicio_carga' => 'datetime',
        'fecha_fin_carga' => 'datetime',
    ];

    protected $fillable = [
        'sede_filial',
        'tipo_proceso',
        'nivel_academico',
        'anio',
        'numero_convocatoria',
        'codigo_entidad_unidad',
        'codigo_entidad_programa',
        'unidad',
        'programa',
        'vacante_convocatoria',
        'fecha_inicio',
        'fecha_fin',
        'fecha_inicio_carga',
        'fecha_fin_carga',
    ];

    public function postulantes()
    {
        return $this->hasMany(Postulante::class, 'maestro_proceso_admision_id');
    }
}
