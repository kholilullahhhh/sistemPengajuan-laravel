<div class="card-header">
    <h4>Form Pengaduan </h4>
</div>


<div class="col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Form Pengaduan</h4>
        </div>

        <form action="{{ route('permintaan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input required name="nama" id="nama" type="text" class="form-control"
                                placeholder="Masukkan nama lengkap">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input required name="email" id="email" type="email" class="form-control"
                                placeholder="Masukkan email">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="jkl">Jenis Kelamin</label>
                            <select required name="jkl" id="jkl" class="form-control">
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="telepon">No Telp</label>
                            <input required name="telepon" id="telepon" type="text" class="form-control"
                                placeholder="Masukkan nomor telepon">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input required name="alamat" id="alamat" type="text" class="form-control"
                                placeholder="Masukkan alamat lengkap">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="foto_bukti_keluhan">Foto Bukti Keluhan</label>
                            <input type="file" name="foto_bukti_keluhan" id="foto_bukti_keluhan"
                                class="form-control-file">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_kategori">Kategori Keluhan</label>
                            <select required name="id_kategori" id="id_kategori" class="form-control">
                                <option value="">-- Pilih --</option>
                                @foreach ($kategori as $v)
                                    <option value="{{ $v->id }}">{{ $v->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="keluhan">Keluhan</label>
                    <textarea required name="keluhan" id="keluhan" class="form-control"
                        placeholder="Masukkan keluhan anda" rows="4"></textarea>
                </div>
            </div>

    </div>




    <div class="card-footer text-right">
        <button class="btn btn-primary " type="submit">Submit</button>
        <button class="btn btn-secondary mx-1" type="reset">Reset</button>
    </div>
    </form>
</div>

<script></script>