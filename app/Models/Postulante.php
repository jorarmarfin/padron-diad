<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Postulante
 *
 * @property int $id
 * @property string $codigo_sede_filial
 * @property int $tipo_proceso_catalogo_codigo
 * @property int $tipo_proceso
 * @property string $proceso_admision
 * @property int $numero_convocatoria
 * @property int $tipo_documento_catalogo_codigo
 * @property int $tipo_documento
 * @property string $nro_documento
 * @property string $nombres
 * @property string $primer_apellido
 * @property string $segundo_apellido
 * @property string|null $apellido_casada
 * @property int $solo_un_apellido_catalogo_codigo
 * @property int $solo_un_apellido
 * @property int $sexo_catalogo_codigo
 * @property int $sexo
 * @property Carbon $fecha_nacimiento
 * @property int $pais_nacimiento
 * @property int $nacionalidad
 * @property string|null $ubigeo_nacimiento
 * @property string|null $ubigeo_domicilio
 * @property int|null $condicion_discapacidad_catalogo_codigo
 * @property int|null $condicion_discapacidad
 * @property int|null $tipo_discapacidad_catalogo_codigo
 * @property int|null $tipo_discapacidad
 * @property string $celular
 * @property string $correo_personal
 * @property int $codigo_facultad_unidad_opcion_1
 * @property int|null $codigo_facultad_unidad_opcion_2
 * @property int|null $codigo_facultad_unidad_opcion_3
 * @property int $codigo_programa_opcion_1
 * @property int|null $codigo_programa_opcion_2
 * @property int|null $codigo_programa_opcion_3
 * @property Carbon $fecha_postulacion
 * @property float $puntaje_obtenido
 * @property int $modalidad_admision_catalogo_codigo
 * @property int $modalidad_admision
 * @property int $modalidad_estudio_catalogo_codigo
 * @property int $modalidad_estudio
 * @property string $es_ingresante
 * @property int|null $codigo_facultad_unidad_ingreso
 * @property int|null $codigo_programa_ingreso
 * @property Carbon|null $fecha_ingreso
 * @property string|null $correo_institucional
 * @property string|null $codigo_orcid
 * @property int|null $pertenencia_codigo_categoria
 * @property int|null $pertenencia_costumbres_antepasados
 * @property int|null $pueblo_indigena_codigo_categoria
 * @property int|null $pueblo_indigena_originario
 * @property int|null $habla_lengua_codigo_categoria
 * @property int|null $habla_lengua_indigena
 * @property int|null $lengua_indigena_codigo_categoria
 * @property int|null $lengua_indigena_originaria
 * @property string $nombres_materno
 * @property string $primer_apellido_materno
 * @property string $segundo_apellido_materno
 * @property string|null $apellido_casada_materno
 * @property string $nombres_paterno
 * @property string $primer_apellido_paterno
 * @property string $segundo_apellido_paterno
 * @property int $maestro_proceso_admision_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property MaestroFiliale $maestro_filiale
 * @property CatalogoMaestroGeneral $catalogo_maestro_general
 * @property MaestroPai $maestro_pai
 * @property MaestroNacionalidad $maestro_nacionalidad
 * @property MaestroUbigeo|null $maestro_ubigeo
 * @property MaestroFacultadesUnidade|null $maestro_facultades_unidade
 * @property MaestroPrograma|null $maestro_programa
 * @property CatalogoMaestroPuebloIndigena|null $catalogo_maestro_pueblo_indigena
 * @property CatalogoMaestroLenguasIndigena|null $catalogo_maestro_lenguas_indigena
 * @property MaestroProcesosAdmision $maestro_procesos_admision
 */
class Postulante extends Model
{
    protected $table = 'postulantes';

    protected $casts = [
        'tipo_proceso_catalogo_codigo' => 'int',
        'tipo_proceso' => 'int',
        'numero_convocatoria' => 'int',
        'tipo_documento_catalogo_codigo' => 'int',
        'tipo_documento' => 'int',
        'solo_un_apellido_catalogo_codigo' => 'int',
        'solo_un_apellido' => 'int',
        'sexo_catalogo_codigo' => 'int',
        'sexo' => 'int',
        'fecha_nacimiento' => 'datetime',
        'pais_nacimiento' => 'int',
        'nacionalidad' => 'int',
        'condicion_discapacidad_catalogo_codigo' => 'int',
        'condicion_discapacidad' => 'int',
        'tipo_discapacidad_catalogo_codigo' => 'int',
        'tipo_discapacidad' => 'int',
        'codigo_facultad_unidad_opcion_1' => 'int',
        'codigo_facultad_unidad_opcion_2' => 'int',
        'codigo_facultad_unidad_opcion_3' => 'int',
        'codigo_programa_opcion_1' => 'int',
        'codigo_programa_opcion_2' => 'int',
        'codigo_programa_opcion_3' => 'int',
        'fecha_postulacion' => 'datetime',
        'puntaje_obtenido' => 'float',
        'modalidad_admision_catalogo_codigo' => 'int',
        'modalidad_admision' => 'int',
        'modalidad_estudio_catalogo_codigo' => 'int',
        'modalidad_estudio' => 'int',
        'codigo_facultad_unidad_ingreso' => 'int',
        'codigo_programa_ingreso' => 'int',
        'fecha_ingreso' => 'datetime',
        'pertenencia_codigo_categoria' => 'int',
        'pertenencia_costumbres_antepasados' => 'int',
        'pueblo_indigena_codigo_categoria' => 'int',
        'pueblo_indigena_originario' => 'int',
        'habla_lengua_codigo_categoria' => 'int',
        'habla_lengua_indigena' => 'int',
        'lengua_indigena_codigo_categoria' => 'int',
        'lengua_indigena_originaria' => 'int',
        'maestro_proceso_admision_id' => 'int',
    ];

