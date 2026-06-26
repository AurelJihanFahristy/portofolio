<main class="content-wrapper">
    <div class="container-fluid">
        <!-- Banner Selamat Datang -->
        <div class="p-4 mb-4 bg-white rounded-3 shadow-sm border-start border-primary border-4">
            <h1 class="display-6 fw-bold text-dark">Selamat Datang di Content Management System (CMS)</h1>
            <p class="col-md-8 fs-6 text-muted">Melalui halaman ini, kamu bisa memperbarui seluruh isi data website portofoliomu secara dinamis tanpa perlu menyentuh kodingan HTML lagi.</p>
        </div>

        <!-- Kartu Statistik (Visual Angka Ringkasan Data) -->
        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <div class="card p-3 shadow-sm bg-primary text-white border-0 h-100">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 opacity-75">Total Proyek Portofolio</h6>
                        <h2 class="card-title fw-bold mb-0"><?= count($projects) ?> Proyek</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 shadow-sm bg-success text-white border-0 h-100">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 opacity-75">Keahlian / Tech Stack</h6>
                        <h2 class="card-title fw-bold mb-0"><?= count($skills) ?> Skill</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 shadow-sm bg-warning text-dark border-0 h-100">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 opacity-75">Riwayat Pendidikan</h6>
                        <h2 class="card-title fw-bold mb-0"><?= count($education) ?> Instansi</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tips Singkat untuk Portofolio Teknik Informatika -->
        <div class="card shadow-sm border-0 mt-4">
            <div class="card-header bg-transparent fw-bold text-dark">💡 Tips Optimasi untuk Melamar Kerja</div>
            <div class="card-body text-muted small">
                <ul>
                    <li class="mb-2">Pastikan setiap kali menambah proyek baru di menu <strong>Manajemen Proyek</strong>, sertakan tautan repositori GitHub kamu agar HRD/User Teknis bisa memeriksa kualitas kodemu langsung.</li>
                    <li>Gunakan menu <strong>Manajemen Skill</strong> untuk mengelompokkan keahlianmu berdasarkan kategori seperti Bahasa Pemrograman atau Framework yang dikuasai.</li>
                </ul>
            </div>
        </div>
    </div>
</main>