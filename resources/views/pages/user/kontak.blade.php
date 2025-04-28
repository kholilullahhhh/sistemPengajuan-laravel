@extends('layouts.user.app', ['title' => 'Website Pengaduan'])

@section('content')
    @push('styles')
    @endpush

        <section class="section">
        <section id="main-container" class="main-container">
        <div class="container">
        <div class="main-content ">
        <section class="section">
            <div class="section-header">
                <h1>Sistem Pengajuan PKH Kelurahan Mangkoso</h1>

            </div>


            <div class="section-body">
                <h2 class="section-title">Kontak</h2>
                <p class="section-lead">
                    Informasi mengenai Sosial Media
                </p>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card card-large-icons">
                            <div class="card-icon bg-primary text-white">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <div class="card-body">
                                <h4><a href="https://www.instagram.com/pkhbarru/" target="_blank" rel="noopener noreferrer">Instagram</a></h4>
                                <p><a href="https://www.instagram.com/pkhbarru/" target="_blank" rel="noopener noreferrer">Kunjungi instagram </a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-large-icons">
                            <div class="card-icon bg-primary text-white">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="card-body">
                                <h4>Alamat</h4>
                                <p>Jl. HM Saleh Lawa Kel. Sumpang Binangae Kec. Barru, Barru 90712
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4">
                        <div class="card card-large-icons">
                            <div class="card-icon bg-primary text-white">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="card-body">
                                <h4>Email</h4>
                                <p><a href="persuratan@kemsos.go.id" target="_blank" rel="noopener noreferrer">Email kami</a></p>
                            </div>
                        </div>
                    </div> --}}
                   
                </div>
            </div>
        </section>
    </div>
        </div><!-- Conatiner end -->
    </section><!-- Main container end -->
        </section>

    @push('scripts')
    @endpush
@endsection
