<main class="content-wrapper">
    <div class="container-fluid mt-4">
        <h2>Riwayat Pendidikan (Anatomi Akademis)</h2>

        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <!-- Tombol Trigger Modal Form Tambah Data -->
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addEduModal">
            Tambah Riwayat Pendidikan
        </button>

        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Institusi / Kampus</th>
                    <th>Gelar & Jurusan</th>
                    <th>Tahun</th>
                    <th>IPK / GPA</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($education as $e) : ?>
                    <tr>
                        <td><strong><?= esc($e['institution']) ?></strong></td>
                        <td><?= esc($e['degree']) ?> - <?= esc($e['major']) ?></td>
                        <td><?= esc($e['start_year']) ?> - <?= esc($e['end_year']) ?></td>
                        <td><span class="badge bg-success"><?= esc($e['gpa']) ?></span></td>
                        <td>
                            <a href="<?= base_url('admin/education/delete/' . $e['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data pendidikan ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- MODAL POP-UP UNTUK INPUT DATA PENDIDIKAN BARU -->
    <div class="modal fade" id="addEduModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url('admin/education/store') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Riwayat Pendidikan</h5>
                        <button type="button" class="btn-close" data-bs-shadow="none" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Universitas / Sekolah</label>
                            <input type="text" name="institution" class="form-control" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Gelar (Contoh: S1)</label>
                                <input type="text" name="degree" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Jurusan</label>
                                <input type="text" name="major" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Tahun Masuk</label>
                                <input type="number" name="start_year" class="form-control" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Tahun Lulus</label>
                                <input type="text" name="end_year" class="form-control" placeholder="Contoh: Sekarang atau 2027" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">IPK (GPA)</label>
                                <input type="text" name="gpa" class="form-control" placeholder="3.85">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pencapaian / Catatan (Tugas Akhir/Skripsi)</label>
                            <textarea name="description" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>