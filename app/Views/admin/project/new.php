<main class="content-wrapper">
    <div class="container-fluid mt-4">
        <h2>Tambah Proyek Baru</h2>
        <a href="<?= base_url('admin/project') ?>" class="btn btn-secondary mb-3">Kembali</a>

        <!-- Menampilkan pesan error jika validasi gagal -->
        <?php if (isset($validation)) : ?>
            <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
        <?php endif; ?>

        <form action="<?= base_url('admin/project/store') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?> <!-- Fitur Keamanan CI4 Token CSRF -->

            <div class="mb-3">
                <label for="title" class="form-label">Nama/Judul Proyek</label>
                <input type="text" class="form-control" id="title" name="title" value="<?= old('title') ?>" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi & Studi Kasus Proyek</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Gunakan format Problem-Solution-Result agar HRD tertarik..." required><?= old('description') ?></textarea>
            </div>

            <div class="mb-3">
                <label for="tech_stack" class="form-label">Tech Stack (Pisahkan dengan koma)</label>
                <input type="text" class="form-control" id="tech_stack" name="tech_stack" placeholder="Contoh: CodeIgniter 4, MySQL, Bootstrap 5" value="<?= old('tech_stack') ?>" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Screenshot Aplikasi/Proyek (Max 2MB)</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>

            <div class="mb-3">
                <label for="github_link" class="form-label">Link Repositori GitHub (Opsional)</label>
                <input type="url" class="form-control" id="github_link" name="github_link" value="<?= old('github_link') ?>">
            </div>

            <div class="mb-3">
                <label for="demo_link" class="form-label">Link Live Demo Aplikasi (Opsional)</label>
                <input type="url" class="form-control" id="demo_link" name="demo_link" value="<?= old('demo_link') ?>">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Proyek</button>
        </form>
    </div>
</main>