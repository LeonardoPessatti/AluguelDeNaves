<?php

namespace App\Repositories;

use App\Models\modelNaves;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class modelNavesRepository
 * @package App\Repositories
 * @version December 3, 2018, 2:12 am UTC
 *
 * @method modelNaves findWithoutFail($id, $columns = ['*'])
 * @method modelNaves find($id, $columns = ['*'])
 * @method modelNaves first($columns = ['*'])
*/
class modelNavesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'placa',
        'modelo',
        'ano',
        'pressao_maxima'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return modelNaves::class;
    }
}
