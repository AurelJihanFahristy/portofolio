<!DOCTYPE html>
<html lang="id" data-theme="default">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio Saya | Teknik Informatika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        /* ---------- ROOT VARIABLES (Dua Tema) ---------- */
        :root[data-theme="default"] {
            --bg-body: #e6f2ff;
            --bg-hero: linear-gradient(135deg, rgba(13, 110, 253, 0.25), rgba(0, 40, 80, 0.85)),
                url('https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=1920&auto=format&fit=crop');
            --bg-section-alt: #f0f8ff;
            --bg-section-white: #ffffff;
            --bg-section-dark: #e6f2ff;
            --bg-card: #ffffff;
            --border-card: rgba(0, 191, 255, 0.85);
            --text-main: #002244;
            --text-muted: #000265;
            --text-title: #001122;
            --hero-name-gradient: linear-gradient(to right, #ffffff, #cceaff);
            --accent-color: #0371bb;
            --accent-gradient: linear-gradient(135deg, #002e62, #002957);
            --bg-navbar-scroll: rgba(240, 248, 255, 0.95);
            --bg-footer: #001122;
            --border-footer: rgba(0, 191, 255, 0.3);
            --glass-bg: rgba(0, 40, 80, 0.45);
            --glass-border: rgba(135, 206, 235, 0.6);
            --glass-shadow: rgba(0, 100, 200, 0.2);
            --hero-shadow: rgba(0, 150, 255, 0.4);
            --text-hero-span: var(--accent-color);
            --profile-glow: rgba(0, 150, 255, 0.6);

            --accent-gradient: linear-gradient(135deg, #0066cc 0%, #00a3ff 100%);
            --arrow-bg-hover: #0066cc;
            --arrow-shadow: rgba(0, 102, 204, 0.35);
            --badge-border: #0066cc;
        }

        :root[data-theme="pink"] {
            --bg-body: #fff1f2;
            --bg-hero: linear-gradient(135deg, rgba(255, 0, 127, 0.4), rgb(45, 0, 16)),
                url('https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=1920&auto=format&fit=crop');
            --bg-section-alt: #fff5f7;
            --bg-section-white: #ffffff;
            --bg-section-dark: #ffebee;
            --bg-card: #ffffff;
            --border-card: rgba(130, 0, 63, 0.72);
            --text-main: #6f0120;
            --text-muted: #880e4f;
            --text-title: #002d03;
            --hero-name-gradient: linear-gradient(to right, #ffffff, #ffd6e8);
            --accent-color: rgb(167, 3, 69);
            --accent-gradient: linear-gradient(135deg, #ff007f, #ff1493);
            --bg-navbar-scroll: rgba(255, 241, 242, 0.95);
            --bg-footer: #2d0010;
            --border-footer: rgba(255, 0, 127, 0.3);
            --glass-bg: rgba(45, 0, 16, 0.65);
            --glass-border: rgba(255, 0, 127, 0.4);
            --glass-shadow: rgba(0, 0, 0, 0.5);
            --hero-shadow: rgba(45, 0, 16, 0.8);
            --text-hero-span: #57022c;
            --profile-glow: rgba(255, 0, 127, 0.6);

            --accent-gradient: linear-gradient(135deg, #db2777 0%, #f43f5e 100%);
            --arrow-bg-hover: #db2777;
            --arrow-shadow: rgba(219, 39, 119, 0.35);
            --badge-border: #db2777;
        }

        /* ---------- GLOBAL ---------- */
        * {
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
        }

        body {
            background-color: var(--bg-body);
            color: var(--text-main);
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            line-height: 1.6;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: var(--text-title) !important;
        }

        .text-muted,
        .text-secondary {
            color: var(--text-muted) !important;
        }

        i {
            color: var(--accent-color) !important;
        }

        .section-title {
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 40px;
            font-weight: 700;
        }

        .section-title::after {
            content: '';
            position: absolute;
            display: block;
            width: 60px;
            height: 4px;
            background: var(--accent-gradient);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        /* ---------- NAVBAR ---------- */
        .custom-navbar {
            background: transparent !important;
            padding: 20px 0;
            transition: all 0.4s ease;
        }

        .custom-navbar .navbar-brand,
        .custom-navbar .nav-link,
        .custom-navbar #theme-text {
            color: #ffffff4d !important;
        }

        .custom-navbar .nav-link {
            font-weight: 500;
            font-size: 0.8rem !important;
            letter-spacing: 1.5px !important;
            text-transform: uppercase !important;
            padding: 6px 16px !important;
            position: relative;
        }

        .custom-navbar .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background-color: var(--accent-color);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .custom-navbar .nav-link:hover::after {
            width: 30px;
        }

        .navbar-scrolled {
            background: var(--bg-navbar-scroll) !important;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            padding: 12px 0;
            border-bottom: 1px solid var(--border-card);
        }

        .navbar-scrolled .navbar-brand,
        .navbar-scrolled #theme-text {
            color: var(--text-title) !important;
        }

        .navbar-scrolled .nav-link {
            color: var(--text-muted) !important;
        }

        .navbar-scrolled .nav-link:hover {
            color: var(--accent-color) !important;
        }

        /* ---------- HERO BARU (DIPERBARUI) ---------- */
        #home {
            padding: 140px 0 120px !important;
            min-height: 100vh;
            background: var(--bg-hero) !important;
            background-size: cover !important;
            background-attachment: fixed !important;
            background-position: center !important;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        /* Efek gradasi overlay tambahan agar teks makin terbaca */
        #home::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.2);
            z-index: 0;
        }

        #home .container {
            position: relative;
            z-index: 1;
        }

        /* Teks Nama dengan Gradien */
        .hero-name-gradient {
            background: var(--hero-name-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: none;
        }

        /* Badge "Tersedia" */
        .hero-badge {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #fff !important;
            padding: 0.4rem 1.2rem;
            border-radius: 50px;
            font-weight: 500;
            font-size: 0.85rem;
            display: inline-block;
        }

        /* Efek Teks Berubah (Typing) */
        #hero-role {
            color: #fff !important;
            font-weight: 300;
            min-height: 3rem;
            transition: opacity 0.3s ease;
            border-right: 2px solid var(--accent-color);
            padding-right: 8px;
            display: inline-block;
        }

        /* Deskripsi Hero */
        .hero-description {
            color: rgba(255, 255, 255, 0.85) !important;
            font-size: 1.1rem;
            max-width: 500px;
            line-height: 1.8;
        }

        /* Tombol Hero */
        .btn-hero-primary {
            background: var(--accent-gradient);
            border: none;
            color: #fff !important;
            padding: 0.7rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            box-shadow: 0 8px 25px var(--glass-shadow);
            transition: all 0.3s ease;
        }

        .btn-hero-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px var(--profile-glow);
            opacity: 0.95;
            color: #fff !important;
        }

        .btn-hero-outline {
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.5);
            color: #fff !important;
            padding: 0.7rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-hero-outline:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: #fff;
            color: #fff !important;
            transform: translateY(-3px);
        }

        /* Ikon Sosial Hero */
        .hero-social-link {
            width: 42px;
            height: 42px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
            color: #fff !important;
        }

        .hero-social-link i {
            color: #fff !important;
            font-size: 1.1rem;
        }

        .hero-social-link:hover {
            background: var(--accent-color);
            border-color: var(--accent-color);
            transform: translateY(-5px);
            box-shadow: 0 8px 25px var(--profile-glow);
        }

        /* ---------- PROFIL GAMBAR DENGAN CINCIN GLOW ---------- */
        .profile-image-wrapper {
            position: relative;
            display: inline-block;
            padding: 8px;
        }

        .profile-image-wrapper::before {
            content: '';
            position: absolute;
            inset: -8px;
            border-radius: 50%;
            background: var(--accent-gradient);
            opacity: 0.7;
            filter: blur(12px);
            animation: pulseGlow 3s ease-in-out infinite;
            z-index: 0;
        }

        @keyframes pulseGlow {

            0%,
            100% {
                transform: scale(1);
                opacity: 0.6;
            }

            50% {
                transform: scale(1.05);
                opacity: 1;
            }
        }

        .profile-image-wrapper img {
            position: relative;
            z-index: 1;
            width: 320px;
            height: 320px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid var(--glass-border);
            box-shadow: 0 20px 60px var(--glass-shadow);
            background: var(--bg-card);
        }

        /* Ikon Teknologi Melayang */
        .floating-icon {
            position: absolute;
            z-index: 2;
            font-size: 1.6rem;
            color: #fff !important;
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(6px);
            padding: 10px;
            border-radius: 14px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            animation: floatIcon 5s ease-in-out infinite;
        }

        .floating-icon i {
            color: #fff !important;
        }

        .floating-icon:nth-child(2) {
            top: 10%;
            right: -15px;
            animation-delay: 0s;
        }

        .floating-icon:nth-child(3) {
            bottom: 20%;
            right: -25px;
            animation-delay: 1.5s;
        }

        .floating-icon:nth-child(4) {
            top: 30%;
            left: -25px;
            animation-delay: 3s;
        }

        .floating-icon:nth-child(5) {
            bottom: 10%;
            left: -15px;
            animation-delay: 4.5s;
        }

        @keyframes floatIcon {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-18px) rotate(5deg);
            }
        }

        /* Responsive Profile */
        @media (max-width: 992px) {
            .profile-image-wrapper img {
                width: 240px;
                height: 240px;
            }

            .floating-icon {
                font-size: 1.2rem;
                padding: 8px;
            }
        }

        @media (max-width: 576px) {
            .profile-image-wrapper img {
                width: 200px;
                height: 200px;
            }

            #home {
                padding: 120px 0 80px !important;
            }

            .hero-description {
                font-size: 1rem;
            }

            .floating-icon {
                display: none;
            }
        }

        /* ---------- KARTU & ELEMEN LAIN (TETAP) ---------- */
        .card,
        .card-custom,
        .skill-card-premium,
        .education-card-premium {
            background-color: var(--bg-card) !important;
            border: 1px solid var(--border-card) !important;
            border-radius: 16px !important;
            transition: all 0.3s ease;
        }

        .card:hover,
        .card-custom:hover,
        .skill-card-premium:hover,
        .education-card-premium:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px var(--border-card) !important;
            border-color: var(--accent-color) !important;
        }

        .card-custom:hover h6,
        .card-custom:hover p,
        .card-custom:hover i {
            color: #ffffff !important;
        }

        .skill-card-premium .card-body {
            padding: 1.5rem 0.75rem;
        }

        .skill-icon-wrapper {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--accent-gradient);
            border-radius: 50%;
            color: #fff;
            font-size: 1.6rem;
            margin: 0 auto 0.75rem;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .skill-badge-custom {
            background: rgba(0, 0, 0, 0.05);
            color: var(--text-muted);
            font-weight: 500;
            font-size: 0.7rem;
            padding: 0.3rem 0.8rem;
            border-radius: 30px;
            border: 1px solid var(--border-card);
        }

        .education-card-premium {
            padding: 1.25rem 1.5rem;
        }

        .edu-icon-box {
            width: 48px;
            height: 48px;
            background: var(--accent-gradient);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.3rem;
        }

        .edu-badge-year {
            background: rgba(0, 0, 0, 0.04);
            color: var(--text-muted);
            font-weight: 500;
            padding: 0.3rem 0.9rem;
            border-radius: 30px;
            border: 1px solid var(--border-card);
        }

        .carousel-control-custom {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            color: var(--text-title);
            border: none;
            opacity: 0.9;
            transition: all 0.3s ease;
        }

        .carousel-control-custom:hover {
            background: var(--accent-color);
            color: #fff;
            opacity: 1;
        }

        .carousel-control-custom i {
            font-size: 1.2rem;
            color: inherit !important;
        }

        .prev-pos {
            left: -20px;
        }

        .next-pos {
            right: -20px;
        }

        @media (max-width: 768px) {
            .prev-pos {
                left: -10px;
            }

            .next-pos {
                right: -10px;
            }

            .carousel-control-custom {
                width: 32px;
                height: 32px;
            }
        }

        /* ---------- FOOTER ---------- */
        footer {
            background: var(--bg-footer) !important;
            border-top: 3px solid var(--accent-color);
        }

        footer h5 {
            color: #fff !important;
        }

        footer hr {
            border-color: rgba(255, 255, 255, 0.08);
        }

        footer p,
        footer span,
        footer a {
            color: rgba(255, 255, 255, 0.7) !important;
            text-decoration: none;
        }

        footer a:hover {
            color: var(--accent-color) !important;
        }

        .bg-section-alt {
            background-color: var(--bg-section-alt) !important;
        }

        .bg-section-white {
            background-color: var(--bg-section-white) !important;
        }

        .bg-section-dark {
            background-color: var(--bg-section-dark) !important;
        }

        .border-dashed {
            border: 2px dashed var(--border-card);
        }

        .theme-switch-wrapper {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .theme-switch {
            display: inline-block;
            height: 26px;
            position: relative;
            width: 50px;
        }

        .theme-switch input {
            display: none;
        }

        .slider-toggle {
            background-color: #475569;
            bottom: 0;
            cursor: pointer;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            transition: .4s;
            border-radius: 34px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .slider-toggle:before {
            background-color: #fff;
            bottom: 3px;
            content: "";
            height: 18px;
            left: 4px;
            position: absolute;
            transition: .4s;
            width: 18px;
            border-radius: 50%;
        }

        input:checked+.slider-toggle {
            background-color: var(--accent-color);
        }

        input:checked+.slider-toggle:before {
            transform: translateX(24px);
        }

        #theme-text {
            font-size: 0.75rem;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            font-weight: 600;
        }

        .btn-admin-custom {
            background: var(--accent-gradient) !important;
            border: none !important;
            color: #fff !important;
            font-weight: 600;
            border-radius: 50px;
            padding: 6px 18px !important;
            box-shadow: 0 4px 15px var(--border-card);
            transition: all 0.3s ease !important;
            font-size: 0.8rem;
        }

        .btn-admin-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px var(--glass-border);
            opacity: 0.9;
        }

        /* Mengatur Tombol Arrow Kanan-Kiri Premium (Blur Glass Efek) */
        .luxury-arrow-btn {
            width: 50px;
            height: 50px;
            background: rgba(15, 23, 42, 0.8) !important;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.8;
            transition: all 0.3s ease;
            z-index: 10;
        }

        .luxury-arrow-btn i {
            font-size: 1.2rem;
            color: #fff;
        }

        .luxury-arrow-btn:hover {
            background: var(--accent-color) !important;
            opacity: 1;
            box-shadow: 0 0 20px rgba(0, 150, 255, 0.4);
        }

        /* Efek Melayang Card */
        .project-card-luxury:hover {
            transform: translateY(-5px) scale(1.01);
            background: rgba(255, 255, 255, 0.9) !important;
            border-color: var(--accent-color) !important;
            box-shadow: 0 20px 40px rgba(0, 150, 255, 0.1) !important;
        }

        .project-card-luxury:hover .project-img-cover {
            transform: scale(1.08);
        }

        .btn-luxury-action:hover {
            background: var(--accent-color) !important;
            box-shadow: 0 4px 12px rgba(0, 150, 255, 0.3);
            transform: translateX(2px);
        }

        /* Responsif Smartphone */
        @media (max-width: 767.98px) {
            .luxury-arrow-btn {
                width: 40px;
                height: 40px;
            }

            #projects {
                min-height: auto !important;
                height: auto !important;
            }

            .project-card-luxury {
                flex-direction: column !important;
                max-height: none !important;
                min-height: auto !important;
            }

            .project-card-luxury>div {
                width: 100% !important;
            }
        }

        /* ==========================================================================
   PERBAIKAN MUTLAK: PANAH DI KANAN LUAR & KIRI LUAR KARTU (HP & TABLET)
   ========================================================================== */
        @media (max-width: 1199.98px) {

            /* 1. Longgarkan padding agar ada space kosong di kiri & kanan luar kartu */
            #projectCarouselLuxury,
            #orgCarousel {
                position: relative !important;
                overflow: visible !important;
                padding-left: 35px !important;
                /* Kasih ruang jempol di kiri luar */
                padding-right: 35px !important;
                /* Kasih ruang jempol di kanan luar */
                padding-bottom: 0px !important;
            }

            /* 2. Matikan overflow hidden bawaan bootstrap agar panah tidak hilang saat digeser keluar */
            #projects .carousel-inner,
            #organization .carousel-inner {
                overflow: visible !important;
            }

            /* 3. Kunci posisi vertikal di tengah kartu, tapi posisinya diujung layar */
            .premium-arrow-btn,
            .premium-org-arrow {
                position: absolute !important;
                top: 50% !important;
                transform: translateY(-50%) !important;
                bottom: auto !important;
                width: 35px !important;
                height: 60px !important;
                background: none !important;
                /* Tanpa background biar minimalis */
                border: none !important;
                box-shadow: none !important;
                opacity: 0.85 !important;
                z-index: 99 !important;
                display: flex !important;
                align-items: center !important;
            }

            /* 4. LEMPAR KE KIRI LUAR DAN KANAN LUAR SECARA PAS */
            .premium-arrow-btn.carousel-control-prev,
            .premium-org-arrow.carousel-control-prev {
                left: 0px !important;
                /* nempel di batas paling kiri luar container */
                right: auto !important;
                justify-content: flex-start !important;
            }

            .premium-arrow-btn.carousel-control-next,
            .premium-org-arrow.carousel-control-next {
                right: 0px !important;
                /* nempel di batas paling kanan luar container */
                left: auto !important;
                justify-content: flex-end !important;
            }

            /* 5. Desain panahnya murni tanpa bulatan hitam */
            .premium-arrow-btn i,
            .premium-org-arrow i {
                font-size: 1.6rem !important;
                /* Ukuran panah diperjelas */
                color: #ffffff !important;
                text-shadow: 0 2px 10px rgba(0, 0, 0, 0.9), 0 0 8px var(--arrow-shadow) !important;
            }
        }

        /* Penyesuaian mikro untuk HP layar super kecil agar tidak terlalu mepet border layar */
        @media (max-width: 575.98px) {

            #projectCarouselLuxury,
            #orgCarousel {
                padding-left: 25px !important;
                padding-right: 25px !important;
            }

            .premium-arrow-btn.carousel-control-prev,
            .premium-org-arrow.carousel-control-prev {
                left: -5px !important;
            }

            .premium-arrow-btn.carousel-control-next,
            .premium-org-arrow.carousel-control-next {
                right: -5px !important;
            }
        }
    </style>
