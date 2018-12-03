<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class modelClientes
 * @package App\Models
 * @version December 3, 2018, 2:11 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection aluguel
 * @property string nome
 * @property string sexo
 * @property string raça
 * @property string planeta_origem
 */
class modelClientes extends Model
{
    use SoftDeletes;

    public $table = 'clientes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'sexo',
        'raça',
        'planeta_origem'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'sexo' => 'string',
        'raça' => 'string',
        'planeta_origem' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function naves()
    {
        return $this->belongsToMany(\App\Models\Nafe::class, 'aluguel');
    }
}
