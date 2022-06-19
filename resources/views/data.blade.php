@extends('layouts.base')

@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-sm-6">
            <h3>Data Pemilik Asset</h3>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="row">
        <!-- Base styles-->
        <div class="col-sm-12">
          <div class="card">
              <div class="card-body">
                <button class="btn btn-primary mb-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalfat">Tambah Data</button>
              <div class="table-responsive">
                <table class="display" id="example-style-1">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Nama Pemilik</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->number }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td class="text-center">
                            {{-- <a href="" class="text-warning" data-bs-toggle="modal" data-bs-target="#Print{{ $item->id }}">
                                <i data-feather="printer"></i>
                            </a> --}}
                            <a href="" class="text-info" data-bs-toggle="modal" data-bs-target="#Update{{ $item->id }}">
                                <i data-feather="edit"></i>
                            </a>
                            <a href="" class="text-danger" data-bs-toggle="modal" data-bs-target="#Delete{{ $item->id }}">
                                <i data-feather="delete"></i>
                            </a>
                        </td>
                        @include('modal.data')
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- Base styles Ends-->
      </div>
    </div>
</div>
<div class="modal fade" id="exampleModalfat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel2">Tambah Data</h5>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('data.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="mb-3">
                    <label class="col-form-label" for="recipient-name">Nomor</label>
                    <input class="form-control" type="number" name="number" placeholder="Nomor">
                </div>
                <div class="mb-3">
                    <label class="col-form-label" for="recipient-name">Nama Pemilik</label>
                    <input class="form-control" type="text" name="nama" placeholder="Nama Pemilik">
                </div>
                <div class="mb-3">
                    <label class="col-form-label" for="recipient-name">Upload Leter C</label>
                    <input class="form-control" type="file" name="file" placeholder="Foto KTP">
                </div>
                <div class="mb-3">
                    <label class="col-form-label" for="message-text">Keterangan</label>
                    <textarea class="form-control" id="message-text" name="keterangan" placeholder="Sebeb & Tanggal Perubahan"></textarea>
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
@endsection