</head>

<body>

    <!-- ========== NAVBAR ========== -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#home">
                <i class="fa-regular fa-circle-dot me-2 small opacity-75"></i><?= esc($profile['name'] ?? 'PORTFOLIO') ?>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto gap-1 text-center my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#home">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Keahlian</a></li>
                    <li class="nav-item"><a class="nav-link" href="#education">Pendidikan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Proyek</a></li>
                    <li class="nav-item"><a class="nav-link" href="#organization">Organisasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#certificates">Sertifikat</a></li>
                </ul>

                <div class="d-flex align-items-center justify-content-center gap-3 me-lg-4 mb-3 mb-lg-0">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox-theme">
                            <input type="checkbox" id="checkbox-theme" />
                            <div class="slider-toggle"></div>
                        </label>
                        <span id="theme-text">Pink Mode</span>
                    </div>
                </div>

                <div class="text-center">
                    <a class="btn btn-admin-custom btn-sm" href="<?= base_url('login') ?>" target="_blank">
                        Akses Admin <i class="fa-solid fa-arrow-up-right-from-square ms-1.5" style="font-size: 0.65rem;"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- ========== HERO DIPERBARUI ========== -->
    <section id="home" class="d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">

                <!-- Kolom Kiri: About Card -->
                <div class="col-lg-6 text-start mb-5 mb-lg-0">
                    <h4 class="fw-bold text-uppercase mb-2" style="font-size: 1.1rem; letter-spacing: 2px; color: rgba(255,255,255,0.8);">
                        Welcome to My Space
                    </h4>
                    <h1 class="display-4 fw-black mb-4">
                        Halo, Saya <br>
                        <span class="hero-name-gradient fw-extrabold">
                            <?= esc($profile['name'] ?? 'AUREL JIHAN') ?>
                        </span>
                    </h1>

                    <!-- Kartu About (seperti semula) -->
                    <div class="about-card-mockup p-4 rounded-4 shadow">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="profile-mini-wrapper rounded-circle p-1" style="background: var(--accent-gradient); width: 65px; height: 65px; overflow:hidden;">
                                <img src="<?= base_url('uploads/' . ($profile['photo'] ?? '')) ?>" class="img-fluid rounded-circle w-100 h-100" style="object-fit: cover;" alt="Profile Mini">
                            </div>
                            <div>
                                <h5 class="m-0 fw-bold text-white">About Me</h5>
                                <span class="badge badge-cyber">
                                    <?= esc($profile['title'] ?? 'Programmer / Creator') ?>
                                </span>
                            </div>
                        </div>

                        <p class="small mb-4" style="color: rgba(255,255,255,0.85) !important;">
                            <?= esc($profile['bio'] ?? 'Informatics student passionate about building cyber-vibrant layouts...') ?>
                        </p>

                        <div class="d-flex gap-2">
                            <a href="https://instagram.com/username-kamu" target="_blank" class="social-icon-box">
                                <i class="fab fa-instagram"></i>
                            </a>

                            <a href="https://github.com/AurelJihanFahristy" target="_blank" class="social-icon-box">
                                <i class="fab fa-github"></i>
                            </a>

                            <a href="https://linkedin.com/in/aurel-jihan/" target="_blank" class="social-icon-box">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan: Gambar -->
                <div class="col-lg-6 text-center text-lg-end d-none d-md-block">
                    <div class="anime-illustration-container">
                        <img src="<?= base_url('uploads/' . ($profile['photo'] ?? '')) ?>" class="img-fluid anime-hero-img" alt="Hero Image">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========== SKILLS ========== -->
    <section id="skills" class="py-5 bg-section-alt">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-extrabold section-title">Keahlian &amp; <span style="color: var(--accent-color);">Tech Stack</span></h2>
            </div>

            <div class="row g-4 justify-content-center">
                <?php if (empty($skills)): ?>
                    <div class="col-12 text-center text-muted py-4">
                        <i class="fa-regular fa-square-minus fa-2x mb-2 opacity-50"></i>
                        <p class="small">Belum ada data keahlian. Isi melalui panel admin.</p>
                    </div>
                <?php else: ?>
                    <?php foreach ($skills as $s) : ?>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card skill-card-premium text-center h-100">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div class="skill-icon-wrapper mb-3">
                                        <i class="fa-solid fa-cubes"></i>
                                    </div>
                                    <h5 class="card-title fw-bold mb-2" style="font-size: 1.05rem;">
                                        <?= esc($s['skill_name']) ?>
                                    </h5>
                                    <span class="skill-badge-custom mt-auto">
                                        <i class="fa-solid fa-tag me-1" style="font-size: 0.6rem;"></i><?= esc($s['category']) ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section id="education" class="py-5" style="background-color: var(--bg-section-white); background-image: radial-gradient(var(--border-card) 1px, transparent 1px); background-size: 30px 30px; position: relative; overflow: hidden;">

        <div style="position: absolute; width: 400px; height: 400px; background: var(--accent-color); filter: blur(120px); border-radius: 50%; z-index: 0; pointer-events: none; top: -100px; right: -100px; opacity: 0.15;"></div>
        <div style="position: absolute; width: 300px; height: 300px; background: var(--accent-color); filter: blur(100px); border-radius: 50%; z-index: 0; pointer-events: none; bottom: -50px; left: -100px; opacity: 0.15;"></div>

        <div class="container" style="max-width: 900px; position: relative; z-index: 1;">
            <div class="text-center mb-5">
                <h2 class="fw-extrabold section-title">Riwayat <span style="color: var(--accent-color);">Pendidikan</span></h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-11" style="position: relative;">

                    <div class="d-none d-sm-block" style="position: absolute; left: 43px; top: 30px; bottom: 30px; width: 3px; background: linear-gradient(to bottom, transparent, var(--accent-color), transparent); opacity: 0.3; border-radius: 10px;"></div>

                    <?php if (empty($education)): ?>
                        <div class="text-muted text-center py-5 rounded-4" style="background: rgba(0,0,0,0.02); border: 2px dashed var(--border-card);">
                            <i class="fa-solid fa-graduation-cap fa-3x mb-3" style="color: var(--accent-color); opacity: 0.5;"></i>
                            <p class="m-0 fw-medium">Belum ada data pendidikan. Isi melalui panel admin.</p>
                        </div>
                    <?php else: ?>
                        <?php foreach ($education as $e) : ?>
                            <div class="mb-4" style="position: relative;">

                                <div class="card education-card-premium" style="background: var(--bg-card); border: 1px solid var(--border-card); border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); transition: all 0.3s ease; overflow: hidden;">

                                    <div style="position: absolute; left: 0; top: 0; bottom: 0; width: 5px; background: var(--accent-color);"></div>

                                    <div class="card-body p-4">
                                        <div class="d-flex align-items-start gap-4 flex-column flex-sm-row">

                                            <div class="edu-icon-box flex-shrink-0 d-none d-sm-flex align-items-center justify-content-center shadow-sm" style="width: 65px; height: 65px; background: linear-gradient(135deg, var(--accent-color), #002244); border-radius: 16px; color: white; font-size: 1.8rem; z-index: 2; border: 3px solid var(--bg-card);">
                                                <i class="fa-solid fa-graduation-cap"></i>
                                            </div>

                                            <div class="flex-grow-1 w-100">
                                                <div class="d-flex justify-content-between align-items-start flex-wrap gap-2 mb-2">
                                                    <div>
                                                        <h4 class="fw-bold m-0" style="font-size: 1.3rem; color: var(--text-title);">
                                                            <?= esc($e['institution']) ?>
                                                        </h4>
                                                        <p class="m-0 mt-1" style="font-size: 0.95rem; color: var(--text-muted);">
                                                            <span class="fw-bold" style="color: var(--accent-color);"><?= esc($e['degree']) ?></span> &bull; <span class="fw-medium"><?= esc($e['major']) ?></span>
                                                        </p>
                                                    </div>

                                                    <span class="edu-badge-year flex-shrink-0 px-3 py-1.5 fw-bold shadow-sm" style="background: var(--bg-body); color: var(--accent-color); border: 1px solid var(--border-card); border-radius: 50px; font-size: 0.85rem;">
                                                        <i class="fa-regular fa-calendar-days me-1"></i> <?= esc($e['start_year']) ?> - <?= esc($e['end_year']) ?>
                                                    </span>
                                                </div>

                                                <?php if (!empty($e['gpa'])): ?>
                                                    <div class="mb-3 mt-2">
                                                        <span class="badge px-3 py-2 fw-bold" style="background-color: rgba(0, 150, 255, 0.08); color: var(--accent-color); border: 1px solid var(--border-card); border-radius: 8px; font-size: 0.8rem;">
                                                            <i class="fa-solid fa-star text-warning me-1"></i> IPK / GPA: <?= esc($e['gpa']) ?>
                                                        </span>
                                                    </div>
                                                <?php endif; ?>

                                                <?php if (!empty($e['description'])): ?>
                                                    <p class="m-0 pt-3 mt-2" style="font-size: 0.9rem; line-height: 1.7; color: var(--text-main); border-top: 1px dashed var(--border-card);">
                                                        <?= nl2br(esc($e['description'])) ?>
                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <style>
            .education-card-premium:hover {
                transform: translateY(-6px);
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08) !important;
                border-color: var(--accent-color) !important;
            }
        </style>
    </section>

    <!-- ========== PROJECTS ========== -->
    <section id="projects" class="py-5" style="min-height: 100vh; display: flex; align-items: center; background: var(--bg-hero); background-size: cover; background-position: center; background-attachment: fixed; position: relative; overflow: hidden;">

        <div style="position: absolute; inset: 0; background: rgba(15, 23, 42, 0.25); pointer-events: none; z-index: 0;"></div>

        <div style="position: absolute; width: 700px; height: 700px; background: radial-gradient(circle, rgba(0, 153, 255, 0.2) 0%, transparent 70%); top: -250px; right: -100px; pointer-events: none; z-index: 0; filter: blur(40px);"></div>
        <div style="position: absolute; width: 600px; height: 600px; background: radial-gradient(circle, rgba(219, 39, 119, 0.1) 0%, transparent 70%); bottom: -200px; left: -100px; pointer-events: none; z-index: 0; filter: blur(40px);"></div>

        <div class="container position-relative" style="max-width: 1260px; z-index: 1;">

            <div class="text-center mb-5">
                <h2 class="fw-extrabold section-title mb-2" style="font-size: 2.5rem; letter-spacing: -1.2px; font-weight: 800; color: #ffffff; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">
                    Featured <span style="background: var(--accent-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Projects</span>
                </h2>
                <div style="width: 50px; height: 4px; background: var(--accent-gradient); margin: 0 auto 12px; border-radius: 10px;"></div>
                <p class="text-light small m-0" style="font-size: 0.88rem; letter-spacing: 0.5px; text-transform: uppercase; opacity: 0.8;">Showcase hasil karya dan sistem terbaik saya</p>
            </div>

            <?php if (empty($projects)): ?>
                <div class="row">
                    <div class="col-12 text-center text-light py-5">
                        <i class="fa-regular fa-folder-open fa-3x mb-3" style="color: #fff; opacity: 0.6;"></i>
                        <p class="fs-5">Belum ada proyek yang dipajang.</p>
                    </div>
                </div>
            <?php else: ?>
                <div id="projectCarouselLuxury" class="carousel slide px-lg-5" data-bs-ride="false" data-bs-interval="false">
                    <div class="carousel-inner">
                        <?php
                        $chunks = array_chunk($projects, 3);
                        foreach ($chunks as $index => $chunk) :
                        ?>
                            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                <div class="row g-4 row-cols-1 row-cols-md-3 justify-content-center">
                                    <?php foreach ($chunk as $p) : ?>
                                        <div class="col d-flex">

                                            <div class="card project-card-premium w-100 d-flex flex-column" style="border-radius: 24px; border: 1px solid rgba(255, 255, 255, 0.45); background: rgba(255, 255, 255, 0.75); backdrop-filter: blur(25px); -webkit-backdrop-filter: blur(25px); overflow: hidden; box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15); transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);">

                                                <div class="position-relative overflow-hidden" style="width: 100%; aspect-ratio: 3 / 2; background: #0f172a;">
                                                    <img src="<?= base_url('uploads/' . $p['image']) ?>" class="w-100 h-100 project-img-cover" alt="Screenshot <?= esc($p['title']) ?>" style="object-fit: cover; transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);">
                                                    <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, transparent 60%, rgba(15, 23, 42, 0.4) 100%); pointer-events: none;"></div>
                                                </div>

                                                <div class="card-body d-flex flex-column p-4 flex-grow-1">
                                                    <h5 class="card-title fw-bold mb-2" style="font-size: 1.2rem; line-height: 1.4; color: #0f172a; font-weight: 700; letter-spacing: -0.3px;">
                                                        <?= esc($p['title']) ?>
                                                    </h5>

                                                    <div class="card-text small text-muted flex-grow-1 mb-3" style="text-align: justify; line-height: 1.6; font-size: 0.85rem; color: #334155 !important; opacity: 0.9; min-height: 72px;">
                                                        <?= nl2br(esc($p['description'])) ?>
                                                    </div>

                                                    <div class="mt-auto pt-2">
                                                        <span class="badge rounded-pill bg-white text-dark px-3 py-2" style="font-size: 0.72rem; font-weight: 600; box-shadow: 0 4px 10px rgba(0,0,0,0.05); border-left: 3px solid var(--badge-border);">
                                                            <i class="fa-solid fa-code me-1" style="color: var(--badge-border);"></i> <?= esc($p['tech_stack']) ?>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="card-footer bg-transparent border-top-0 d-flex justify-content-between gap-2 pb-4 px-4">
                                                    <?php if (!empty($p['github_link'])): ?>
                                                        <a href="<?= esc($p['github_link']) ?>" target="_blank" class="btn btn-outline-dark btn-sm px-3 w-50 d-inline-flex align-items-center justify-content-center gap-1" style="border-radius: 12px; font-size: 0.82rem; font-weight: 600; border-color: #cbd5e1; color: #334155; background: #fff; transition: all 0.3s ease;"><i class="fa-brands fa-github"></i> Code</a>
                                                    <?php else: ?>
                                                        <button class="btn btn-outline-secondary btn-sm px-3 w-50 d-inline-flex align-items-center justify-content-center gap-1" style="border-radius: 12px; font-size: 0.82rem; border-color: #e2e8f0; opacity: 0.6;" disabled><i class="fa-brands fa-github"></i> Private</button>
                                                    <?php endif; ?>

                                                    <?php if (!empty($p['demo_link'])): ?>
                                                        <a href="<?= esc($p['demo_link']) ?>" target="_blank" class="btn btn-primary btn-sm px-3 w-50 d-inline-flex align-items-center justify-content-center gap-1 btn-premium-action" style="background: var(--accent-gradient); border: none; border-radius: 12px; font-size: 0.82rem; font-weight: 600; color: #fff; box-shadow: 0 4px 12px var(--arrow-shadow); transition: all 0.3s ease;"><i class="fa-solid fa-rocket"></i> Launch</a>
                                                    <?php endif; ?>
                                                </div>

                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <?php if (count($projects) > 3): ?>
                        <button class="carousel-control-prev premium-arrow-btn" type="button" data-bs-target="#projectCarouselLuxury" data-bs-slide="prev" style="left: -60px;">
                            <i class="fa-solid fa-arrow-left-long"></i>
                        </button>
                        <button class="carousel-control-next premium-arrow-btn" type="button" data-bs-target="#projectCarouselLuxury" data-bs-slide="next" style="right: -60px;">
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </button>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        <style>
            .premium-arrow-btn {
                width: 50px;
                height: 50px;
                background: #ffffff !important;
                border: 1px solid #e2e8f0;
                border-radius: 50%;
                top: 50%;
                transform: translateY(-50%);
                opacity: 1;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
                box-shadow: 0 4px 14px rgba(0, 0, 0, 0.06);
                z-index: 10;
            }

            .premium-arrow-btn i {
                font-size: 1.1rem;
                color: #334155;
                transition: transform 0.3s ease;
            }

            .premium-arrow-btn:hover {
                background: var(--arrow-bg-hover) !important;
                border-color: var(--arrow-bg-hover);
                box-shadow: 0 8px 22px var(--arrow-shadow);
            }

            .premium-arrow-btn:hover i {
                color: #fff;
            }

            .premium-arrow-btn.carousel-control-prev:hover i {
                transform: translateX(-3px);
            }

            .premium-arrow-btn.carousel-control-next:hover i {
                transform: translateX(3px);
            }

            /* Animasi Hover Card - Dibuat Lebih Solid saat Di-hover */
            .project-card-premium:hover {
                transform: translateY(-8px);
                background: rgba(255, 255, 255, 0.95) !important;
                border-color: var(--badge-border) !important;
                box-shadow: 0 40px 80px rgba(0, 0, 0, 0.25) !important;
            }

            .project-card-premium:hover .project-img-cover {
                transform: scale(1.05);
            }

            /* Efek Hover Tombol Utama */
            .btn-premium-action:hover {
                transform: translateY(-1px);
                box-shadow: 0 6px 20px var(--arrow-shadow) !important;
                opacity: 0.95;
            }

            /* Proteksi Responsif untuk Layar Tablet dan Handphone */
            @media (max-width: 1199.98px) {
                .premium-arrow-btn {
                    top: auto;
                    bottom: -70px;
                    transform: none;
                }

                .premium-arrow-btn.carousel-control-prev {
                    left: calc(50% - 60px) !important;
                }

                .premium-arrow-btn.carousel-control-next {
                    right: calc(50% - 60px) !important;
                }

                #projectCarouselLuxury {
                    padding-bottom: 80px;
                }
            }

            @media (max-width: 767.98px) {
                #projects {
                    min-height: auto !important;
                    height: auto !important;
                }

                .premium-arrow-btn {
                    width: 42px;
                    height: 42px;
                }
            }
        </style>
    </section>

    <!-- ========== ORGANIZATION ========== -->
    <section id="organization" class="py-5" style="background: var(--bg-section-dark); position: relative; overflow: hidden;">

        <div style="position: absolute; width: 500px; height: 500px; background: radial-gradient(circle, rgba(0, 153, 255, 0.06) 0%, transparent 70%); bottom: -150px; right: -50px; pointer-events: none; z-index: 0; filter: blur(40px);"></div>
        <div style="position: absolute; width: 400px; height: 400px; background: radial-gradient(circle, rgba(219, 39, 119, 0.04) 0%, transparent 70%); top: -100px; left: -50px; pointer-events: none; z-index: 0; filter: blur(30px);"></div>

        <div class="container position-relative" style="max-width: 1200px; z-index: 1;">

            <div class="text-center mb-5">
                <h2 class="fw-extrabold section-title mb-2" style="font-size: 2.5rem; letter-spacing: -1.2px; font-weight: 800; color: #1e293b;">
                    Organisasi & <span style="background: var(--accent-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Kepanitiaan</span>
                </h2>
                <div style="width: 50px; height: 4px; background: var(--accent-gradient); margin: 0 auto 12px; border-radius: 10px;"></div>
                <p class="text-muted small m-0" style="font-size: 0.85rem; letter-spacing: 0.5px; text-transform: uppercase;">Pengalaman kepemimpinan, kerja tim, dan manajerial</p>
            </div>

            <?php if (empty($organizations)): ?>
                <div class="row">
                    <div class="col-12 text-center text-muted py-5">
                        <i class="fa-solid fa-users-rectangle fa-3x mb-3" style="color: var(--badge-border); opacity: 0.5;"></i>
                        <p class="fs-5">Belum ada data organisasi yang ditambahkan.</p>
                    </div>
                </div>
            <?php else: ?>
                <div id="orgCarousel" class="carousel slide px-lg-5" data-bs-ride="false">
                    <div class="carousel-inner">
                        <?php
                        $chunks = array_chunk($organizations, 4);
                        foreach ($chunks as $index => $chunk) :
                        ?>
                            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                <div class="row g-4 row-cols-1 row-cols-md-2 justify-content-center">
                                    <?php foreach ($chunk as $org) : ?>
                                        <div class="col d-flex">

                                            <div class="card w-100 p-4 border-0 org-card-premium d-flex flex-column" style="border-radius: 24px; background: rgba(255, 255, 255, 0.55); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); box-shadow: 0 15px 35px rgba(15, 23, 42, 0.03); border-left: 5px solid var(--badge-border); transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);">
                                                <div class="card-body d-flex flex-column flex-sm-row align-items-start gap-4 p-0 w-100 h-100">

                                                    <div class="flex-shrink-0 mx-auto mx-sm-0">
                                                        <?php if (!empty($org['image'])): ?>
                                                            <div class="p-0.5 rounded-4" style="background: var(--accent-gradient); box-shadow: 0 8px 20px rgba(0,0,0,0.05);">
                                                                <img src="<?= base_url('uploads/' . $org['image']) ?>" alt="Logo <?= esc($org['organization_name']) ?>" class="rounded-4" width="76" height="76" style="object-fit: cover; display: block;">
                                                            </div>
                                                        <?php else: ?>
                                                            <div class="rounded-4 d-flex align-items-center justify-content-center border" style="width: 80px; height: 80px; background: rgba(255, 255, 255, 0.9); color: var(--badge-border); font-size: 1.7rem; box-shadow: 0 4px 12px rgba(0,0,0,0.02);">
                                                                <i class="fa-solid fa-users"></i>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>

                                                    <div class="flex-grow-1 min-w-0 d-flex flex-column w-100">

                                                        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start gap-2 mb-1.5">
                                                            <h5 class="fw-bold m-0 text-dark" style="font-size: 1.15rem; line-height: 1.4; letter-spacing: -0.3px;">
                                                                <?= esc($org['organization_name']) ?>
                                                            </h5>
                                                            <span class="badge rounded-pill flex-shrink-0 bg-white text-dark border px-3 py-1.5 shadow-sm" style="font-size: 0.7rem; font-weight: 600; border-left: 2px solid var(--badge-border) !important;">
                                                                <i class="fa-regular fa-calendar-check me-1" style="color: var(--badge-border);"></i> <?= esc($org['period']) ?>
                                                            </span>
                                                        </div>

                                                        <div class="fw-bold mb-3 d-flex align-items-center gap-1.5" style="font-size: 0.88rem; background: var(--accent-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                                                            <i class="fa-solid fa-id-badge" style="color: var(--badge-border); font-size: 0.85rem; -webkit-text-fill-color: initial;"></i>
                                                            <?= esc($org['role']) ?>
                                                        </div>

                                                        <div style="width: 100%; height: 1px; background: linear-gradient(to right, rgba(226, 232, 240, 0.8), transparent); margin-bottom: 12px;"></div>

                                                        <p class="m-0 text-muted small" style="line-height: 1.6; font-size: 0.84rem; text-align: justify; opacity: 0.85;">
                                                            <?= nl2br(esc($org['description'])) ?>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <?php if (count($chunks) > 1): ?>
                        <button class="carousel-control-prev premium-org-arrow" type="button" data-bs-target="#orgCarousel" data-bs-slide="prev" style="left: -60px;">
                            <i class="fa-solid fa-arrow-left-long"></i>
                        </button>
                        <button class="carousel-control-next premium-org-arrow" type="button" data-bs-target="#orgCarousel" data-bs-slide="next" style="right: -60px;">
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </button>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        <style>
            /* Navigasi Panah Samping Berjarak Elegan */
            .premium-org-arrow {
                width: 48px;
                height: 48px;
                background: #ffffff !important;
                border: 1px solid #e2e8f0;
                border-radius: 50%;
                top: 50%;
                transform: translateY(-50%);
                opacity: 1;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
                box-shadow: 0 4px 14px rgba(0, 0, 0, 0.05);
                z-index: 10;
            }

            .premium-org-arrow i {
                font-size: 1.05rem;
                color: #334155;
                transition: transform 0.3s ease;
            }

            .premium-org-arrow:hover {
                background: var(--arrow-bg-hover) !important;
                border-color: var(--arrow-bg-hover);
                box-shadow: 0 8px 22px var(--arrow-shadow);
            }

            .premium-org-arrow:hover i {
                color: #fff;
            }

            .premium-org-arrow.carousel-control-prev:hover i {
                transform: translateX(-3px);
            }

            .premium-org-arrow.carousel-control-next:hover i {
                transform: translateX(3px);
            }

            /* Efek Interaktif Hover Card Organisasi */
            .org-card-premium:hover {
                transform: translateY(-6px);
                background: #ffffff !important;
                border-color: rgba(226, 232, 240, 0.4) !important;
                box-shadow: 0 25px 50px rgba(15, 23, 42, 0.06), 0 4px 15px var(--arrow-shadow) !important;
            }

            /* Penanganan Responsif Layar Menengah & HP */
            @media (max-width: 1199.98px) {
                .premium-org-arrow {
                    top: auto;
                    bottom: -70px;
                    transform: none;
                }

                .premium-org-arrow.carousel-control-prev {
                    left: calc(50% - 60px) !important;
                }

                .premium-org-arrow.carousel-control-next {
                    right: calc(50% - 60px) !important;
                }

                #orgCarousel {
                    padding-bottom: 75px;
                }
            }

            @media (max-width: 575.98px) {
                .org-card-premium {
                    padding: 24px 20px !important;
                }
            }
        </style>
    </section>

    <!-- ========== CERTIFICATES ========== -->
    <!-- ========== CERTIFICATES (SUPER KEREN - VERSI TERANG) ========== -->
    <section id="certificates" class="py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #f0f9ff 0%, #e6f0fa 30%, #f5f3ff 70%, #fce7f3 100%); min-height: 600px; display: flex; align-items: center;">

        <!-- Elemen dekoratif: lingkaran blur warna cerah -->
        <div style="position: absolute; width: 600px; height: 600px; background: radial-gradient(circle, rgba(0, 180, 255, 0.12) 0%, transparent 70%); top: -200px; right: -100px; pointer-events: none; z-index: 0; filter: blur(60px);"></div>
        <div style="position: absolute; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255, 0, 150, 0.08) 0%, transparent 70%); bottom: -150px; left: -100px; pointer-events: none; z-index: 0; filter: blur(60px);"></div>
        <div style="position: absolute; width: 400px; height: 400px; background: radial-gradient(circle, rgba(255, 215, 0, 0.10) 0%, transparent 70%); top: 50%; left: 50%; transform: translate(-50%, -50%); pointer-events: none; z-index: 0; filter: blur(80px);"></div>

        <!-- Partikel kecil dekoratif (warna lembut) -->
        <div style="position: absolute; inset: 0; pointer-events: none; z-index: 0; overflow: hidden;">
            <div style="position: absolute; width: 8px; height: 8px; background: rgba(0, 150, 255, 0.15); border-radius: 50%; top: 10%; left: 20%; animation: floatParticle 12s infinite alternate;"></div>
            <div style="position: absolute; width: 12px; height: 12px; background: rgba(255, 100, 200, 0.12); border-radius: 50%; top: 30%; right: 15%; animation: floatParticle 15s infinite alternate-reverse;"></div>
            <div style="position: absolute; width: 6px; height: 6px; background: rgba(255, 200, 50, 0.15); border-radius: 50%; bottom: 25%; left: 10%; animation: floatParticle 10s infinite alternate;"></div>
            <div style="position: absolute; width: 10px; height: 10px; background: rgba(0, 255, 200, 0.10); border-radius: 50%; bottom: 15%; right: 25%; animation: floatParticle 14s infinite alternate-reverse;"></div>
        </div>

        <div class="container position-relative" style="max-width: 1100px; z-index: 1;">

            <!-- Judul dengan gaya modern -->
            <div class="text-center mb-5">
                <h2 class="fw-extrabold section-title" style="color: #1e293b;">
                    Sertifikasi &amp; <span style="background: linear-gradient(135deg, #2563eb, #ed3ae4); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Penghargaan</span>
                </h2>
                <p class="small" style="color: #64748b; letter-spacing: 2px; text-transform: uppercase;">Validasi kompetensi dan prestasi profesional</p>
                <div style="width: 60px; height: 3px; background: linear-gradient(90deg, #2563eb, #7c3aed); margin: 10px auto 0; border-radius: 10px;"></div>
            </div>

            <?php if (empty($certificates)): ?>
                <div class="row">
                    <div class="col-12 text-center py-5" style="background: rgba(255,255,255,0.7); backdrop-filter: blur(4px); border-radius: 30px; border: 1px solid rgba(255,255,255,0.8); box-shadow: 0 8px 32px rgba(0,0,0,0.04);">
                        <i class="fa-regular fa-file-lines fa-3x mb-3" style="color: #94a3b8;"></i>
                        <p class="fs-5" style="color: #64748b;">Belum ada sertifikat yang dicantumkan.</p>
                    </div>
                </div>
            <?php else: ?>
                <div class="row g-4 justify-content-center">
                    <?php foreach ($certificates as $cert) : ?>
                        <div class="col-md-4 col-lg-4">
                            <div class="card h-100 border-0 text-center p-4" style="background: rgba(255,255,255,0.65); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border-radius: 28px; border: 1px solid rgba(255,255,255,0.9); box-shadow: 0 20px 50px rgba(0,0,0,0.04); transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);">
                                <!-- Icon dengan gradien -->
                                <div class="mb-3 position-relative d-inline-block mx-auto">
                                    <div style="position: absolute; inset: -12px; background: radial-gradient(circle, rgba(37, 99, 235, 0.10), transparent 70%); border-radius: 50%; filter: blur(8px);"></div>
                                    <i class="fa-solid fa-award" style="font-size: 3.2rem; background: linear-gradient(135deg, #0066cc 0%, #00a3ff 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; position: relative;"></i>
                                </div>
                                <h6 class="fw-bold mb-1" style="color: #1e293b; font-size: 1.1rem;"><?= esc($cert['certificate_name']) ?></h6>
                                <p class="small mb-3" style="color: #64748b;"><?= esc($cert['issuer']) ?></p>
                                <?php if (!empty($cert['link'])): ?>
                                    <a href="<?= esc($cert['link']) ?>" target="_blank" class="btn btn-sm px-4 py-2 rounded-pill fw-bold" style="background: linear-gradient(135deg, #2563eb, #ed3ad8); border: none; color: #fff; box-shadow: 0 8px 24px rgba(37, 99, 235, 0.25); transition: all 0.3s ease;">
                                        <i class="fa-solid fa-arrow-up-right-from-square me-1"></i> Lihat Kredensial
                                    </a>
                                <?php else: ?>
                                    <span class="badge px-3 py-2" style="background: rgba(0,0,0,0.04); color: #475569; border: 1px solid rgba(0,0,0,0.06); border-radius: 30px;">Tahun <?= esc($cert['year']) ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <style>
            /* Animasi partikel melayang */
            @keyframes floatParticle {
                0% {
                    transform: translate(0, 0) scale(1);
                    opacity: 0.3;
                }

                100% {
                    transform: translate(40px, -30px) scale(1.5);
                    opacity: 0.8;
                }
            }

            /* Efek hover kartu */
            .card:hover {
                transform: translateY(-10px) scale(1.02);
                background: rgba(255, 255, 255, 0.85) !important;
                border-color: rgba(37, 99, 235, 0.2) !important;
                box-shadow: 0 30px 60px rgba(0, 0, 0, 0.06), 0 0 40px rgba(37, 99, 235, 0.04) !important;
            }

            /* Tombol hover */
            .btn:hover {
                transform: translateY(-3px);
                box-shadow: 0 12px 30px rgba(37, 99, 235, 0.35) !important;
                opacity: 0.95;
            }

            /* Section-title tetap dengan garis bawah gradien */
            .section-title::after {
                background: linear-gradient(135deg, #0066cc 0%, #00a3ff 100%);
            }
        </style>
    </section>

    <!-- ========== FOOTER ========== -->
    <footer id="footer" class="pt-5 pb-4">
        <div class="container" style="max-width: 1100px;">
            <div class="row g-4 justify-content-between">
                <div class="col-lg-5 col-md-6">
                    <h5 class="fw-bold text-white mb-3">
                        <i class="fa-solid fa-terminal me-2" style="color: var(--accent-color);"></i>TI Portfolio Engine
                    </h5>
                    <p class="small" style="line-height: 1.7; font-weight: 300; text-align: justify;">
                        Platform portofolio dinamis yang dirancang khusus untuk memamerkan tech stack, riwayat akademik, dan rekam jejak profesional secara real-time. Semua data di web ini diintegrasikan langsung dari sistem database terpusat secara aman dan responsif.
                    </p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="fw-bold text-white mb-3">
                        <i class="fa-regular fa-paper-plane me-2" style="color: var(--accent-color);"></i>Kontak Langsung
                    </h5>
                    <ul class="list-unstyled m-0 d-flex flex-column gap-2">
                        <li>
                            <a href="https://wa.me/6283115151858" target="_blank" class="d-flex align-items-center text-decoration-none py-1">
                                <div class="rounded-circle d-flex align-items-center justify-content-center bg-dark text-success border border-success border-opacity-20 me-3" style="width: 32px; height: 32px;">
                                    <i class="fa-brands fa-whatsapp small"></i>
                                </div>
                                <span class="small font-monospace">+62 83115151858</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:aurelfahristy@gmail.com" class="d-flex align-items-center text-decoration-none py-1">
                                <div class="rounded-circle d-flex align-items-center justify-content-center bg-dark text-warning border border-warning border-opacity-20 me-3" style="width: 32px; height: 32px;">
                                    <i class="fa-regular fa-envelope small"></i>
                                </div>
                                <span class="small">aurelfahristy@gmail.com</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12">
                    <h5 class="fw-bold text-white mb-3">
                        <i class="fa-solid fa-share-nodes me-2" style="color: var(--accent-color);"></i>Jejaring Digital
                    </h5>
                    <p class="small mb-3" style="font-weight: 300;">Hubungkan dengan akun profesional saya:</p>
                    <div class="d-flex gap-2">
                        <a href="https://github.com/AurelJihanFahristy" target="_blank" class="btn btn-dark p-0 d-flex align-items-center justify-content-center rounded-3 text-white border border-secondary border-opacity-10 shadow-sm" style="width: 40px; height: 40px; background: #111726; transition: all 0.3s ease;" onmouseover="this.style.borderColor=getComputedStyle(document.documentElement).getPropertyValue('--accent-color');" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)';">
                            <i class="fa-brands fa-github fa-lg"></i>
                        </a>
                        <a href="https://linkedin.com/in/aurel-jihan/" target="_blank" class="btn btn-dark p-0 d-flex align-items-center justify-content-center rounded-3 text-white border border-secondary border-opacity-10 shadow-sm" style="width: 40px; height: 40px; background: #111726; transition: all 0.3s ease;" onmouseover="this.style.borderColor=getComputedStyle(document.documentElement).getPropertyValue('--accent-color');" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)';">
                            <i class="fa-brands fa-linkedin-in fa-lg"></i>
                        </a>
                        <a href="https://instagram.com/username-kamu" target="_blank" class="btn btn-dark p-0 d-flex align-items-center justify-content-center rounded-3 text-white border border-secondary border-opacity-10 shadow-sm" style="width: 40px; height: 40px; background: #111726; transition: all 0.3s ease;" onmouseover="this.style.borderColor=getComputedStyle(document.documentElement).getPropertyValue('--accent-color');" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)';">
                            <i class="fa-brands fa-instagram fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div>

            <hr class="mt-4 mb-3">

            <div class="row align-items-center g-2 text-center text-md-start">
                <div class="col-md-6">
                    <p class="m-0 small">
                        &copy; 2026 <span style="color: var(--accent-color);"><?= esc($profile['name']) ?></span>. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- ========== SCRIPTS ========== -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ---------- TEMA ----------
            const toggleSwitch = document.querySelector('#checkbox-theme');
            const themeText = document.getElementById('theme-text');
            const navbar = document.getElementById('mainNavbar');
            const currentTheme = localStorage.getItem('theme');

            if (currentTheme) {
                document.documentElement.setAttribute('data-theme', currentTheme);
                if (currentTheme === 'pink') {
                    if (toggleSwitch) toggleSwitch.checked = true;
                    if (themeText) themeText.textContent = "Default Mode";
                }
            }

            function switchTheme(e) {
                if (e.target.checked) {
                    document.documentElement.setAttribute('data-theme', 'pink');
                    localStorage.setItem('theme', 'pink');
                    if (themeText) themeText.textContent = "Default Mode";
                } else {
                    document.documentElement.setAttribute('data-theme', 'default');
                    localStorage.setItem('theme', 'default');
                    if (themeText) themeText.textContent = "Pink Mode";
                }
            }

            if (toggleSwitch) {
                toggleSwitch.addEventListener('change', switchTheme, false);
            }

            // ---------- EFEK NAVBAR SCROLL ----------
            function checkScroll() {
                if (window.scrollY > 50) {
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
            }

            window.addEventListener('scroll', checkScroll);
            checkScroll();

            // ---------- EFEK TEKS BERUBAH (TYPING) ----------
            const roleElement = document.getElementById('hero-role');
            if (roleElement) {
                // Ambil judul dari database sebagai judul awal, lalu tambahkan variasi lainnya
                const initialTitle = "<?= esc($profile['title'] ?? 'Mahasiswa Teknik Informatika') ?>";
                const roles = [
                    initialTitle,
                    'Web Developer',
                    'UI/UX Enthusiast',
                    'Creative Problem Solver',
                    'Mahasiswa Informatika'
                ];
                // Hilangkan duplikat jika judul awal sama dengan salah satu di atas
                const uniqueRoles = [...new Set(roles)];

                let index = 0;

                // Set initial text (paling cocok dengan judul)
                roleElement.textContent = uniqueRoles[0];

                setInterval(() => {
                    roleElement.style.opacity = 0;
                    setTimeout(() => {
                        index = (index + 1) % uniqueRoles.length;
                        roleElement.textContent = uniqueRoles[index];
                        roleElement.style.opacity = 1;
                    }, 300);
                }, 2800);
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>