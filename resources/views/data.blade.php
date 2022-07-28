@extends('layouts.base')

@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-sm-6">
            <h3>Data Pemilik Letter C</h3>
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
                @if (session('message'))
                    <div class="alert alert-danger dark alert-dismissible fade show" role="alert">{{ session('message') }}
                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
              <div class="table-responsive">
                <table class="display" id="example-style-1">
                  <thead class="text-white bg-dark">
                    <tr>
                      <th>Nomor Buku C</th>
                      <th>Nama Pemilik</th>
                      <th>Dusun</th>
                      <th>Desa</th>
                      <th>Kabupaten/Kota</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->number }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->dusun }}</td>
                        <td>{{ $item->desa }}</td>
                        <td>{{ $item->kab_kota }}</td>
                        <td class="text-center">
                            <a href="" class="text-warning" data-bs-toggle="modal" data-bs-target="#Detail{{ $item->id }}">
                                <i data-feather="printer"></i>
                            </a>
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
                    <label class="col-form-label" for="recipient-name">Nomor Buku C</label>
                    <input class="form-control" type="number" name="number" placeholder="Nomor">
                </div>
                <div class="mb-3">
                    <label class="col-form-label" for="recipient-name">Nama Pemilik</label>
                    <input class="form-control" type="text" name="nama" placeholder="Nama Pemilik">
                </div>
                <div class="mb-3">
                    <label class="col-form-label" for="recipient-name">Upload Scan Letter C</label>
                    <input class="form-control" type="file" name="file" placeholder="" accept="image/jpg,image/png,image/jpeg">
                </div>
                <label class="col-form-label" for="recipient-name">Alamat</label>
                <div class="mb-3 col-md-6">
                    <input class="form-control" type="text" name="dusun" placeholder="Dusun">
                </div>
                <div class="mb-3 col-md-6">
                    <input class="form-control" type="text" name="desa" placeholder="Desa">
                </div>
                <div class="mb-3 col-md-12">
                    <input class="form-control" type="text" name="kab_kota" placeholder="Kabupatan/Kota">
                </div>
                {{-- <div class="mb-3">
                    <label class="col-form-label" for="message-text">Keterangan</label>
                    <textarea class="form-control" id="message-text" name="keterangan" placeholder=""></textarea>
                </div> --}}
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
