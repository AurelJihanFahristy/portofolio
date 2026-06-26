<div class="content-wrapper p-4">
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
            <h4 class="fw-bold text-dark mb-3">Tambah Pengalaman Organisasi / Kepanitiaan</h4>
            <form action="<?= base_url('admin/organization/store') ?>" method="post" enctype="multipart/form-data">
                <div class="row g-3">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="organization_name" placeholder="Nama Organisasi / Kegiatan" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="role" placeholder="Jabatan (Contoh: Ketua, Staf)" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="period" placeholder="Periode (Contoh: 2024 - 2025)" required>
                    </div>
                    <div class="col-md-8">
                        <textarea class="form-control" name="description" rows="2" placeholder="Deskripsi singkat tugas atau pencapaian kamu..."></textarea>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label small text-muted mb-1">Logo / Foto Kegiatan (Opsional)</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary px-4"><i class="fa-solid fa-plus me-1"></i> Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <h5 class="fw-bold mb-3 text-secondary">Daftar Organisasi</h5>
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Logo</th>
                        <th>Organisasi</th>
                        <th>Jabatan</th>
                        <th>Periode</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($organizations as $org): ?>
                        <tr>
                            <td>
                                <?php if (!empty($org['image'])): ?>
                                    <img src="<?= base_url('uploads/' . $org['image']) ?>" class="rounded shadow-sm" width="50" height="50" style="object-fit: cover;">
                                <?php else: ?>
                                    <div class="bg-secondary text-white rounded d-flex align-items-center justify-content-center shadow-sm" style="width: 50px; height: 50px;"><i class="fa-solid fa-users"></i></div>
                                <?php endif; ?>
                            </td>
                            <td><strong><?= esc($org['organization_name']) ?></strong></td>
                            <td><?= esc($org['role']) ?></td>
                            <td><span class="badge bg-secondary"><?= esc($org['period']) ?></span></td>
                            <td class="text-center">
                                <a href="<?= base_url('admin/organization/delete/' . $org['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus organisasi ini?')"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>