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
                            <p>Data Milik Asset</p>
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
                            <p>Data Asset</p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 box-col-12 des-xl-50">
              <div class="row">
                <div class="col-xl-12 recent-order-sec">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive">
                        <h5>Data </h5>
                        <table class="table table-bordernone">
                          <thead>
                            <tr>
                              <th>Nomor</th>
                              <th>Nama Pemilik</th>
                              <th>Keterangan</th>
                              {{-- <th>Kelas Desa</th> --}}
                              {{-- <th>Luas Tanah</th> --}}
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
                                </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
