<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class modelAluguel
 * @package App\Models
 * @version December 3, 2018, 2:12 am UTC
 *
 * @property \App\Models\Cliente cliente
 * @property \App\Models\Nafe nafe
 * @property integer naves_id
 * @property string|\Carbon\Carbon hora
 * @property string planeta
 * @property string|\Carbon\Carbon finalizado
 */
class modelAluguel extends Model
{
    use SoftDeletes;

    public $table = 'aluguel';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'clientes_id',
        'naves_id',
        'hora',
        'planeta',
        'finalizado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'clientes_id' => 'integer',
        'naves_id' => 'integer',
        'planeta' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cliente()
    {
        return $this->belongsTo(\App\Models\Cliente::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function nafe()
    {
        return $this->belongsTo(\App\Models\Nafe::class);
    }
}
