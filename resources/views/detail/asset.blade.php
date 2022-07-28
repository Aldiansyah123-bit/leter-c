@extends('layouts.base')
@section('content')
<!-- Page Sidebar Ends-->
<div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-sm-6">
            <h3>Detail Asset Letter C</h3>
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
                        <button class="btn btn-primary mb-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalfat">Tambah Data</button>
                        <div class="col-sm-12 text-center mt-3">
                            <a href="{{ route('laporan',[$data->id]) }}" class="text-primary" target="_blank">
                            <i data-feather="printer"></i>
                            </a>
                            <a href="{{ route('asset.index') }}" class="text-danger">
                                <i data-feather="power"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 text-center mt-3">
                        <a href="{{ route('dashboard') }}" class="text-info">
                            <i data-feather="skip-back"></i>
                        </a>
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
                        <h4 class="media-heading f-w-600">No : {{ $data->number }}</h4>
                        {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p> --}}
                      </div>
                    </div>
                  </div>
                  <br><br>
                  <!-- End Invoice Mid-->
                  <div>
                    <div class="table-responsive invoice-table" id="table">
                      <table class="table table-bordered table-striped">
                        <thead class="bg-danger text-white">
                            <tr>
                                <th class="item" rowspan="3">
                                  <h6 class="p-2 mb-5 text-center text-white">Nomor dan Huruf Bagian Persil</h6>
                                </th>
                                <th class="Hours" rowspan="3">
                                    <h6 class="p-2 mb-5 text-center text-white">Kelas Desa</h6>
                                  </th>
                                <th class="Hours" colspan="4">
                                  <h6 class="p-2 text-center text-white">Menurut Daftar Perincian</h6>
                                </th>
                                <th class="Rate" rowspan="3">
                                  <h6 class="p-2 mb-5 text-center text-white">Klasifikasi</h6>
                                </th>
                                <th class="Rate" rowspan="3">
                                    <h6 class="p-2 mb-5 text-center text-white">Sebab & Tanggal Perubahan</h6>
                                </th>
                                <th class="Rate" rowspan="3">
                                    <h6 class="p-2 mb-5 text-center text-white"></h6>
                                </th>
                            </tr>
                            <tr>
                                <th class="Hours" colspan="2">
                                    <h6 class="p-2 text-center text-white">Luas Tanah</h6>
                                </th>
                                <th class="Hours" colspan="2">
                                    <h6 class="p-2 text-center text-white">Iuran</h6>
                                </th>
                            </tr>
                            <tr>
                                <th class="Hours">
                                    <h6 class="p2 text-center text-white">ha</h6>
                                </th>
                                <th class="Hours">
                                    <h6 class="p2 text-center text-white">da</h6>
                                </th>
                                <th class="Hours">
                                    <h6 class="p2 text-center text-white">R</h6>
                                </th>
                                <th class="Hours">
                                    <h6 class="p2 text-center text-white">S</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($asset as $item)
                            <tr>
                                <td>
                                    <h6 class="m-0 text-center">{{ $item->no_persil }}</h6>
                                </td>
                                <td>
                                    <h6 class="itemtext digits text-center">{{ $item->kelas_desa }}</h6>
                                </td>
                                <td>
                                    <h6 class="itemtext digits text-center">{{ $item->ha }}</h6>
                                </td>
                                <td>
                                    <h6 class="itemtext digits text-center">{{ $item->da }}</h6>
                                </td>
                                <td>
                                    <h6 class="itemtext digits text-center">{{ $item->R }}</h6>
                                </td>
                                <td>
                                    <h6 class="itemtext digits text-center">{{ $item->S }}</h6>
                                </td>
                                <td>
                                    <h6 class="itemtext digits text-center">{{ $item->type }}</h6>
                                </td>
                                <td>
                                    <h6 class="itemtext digits text-center">{{ $item->alasan }}</h6>
                                </td>
                                @if (auth()->user()->role !=2)
                                    <td>
                                        <a href="" class="text-info" data-bs-toggle="modal" data-bs-target="#Update{{ $item->id }}">
                                            <i data-feather="edit"></i>
                                        </a>
                                        <a href="" class="text-danger" data-bs-toggle="modal" data-bs-target="#Delete{{ $item->id }}">
                                            <i data-feather="delete"></i>
                                        </a>
                                    </td>
                                @endif
                                @include('modal.asset')
                            </tr>
                            @endforeach
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
<div class="modal fade" id="exampleModalfat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel2">Tambah Data</h5>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('asset.store',["id"]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="mb-3">
                    <input class="form-control" type="text" name="id" value="{{ $data->id }}" hidden>
                    <label class="col-form-label" for="recipient-name">Nomor Persil</label>
                    <input class="form-control" type="text" name="no_persil" placeholder="Nomor Persil">
                </div>
                <div class="mb-3">
                    <label class="col-form-label" for="recipient-name">Kelas Desa</label>
                    {{-- <input class="form-control" type="text" name="kelas_desa" placeholder="Kelas Desa"> --}}
                    <select class="form-select digits" id="exampleFormControlSelect9" name="kelas_desa">
                        <option>--- Select ---</option>
                        <option value="Darat-I (Satu)">Darat-I (Satu)</option>
                        <option value="Sawah-I (Satu)">Sawah-I (Satu)</option>
                        <option value="Darat-II (Dua)">Darat-II (Dua) </option>
                        <option value="Sawah-II (Dua)">Sawah-II (Dua)</option>
                        <option value="Darat-III (Tiga)">Darat-III (Tiga)</option>
                        <option value="Sawah-III (Tiga)">Sawah-III (Tiga)</option>
                        <option value="Darat-IV (Empat)">Darat-IV (Empat)</option>
                        <option value="Sawah-IV (Empat)">Sawah-IV (Empat)</option>

                    </select>
                </div>
                <label class="col-form-label" for="recipient-name">Luas Tanah</label>
                <div class="mb-3 col-md-6">
                    <input class="form-control" type="number" name="ha" placeholder="ha">
                </div>
                <div class="mb-3 col-md-6">
                    <input class="form-control" type="number" name="da" placeholder="da">
                </div>
                <label class="col-form-label" for="recipient-name">Iuran</label>
                <div class="mb-3 col-md-6">
                    <input class="form-control" type="number" name="R" placeholder="R">
                </div>
                <div class="mb-3 col-md-6">
                    <input class="form-control" type="number" name="S" placeholder="S">
                </div>
                <div class="mb-3">
                    <label class="col-form-label" for="recipient-name">Klasifikasi</label>
                    <select class="form-select digits" id="exampleFormControlSelect9" name="type">
                        <option>--- Select ---</option>
                        <option value="Sawah">Sawah</option>
                        <option value="Kering">Kering</option>
                    </select>
                </div>
                {{-- <div class="mb-3">
                    <label class="col-form-label" for="recipient-name">Bukti Surat</label>
                    <input class="form-control" type="file" name="file" placeholder="Foto KTP">
                </div> --}}
                <div class="mb-3">
                    <label class="col-form-label" for="message-text">Sebab & Tanggal Perubahan</label>
                    <textarea class="form-control" id="message-text" name="alasan" placeholder=""></textarea>
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
