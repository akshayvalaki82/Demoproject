<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'sku', 'short_description', 'long_description', 'price', 'special_price', 'special_price_from', 'special_price_to', 'quanity', 'meta_title', 'meta_description', 'meta_keywords', 'created_by', 'updated_by', 'status'];

    
}
