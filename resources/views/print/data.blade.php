<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pemilik Leter C</title>
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
        <br>
        <table class='table table-bordered'>
            <thead style="background: black; color:white;">
                <tr>
                    <th class="text-center">
                        <h6>Nomor Buku C</h6>
                    </th>
                    <th class="text-center">
                        <h6>Nama Pemilik</h6>
                    </th>
                    <th class="text-center">
                        <h6>Dusun</h6>
                    </th>
                    <th class="text-center">
                        <h6>Desa</h6>
                    </th>
                    <th class="text-center">
                        <h6>Kabupaten/Kota</h6>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>
                        <h6>{{ $item->number }}</h6>
                    </td>
                    <td>
                        <h6>{{ $item->nama }}</h6>
                    </td>
                    <td>
                        <h6>{{ $item->dusun }}</h6>
                    </td>
                    <td>
                        <h6>{{ $item->desa }}</h6>
                    </td>
                    <td>
                        <h6>{{ $item->kab_kota }}</h6>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <div class="text-right">
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
        </div> --}}
</body>
</html>
