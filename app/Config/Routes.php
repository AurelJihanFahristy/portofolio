<?php

use CodeIgniter\Config\Services;

$routes = Services::routes();

// 1. Jalur Halaman Utama (Publik untuk HRD)
$routes->get('/', 'Home::index');

// 2. Jalur Otentikasi Admin (Sudah Diperbaiki fungsinya ke Auth::login)
$routes->get('login', 'Admin\Auth::login');
$routes->post('login/process', 'Admin\Auth::process');
$routes->get('logout', 'Admin\Auth::logout');
$routes->get('reset-akun', 'Reset::index');

// 3. Jalur Panel Admin (Diproteksi dengan filter 'auth')
$routes->group('admin', ['namespace' => 'App\Controllers\Admin', 'filter' => 'auth'], function ($routes) {
    $routes->get('dashboard', 'Dashboard::index');

    // CRUD Proyek otomatis + Rute Manual Penyelamat
    $routes->get('project/new', 'Project::new');      // Jalur khusus untuk nampilin form tambah
    $routes->post('project/store', 'Project::store');  // Jalur khusus untuk memproses simpan database
    $routes->resource('project');
    $routes->post('project/update/(:num)', 'Project::update/$1');

    // CRUD manual untuk Skill
    $routes->get('skill', 'Skill::index');
    $routes->post('skill/store', 'Skill::store');
    $routes->get('skill/delete/(:num)', 'Skill::delete/$1');

    // Tambahan CRUD manual untuk Education jika diperlukan
    $routes->get('education', 'Education::index');
    $routes->post('education/store', 'Education::store');
    $routes->get('education/delete/(:num)', 'Education::delete/$1');

    $routes->get('profile', 'Profile::index');
    $routes->post('profile/update', 'Profile::update');

    // CRUD manual untuk Organisasi
    $routes->get('organization', 'Organization::index');
    $routes->post('organization/store', 'Organization::store');
    $routes->get('organization/delete/(:num)', 'Organization::delete/$1');

    // CRUD manual untuk Sertifikat
    $routes->get('certificate', 'Certificate::index');
    $routes->post('certificate/store', 'Certificate::store');
    $routes->get('certificate/delete/(:num)', 'Certificate::delete/$1');
});
