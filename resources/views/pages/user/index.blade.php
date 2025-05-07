@extends('layouts.user.app', ['title' => 'Website Pengaduan'])

@section('content')
    @push('styles')
    @endpush

    <div class="main-content ">
        <section class="section">
            <div class="section-header">
                <section class="section">
                    <div class="section-header">
                        <h1>Aplikasi Pengajuan Sistem Informasi Pencatatan Keluhan Pelanggan Berbasis Web</h1>

                    </div>

                    <div class="section-body">
                        <div class="card text-justify" style="font-size: 18px; ">
                            {{-- <div class="card-header">
                                <h4>Example Card</h4>
                            </div> --}}
                            <div class="card-body">
                                <p><strong>Aplikasi Pengajuan Sistem Informasi Pencatatan Keluhan Pelanggan Berbasis
                                        Web</strong> merupakan sebuah solusi digital yang dirancang untuk meningkatkan
                                    efisiensi dalam proses penanganan keluhan pelanggan secara cepat, transparan, dan
                                    terstruktur.</p>
                                <p>Dalam era digital saat ini, pelayanan yang responsif dan akuntabel menjadi tuntutan utama
                                    dalam menjaga kepuasan pelanggan. Oleh karena itu, aplikasi ini hadir sebagai sistem
                                    informasi yang memungkinkan pelanggan untuk menyampaikan keluhan atau masukan secara
                                    langsung melalui platform berbasis web, kapan pun dan di mana pun.</p>
                                <p>Aplikasi ini memfasilitasi proses pencatatan, pengelolaan, dan tindak lanjut keluhan
                                    secara sistematis. Setiap pengaduan yang masuk akan tercatat secara otomatis dalam
                                    sistem dan dapat dipantau status penyelesaiannya oleh pihak terkait, sehingga memperkuat
                                    kepercayaan publik terhadap kualitas pelayanan yang diberikan.</p>
                                <p>Dengan fitur-fitur seperti formulir pengaduan online, riwayat keluhan, notifikasi status,
                                    serta dashboard pemantauan untuk admin dan petugas pelayanan, aplikasi ini diharapkan
                                    mampu menjadi sarana efektif dalam mewujudkan pelayanan publik yang cepat tanggap,
                                    transparan, dan berorientasi pada kepuasan pelanggan.</p>
                            </div>


                            <!-- <div class="card">
                                <div class="card-body text-justify" style="font-size: 18px; ">
                                    <p><strong>Aplikasi Pengajuan Sistem Informasi Pencatatan Keluhan Pelanggan Berbasis
                                            Web</strong> dirancang untuk memberikan kemudahan bagi pelanggan dalam
                                        menyampaikan keluhan, masukan, atau saran terhadap layanan yang diterima. Dengan
                                        adanya sistem ini, proses pencatatan dan penanganan keluhan menjadi lebih
                                        transparan, cepat, dan terdokumentasi dengan baik.</p>

                                    <p>Berdasarkan <strong><a target="_blank"
                                                href="https://peraturan.go.id/id/uu-no-13-tahun-2011">UU No 13 Tahun
                                                2011</a></strong>, semua program bantuan dan pemberdayaan pemerintah dalam
                                        rangka penanganan fakir miskin harus berdasarkan Data Terpadu Kesejahteraan Sosial
                                        (DTKS). Pada dasarnya, pengusulan untuk masuk dalam DTKS ataupun pengusulan menjadi
                                        Keluarga Penerima Manfaat (KPM) bansos yang merupakan program reguler Kementerian
                                        Sosial RI (Sembako, PKH, PBI) merupakan kewenangan pemerintah daerah Kabupaten/Kota
                                        bersama pemerintah lingkup terkecil yaitu desa/kelurahan. Artinya, setiap lurah
                                        dapat mengusulkan warga yang tidak mampu dan membutuhkan di wilayahnya untuk masuk
                                        DTKS dan mengakses bantuan.</p>

                                    <p>Kementerian Sosial RI telah menyediakan laman penerima bansos melalui tautan: <a
                                            target="_blank"
                                            href="https://cekbansos.kemensos.go.id/">cekbansos.kemensos.go.id</a>. Laman
                                        tersebut menampilkan nama seluruh penerima bantuan sosial dari Kementerian Sosial RI
                                        di lingkup desa/kelurahan sesuai pengaturan NAMA dan ALAMAT yang diketikkan.
                                        Tujuannya agar masyarakat dapat melakukan pengecekan mandiri apakah namanya masuk
                                        sebagai calon penerima bantuan sosial atau tidak. Selain itu juga dapat mememberikan
                                        keleluasaan bagi masyarakat untuk dapat mengetahui nama penerima bantuan di
                                        sekitarnya, sehingga dapat turut menjalankan fungsi pengawasan akan ketepatan
                                        sasaran bantuan di lingkungannya. Jadi pastikan mengetikkan nama lengkap sesuai KTP
                                        untuk memastikan data yang keluar adalah data yang dimaksud.</p>

                                    <p>DTKS diupdate secara rutin oleh Dinas Sosial Kabupaten/Kota dengan melibatkan
                                        Pemerintah Desa/Kelurahan melalui Musyawarah Desa/Musyawarah Kelurahan sesuai
                                        kebijakan pengelolaan DTKS yang berlaku di masing-masing Kabupaten/Kota. Hasil
                                        update data dikirimkan ke Kementerian Sosial untuk ditetapkan. Sesuai Peraturan
                                        Menteri Sosial Nomor 3 Tahun 2021. DTKS diupdate secara berkala dengan penetapan
                                        setiap bulan oleh Menteri Sosial RI.</p>

                                    <p>Data penerima bantuan sosial merupakan data yang telah disahkan oleh Kementerian
                                        Sosial sebagai penerima bantuan sosial tertentu periode tertentu. Usulan Penerima
                                        Bantuan Sosial bersumber dari DTKS yang telah melalui proses verifikasi kelayakan
                                        oleh Dinas Sosial Kabupaten/Kota. Apabila kemudian diperoleh temuan/laporan bahwa
                                        ada KPM penerima bantuan sosial terbukti tidak layak mendapatkan bantuan sosial,
                                        maka Dinas Sosial Kabupaten/Kota dapat menindaklanjuti dengan menidaklayakkan KPM
                                        tersebut, agar tidak kembali masuk dalam usulan bantuan sosial periode berikutnya.
                                    </p>

                                    <p>Bantuan sosial dari pemerintah bersifat atensi. Artinya tidak ada kewenangan mutlak
                                        bagi seseorang ataupun keluarga untuk mempertahankan kepesertaan bansosnya secara
                                        terus-menerus. Terutama apabila kondisi sosial ekonominya sudah tidak lagi layak
                                        menjadi penerima dan ada warga lain disekitarnya yang lebih membutuhkan.</p>

                                    <p>Pada dasarnya pengusulan bansos bersifat kewilayahan. Kepala daerah dalam hal ini
                                        dibantu oleh lurah yang diberikan kewenangan untuk mengusulkan warganya yang layak
                                        dan membutuhkan untuk menjadi penerima bantuan sosial. Sehingga bagi warga baru di
                                        suatu wilayah, apabila memang merasa sebagai warga kurang mampu dan membutuhkan
                                        akses bantuan sosial, dapat melapor dan mengusulkan diri melalui Ketua RT/RW/Dukuh
                                        setempat sesuai alamat KTP. Selengkapnya terkait pengusulan ada di FAQ No. 1.</p>

                                    <p>Sebelum seseorang/keluarga mengajukan pengusulan bansos, perlu dipastikan dulu status
                                        keberadaannya dalam DTKS. Proses ini dapat dilakukan di Dinas Sosial Kabupaten/Kota
                                        sesuai KTP daerah asal. Apabila masih masuk dalam DTKS, maka data akan dipadankan
                                        melalui akun Sistem Informasi Kesejahteraan Sosial (SIKS-NG) daerah asal menggunakan
                                        KK/KTP yang sudah pindah ke daerah tujuan untuk memproses Pindah DTKS. Akan tetapi
                                        bila pada saat pengecekan NIK YBS sudah tidak masuk dalam DTKS, maka kembali ke FAQ
                                        No.1.</p>

                                    <p>Terkadang muncul pertanyaan, saya pemegang Kartu Kartu Keluarga Sejahtera (KKS).
                                        Tetapi 1 tahun terakhir ini mengapa tidak pernah cair?</p>

                                    <p>Perlu diluruskan bahwa saat ini kepemilikan Kartu Keluarga Sejahtera (KKS) belum
                                        tentu berarti merupakan fakir miskin/penerima bansos aktif. Kepemilikan KKS juga
                                        bisa menandakan bahwa seseorang/keluarga tersebut sebelumnya pernah menjadi penerima
                                        bansos, yang saat ini bisa jadi sudah bukan penerima bansos.</p>

                                    <p>Perlu dipahami pula bahwa KKS diterbitkan oleh HIMBARA/Bank yang ditunjuk oleh
                                        Menteri Sosial sebagai penyalur bansos sebagai alat transaksi, agar KPM dapat
                                        mencairkan saldo bansos yang ada di rekeningnya. Bank diperintahkan oleh Menteri
                                        Sosial untuk menyalurkan bansos hanya kepada pemilik rekening yang datanya terdaftar
                                        dalam surat perintah pembayaran.</p>

                                    <p>Dengan demikian ada beberapa kemungkinan yang mempengaruhi pencairan bansos di
                                        rekening KKS:</p>

                                    <ol>
                                        <li>Sudah bukan penerima bansos. Beberapa kemungkinannya antara sudah mengundurkan
                                            diri/graduasi, sudah tidak masuk DTKS.</li>
                                        <li>Perubahan data adminduk KPM yang mengakibatkan data di rekening tidak sinkron,
                                            seperti meninggal, pindah adminduk, berganti Kartu Keluarga, dll.</li>
                                        <li>Pergantian Penyalur. Beberapa kemungkinannya antara peralihan penyaluran dari
                                            yang semula melalui HIMBARA jadi melalui PT POS, atau pergantian antara HIMBARA
                                            misal mulai tahun ini BSI masuk ke dalam daftar HIMBARA yang ditunjuk oleh
                                            Menteri Sosial (<a target="_blank"
                                                href="https://dinsos.jogjaprov.go.id/wp-content/uploads/2023/12/2023kmsosial053-Penyalur-Sembako-2023.pdf">Kepmensos
                                                No 53/HUK/2023</a>).</li>
                                    </ol>

                                    <p><strong>Hal apa saja yang dapat menyebabkan seseorang/keluarga tidak lagi menjadi
                                            penerima bansos?</strong></p>

                                    <ol>
                                        <li>Keluar dari DTKS;</li>
                                        <li>Perubahan administrasi kependudukan yang tidak dilaporkan;</li>
                                        <li>Mengundurkan diri secara sukarela;</li>
                                        <li>Ditidaklayakkan oleh Pemerintah Daerah;</li>
                                        <li>Disanggah oleh masyarakat melalui aplikasi Cek Bansos karena dianggap sudah
                                            tidak layak menerima/dalam kondisi mampu/tidak miskin;</li>
                                        <li>Dalam 1 KK sudah tidak memiliki komponen yang dipersyaratkan.</li>
                                    </ol>

                                    <p>Jika Anda menemukan penerima program yang dinilai mampu dan sudah tidak layak
                                        mendapatkan bantuan sosial, Anda dapat melapor melalui Pendamping bansos, Pemerintah
                                        Desa/Kelurahan, Kecamatan, atau langsung ke Dinas Sosial dengan menyertakan
                                        identitas, alamat terlapor serta bukti-bukti yang jelas agar dapat ditindaklanjuti.
                                    </p>

                                    <p>Anda juga dapat memanfaatkan mobile app CekBansos dari Kementerian Sosial RI untuk
                                        memberikan tanggapan kelayakan bagi penerima bantuan sosial yang ada di sekitar
                                        Anda.</p>


                                </div>
                            </div> -->


                        </div>
                    </div>
                </section>
            </div>


        </section>
    </div>

    @push('scripts')
    @endpush
@endsection