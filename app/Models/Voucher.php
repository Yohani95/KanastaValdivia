<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Voucher
 *
 * @property $id
 * @property $total
 * @property $id_rut
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Voucher extends Model
{
    
    static $rules = [
		'total' => 'required',
		'id_rut' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['total','id_rut'];



}