    protected $fillable = [
        'codigo_sede_filial',
        'tipo_proceso_catalogo_codigo',
        'tipo_proceso',
        'proceso_admision',
        'numero_convocatoria',
        'tipo_documento_catalogo_codigo',
        'tipo_documento',
        'nro_documento',
        'nombres',
        'primer_apellido',
        'segundo_apellido',
        'apellido_casada',
        'solo_un_apellido_catalogo_codigo',
        'solo_un_apellido',
        'sexo_catalogo_codigo',
        'sexo',
        'fecha_nacimiento',
        'pais_nacimiento',
        'nacionalidad',
        'ubigeo_nacimiento',
        'ubigeo_domicilio',
        'condicion_discapacidad_catalogo_codigo',
        'condicion_discapacidad',
        'tipo_discapacidad_catalogo_codigo',
        'tipo_discapacidad',
        'celular',
        'correo_personal',
        'codigo_facultad_unidad_opcion_1',
        'codigo_facultad_unidad_opcion_2',
        'codigo_facultad_unidad_opcion_3',
        'codigo_programa_opcion_1',
        'codigo_programa_opcion_2',
        'codigo_programa_opcion_3',
        'fecha_postulacion',
        'puntaje_obtenido',
        'modalidad_admision_catalogo_codigo',
        'modalidad_admision',
        'modalidad_estudio_catalogo_codigo',
        'modalidad_estudio',
        'es_ingresante',
        'codigo_facultad_unidad_ingreso',
        'codigo_programa_ingreso',
        'fecha_ingreso',
        'correo_institucional',
        'codigo_orcid',
        'pertenencia_codigo_categoria',
        'pertenencia_costumbres_antepasados',
        'pueblo_indigena_codigo_categoria',
        'pueblo_indigena_originario',
        'habla_lengua_codigo_categoria',
        'habla_lengua_indigena',
        'lengua_indigena_codigo_categoria',
        'lengua_indigena_originaria',
        'nombres_materno',
        'primer_apellido_materno',
        'segundo_apellido_materno',
        'apellido_casada_materno',
        'nombres_paterno',
        'primer_apellido_paterno',
        'segundo_apellido_paterno',
        'maestro_proceso_admision_id',
    ];

    public function maestro_filiale()
    {
        return $this->belongsTo(MaestroFiliale::class, 'codigo_sede_filial', 'codigo');
    }

    public function catalogo_maestro_general()
    {
        return $this->belongsTo(CatalogoMaestroGeneral::class, 'modalidad_estudio_catalogo_codigo', 'codigo')
            ->where('catalogo_maestro_general.codigo', '=', 'postulantes.modalidad_estudio_catalogo_codigo')
            ->where('catalogo_maestro_general.catalogo_codigo', '=', 'postulantes.modalidad_estudio_catalogo_codigo')
            ->where('catalogo_maestro_general.codigo', '=', 'postulantes.modalidad_estudio')
            ->where('catalogo_maestro_general.catalogo_codigo', '=', 'postulantes.modalidad_estudio');
    }

    public function maestro_pai()
    {
        return $this->belongsTo(MaestroPai::class, 'pais_nacimiento', 'codigo');
    }

    public function maestro_nacionalidad()
    {
        return $this->belongsTo(MaestroNacionalidad::class, 'nacionalidad', 'codigo');
    }

    public function maestro_ubigeo()
    {
        return $this->belongsTo(MaestroUbigeo::class, 'ubigeo_domicilio', 'codigo');
    }

    public function maestro_facultades_unidade()
    {
        return $this->belongsTo(MaestroFacultadesUnidade::class, 'codigo_facultad_unidad_ingreso', 'codigo');
    }

    public function maestro_programa()
    {
        return $this->belongsTo(MaestroPrograma::class, 'codigo_programa_ingreso', 'codigo');
    }

    public function catalogo_maestro_pueblo_indigena()
    {
        return $this->belongsTo(CatalogoMaestroPuebloIndigena::class, 'pueblo_indigena_codigo_categoria', 'codigo_categoria')
            ->where('catalogo_maestro_pueblo_indigenas.codigo_categoria', '=', 'postulantes.pueblo_indigena_codigo_categoria')
            ->where('catalogo_maestro_pueblo_indigenas.codigo', '=', 'postulantes.pueblo_indigena_codigo_categoria')
            ->where('catalogo_maestro_pueblo_indigenas.codigo', '=', 'postulantes.pueblo_indigena_originario')
            ->where('catalogo_maestro_pueblo_indigenas.codigo_categoria', '=', 'postulantes.pueblo_indigena_originario');
    }

    public function catalogo_maestro_lenguas_indigena()
    {
        return $this->belongsTo(CatalogoMaestroLenguasIndigena::class, 'lengua_indigena_codigo_categoria', 'codigo')
            ->where('catalogo_maestro_lenguas_indigenas.codigo', '=', 'postulantes.lengua_indigena_codigo_categoria')
            ->where('catalogo_maestro_lenguas_indigenas.codigo_categoria', '=', 'postulantes.lengua_indigena_codigo_categoria')
            ->where('catalogo_maestro_lenguas_indigenas.codigo_categoria', '=', 'postulantes.lengua_indigena_originaria')
            ->where('catalogo_maestro_lenguas_indigenas.codigo', '=', 'postulantes.lengua_indigena_originaria');
    }

    public function maestro_procesos_admision()
    {
        return $this->belongsTo(MaestroProcesosAdmision::class, 'maestro_proceso_admision_id');
    }
}
