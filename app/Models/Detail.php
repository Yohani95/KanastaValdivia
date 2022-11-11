<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detail
 *
 * @property $id
 * @property $id_voucher
 * @property $name_product
 * @property $quantity
 * @property $unit_price
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Detail extends Model
{
    
    static $rules = [
		'id_voucher' => 'required',
		'name_product' => 'required',
		'quantity' => 'required',
		'unit_price' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_voucher','name_product','quantity','unit_price'];



}
