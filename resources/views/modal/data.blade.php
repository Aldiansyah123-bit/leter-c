<div class="modal fade" id="Update{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel2">Edit Data</h5>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('data.update',[$item->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row g-3">
                <div class="mb-3">
                    <label class="col-form-label" for="recipient-name">Nomor</label>
                    <input class="form-control" type="number" name="number" placeholder="Nomor" value="{{ $item->number }}">
                </div>
                <div class="mb-3">
                    <label class="col-form-label" for="recipient-name">Nama Pemilik</label>
                    <input class="form-control" type="text" name="nama" placeholder="Nama Pemilik" value="{{ $item->nama }}">
                </div>
                <div class="mb-3">
                    <label class="col-form-label" for="recipient-name">Upload Leter C</label>
                    <input class="form-control" type="file" name="file" placeholder="Foto KTP" value="{{ $item->file }}">
                </div>
                <div class="mb-3">
                    <label class="col-form-label" for="message-text">Keterangan</label>
                    <textarea class="form-control" id="message-text" name="keterangan" placeholder="Sebeb & Tanggal Perubahan">{{ $item->keterangan }}</textarea>
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
        <form action="{{ route('data.destroy',[$item->id]) }}" method="POST">
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
