<?php

namespace App\Repositories;

use App\Models\Servicio;
use App\Repositories\BaseRepository;

/**
 * Class ServicioRepository
 * @package App\Repositories
 * @version October 18, 2022, 2:36 am UTC
*/

class ServicioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'costo',
        'ayuno'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Servicio::class;
    }
}
