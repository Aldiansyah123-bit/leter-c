<div class="modal fade" id="Update{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel2">Edit Data</h5>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('asset.update',[$item->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row g-3">
                <div class="mb-3">
                    <input class="form-control" type="text" name="id" value="{{ $data->id }}" hidden>
                    <label class="col-form-label" for="recipient-name">Nomor Persil</label>
                    <input class="form-control" type="number" name="no_persil" placeholder="Nomor Persil" value="{{ $item->no_persil }}">
                </div>
                <div class="mb-3">
                    <label class="col-form-label" for="recipient-name">Kelas Desa</label>
                    <input class="form-control" type="text" name="kelas_desa" placeholder="Kelas Desa" value="{{ $item->kelas_desa }}">
                </div>
                <label class="col-form-label" for="recipient-name">Luas Tanah</label>
                <div class="mb-3 col-md-6">
                    <input class="form-control" type="number" name="ha" placeholder="ha" value="{{ $item->ha }}">
                </div>
                <div class="mb-3 col-md-6">
                    <input class="form-control" type="number" name="da" placeholder="da" value="{{ $item->da }}">
                </div>
                <label class="col-form-label" for="recipient-name">Iuran</label>
                <div class="mb-3 col-md-6">
                    <input class="form-control" type="number" name="R" placeholder="R" value="{{ $item->R }}">
                </div>
                <div class="mb-3 col-md-6">
                    <input class="form-control" type="number" name="S" placeholder="S" value="{{ $item->S }}">
                </div>
                <select class="form-select digits" id="exampleFormControlSelect9" name="type" value="{{ $item->type }}">
                    <option>--- Select ---</option>
                    <option value="Sawah">Sawah</option>
                    <option value="Kering">Kering</option>
                </select>
                <div class="mb-3">
                    <label class="col-form-label" for="recipient-name">Bukti Surat</label>
                    <input class="form-control" type="file" name="file" placeholder="Foto KTP">
                </div>
                <div class="mb-3">
                    <label class="col-form-label" for="message-text">Sebeb & Tanggal Perubahan</label>
                    <textarea class="form-control" id="message-text" name="alasan" placeholder="Sebeb & Tanggal Perubahan">{{ $item->alasan }}</textarea>
                </div>

            </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Kembali</button>
                  <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
          </form>
        </div>
      </div>
    </div>
</div>


<div class="modal fade" id="Delete{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel2">Delete</h5>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('asset.destroy',[$item->id]) }}" method="POST">
          @csrf
          @method('delete')
            <div class="modal-body">
                Apakah Data ingin Dihapus
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Tidak</button>
                <button class="btn btn-primary" type="submit">Ya</button>
            </div>
        </form>
      </div>
    </div>
</div>
