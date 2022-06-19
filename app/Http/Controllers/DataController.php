<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data::orderBy('id','DESC')->get();

        return view('data',compact('data'));
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
            'number'    => 'required',
            'nama'      => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),400);
        }

        if($request->hasFile('file')){
            // ada file yang diupload
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $filefileSimpan = $filename.'_'.time().'.'.$extension;
            $path = $request->file('file')->move(public_path('file'),$filefileSimpan);

        }else{
            // tidak ada file yang diupload
            $filefileSimpan =  null;
        }

        $data = Data::create([
            'nama'      => $request->nama,
            'number'    => $request->number,
            'file'      => $filefileSimpan,
            'keterangan'=> $request->keterangan
        ]);

        if ($data instanceof Model) {
            toastr()->success('Data Berhasil Disimpan !!');

            return redirect()->route('data.index');
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
    public function show($id)
    {
        //
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
            'number'    => 'required',
            'nama'      => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),400);
        }

        $dat = Data::where('id',$id)->first();

        if($request->hasFile('file')){
            // ada file yang diupload
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $filefileSimpan = $filename.'_'.time().'.'.$extension;
            $path = $request->file('file')->move(public_path('file'),$filefileSimpan);

        }else{
            // tidak ada file yang diupload
            $filefileSimpan =  $dat->file;
        }

        Data::findOrFail($id)->update([
            'nama'      => $request->nama,
            'number'    => $request->number,
            'file'      => $filefileSimpan,
            'keterangan'=> $request->keterangan
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
        Data::destroy($id);
        toastr()->success('Data Berhasil Di Hapus');

        return back();
    }
}
