<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Religion;
use Barryvdh\DomPDF\PDF;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data = Employee::where('nama', 'LIKE', '%' . $request->search . '%')->paginate(5);
            // Session::put('halaman_url', request()->fullUrl());
        } else {
            $data = Employee::paginate(5);
            // Session::put('halaman_url', request()->fullUrl());
        }

        return view('datapegawai', compact('data'));
    }

    public function tambahpegawai()
    {
        $dataagama = Religion::all();
        return view('tambahdata', compact('dataagama'));
    }

    public function insertdata(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'nama' => 'required|max:20',
            'telp' => 'required|min:11|max:12',
        ]);


        $data = Employee::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotopegawai/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampilkandata($id)
    {
        $data = Employee::find($id);
        // dd($data);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|max:20',
            'telp' => 'required|min:11|max:12',
        ]);

        $data = Employee::find($id);
        $data->update($request->all());
        if (session('halaman_url')) {
            return Redirect(session('halaman_url'))->with('success', 'Data Berhasil Diubah');
        }

        return redirect()->route('pegawai')->with('success', 'Data Berhasil Diubah');
    }

    public function deletedata($id)
    {
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Dihapus');
    }

    public function exportpdf()
    {
        $data = Employee::all();

        view()->share('data', $data);
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('datapegawai-pdf');
        return $pdf->download('datapegawai.pdf');
    }
}
