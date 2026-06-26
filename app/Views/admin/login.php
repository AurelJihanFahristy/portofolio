<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        /* ---------- GLOBAL ---------- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #e0f2fe 0%, #fae8ff 50%, #fce4ec 100%);
            font-family: 'Segoe UI', Roboto, system-ui, sans-serif;
            padding: 1.5rem;
        }

        /* ---------- KARTU UTAMA DUA KOLOM ---------- */
        .login-wrapper {
            max-width: 1100px;
            width: 100%;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 40px;
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.06), 0 10px 30px rgba(0, 0, 0, 0.02);
            overflow: hidden;
            display: grid;
            grid-template-columns: 1fr 1fr;
            border: 1px solid rgba(255, 255, 255, 0.6);
            transition: all 0.3s ease;
        }

        /* ---------- KOLOM KIRI (FORM) ---------- */
        .login-form {
            padding: 3rem 2.5rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
        }

        .login-form .brand-icon {
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.2rem;
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.25);
        }

        .login-form .brand-icon i {
            font-size: 2rem;
            color: #fff;
        }

        .login-form h3 {
            font-weight: 800;
            font-size: 1.8rem;
            color: #0f172a;
            margin-bottom: 0.3rem;
            letter-spacing: -0.5px;
        }

        .login-form p.sub {
            color: #64748b;
            font-size: 0.95rem;
            margin-bottom: 2rem;
        }

        /* ---------- INPUT ---------- */
        .form-label {
            font-weight: 600;
            font-size: 0.85rem;
            color: #334155;
            margin-bottom: 6px;
        }

        .form-control {
            background: #ffffff !important;
            border: 1px solid #e2e8f0 !important;
            border-radius: 16px !important;
            padding: 12px 18px !important;
            font-size: 0.95rem;
            color: #0f172a !important;
            transition: all 0.25s ease;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.01);
        }

        .form-control:focus {
            border-color: #2563eb !important;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.12) !important;
            outline: none;
        }

        .form-control::placeholder {
            color: #94a3b8;
            font-size: 0.9rem;
        }

        /* ---------- TOMBOL ---------- */
        .btn-login {
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            border: none;
            border-radius: 16px;
            padding: 14px 20px;
            font-weight: 700;
            font-size: 1rem;
            color: #fff;
            width: 100%;
            transition: all 0.3s ease;
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 32px rgba(37, 99, 235, 0.4);
            opacity: 0.95;
        }

        .btn-login:active {
            transform: translateY(0);
        }

        /* ---------- ALERT ---------- */
        .custom-alert {
            background: rgba(239, 68, 68, 0.08);
            border: 1px solid rgba(239, 68, 68, 0.2);
            border-radius: 14px;
            color: #b91c1c;
            font-weight: 500;
            padding: 12px 16px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* ---------- KOLOM KANAN (ILUSTRASI / BRANDING) ---------- */
        .login-brand {
            background: linear-gradient(145deg, #2563eb, #7c3aed);
            padding: 3rem 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
            position: relative;
            overflow: hidden;
        }

        .login-brand::before {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 50%;
            top: -80px;
            right: -80px;
        }

        .login-brand::after {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            bottom: -60px;
            left: -60px;
        }

        .login-brand .brand-big-icon {
            font-size: 4.5rem;
            margin-bottom: 1.5rem;
            background: rgba(255, 255, 255, 0.15);
            width: 100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 30px;
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
        }

        .login-brand h4 {
            font-weight: 700;
            font-size: 1.6rem;
            margin-bottom: 0.5rem;
            letter-spacing: -0.3px;
        }

        .login-brand p {
            opacity: 0.85;
            font-weight: 300;
            max-width: 300px;
            line-height: 1.6;
            font-size: 0.95rem;
        }

        .login-brand .feature-list {
            list-style: none;
            padding: 0;
            margin-top: 1.5rem;
            text-align: left;
            width: 100%;
            max-width: 280px;
        }

        .login-brand .feature-list li {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            font-size: 0.9rem;
        }

        .login-brand .feature-list li i {
            color: #fff;
            font-size: 1rem;
            opacity: 0.8;
        }

        /* ---------- RESPONSIF ---------- */
        @media (max-width: 992px) {
            .login-wrapper {
                grid-template-columns: 1fr;
                max-width: 480px;
            }

            .login-brand {
                padding: 2rem 1.5rem;
                border-radius: 0 0 40px 40px;
            }

            .login-form {
                padding: 2rem 1.5rem;
                border-radius: 40px 40px 0 0;
            }

            .login-brand .brand-big-icon {
                width: 70px;
                height: 70px;
                font-size: 3rem;
            }

            .login-brand h4 {
                font-size: 1.3rem;
            }

            .login-brand .feature-list {
                max-width: 100%;
            }
        }

        @media (max-width: 576px) {
            body {
                padding: 1rem;
            }

            .login-form {
                padding: 1.5rem 1.2rem;
            }

            .login-brand {
                padding: 1.5rem 1.2rem;
            }

            .login-form h3 {
                font-size: 1.4rem;
            }
        }
    </style>
</head>

<body>

    <div class="login-wrapper">

        <!-- KOLOM KIRI: FORM LOGIN -->
        <div class="login-form">
            <div class="brand-icon">
                <i class="fa-solid fa-shield-halved"></i>
            </div>
            <h3>Selamat Datang</h3>
            <p class="sub">Masuk ke panel admin untuk mengelola portofolio Anda.</p>

            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="custom-alert mb-3">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <span><?= session()->getFlashdata('msg') ?></span>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('login/process') ?>" method="post">
                <?= csrf_field() ?>

                <div class="mb-3">
                    <label for="username" class="form-label">
                        <i class="fa-regular fa-user me-1"></i> Username
                    </label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required autocomplete="off">
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">
                        <i class="fa-solid fa-key me-1"></i> Password
                    </label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                </div>

                <button type="submit" class="btn-login">
                    <span>Masuk ke Dashboard</span>
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                </button>
            </form>
        </div>

        <!-- KOLOM KANAN: BRANDING / ILUSTRASI -->
        <div class="login-brand">
            <div class="brand-big-icon">
                <i class="fa-solid fa-laptop-code"></i>
            </div>
            <h4>Portofolio TI</h4>
            <p>Kelola keahlian, pendidikan, proyek, organisasi, dan sertifikat Anda dengan mudah.</p>

            <ul class="feature-list">
                <li><i class="fa-solid fa-check-circle"></i> Dashboard intuitif</li>
                <li><i class="fa-solid fa-check-circle"></i> Update konten real-time</li>
                <li><i class="fa-solid fa-check-circle"></i> Tampilan responsif</li>
                <li><i class="fa-solid fa-check-circle"></i> Aman & terenkripsi</li>
            </ul>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>