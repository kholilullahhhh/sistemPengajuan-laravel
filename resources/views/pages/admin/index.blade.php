@extends('layouts.app', ['title' => 'Admin Dashboard'])

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 class="text-dark">Dashboard Overview</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#" class="text-primary">Home</a></div>
                <div class="breadcrumb-item">Dashboard</div>
            </div>
        </div>

        <div class="section-body">
            <!-- Summary Cards -->
            <div class="row mb-4">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1 shadow-sm">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Users</h4>
                            </div>
                            <div class="card-body">
                                {{ \App\Models\User::count() }}
                            </div>
                        </div>
                        <div class="card-footer bg-primary text-white">
                            <small>Last updated today</small>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1 shadow-sm">
                        <div class="card-icon bg-success">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Customers</h4>
                            </div>
                            <div class="card-body">
                                {{ \App\Models\Pelanggan::count() }}
                            </div>
                        </div>
                        <div class="card-footer bg-success text-white">
                            <small>Last updated today</small>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1 shadow-sm">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-exclamation-circle"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Complaints</h4>
                            </div>
                            <div class="card-body">
                                {{ \App\Models\Keluhan::count() }}
                            </div>
                        </div>
                        <div class="card-footer bg-warning text-white">
                            <small>Last updated today</small>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1 shadow-sm">
                        <div class="card-icon bg-info">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Responses</h4>
                            </div>
                            <div class="card-body">
                                {{ \App\Models\Tanggapan::count() }}
                            </div>
                        </div>
                        <div class="card-footer bg-info text-white">
                            <small>Last updated today</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts and Additional Information -->
            <div class="row">
                <!-- Complaints Chart -->
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white">
                            <h4 class="text-dark">Complaints Overview</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="complaintsChart" height="250"></canvas>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Activities -->
                <div class="col-lg-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white">
                            <h4 class="text-dark">Recent Activities</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled list-unstyled-border">
                                <li class="media">
                                    <div class="media-icon bg-primary text-white"><i class="fas fa-user-plus"></i></div>
                                    <div class="media-body">
                                        <h6>New User Registered</h6>
                                        <div class="text-small text-muted">2 min ago</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-icon bg-warning text-white"><i class="fas fa-exclamation"></i></div>
                                    <div class="media-body">
                                        <h6>New Complaint Submitted</h6>
                                        <div class="text-small text-muted">15 min ago</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-icon bg-success text-white"><i class="fas fa-check"></i></div>
                                    <div class="media-body">
                                        <h6>Complaint Resolved</h6>
                                        <div class="text-small text-muted">1 hour ago</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-icon bg-info text-white"><i class="fas fa-comment"></i></div>
                                    <div class="media-body">
                                        <h6>New Response Added</h6>
                                        <div class="text-small text-muted">3 hours ago</div>
                                    </div>
                                </li>
                            </ul>
                            <div class="text-center pt-1 pb-1">
                                <a href="#" class="btn btn-primary btn-sm">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Additional Row (Optional) -->
            <div class="row mt-4">
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white">
                            <h4 class="text-dark">Quick Actions</h4>
                        </div>
                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-6 col-md-3 col-lg-3 mb-4">
                                    <a href="#" class="btn btn-icon icon-left btn-light"><i class="fas fa-user-plus text-primary"></i> Add User</a>
                                </div>
                                <div class="col-6 col-md-3 col-lg-3 mb-4">
                                    <a href="#" class="btn btn-icon icon-left btn-light"><i class="fas fa-ticket-alt text-warning"></i> View Complaints</a>
                                </div>
                                <div class="col-6 col-md-3 col-lg-3 mb-4">
                                    <a href="#" class="btn btn-icon icon-left btn-light"><i class="fas fa-chart-bar text-info"></i> Reports</a>
                                </div>
                                <div class="col-6 col-md-3 col-lg-3 mb-4">
                                    <a href="#" class="btn btn-icon icon-left btn-light"><i class="fas fa-cog text-secondary"></i> Settings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white">
                            <h4 class="text-dark">System Status</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="progress-container">
                                        <span class="progress-badge">Server Load</span>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 35%"></div>
                                        </div>
                                        <span class="progress-value">35%</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="progress-container">
                                        <span class="progress-badge">Database Usage</span>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 62%"></div>
                                        </div>
                                        <span class="progress-value">62%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Storage Space</span>
                                    <span>5.2 GB / 10 GB</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 52%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Complaints Chart
    const complaintsCtx = document.getElementById('complaintsChart').getContext('2d');
    const complaintsChart = new Chart(complaintsCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Complaints',
                data: [12, 19, 15, 27, 22, 18, 25, 30, 28, 32, 35, 40],
                backgroundColor: 'rgba(255, 159, 64, 0.2)',
                borderColor: 'rgba(255, 159, 64, 1)',
                borderWidth: 2,
                tension: 0.1,
                fill: true
            }, {
                label: 'Responses',
                data: [10, 15, 12, 20, 18, 15, 22, 25, 24, 28, 30, 35],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 2,
                tension: 0.1,
                fill: true
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    mode: 'index',
                    intersect: false,
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endpush

@push('styles')
<style>
    .card-statistic-1 {
        border: 0;
        border-radius: 8px;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    
    .card-statistic-1:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1) !important;
    }
    
    .card-statistic-1 .card-icon {
        width: 60px;
        height: 60px;
        margin: 15px;
        border-radius: 50%;
        line-height: 60px;
        text-align: center;
        font-size: 22px;
        float: left;
    }
    
    .card-statistic-1 .card-wrap {
        position: relative;
        padding: 15px;
    }
    
    .card-statistic-1 .card-header {
        font-weight: 600;
        font-size: 14px;
        color: #6c757d;
        margin-bottom: 5px;
    }
    
    .card-statistic-1 .card-body {
        font-size: 24px;
        font-weight: 700;
        color: #34395e;
    }
    
    .card-statistic-1 .card-footer {
        padding: 10px;
        font-size: 11px;
    }
    
    .media-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
    }
    
    .list-unstyled-border .media {
        padding: 15px 0;
        border-bottom: 1px solid #f0f0f0;
    }
    
    .list-unstyled-border .media:last-child {
        border-bottom: 0;
    }
    
    .shadow-sm {
        box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075) !important;
        border-radius: 8px;
        border: 0;
    }
    
    .shadow-sm:hover {
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1) !important;
    }
</style>
@endpush
@endsection