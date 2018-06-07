<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Users extends Model{
    protected $table = 'ec_users';

    protected $fillable = [
        'name',
        'username',
        'email'
    ];

}