<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $categories_id
 * @property $name
 * @property $description
 * @property $bar_code
 * @property $price
 * @property $stock
 * @property $id_Sales
 * @property $id_voucher
 * @property $ruta_image
 * @property $created_at
 * @property $updated_at
 *
 * @property Category $category
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'categories_id' => 'required',
		'name' => 'required',
		'description' => 'required',
		'bar_code' => 'required',
		'price' => 'required',
		'stock' => 'required',
		'id_Sales' => 'required',
		'id_voucher' => 'required',
		'ruta_image' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['categories_id','name','description','bar_code','price','stock','id_Sales','id_voucher','ruta_image'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'categories_id');
    }
    

}
