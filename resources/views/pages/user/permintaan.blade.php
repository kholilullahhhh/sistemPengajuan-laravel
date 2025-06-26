@extends('layouts.user.app', ['title' => 'Website Pengaduan'])

@section('content')
    @push('styles')
        <style>
            .complaint-section {
                transition: all 0.3s ease;
            }
            .hidden-section {
                display: none;
            }
            .status-badge {
                padding: 5px 10px;
                border-radius: 20px;
                font-size: 12px;
                font-weight: 600;
            }
            .status-pending {
                background-color: #fff3cd;
                color: #856404;
            }
            .status-processed {
                background-color: #cce5ff;
                color: #004085;
            }
            .status-completed {
                background-color: #d4edda;
                color: #155724;
            }
        </style>
    @endpush

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <div class="d-flex">
                    <button id="create-complaint-btn" class="btn btn-primary mr-3">Buat pengaduan</button>
                    <button id="check-status-btn" class="btn btn-info">Cek Status pengaduan</button>
                </div>
            </div>

            <div class="section-body">
                <!-- Complaint Form Section -->
                <div id="complaint-form-section" class="complaint-section hidden-section">
                    @include('pages.user.form_permintaan')
                </div>

                <!-- Status Check Section -->
                <div id="status-check-section" class="complaint-section hidden-section">
                    <div class="card">
                        <div class="card-header">
                            <h4>Cek Status pengaduan</h4>
                        </div>
                        <div class="card-body">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="email-input">Masukkan Email anda</label>
                                    <input required class="form-control" type="email" name="email" id="email-input" placeholder="email@contoh.com">
                                </div>
                                <button id="check-submission-btn" class="btn btn-primary">
                                    <i class="fas fa-search mr-2"></i>Cek Pengajuan
                                </button>
                            </div>

                            <div id="submission-results" class="mt-4 hidden-section">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="submission-table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Nama Pengadu</th>
                                                <th>NIK</th>
                                                <th>Keluhan</th>
                                                <th>Kategori Keluhan</th>
                                                <th>Tanggapan</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody id="submission-data">
                                            <!-- Data will be loaded here via AJAX -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
        <script>
            $(document).ready(function() {
                // Initialize currency input mask
                $('.currency').inputmask({
                    alias: 'numeric',
                    groupSeparator: ',',
                    autoGroup: true,
                    digits: 0,
                    digitsOptional: false,
                    prefix: 'Rp ',
                    placeholder: '0',
                    rightAlign: false,
                    removeMaskOnSubmit: true
                });

                // Section visibility control
                const sections = {
                    'create-complaint-btn': 'complaint-form-section',
                    'check-status-btn': 'status-check-section'
                };

                // Show section based on button click
                $('[id$="-btn"]').on('click', function() {
                    const sectionId = sections[this.id];
                    if (sectionId) {
                        $('.complaint-section').addClass('hidden-section');
                        $(`#${sectionId}`).removeClass('hidden-section');
                    }
                });

                // Default show complaint form section
                $('#create-complaint-btn').trigger('click');

                // Check submission status
                $('#check-submission-btn').on('click', function() {
                    const email = $('#email-input').val().trim();
                    
                    if (!email) {
                        alert('Silakan masukkan email anda');
                        return;
                    }

                    // Show loading state
                    const btn = $(this);
                    btn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin mr-2"></i>Memproses...');

                    $.ajax({
                        url: "{{ route('permintaan.cek') }}",
                        method: 'GET',
                        data: { email: email },
                        success: function(response) {
                            if (response.html) {
                                $('#submission-data').html(response.html);
                                $('#submission-results').removeClass('hidden-section');
                            } else {
                                $('#submission-results').addClass('hidden-section');
                                alert('Tidak ditemukan pengaduan dengan email tersebut');
                            }
                        },
                        error: function() {
                            alert('Terjadi kesalahan saat memproses permintaan');
                        },
                        complete: function() {
                            btn.prop('disabled', false).html('<i class="fas fa-search mr-2"></i>Cek Pengajuan');
                        }
                    });
                });

                // Additional modal handlers if needed
                @if (isset($data->krt->id))
                    // Modal handlers for detail views
                    function setupModal(modalId, route) {
                        $(`#${modalId}`).on('show.bs.modal', function(event) {
                            const button = $(event.relatedTarget);
                            const krtId = button.data('krt-id');
                            const modal = $(this);
                            const contentId = `${modalId}Content`;

                            $.ajax({
                                url: route,
                                method: 'GET',
                                data: { krt_id: krtId },
                                success: function(response) {
                                    modal.find(`#${contentId}`).html(response);
                                },
                                error: function() {
                                    modal.find(`#${contentId}`).html('<p>Error loading data</p>');
                                }
                            });
                        });
                    }

                    // Setup modals
                    setupModal('modalAll', "{{ route('detailAll') }}");
                    setupModal('modalRumah', "{{ route('rumah.show') }}");
                    setupModal('modalAset', "{{ route('aset.show') }}");
                    setupModal('artModal', "{{ route('get.art.data') }}");

                    // ART form handling
                    $('#createArtButton').on('click', function() {
                        $('#createArtModal').modal('show');
                    });

                    $('.editArtButton').on('click', function() {
                        const id = $(this).data('id');
                        const name = $(this).data('name');
                        const relationship = $(this).data('relationship');

                        $('#editId').val(id);
                        $('#editName').val(name);
                        $('#editRelationship').val(relationship);

                        const action = $('#editArtForm').attr('action').replace(':id', id);
                        $('#editArtForm').attr('action', action);

                        $('#editArtModal').modal('show');
                    });
                @endif
            });
        </script>
    @endpush
@endsection