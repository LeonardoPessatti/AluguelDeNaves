<?php

namespace App\Repositories;

use App\Models\modelAluguel;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class modelAluguelRepository
 * @package App\Repositories
 * @version December 3, 2018, 2:12 am UTC
 *
 * @method modelAluguel findWithoutFail($id, $columns = ['*'])
 * @method modelAluguel find($id, $columns = ['*'])
 * @method modelAluguel first($columns = ['*'])
*/
class modelAluguelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'naves_id',
        'hora',
        'planeta',
        'finalizado'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return modelAluguel::class;
    }
}
