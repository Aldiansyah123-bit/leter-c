<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Data;
// use Barryvdh\DomPDF\PDF;
// use Barryvdh\DomPDF\Facade as PDF;
use PDF;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'data'  => Data::count(),
            'asset' => Asset::count(),
            'dataset' => Data::orderBy('id','DESC')->get()
        ];

        return view('dashboard',$data);
    }

    public function cetak($id)
    {
        $data = Data::findOrFail($id);
        $asset= Asset::query()
        ->when($data, function($q) use ($data){
            $q->where('data_id', $data->id);
        })
        ->orderBy('id','DESC')
        ->get();

        $pdf = PDF::loadview('print.asset',compact('data','asset'));
        // $pdf = PDF::loadView('print.asset',['data' => $data, 'asset' => $asset]);
        return $pdf->stream();
        // return $pdf->download('Asset-pdf');
    }
}
