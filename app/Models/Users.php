<?php
namespace App\Models;

use Core\Model;

class Users extends Model{
    protected $table = 'ec_users';

    protected $fillable = [
        'name',
        'username',
        'email'
    ];

}