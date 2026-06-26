<aside class="sidebar d-flex flex-column justify-content-between">
    <div>
        <div class="p-3 text-center border-bottom border-secondary">
            <h5 class="mb-0 text-truncate">Admin Panel</h5>
            <small class="text-muted">Halo, <?= session()->get('username') ?></small>
        </div>
        <nav class="mt-3">
            <a href="<?= base_url('admin/dashboard') ?>">Dashboard</a>
            <a href="<?= base_url('admin/profile') ?>" class="nav-link">Manajemen Profil</a>
            <a href="<?= base_url('admin/project') ?>">Manajemen Proyek</a>
            <a href="<?= base_url('admin/skill') ?>">Manajemen Skill</a>
            <a href="<?= base_url('admin/education') ?>">Manajemen Pendidikan</a>

            <a href="<?= base_url('admin/organization') ?>">Manajemen Organisasi</a>
            <a href="<?= base_url('admin/certificate') ?>">Manajemen Sertifikat</a>
        </nav>
    </div>
    <div class="p-3 border-top border-secondary">
        <a href="<?= base_url('logout') ?>" class="btn btn-danger btn-sm w-100 text-white text-center p-2">Keluar / Logout</a>
    </div>
</aside>