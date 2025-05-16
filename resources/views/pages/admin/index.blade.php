@extends('layouts.app', ['title' => 'Dashboard Admin'])

@section('content')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Home</a></div>
                    <div class="breadcrumb-item">Dashboard</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-lg-3 col-md-6 col-sm-6 bg">
                        <div class="card text-center">
                            <div class="card-body">
                                <h6 class="text-muted">Total Pengguna</h6>
                                <h3 class="font-weight-bold">{{ \App\Models\User::count() }}</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <h6 class="text-muted">Total Pelanggan</h6>
                                <h3 class="font-weight-bold">{{ \App\Models\Pelanggan::count() }}</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <h6 class="text-muted">Keluhan Masuk</h6>
                                <h3 class="font-weight-bold">{{ \App\Models\Keluhan::count() }}</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <h6 class="text-muted">Tanggapan Diberikan</h6>
                                <h3 class="font-weight-bold">{{ \App\Models\Tanggapan::count() }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        
    @endpush
@endsection
