<?php 
namespace App\Models;

use CodeIgniter\Model;

class AboutModel extends Model
{
    protected $table = 'about_info';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'profile', 'email', 'address'];
}