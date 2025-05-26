<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pengaduan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4361ee;
            --primary-light: #eef2ff;
            --secondary: #3f37c9;
            --success: #4cc9f0;
            --warning: #f8961e;
            --danger: #f72585;
            --dark: #212529;
            --light: #f8f9fa;
            --gray: #6c757d;
            --border-radius: 0.5rem;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-md: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--dark);
            background-color: #f5f7fa;
            padding: 2rem 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .report-card {
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-md);
            overflow: hidden;
            margin-bottom: 2rem;
        }

        .report-header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 1.5rem 2rem;
            text-align: center;
        }

        .report-title {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .report-subtitle {
            font-size: 1.1rem;
            font-weight: 400;
            opacity: 0.9;
        }

        .report-period {
            display: inline-block;
            background-color: rgba(255, 255, 255, 0.2);
            padding: 0.5rem 1rem;
            border-radius: 2rem;
            margin-top: 0.75rem;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .report-body {
            padding: 2rem;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .data-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            font-size: 0.9rem;
        }

        .data-table thead th {
            background-color: var(--primary-light);
            color: var(--primary);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
            padding: 1rem 1.25rem;
            border-bottom: 2px solid #e2e8f0;
            text-align: left;
        }

        .data-table tbody tr {
            transition: all 0.2s ease;
        }

        .data-table tbody tr:hover {
            background-color: var(--primary-light);
        }

        .data-table tbody td {
            padding: 1rem 1.25rem;
            border-bottom: 1px solid #e2e8f0;
            vertical-align: top;
        }

        .data-table tbody tr:last-child td {
            border-bottom: none;
        }

        .badge {
            display: inline-block;
            padding: 0.35rem 0.75rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
        }

        .badge-primary {
            background-color: var(--primary-light);
            color: var(--primary);
        }

        .badge-warning {
            background-color: rgba(248, 150, 30, 0.1);
            color: var(--warning);
        }

        .badge-success {
            background-color: rgba(76, 201, 240, 0.1);
            color: var(--success);
        }

        .text-center {
            text-align: center;
        }

        .no-print {
            display: none;
        }

        .report-footer {
            padding: 1.5rem 2rem;
            background-color: #f8fafc;
            border-top: 1px solid #e2e8f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .report-meta {
            font-size: 0.8rem;
            color: var(--gray);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .logo-img {
            height: 2.5rem;
        }

        .logo-text {
            font-weight: 700;
            font-size: 1.25rem;
            color: var(--primary);
        }

        @media print {
            body {
                background-color: white;
                padding: 0;
            }

            .report-card {
                box-shadow: none;
                border-radius: 0;
            }

            .no-print {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .report-header {
                padding: 1rem;
            }

            .report-title {
                font-size: 1.5rem;
            }

            .report-body {
                padding: 1rem;
            }

            .data-table thead {
                display: none;
            }

            .data-table tbody tr {
                display: block;
                margin-bottom: 1rem;
                border: 1px solid #e2e8f0;
                border-radius: var(--border-radius);
                padding: 0.5rem;
            }

            .data-table tbody td {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0.5rem;
                border-bottom: none;
            }

            .data-table tbody td::before {
                content: attr(data-label);
                font-weight: 600;
                margin-right: 1rem;
                color: var(--primary);
                font-size: 0.8rem;
            }

            .badge {
                margin-left: auto;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="report-card">
            <div class="report-header">
                <div class="logo">
                    <svg class="logo-img" width="40" height="40" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 20C7.59 20 4 16.41 4 12C4 7.59 7.59 4 12 4C16.41 4 20 7.59 20 12C20 16.41 16.41 20 12 20Z"
                            fill="white" />
                        <path
                            d="M12 6C9.79 6 8 7.79 8 10C8 12.21 9.79 14 12 14C14.21 14 16 12.21 16 10C16 7.79 14.21 6 12 6ZM12 12C10.9 12 10 11.1 10 10C10 8.9 10.9 8 12 8C13.1 8 14 8.9 14 10C14 11.1 13.1 12 12 12Z"
                            fill="white" />
                        <path
                            d="M12 16C10.33 16 6 17.34 6 19V20H18V19C18 17.34 13.67 16 12 16ZM8 18C8.22 17.28 10.31 16.5 12 16.5C13.7 16.5 15.8 17.28 16 18H8Z"
                            fill="white" />
                    </svg>
                    <span class="logo-text">PengaduanPlus</span>
                </div>
                <h1 class="report-title">Laporan Pengaduan Pelanggan</h1>
                <p class="report-subtitle">Ringkasan keluhan dan tanggapan pelanggan</p>
                <div class="report-period">
                    {{ \Carbon\Carbon::parse($date['dari'][0])->format('d M Y') }} - 
                    {{ \Carbon\Carbon::parse($date['sampai'][0])->format('d M Y') }}
                </div>
            </div>

            <div class="report-body">
                <div class="table-responsive">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pengadu</th>
                                <th>Keluhan</th>
                                <th>Kategori</th>
                                <th>Tanggapan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i => $v)
                                <tr>
                                    <td data-label="No">{{ ++$i }}</td>
                                    <td data-label="Nama Pengadu">{{ $v->keluhan->pelanggan->nama }}</td>
                                    <td data-label="Keluhan">{{ $v->keluhan->keluhan }}</td>
                                    <td data-label="Kategori">{{ $v->keluhan->Kategori->nama_kategori }}</td>
                                    <td data-label="Tanggapan">{{ $v->tanggapan }}</td>
                                    <td data-label="Status">
                                        @if ($v->keluhan->status_keluhan == 'Diproses')
                                            <span class="badge badge-primary">
                                                {{ $v->keluhan->status_keluhan }}
                                            </span>
                                        @elseif ($v->keluhan->status_keluhan == 'Pending')
                                            <span class="badge badge-warning">
                                                {{ $v->keluhan->status_keluhan }}
                                            </span>
                                        @else
                                            <span class="badge badge-success">
                                                {{ $v->keluhan->status_keluhan }}
                                            </span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="report-footer">
                <div class="report-meta">
                    Dicetak pada: {{ \Carbon\Carbon::now()->format('d M Y H:i') }}
                </div>
                <div class="report-meta">
                    Total Pengaduan: {{ count($data) }}
                </div>
            </div>
        </div>
    </div>
</body>

</html>