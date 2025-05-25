@extends('layouts.user.app', ['title' => 'Website Pengaduan'])

@section('content')
    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <style>
            .hero-section {
                padding-top: 100px;
                height: 60vh;
                align-items: center;
                background: linear-gradient(135deg, #6777ef 0%, #3b4dbb 100%);
                color: white;
                padding-bottom: 5rem;
                margin-top: 10rem;
            }

            .feature-card {
                transition: all 0.3s ease;
                border: none;
                border-radius: 10px;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                height: 100%;
            }

            .feature-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            }

            .feature-icon {
                font-size: 2.5rem;
                margin-bottom: 1rem;
                color: #6777ef;
            }

            .stats-card {
                border-radius: 10px;
                overflow: hidden;
                margin-bottom: 20px;
            }

            .stats-number {
                font-size: 2.5rem;
                font-weight: 700;
            }

            .testimonial-card {
                border-left: 4px solid #6777ef;
            }

            .scrollspy-nav {
                position: sticky;
                top: 100px;
            }

            .scrollspy-link.active {
                color: #6777ef !important;
                font-weight: bold;
                border-left: 3px solid #6777ef;
                padding-left: 10px;
            }

            #progress-container {
                position: fixed;
                bottom: 20px;
                right: 20px;
                z-index: 999;
            }

            #progress-circle {
                width: 50px;
                height: 50px;
                background: #6777ef;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                cursor: pointer;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            }

            .section-title {
                position: relative;
                padding-bottom: 15px;
                margin-bottom: 30px;
            }

            .section-title:after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 0;
                width: 60px;
                height: 3px;
                background: #6777ef;
            }
        </style>
    @endpush

    <!-- Hero Section -->
    <section class="hero-section  text-center animate__animated animate__fadeIn mb-5">
        <div class="container">
            <h1 class="display-4 font-weight-bold mb-4">Sistem Pengaduan Pelanggan</h1>
            <p class="lead mb-5">Solusi digital untuk menangani keluhan pelanggan secara cepat, transparan, dan terstruktur
            </p>
            <div class="d-flex justify-content-center gap-3">
                <a href="{{ route('permintaan.index') }}" class="btn btn-light btn-lg px-4 py-2">Ajukan Pengaduan</a>
                <a href="#features" class="btn btn-outline-light btn-lg px-4 py-2">Pelajari Fitur</a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="container mb-5">
        <div class="row" id="stats-counter">
            <div class="col-md-4">
                <div class="stats-card card bg-white">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope-open-text fa-3x mb-3 text-primary"></i>
                        <h3 class="stats-number" data-target="1254">0</h3>
                        <p class="text-muted">Pengaduan Masuk</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-card card bg-white">
                    <div class="card-body text-center">
                        <i class="fas fa-check-circle fa-3x mb-3 text-success"></i>
                        <h3 class="stats-number" data-target="987">0</h3>
                        <p class="text-muted">Pengaduan Selesai</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-card card bg-white">
                    <div class="card-body text-center">
                        <i class="fas fa-users fa-3x mb-3 text-info"></i>
                        <h3 class="stats-number" data-target="356">0</h3>
                        <p class="text-muted">Pengguna Terdaftar</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- About Section -->
                <section id="about" class="mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title section-title">Tentang Sistem Kami</h2>
                            <p class="card-text" style="font-size: 18px;"><strong>Aplikasi Pengajuan Sistem Informasi
                                    Pencatatan Keluhan Pelanggan Berbasis Web</strong> merupakan sebuah solusi digital yang
                                dirancang untuk meningkatkan efisiensi dalam proses penanganan keluhan pelanggan secara
                                cepat, transparan, dan terstruktur.</p>
                            <p class="card-text" style="font-size: 18px;">Dalam era digital saat ini, pelayanan yang
                                responsif dan akuntabel menjadi tuntutan utama dalam menjaga kepuasan pelanggan. Oleh karena
                                itu, aplikasi ini hadir sebagai sistem informasi yang memungkinkan pelanggan untuk
                                menyampaikan keluhan atau masukan secara langsung melalui platform berbasis web, kapan pun
                                dan di mana pun.</p>
                        </div>
                    </div>
                </section>

                <!-- Features Section -->
                <section id="features" class="mb-5">
                    <h2 class="section-title">Fitur Unggulan</h2>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="feature-card card h-100">
                                <div class="card-body">
                                    <div class="feature-icon">
                                        <i class="fas fa-edit"></i>
                                    </div>
                                    <h4>Formulir Pengaduan Online</h4>
                                    <p>Mudah mengajukan keluhan kapan saja dan di mana saja melalui formulir digital yang
                                        sederhana.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="feature-card card h-100">
                                <div class="card-body">
                                    <div class="feature-icon">
                                        <i class="fas fa-history"></i>
                                    </div>
                                    <h4>Riwayat Pengaduan</h4>
                                    <p>Pantau perkembangan pengaduan Anda dari waktu ke waktu dengan sistem pelacakan yang
                                        transparan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="feature-card card h-100">
                                <div class="card-body">
                                    <div class="feature-icon">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <h4>Notifikasi Real-time</h4>
                                    <p>Dapatkan pemberitahuan instan melalui email atau SMS saat ada perkembangan pada
                                        pengaduan Anda.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="feature-card card h-100">
                                <div class="card-body">
                                    <div class="feature-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <h4>Analisis Data</h4>
                                    <p>Sistem analitik canggih untuk mengidentifikasi pola keluhan dan meningkatkan kualitas
                                        layanan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- How It Works -->
                <section id="how-it-works" class="mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title section-title">Cara Kerja Sistem</h2>
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="text-center">
                                        <div class="mb-3">
                                            <span
                                                class="badge bg-primary rounded-circle d-inline-flex align-items-center justify-content-center"
                                                style="width: 50px; height: 50px; font-size: 1.2rem;">1</span>
                                        </div>
                                        <h5>Ajukan Pengaduan</h5>
                                        <p>Isi formulir pengaduan dengan detail keluhan Anda.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="text-center">
                                        <div class="mb-3">
                                            <span
                                                class="badge bg-primary rounded-circle d-inline-flex align-items-center justify-content-center"
                                                style="width: 50px; height: 50px; font-size: 1.2rem;">2</span>
                                        </div>
                                        <h5>Proses Verifikasi</h5>
                                        <p>Tim kami akan memverifikasi dan memproses pengaduan Anda.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="text-center">
                                        <div class="mb-3">
                                            <span
                                                class="badge bg-primary rounded-circle d-inline-flex align-items-center justify-content-center"
                                                style="width: 50px; height: 50px; font-size: 1.2rem;">3</span>
                                        </div>
                                        <h5>Tindak Lanjut</h5>
                                        <p>Pengaduan akan ditindaklanjuti oleh departemen terkait.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Testimonials -->
                <section id="testimonials" class="mb-5">
                    <h2 class="section-title">Apa Kata Pengguna?</h2>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="testimonial-card card h-100">
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p>"Sistem yang sangat membantu! Pengaduan saya ditanggapi dengan cepat dan
                                            solutif."</p>
                                        <footer class="blockquote-footer mt-2">Budi Santoso, <cite
                                                title="Source Title">Pengguna sejak 2022</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="testimonial-card card h-100">
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p>"Transparansi proses sangat baik. Saya bisa memantau perkembangan pengaduan kapan
                                            saja."</p>
                                        <footer class="blockquote-footer mt-2">Ani Wijaya, <cite
                                                title="Source Title">Pengguna sejak 2023</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Sidebar Navigation -->
            <div class="col-lg-4">
                <div class="scrollspy-nav">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Navigasi Cepat</h5>
                        </div>
                        <div class="card-body">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link scrollspy-link" href="#about">Tentang Sistem</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link scrollspy-link" href="#features">Fitur Unggulan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link scrollspy-link" href="#how-it-works">Cara Kerja</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link scrollspy-link" href="#testimonials">Testimoni</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="mb-4">Siap Mengajukan Pengaduan?</h2>
            <p class="lead mb-4">Bergabunglah dengan ribuan pengguna yang telah merasakan kemudahan layanan kami</p>
            <a href="{{ route('permintaan.index') }}" class="btn btn-light btn-lg px-5 py-3">Ajukan Pengaduan Sekarang</a>
        </div>
    </section>

    <!-- Progress Circle -->
    <div id="progress-container">
        <div id="progress-circle" title="Kembali ke atas">
            <i class="fas fa-arrow-up"></i>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Animated counter
                const counters = document.querySelectorAll('.stats-number');
                const speed = 200;

                counters.forEach(counter => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    const increment = target / speed;

                    if (count < target) {
                        const updateCount = () => {
                            const current = +counter.innerText;
                            if (current < target) {
                                counter.innerText = Math.ceil(current + increment);
                                setTimeout(updateCount, 1);
                            } else {
                                counter.innerText = target;
                            }
                        };
                        updateCount();
                    }
                });

                // Scrollspy navigation
                const sections = document.querySelectorAll('section');
                const navLinks = document.querySelectorAll('.scrollspy-link');

                window.addEventListener('scroll', () => {
                    let current = '';

                    sections.forEach(section => {
                        const sectionTop = section.offsetTop;
                        const sectionHeight = section.clientHeight;

                        if (pageYOffset >= (sectionTop - 300)) {
                            current = section.getAttribute('id');
                        }
                    });

                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === `#${current}`) {
                            link.classList.add('active');
                        }
                    });
                });

                // Smooth scrolling for anchor links
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        e.preventDefault();

                        const targetId = this.getAttribute('href');
                        const targetElement = document.querySelector(targetId);

                        window.scrollTo({
                            top: targetElement.offsetTop - 100,
                            behavior: 'smooth'
                        });
                    });
                });

                // Back to top button
                const progressCircle = document.getElementById('progress-circle');

                window.addEventListener('scroll', () => {
                    if (window.pageYOffset > 300) {
                        progressCircle.style.display = 'flex';
                    } else {
                        progressCircle.style.display = 'none';
                    }
                });

                progressCircle.addEventListener('click', () => {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            });
        </script>
    @endpush
@endsection