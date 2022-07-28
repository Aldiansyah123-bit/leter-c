@extends('layouts.base')
@section('content')
    <!-- Page Sidebar Ends-->
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid dashboard-default-sec">
          <div class="row">

            <div class="col-xl-6 box-col-12 des-xl-100">
                <div class="row">
                    <div class="col-xl-6 col-md-3 col-sm-6 box-col-3 des-xl-25 rate-sec">
                        <div class="card income-card card-primary">
                          <div class="card-body text-center">
                            <div class="round-box">
                              <i data-feather="chrome"></i>
                            </div>
                            <h5>{{ $data }}</h5>
                            <p>Data Pemilik Letter C</p>
                          </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-3 col-sm-6 box-col-3 des-xl-25 rate-sec">
                        <div class="card income-card card-secondary">
                          <div class="card-body text-center">
                            <div class="round-box">
                              <i data-feather="pie-chart"></i>
                            </div>
                            <h5>{{ $asset }}</h5>
                            <p>Data Asset Letter C</p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-xl-8 box-col-12 des-xl-50">
              <div class="row">
                <div class="col-xl-12 recent-order-sec">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive">
                        <h5>Data Pemilik Letter C</h5>
                        <table class="table table-bordernone">
                          <thead class="bg-danger">
                            <tr class="text-white">
                                <th class="text-white">Nomor Buku C</th>
                                <th class="text-white">Nama Pemilik</th>
                                <th class="text-white">Keterangan</th>
                                @if (auth()->user()->role == 2)
                                    <th></th>
                                @endif

                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($dataset as $t)
                                <tr>
                                    <td>
                                        <p>{{ $t->number }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $t->nama }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $t->keterangan }}</p>
                                    </td>
                                    @if (auth()->user()->role == 2)
                                        <td>
                                            <a href="{{ route('asset.show',[$t->id]) }}" class="text-warning">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
            <div class="col-xl-12 box-col-12">
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
                            <div class="col-sm-12 mt-3">
                                @if (auth()->user()->role == 2)
                                    <a href="{{ route('pemilik') }}" class="text-primary" target="_blank">
                                        <i data-feather="printer"></i>
                                    </a>
                                @endif
                            </div>
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
                                  {{-- <th>Keterangan</th> --}}
                                  <th>Dusun</th>
                                  <th>Desa</th>
                                  <th>Kab/Kota</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($dataset as $item)
                                <tr>
                                    <td>{{ $item->number }}</td>
                                    <td>{{ $item->nama }}</td>
                                    {{-- <td>{{ $item->keterangan }}</td> --}}
                                    <td>{{ $item->dusun }}</td>
                                    <td>{{ $item->desa }}</td>
                                    <td>{{ $item->kab_kota }}</td>
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
          </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
