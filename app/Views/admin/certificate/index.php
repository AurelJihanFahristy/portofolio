<div class="content-wrapper p-4">
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
            <h4 class="fw-bold text-dark mb-3">Tambah Sertifikat / Penghargaan</h4>
            <form action="<?= base_url('admin/certificate/store') ?>" method="post">
                <div class="row g-3">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="certificate_name" placeholder="Nama Sertifikat / Lisensi" required>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="issuer" placeholder="Penerbit (Contoh: Google, Dicoding)" required>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="year" placeholder="Tahun" required>
                    </div>
                    <div class="col-md-3">
                        <input type="url" class="form-control" name="link" placeholder="Link Kredensial URL (Opsional)">
                    </div>
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-success px-4"><i class="fa-solid fa-floppy-disk me-1"></i> Simpan Sertifikat</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <h5 class="fw-bold mb-3 text-secondary">Koleksi Sertifikat</h5>
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Nama Sertifikat</th>
                        <th>Penerbit</th>
                        <th>Tahun</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($certificates as $cert): ?>
                        <tr>
                            <td><strong><?= esc($cert['certificate_name']) ?></strong></td>
                            <td><?= esc($cert['issuer']) ?></td>
                            <td><?= esc($cert['year']) ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('admin/certificate/delete/' . $cert['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus sertifikat ini?')"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>