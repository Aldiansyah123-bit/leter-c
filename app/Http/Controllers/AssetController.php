<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Data;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data::with(['asset'])->orderBy('id','DESC')->get();

        return view('asset',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'no_persil'     => 'required',
            'kelas_desa'    => 'required',
            'ha'            => 'required',
            'da'            => 'required',
            'R'             => 'required',
            'S'             => 'required',
            'type'          => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),400);
        }

        // if($request->hasFile('file')){
        //     // ada file yang diupload
        //     $filenameWithExt = $request->file('file')->getClientOriginalName();
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     $extension = $request->file('file')->getClientOriginalExtension();
        //     $filefileSimpan = $filename.'_'.time().'.'.$extension;
        //     $path = $request->file('file')->move(public_path('file'),$filefileSimpan);

        // }else{
        //     // tidak ada file yang diupload
        //     $filefileSimpan =  null;
        // }

        $data = Asset::create([
            'data_id'   => $request->id,
            'no_persil' => $request->no_persil,
            'kelas_desa'=> $request->kelas_desa,
            'ha'        => $request->ha,
            'da'        => $request->da,
            'R'         => $request->R,
            'S'         => $request->S,
            'type'      => $request->type,
            // 'metode'    => $request->metode,
            // 'tahun'     => $request->tahun,
            // 'atas_nama' => $request->atas_nama,
            'alasan'    => $request->alasan,
            // 'file'      => $filefileSimpan
        ]);

        if ($data instanceof Model) {
            toastr()->success('Data Berhasil Disimpan !!');

            return back();
        }
        toastr()->error('Data Gagal Disimpan');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $data = Data::findOrFail($id);
        $asset = Asset::query()
            ->when($data, function($q) use ($data){
                $q->where('data_id', $data->id);
            })
            ->orderBy('id','DESC')
            ->get();
        // $asset = Asset::where('data_id',$data->id)->get();

        return view('detail.asset',compact('data','asset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'no_persil'     => 'required',
            'kelas_desa'    => 'required',
            'ha'            => 'required',
            'da'            => 'required',
            'R'             => 'required',
            'S'             => 'required',
            'type'          => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),400);
        }

        // if($request->hasFile('file')){
        //     // ada file yang diupload
        //     $filenameWithExt = $request->file('file')->getClientOriginalName();
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     $extension = $request->file('file')->getClientOriginalExtension();
        //     $filefileSimpan = $filename.'_'.time().'.'.$extension;
        //     $path = $request->file('file')->move(public_path('file'),$filefileSimpan);

        // }else{
        //     // tidak ada file yang diupload
        //     $filefileSimpan =  null;
        // }

        Asset::findOrFail($id)->update([
            'data_id'   => $request->id,
            'no_persil' => $request->no_persil,
            'kelas_desa'=> $request->kelas_desa,
            'ha'        => $request->ha,
            'da'        => $request->da,
            'R'         => $request->R,
            'S'         => $request->S,
            'type'      => $request->type,
            // 'metode'    => $request->metode,
            // 'tahun'     => $request->tahun,
            // 'atas_nama' => $request->atas_nama,
            'alasan'    => $request->alasan,
            // 'file'      => $filefileSimpan
        ]);

        toastr()->success('Data Berhasil Di Update');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Asset::destroy($id);
        toastr()->success('Data Berhasil Di Hapus');
        return back();
    }
}
