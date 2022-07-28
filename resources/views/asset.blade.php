@extends('layouts.base')
@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-sm-6">
            <h3>Data Asset Letter C</h3>
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
                {{-- <button class="btn btn-primary mb-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalfat" data-whatever="@mdo">Tambah Data</button> --}}
              <div class="table-responsive">
                <table class="display" id="example-style-1">
                  <thead class="bg-success text-bold">
                    <tr>
                      <th>Nomor Buku C</th>
                      <th>Nama Pemilik</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->number }}</td>
                            <td><a href="{{ route('asset.show',[$item->id]) }}" class="text-primary">{{ $item->nama }}</a></td>
                            <td>{{ $item->keterangan }}</td>
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
@endsection
