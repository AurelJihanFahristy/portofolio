<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table            = 'projects';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['title', 'description', 'tech_stack', 'image', 'github_link', 'demo_link'];
    protected $useTimestamps    = true; // Otomatis mengisi created_at & updated_at
}
