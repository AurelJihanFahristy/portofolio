<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Profil | Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .main-content {
            margin-left: 260px;
            padding: 40px;
        }

        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
                padding: 20px;
            }
        }

        .card {
            border: none;
            border-radius: 12px;
        }

        .preview-img {
            object-fit: cover;
            border: 4px solid #fff;
        }
    </style>
</head>

<body>

    <div class="main-content">
        <div class="container-fluid">

            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4" role="alert">
                    <i class="fa-solid fa-circle-check me-2"></i> <?= session()->getFlashdata('msg') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <div class="row">
                <div class="col-lg-8">
                    <div class="card shadow-sm p-4 mb-4">
                        <div class="d-flex align-items-center mb-4 border-bottom pb-3">
                            <i class="fa-solid fa-user-gear fa-2x text-primary me-3"></i>
                            <div>
                                <h4 class="fw-bold text-dark mb-0">Edit Biodata & Foto</h4>
                                <small class="text-muted">Perbarui profil utama yang tampil di halaman portofolio depan</small>
                            </div>
                        </div>

                        <form action="<?= base_url('admin/profile/update') ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-secondary">Nama Lengkap</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="fa-solid fa-user text-muted"></i></span>
                                    <input type="text" name="name" class="form-control" value="<?= esc($profile['name']) ?>" required placeholder="Masukkan nama lengkap">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-secondary">Slogan / Jabatan</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="fa-solid fa-briefcase text-muted"></i></span>
                                    <input type="text" name="title" class="form-control" value="<?= esc($profile['title']) ?>" required placeholder="Contoh: Mahasiswa Teknik Informatika">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-secondary">Bio Singkat</label>
                                <textarea name="bio" class="form-control" rows="5" required placeholder="Ceritakan latar belakang singkat kamu..."><?= esc($profile['bio']) ?></textarea>
                            </div>

                            <div class="row align-items-center mt-4 border-top pt-4">
                                <div class="col-md-3 text-center mb-3 mb-md-0">
                                    <label class="form-label d-block fw-semibold text-secondary text-start text-md-center mb-2">Foto Saat Ini</label>

                                    <img
                                        src="<?= base_url('uploads/' . $profile['photo']) ?>"
                                        onerror="this.onerror=null;this.src='<?= base_url('uploads/default.png') ?>';"
                                        width="120"
                                        height="120"
                                        class="rounded-circle shadow preview-img"
                                        alt="Foto Profil">

                                    <input type="hidden" name="old_photo" value="<?= esc($profile['photo']) ?>">
                                </div>
                                <div class="col-md-9">
                                    <label class="form-label fw-semibold text-secondary">Ganti Foto Profil (Opsional)</label>
                                    <input type="file" name="photo" class="form-control mb-1">
                                    <small class="text-muted"><i class="fa-solid fa-circle-info me-1"></i> Format: JPG/PNG. Kosongkan jika tidak ingin mengganti foto.</small>
                                </div>
                            </div>

                            <div class="mt-4 d-flex justify-content-between">
                                <a href="<?= base_url('admin/dashboard') ?>" class="btn btn-light border fw-semibold shadow-sm">
                                    <i class="fa-solid fa-arrow-left me-2"></i> Kembali
                                </a>
                                <button type="submit" class="btn btn-primary px-4 fw-bold shadow-sm">
                                    <i class="fa-solid fa-floppy-disk me-2"></i> Simpan Perubahan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>