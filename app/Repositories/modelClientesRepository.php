<?php

namespace App\Repositories;

use App\Models\modelClientes;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class modelClientesRepository
 * @package App\Repositories
 * @version December 3, 2018, 2:11 am UTC
 *
 * @method modelClientes findWithoutFail($id, $columns = ['*'])
 * @method modelClientes find($id, $columns = ['*'])
 * @method modelClientes first($columns = ['*'])
*/
class modelClientesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'sexo',
        'raça',
        'planeta_origem'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return modelClientes::class;
    }
}
