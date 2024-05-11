<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Formulir;
use Illuminate\Http\Request;
use DataTables;

class FormulirBackendController extends Controller
{
    public function index()
    {
        $formulirs = Formulir::all();

        return view('admin.formulir.datatable', compact('formulirs'));
    }
    public function datatable()
    {
        $formulirs = Formulir::select(['id', 'nama_perusahaan', 'kategori']); // You can add more columns as needed

        return DataTables::of($formulirs)
            ->addColumn('action', function ($formulir) {
                return '<a href="' . route('backend.formulir.show', $formulir->id) . '" class="lihat-detail">Lihat Detail</a>';
            })
            ->addIndexColumn()
            ->toJson();
    }
}
