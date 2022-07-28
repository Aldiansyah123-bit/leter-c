<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Letter C Milik {{ $data->nama }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
    {{-- <center> --}}
        <img src="{{ public_path('logo/logokabmadiun.png') }}" alt="" height="120" style="margin-bottom: -100%; margin-top: 2rem;">
        <center>
            <h4 class="media-heading f-w-600">PEMERINTAH KABUPATEN MADIUN</h4>
            <h4 class="media-heading f-w-600">KECAMATAN BALEREJO</h4>
            <h2 class="media-heading f-w-600">DESA KUWU</h2>
            <p>Jln. Sandi No. 49</p>
            <hr class="bold">
        </center>
        <center>
        <h4 class="media-heading f-w-600">SALINAN LETTER-C DESA</h4>
        </center>
        <br>
        <h5> Nama       : {{ $data->nama }} </h5>
        <h5> Nomor      : {{ $data->number }} </h5>
        {{--<h5> Keterangan : {{ $data->keterangan }} </h5>--}}
        <br>
        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th rowspan="3" class="text-center">
                      <h6 class="mb-5">Nomor dan Huruf Bagian Persil</h6>
                    </th>
                    <th rowspan="3" class="text-center">
                        <h6 class="mb-5">Kelas Desa</h6>
                      </th>
                    <th colspan="4" class="text-center">
                      <h6>Menurut Daftar Perincian</h6>
                    </th>
                    <th rowspan="3" class="text-center">
                      <h6 class="mb-5">Klasifikasi</h6>
                    </th>
                    <th rowspan="3" class="text-center">
                        <h6 class="mb-5">Sebab & Tanggal Perubahan</h6>
                    </th>
                </tr>
                <tr>
                    <th colspan="2" class="text-center">
                        <h6>Luas Tanah</h6>
                    </th>
                    <th colspan="2" class="text-center">
                        <h6>Iuran</h6>
                    </th>
                </tr>
                <tr>
                    <th class="text-center">
                        <h6>ha</h6>
                    </th>
                    <th class="text-center">
                        <h6>da</h6>
                    </th class="text-center">
                    <th class="text-center">
                        <h6>R</h6>
                    </th>
                    <th class="text-center">
                        <h6>S</h6>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($asset as $item)
                <tr>
                    <td>
                        <h6>{{ $item->no_persil }}</h6>
                    </td>
                    <td>
                        <h6>{{ $item->kelas_desa }}</h6>
                    </td>
                    <td>
                        <h6>{{ $item->ha }}</h6>
                    </td>
                    <td>
                        <h6>{{ $item->da }}</h6>
                    </td>
                    <td>
                        <h6>{{ $item->R }}</h6>
                    </td>
                    <td>
                        <h6>{{ $item->S }}</h6>
                    </td>
                    <td>
                        <h6>{{ $item->type }}</h6>
                    </td>
                    <td>
                        <h6 >{{ $item->alasan }}</h6>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-right">
            <!-- <center> -->
                <br><br><br>
                <p>
                    Madiun, {{  \Carbon\Carbon::now()->isoFormat('D MMMM Y')}}
                    <!-- Madiun, {{ date('j M Y', strtotime(\Carbon\Carbon::now())) }}  -->
                </p>
                <p>
                    <!-- Mengetahui, -->
                    Kepala Desa Kuwu
               </p>
                <br><br>
                <p>
                    <u>

                        GUNADI
                    </u>
                </p>
            <!-- </center> -->
        </div>
</body>
</html>
