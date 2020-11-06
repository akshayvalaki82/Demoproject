<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

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
    protected $fillable = ['name', 'parent_id', 'created_by', 'updated_by', 'status'];
     
    public function parent()
    {
        return $this->belongsTo('App\Models\Admin\Category', 'parent_id', 'id');
    }   

    public function child()
    {
        return $this->hasMany('App\Models\Admin\Category','parent_id','id');
    }

    // function getcategoriesproduct()
    // {
    //     return $this-> hasMany('App\Product_Categories');
    // }
    
}
