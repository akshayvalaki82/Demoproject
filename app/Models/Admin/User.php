<?php

namespace App\Models\Admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Kodeine\Acl\Traits\HasRole;


class User extends Authenticatable 
{
    use Notifiable, HasRole;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

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
    protected $fillable = ['firstname', 'lastname', 'email', 'password', 'status'];

    
}
