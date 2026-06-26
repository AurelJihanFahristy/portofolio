<div class="content-wrapper p-4">
    <div class="container-fluid">
        <div class="card shadow-sm border-0 m-auto" style="max-width: 800px;">
            <div class="card-header bg-white py-3 border-bottom">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-pen-to-square text-primary fa-2x me-3"></i>
                    <div>
                        <h4 class="mb-0 fw-bold text-dark"><?= esc($title) ?></h4>
                        <small class="text-muted">Perbarui data atau screenshot hasil proyek portfolio kamu</small>
                    </div>
                </div>
            </div>

            <div class="card-body p-4">
                <form action="<?= base_url('admin/project/update/' . $project['id']) ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <div class="mb-3">
                        <label for="title" class="form-label fw-semibold text-secondary small">Nama / Judul Proyek</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?= esc(old('title', $project['title'])) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="tech_stack" class="form-label fw-semibold text-secondary small">Tech Stack (Contoh: CodeIgniter 4, Bootstrap 5, MySQL)</label>
                        <input type="text" class="form-control" id="tech_stack" name="tech_stack" value="<?= esc(old('tech_stack', $project['tech_stack'])) ?>" placeholder="Pisahkan dengan koma">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label fw-semibold text-secondary small">Deskripsi Proyek</label>
                        <textarea class="form-control" id="description" name="description" rows="4" required><?= esc(old('description', $project['description'])) ?></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="github_link" class="form-label fw-semibold text-secondary small"><i class="fa-brands fa-github me-1"></i> Link Repository GitHub</label>
                            <input type="url" class="form-control" id="github_link" name="github_link" value="<?= esc(old('github_link', $project['github_link'])) ?>" placeholder="https://github.com/username/repo">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="demo_link" class="form-label fw-semibold text-secondary small"><i class="fa-solid fa-earth-asia me-1"></i> Link Live Demo / Website</label>
                            <input type="url" class="form-control" id="demo_link" name="demo_link" value="<?= esc(old('demo_link', $project['demo_link'])) ?>" placeholder="https://namawebsite.com">
                        </div>
                    </div>

                    <div class="row align-items-center mt-3 p-3 bg-light rounded-3 g-3">
                        <div class="col-sm-3 text-center">
                            <label class="form-label fw-semibold text-secondary small d-block mb-2">Gambar Saat Ini</label>
                            <img src="<?= base_url('uploads/' . $project['image']) ?>" alt="Project Image" class="img-thumbnail rounded shadow-sm" style="max-height: 100px; object-fit: cover;">
                        </div>
                        <div class="col-sm-9">
                            <label for="image" class="form-label fw-semibold text-secondary small">Ganti Gambar Proyek (Opsional)</label>
                            <input class="form-control" type="file" id="image" name="image">
                            <div class="form-text text-muted small mt-1"><i class="fa-solid fa-circle-info me-1"></i> Format: JPG/PNG. Maksimal ukuran 2MB. Kosongkan jika tidak ingin mengubah gambar.</div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-4 pt-3 border-top">
                        <a href="<?= base_url('admin/project') ?>" class="btn btn-outline-secondary px-4 rounded-pill">
                            <i class="fa-solid fa-arrow-left me-1"></i> Kembali
                        </a>
                        <button type="submit" class="btn btn-primary px-4 rounded-pill shadow-sm bg-gradient">
                            <i class="fa-solid fa-floppy-disk me-1"></i> Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>