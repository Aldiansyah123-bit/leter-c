<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Asset Milik {{ $data->nama }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
    <center>
        <h4 class="media-heading f-w-600">Data Asset Milik {{ $data->nama }}</h4>
        <br><br><br>
        <table class='table'>
            <thead>
                <th colspan="3"> <h4> Nama : {{ $data->nama }} </h4></th>
                <th colspan="3" class="text-right"><h4> Nomor : {{ $data->number }} </h4></th>
            </thead>
        </table>
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
                      <h6 class="mb-5">Klarifikasi</h6>
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
    </center>
</body>
</html>
