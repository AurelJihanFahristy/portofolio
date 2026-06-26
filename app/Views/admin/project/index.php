<main class="content-wrapper">
    <div class="container-fluid">
        <h2>Daftar Proyek Portofolio</h2>
        <a href="<?= base_url('admin/project/new') ?>" class="btn btn-primary mb-3">Tambah Proyek</a>

        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul Proyek</th>
                    <th>Tech Stack</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($projects as $p) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><img src="<?= base_url('uploads/' . $p['image']) ?>" width="80"></td>
                        <td><?= esc($p['title']) ?></td>
                        <td><?= esc($p['tech_stack']) ?></td>
                        <td>
                            <a href="<?= base_url('admin/project/' . $p['id'] . '/edit') ?>" class="btn btn-warning btn-sm">Edit</a>
                            <form action="<?= base_url('admin/project/' . $p['id']) ?>" method="post" class="d-inline">
                                <?= csrf_field() ?> <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>