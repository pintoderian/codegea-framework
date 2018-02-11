<?php
require_once __DIR__.'/../config/database.php';

use Illuminate\Database\Eloquent\Model;

class Users extends Model{
    protected $table = 'users';
}