<?php namespace App\Models;

use CodeIgniter\Model;

class MaModel extends Model{

    protected $table = 'timed';
    protected $primaryKey = 'username';
    protected $allowedFields = [
        'username',
        'email',
        'phone',
        'messages'
    ];

}