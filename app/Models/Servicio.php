<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Servicio
 * @package App\Models
 * @version October 18, 2022, 2:36 am UTC
 *
 * @property string $nombre
 * @property number $costo
 * @property boolean $ayuno
 */
class Servicio extends Model
{


    public $table = 'servicios';
    



    public $fillable = [
        'nombre',
        'costo',
        'ayuno'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'costo' => 'decimal:2',
        'ayuno' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'costo' => 'required',
        'ayuno' => 'required'
    ];

    
}
