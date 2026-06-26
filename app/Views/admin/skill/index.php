<main class="content-wrapper">
    <div class="container-fluid mt-4">
        <h2>Manajemen Keahlian & Tech Stack</h2>

        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <div class="row mt-4">
            <!-- Sisi Kiri: Form Input Skill Baru -->
            <div class="col-md-4">
                <div class="card p-3 shadow-sm">
                    <h5>Tambah Skill</h5>
                    <form action="<?= base_url('admin/skill/store') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label for="skill_name" class="form-label">Nama Skill / Tools</label>
                            <input type="text" class="form-control" id="skill_name" name="skill_name" placeholder="Contoh: Java, Git, Figma" required>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Kategori</label>
                            <select class="form-select" id="category" name="category" required>
                                <option value="Language">Programming Language</option>
                                <option value="Framework">Framework</option>
                                <option value="Database">Database</option>
                                <option value="Tools">Tools / Others</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Tambah</button>
                    </form>
                </div>
            </div>

            <!-- Sisi Kanan: Tabel List Skill yang Ada di DB -->
            <div class="col-md-8">
                <div class="card p-3 shadow-sm">
                    <h5>Daftar Keahlian Aktif</h5>
                    <table class="table table-bordered table-striped mt-2">
                        <thead>
                            <tr>
                                <th>Nama Skill</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($skills as $s) : ?>
                                <tr>
                                    <td><?= esc($s['skill_name']) ?></td>
                                    <td><span class="badge bg-info text-dark"><?= esc($s['category']) ?></span></td>
                                    <td>
                                        <a href="<?= base_url('admin/skill/delete/' . $s['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus skill ini?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>