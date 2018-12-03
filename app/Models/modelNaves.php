<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class modelNaves
 * @package App\Models
 * @version December 3, 2018, 2:12 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection aluguel
 * @property string placa
 * @property string modelo
 * @property string ano
 * @property string pressao_maxima
 */
class modelNaves extends Model
{
    use SoftDeletes;

    public $table = 'naves';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'placa',
        'modelo',
        'ano',
        'pressao_maxima'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'placa' => 'string',
        'modelo' => 'string',
        'ano' => 'string',
        'pressao_maxima' => 'string'
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
    public function clientes()
    {
        return $this->belongsToMany(\App\Models\Cliente::class, 'aluguel');
    }
}
