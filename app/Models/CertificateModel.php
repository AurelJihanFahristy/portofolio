<?php

namespace App\Models;

use CodeIgniter\Model;

class CertificateModel extends Model
{
    protected $table = 'certificates';
    protected $primaryKey = 'id';
    protected $allowedFields = ['certificate_name', 'issuer', 'year', 'link'];
}
