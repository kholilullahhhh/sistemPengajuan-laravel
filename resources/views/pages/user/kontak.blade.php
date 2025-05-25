@extends('layouts.user.app', ['title' => 'Kontak Pengaduan'])

@section('content')
    @push('styles')
        <style>
            .contact-hero {
                padding-top: 100px;
                height: 60vh;
                align-items: center;
                background: linear-gradient(135deg, #6777ef 0%, #3b4dbb 100%);
                color: white;
                padding-bottom: 5rem;
                margin-top: 10rem;
            }
            .card-large-icons {
                transition: all 0.3s ease;
                border: none;
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                height: 100%;
                margin-bottom: 20px;
            }
            .card-large-icons:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            }
            .card-icon {
                width: 60px;
                height: 60px;
                font-size: 25px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                margin: -30px auto 15px;
            }
            .contact-map-container {
                transition: all 0.3s ease;
                max-height: 0;
                overflow: hidden;
            }
            .contact-map-container.show {
                max-height: 300px;
                margin-bottom: 20px;
            }
            .contact-map {
                height: 300px;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            }
            .contact-form {
                background: white;
                padding: 25px;
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            }
            .section-title {
                position: relative;
                padding-bottom: 12px;
                margin-bottom: 25px;
                font-size: 1.5rem;
            }
            .section-title:after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 0;
                width: 50px;
                height: 3px;
                background: #6777ef;
            }
            .btn-show-map {
                transition: all 0.3s ease;
            }
            .contact-info-card {
                margin-bottom: 20px;
            }
            @media (max-width: 768px) {
                .contact-hero {
                    padding-top: 80px;
                    min-height: 250px;
                }
                .contact-hero h1 {
                    font-size: 2rem;
                }
                .contact-map {
                    height: 250px;
                }
            }
        </style>
    @endpush

    <!-- Hero Section -->
    <section class="contact-hero text-center mb-5">
        <div class="container">
            <h1 class="font-weight-bold mb-3">Hubungi Kami</h1>
            <p class="lead mb-0">Kami siap membantu Anda melalui berbagai saluran komunikasi</p>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <!-- Contact Cards -->
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-large-icons">
                            <div class="card-icon bg-primary text-white">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <div class="card-body text-center">
                                <h4>Instagram</h4>
                                <p class="text-muted mb-3">Follow kami untuk update terbaru</p>
                                <a href="https://www.instagram.com" target="_blank" class="btn btn-sm btn-outline-primary">
                                    <i class="fab fa-instagram mr-2"></i> @pengaduan_kami
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-large-icons">
                            <div class="card-icon bg-success text-white">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div class="card-body text-center">
                                <h4>WhatsApp</h4>
                                <p class="text-muted mb-3">Chat langsung dengan tim kami</p>
                                <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-sm btn-outline-success">
                                    <i class="fab fa-whatsapp mr-2"></i> +62 812-3456-7890
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-large-icons">
                            <div class="card-icon bg-info text-white">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="card-body text-center">
                                <h4>Email</h4>
                                <p class="text-muted mb-3">Kirimkan pertanyaan via email</p>
                                <a href="mailto:abc@example.com" class="btn btn-sm btn-outline-info">
                                    <i class="fas fa-envelope mr-2"></i> abc@example.com
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-large-icons">
                            <div class="card-icon bg-warning text-white">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="card-body text-center">
                                <h4>Alamat Kantor</h4>
                                <p class="text-muted mb-2">Jl. Mah Minta KIKO, kiko Enakkk tau</p>
                                <button class="btn btn-sm btn-outline-warning btn-show-map">
                                    <i class="fas fa-map-marker-alt mr-2"></i> Lihat Peta
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Map Section (Initially Hidden) -->
                <div class="contact-map-container" id="officeMap">
                    <div class="contact-map mt-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.8195613506394!3d-6.194741395493371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTEnNDEuMSJTIDEwNsKwNDknMTAuNCJF!5e0!3m2!1sen!2sid!4v1621234567890!5m2!1sen!2sid" 
                                width="100%" 
                                height="100%" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy">
                        </iframe>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form mt-4">
                    <h3 class="section-title">Kirim Pesan Langsung</h3>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Alamat Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subjek</label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea class="form-control" id="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fas fa-paper-plane mr-2"></i> Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>

            <!-- Sidebar Info -->
            <div class="col-lg-4">
                <div class="card contact-info-card">
                    <div class="card-header bg-white">
                        <h4 class="mb-0">Jam Operasional</h4>
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Senin - Jumat
                                <span class="badge badge-primary">08:00 - 17:00</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Sabtu
                                <span class="badge badge-primary">08:00 - 14:00</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Minggu
                                <span class="badge badge-danger">Libur</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card contact-info-card">
                    <div class="card-header bg-white">
                        <h4 class="mb-0">Layanan Darurat</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-danger mb-0">
                            <h5 class="alert-heading"><i class="fas fa-phone-alt mr-2"></i> Call Center</h5>
                            <p class="mb-2">Untuk pengaduan darurat di luar jam operasional</p>
                            <h4 class="mb-0">1500-123</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function () {
                // Smooth toggle for map
                $('.btn-show-map').click(function () {
                    $('#officeMap').toggleClass('show');
                    $(this).html(function (i, html) {
                        return html.includes('Lihat') ?
                            '<i class="fas fa-times mr-2"></i> Tutup Peta' :
                            '<i class="fas fa-map-marker-alt mr-2"></i> Lihat Peta';
                    });
                });

                // Form submission with validation
                $('#contactForm').submit(function (e) {
                    e.preventDefault();
                    
                    const form = $(this);
                    const submitBtn = form.find('button[type="submit"]');
                    const originalText = submitBtn.html();
                    
                    // Simple validation
                    let isValid = true;
                    form.find('[required]').each(function() {
                        if (!$(this).val()) {
                            $(this).addClass('is-invalid');
                            isValid = false;
                        } else {
                            $(this).removeClass('is-invalid');
                        }
                    });
                    
                    if (!isValid) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Harap isi semua field yang wajib diisi!',
                            confirmButtonText: 'Mengerti'
                        });
                        return;
                    }
                    
                    submitBtn.html('<i class="fas fa-spinner fa-spin mr-2"></i> Mengirim...');
                    submitBtn.prop('disabled', true);

                    // Simulate form submission
                    setTimeout(function () {
                        Swal.fire({
                            icon: 'success',
                            title: 'Pesan Terkirim!',
                            text: 'Terima kasih telah menghubungi kami. Kami akan segera merespon pesan Anda.',
                            confirmButtonText: 'Tutup'
                        });

                        // Reset form
                        form[0].reset();
                        submitBtn.html(originalText);
                        submitBtn.prop('disabled', false);
                    }, 1500);
                });
            });
        </script>
    @endpush
@endsection