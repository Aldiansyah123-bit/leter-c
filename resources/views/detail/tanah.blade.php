@extends('layouts.base')
@section('content')
<!-- Page Sidebar Ends-->
<div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-sm-6">
            <h3>Detail Tanah</h3>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div>
      <!-- Container-fluid starts-->
      <div class="container invoice">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <div>
                  <div>
                    <div class="col-sm-12 text-center mt-3">
                        <a href="" class="text-primary">
                          <i data-feather="printer"></i>
                        </a>
                        <a href="{{ route('tanah.index') }}" class="text-danger">
                            <i data-feather="power"></i>
                        </a>
                    </div>
                  </div>
                  <!-- End InvoiceTop-->
                  <div class="row invo-profile">
                    <div class="col-xl-4">
                      <div class="media">
                        <div class="media-left"><img class="media-object rounded-circle img-60" src="../assets/images/user/1.jpg" alt=""></div>
                        <div class="media-body m-l-20">
                          <h4 class="media-heading f-w-900">Nama : {{ $data->nama }}</h4>
                          {{-- <p>JohanDeo@gmail.com<br><span class="digits">555-555-5555</span></p> --}}
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-8">
                      <div class="text-xl-end" id="project">
                        <h4 class="media-heading f-w-600">No : {{ $data->no_buku }}</h4>
                        {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p> --}}
                      </div>
                    </div>
                  </div>
                  <br><br>
                  <!-- End Invoice Mid-->
                  <div>
                    <div class="table-responsive invoice-table" id="table">
                      <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="item" rowspan="3">
                                  <h6 class="p-2 mb-5 text-center">Nomor dan Huruf Bagian Persil</h6>
                                </th>
                                <th class="Hours" rowspan="3">
                                    <h6 class="p-2 mb-5 text-center">Kelas Desa</h6>
                                  </th>
                                <th class="Hours" colspan="4">
                                  <h6 class="p-2 text-center">Menurut Daftar Perincian</h6>
                                </th>
                                <th class="Rate" rowspan="3">
                                  <h6 class="p-2 mb-5 text-center">Sebab & Tanggal Perubahan</h6>
                                </th>
                            </tr>
                            <tr>
                                <th class="Hours" colspan="2">
                                    <h6 class="p-2 text-center">Luas Tanah</h6>
                                </th>
                                <th class="Hours" colspan="2">
                                    <h6 class="p-2 text-center">Iuran</h6>
                                </th>
                            </tr>
                            <tr>
                                <th class="Hours">
                                    <h6 class="p2 text-center">ha</h6>
                                </th>
                                <th class="Hours">
                                    <h6 class="p2 text-center">da</h6>
                                </th>
                                <th class="Hours">
                                    <h6 class="p2 text-center">R</h6>
                                </th>
                                <th class="Hours">
                                    <h6 class="p2 text-center">S</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h6 class="m-0 text-center">{{ $data->no_persil }}</h6>
                                </td>
                                <td>
                                    <h6 class="itemtext digits text-center">{{ $data->kelas_desa }}</h6>
                                </td>
                                <td>
                                    <h6 class="itemtext digits text-center">{{ $data->ha }}</h6>
                                </td>
                                <td>
                                    <h6 class="itemtext digits text-center">{{ $data->da }}</h6>
                                </td>
                                <td>
                                    <h6 class="itemtext digits text-center">{{ $data->R }}</h6>
                                </td>
                                <td>
                                    <h6 class="itemtext digits text-center">{{ $data->S }}</h6>
                                </td>
                                <td>
                                    <h6 class="itemtext digits text-center">{{ $data->deskripsi }}</h6>
                                </td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- End InvoiceBot-->
                </div>
                <!-- End Invoice-->
                <!-- End Invoice Holder-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Container-fluid Ends-->
    </div>
</div>
<!-- footer start-->
@endsection
