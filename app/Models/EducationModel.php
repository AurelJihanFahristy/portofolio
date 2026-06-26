<?php

namespace App\Models;

use CodeIgniter\Model;

class EducationModel extends Model
{
    protected $table            = 'educations';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['institution', 'degree', 'major', 'start_year', 'end_year', 'gpa', 'description'];
    protected $useTimestamps    = true;
}
