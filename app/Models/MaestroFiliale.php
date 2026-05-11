<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MaestroFiliale
 *
 * @property int $id
 * @property string $codigo
 * @property string $departamento
 * @property string $provincia
 * @property string $vigencia
 * @property string $EFI
 * @property bool $activo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Collection|Postulante[] $postulantes
 */
class MaestroFiliale extends Model
{
    protected $table = 'maestro_filiales';

    protected $casts = [
        'activo' => 'bool',
    ];

    protected $fillable = [
        'codigo',
        'departamento',
        'provincia',
        'vigencia',
        'EFI',
        'activo',
    ];

    public function postulantes()
    {
        return $this->hasMany(Postulante::class, 'codigo_sede_filial', 'codigo');
    }
}
