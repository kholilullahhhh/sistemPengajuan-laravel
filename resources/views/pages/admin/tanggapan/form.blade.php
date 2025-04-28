<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modalAddLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAddLabel">Tambah Tanggapan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formSubmit" method="POST">
                    @csrf
                    <input type="hidden" name="_method" id="methodType" value="POST">
                    <input type="hidden" name="id" id="formId" class="form-control">
                    <input type="hidden" id="actionURL" value="{{ route('tanggapan.store') }}">

                    <div class="form-group">
                        <label for="name">Nama Keluhan</label>
                        <select name="id_keluhan_222406" id="id_keluhan_222406" class="form-control" required>
                            <option value="">-- pilih keluhan --</option>
                            @foreach ($keluhan as $v)
                                <option value="{{ $v->id }}">{{ $v->keluhan_222406 }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="password">Tanggapan</label>
                        <input type="text" name="tanggapan_222406" id="tanggapan_222406" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="role">Tanggal Tanggapan</label>
                        <input type="date" name="tgl_tanggapan_222406" id="tgl_tanggapan_222406" value="{{ date('Y-m-d') }}" readonly class="form-control">
                    </div>

                    <button type="submit" id="submitUpdate" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
