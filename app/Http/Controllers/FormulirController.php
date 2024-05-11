<?php

namespace App\Http\Controllers;
use App\Models\Formulir;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\FormulirValidation;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Illuminate\Support\Facades\DB;

class FormulirController extends Controller{
    public function index(){
        $user = Auth::user();
        return view('formulir.index', compact('user'));
    }

    public function submit(Request $request){
       $request->validate([          
            'file_1' => 'nullable|mimes:docx,png,jpg,jpeg,xls,xlsx,pdf|max:2048',
            'file_2' => 'nullable|mimes:docx,png,jpg,jpeg,xls,xlsx,pdf|max:2048',
            'file_3' => 'nullable|mimes:docx,png,jpg,jpeg,xls,xlsx,pdf|max:2048',
            'file_4' => 'nullable|mimes:docx,png,jpg,jpeg,xls,xlsx,pdf|max:2048',
            'file_5' => 'nullable|mimes:docx,png,jpg,jpeg,xls,xlsx,pdf|max:2048',
        ]);

        $user = auth()->user();
        
        $data = [
            'nama_user' => $request->input('nama_user'),
            //sesi1
            'nama_perusahaan' => $request->input('nama_perusahaan'),
            'kategori' => $request->input('kategori'),
            'bentuk_perusahaan' => $request->input('bentuk_perusahaan'),
            'alamat_perusahaan' => $request->input('alamat_perusahaan'),
            'notelp' => $request->input('notelp'),
            'nohp' => $request->input('nohp'),
            'tahun' => $request->input('tahun'),
            'nama_direktur' => $request->input('nama_direktur'),
            'kriteria' => $request->input('kriteria'),
            //sesi 2
            'jawaban_1' => $request->input('jawaban_1'),
            'jawaban_2' => $request->input('jawaban_2'),
            'jawaban_3' => $request->input('jawaban_3'),
            'jawaban_4' => $request->input('jawaban_4'),
            'jawaban_5' => $request->input('jawaban_5'),
            'jawaban_6' => $request->input('jawaban_6'),
            'jawaban_7' => $request->input('jawaban_7'),
            'jawaban_8' => $request->input('jawaban_8'),
            'jawaban_9' => $request->input('jawaban_9'),
            'jawaban_10' => $request->input('jawaban_10'),
            //sesi 3
            'jawaban2_1' => $request->input('jawaban2_1'),
            'jawaban2_2' => $request->input('jawaban2_2'),
            'jawaban2_3' => $request->input('jawaban2_3'),
            'jawaban2_4' => $request->input('jawaban2_4'),
            'jawaban2_5' => $request->input('jawaban2_5'),
            'jawaban2_6' => $request->input('jawaban2_6'),
            'jawaban2_7' => $request->input('jawaban2_7'),
            'jawaban2_8' => $request->input('jawaban2_8'),
            'jawaban2_9' => $request->input('jawaban2_9'),
            'jawaban2_10' => $request->input('jawaban2_10'),
            'jawaban2_11' => $request->input('jawaban2_11'),
            'jawaban2_12' => $request->input('jawaban2_12'),
            'jawaban2_13' => $request->input('jawaban2_13'),
            //sesi 4
            'jawaban3_1' => $request->input('jawaban3_1'),
            'jawaban3_2' => $request->input('jawaban3_2'),
            'jawaban3_3' => $request->input('jawaban3_3'),
            'jawaban3_4' => $request->input('jawaban3_4'),
            'jawaban3_5' => $request->input('jawaban3_5'),
            'jawaban3_6' => $request->input('jawaban3_6'),
            'jawaban3_7' => $request->input('jawaban3_7'),
            'jawaban3_8' => $request->input('jawaban3_8'),
            'jawaban3_9' => $request->input('jawaban3_9'),
            'jawaban3_10' => $request->input('jawaban3_10'),
            'jawaban3_11' => $request->input('jawaban3_11'),
            'jawaban3_12' => $request->input('jawaban3_12'),
            'jawaban3_13' => $request->input('jawaban3_13'),
            'jawaban3_14' => $request->input('jawaban3_14'),
            //sesi 5
            'jawaban4_1' => $request->input('jawaban4_1'),
            'jawaban4_2' => $request->input('jawaban4_2'),
            'jawaban4_3' => $request->input('jawaban4_3'),
            'jawaban4_4' => $request->input('jawaban4_4'),
            'jawaban4_5' => $request->input('jawaban4_5'),
            'jawaban4_6' => $request->input('jawaban4_6'),
            'jawaban4_7' => $request->input('jawaban4_7'),
            'jawaban4_8' => $request->input('jawaban4_8'),
            'jawaban4_9' => $request->input('jawaban4_9'),
            'jawaban4_10' => $request->input('jawaban4_10'),
            'jawaban4_11' => $request->input('jawaban4_11'),
            'jawaban4_12' => $request->input('jawaban4_12'),
            //sesi 6
            'jawaban5_1' => $request->input('jawaban5_1'),
            'jawaban5_2' => $request->input('jawaban5_2'),
            'jawaban5_3' => $request->input('jawaban5_3'),
            'jawaban5_4' => $request->input('jawaban5_4'),
            'jawaban5_5' => $request->input('jawaban5_5'),
            'jawaban5_6' => $request->input('jawaban5_6'),
            'jawaban5_7' => $request->input('jawaban5_7'),
        ];

        // Mengelola unggahan file
        //file sesi 2
        if ($request->hasFile('file_1')) {
            $path = $request->file('file_1')->store('post-files');
            $data['file_1'] = $path;
        }

        if ($request->hasFile('file_2')) {
            $path = $request->file('file_2')->store('post-files');
            $data['file_2'] = $path;
        }
        
        if ($request->hasFile('file_3')) {
            $path = $request->file('file_3')->store('post-files');
            $data['file_3'] = $path;
        }

        if ($request->hasFile('file_4')) {
            $path = $request->file('file_4')->store('post-files');
            $data['file_4'] = $path;
        }

        if ($request->hasFile('file_5')) {
            $path = $request->file('file_5')->store('post-files');
            $data['file_5'] = $path;
        }

        if ($request->hasFile('file_6')) {
            $path = $request->file('file_6')->store('post-files');
            $data['file_6'] = $path;
        }

        if ($request->hasFile('file_7')) {
            $path = $request->file('file_7')->store('post-files');
            $data['file_7'] = $path;
        }

        if ($request->hasFile('file_8')) {
            $path = $request->file('file_8')->store('post-files');
            $data['file_8'] = $path;
        }

        if ($request->hasFile('file_9')) {
            $path = $request->file('file_9')->store('post-files');
            $data['file_9'] = $path;
        }

        if ($request->hasFile('file_10')) {
            $path = $request->file('file_10')->store('post-files');
            $data['file_10'] = $path;
        }

        //file sesi 3
        if ($request->hasFile('file2_1')) {
            $path = $request->file('file2_1')->store('post-files');
            $data['file2_1'] = $path;
        }

        if ($request->hasFile('file2_2')) {
            $path = $request->file('file2_2')->store('post-files');
            $data['file2_2'] = $path;
        }
        
        if ($request->hasFile('file2_3')) {
            $path = $request->file('file2_3')->store('post-files');
            $data['file2_3'] = $path;
        }

        if ($request->hasFile('file2_4')) {
            $path = $request->file('file2_4')->store('post-files');
            $data['file2_4'] = $path;
        }

        if ($request->hasFile('file2_5')) {
            $path = $request->file('file2_5')->store('post-files');
            $data['file2_5'] = $path;
        }

        if ($request->hasFile('file2_9')) {
            $path = $request->file('file2_9')->store('post-files');
            $data['file2_9'] = $path;
        }

        if ($request->hasFile('file2_10')) {
            $path = $request->file('file2_10')->store('post-files');
            $data['file2_10'] = $path;
        }

        if ($request->hasFile('file2_11')) {
            $path = $request->file('file2_11')->store('post-files');
            $data['file2_11'] = $path;
        }

        if ($request->hasFile('file2_12')) {
            $path = $request->file('file2_12')->store('post-files');
            $data['file2_12'] = $path;
        }

        if ($request->hasFile('file2_13')) {
            $path = $request->file('file2_13')->store('post-files');
            $data['file2_13'] = $path;
        }

        //file sesi 4
        if ($request->hasFile('file3_1')) {
            $path = $request->file('file3_1')->store('post-files');
            $data['file3_1'] = $path;
        }

        if ($request->hasFile('file3_2')) {
            $path = $request->file('file3_2')->store('post-files');
            $data['file3_2'] = $path;
        }
        
        if ($request->hasFile('file3_3')) {
            $path = $request->file('file3_3')->store('post-files');
            $data['file3_3'] = $path;
        }

        if ($request->hasFile('file3_4')) {
            $path = $request->file('file3_4')->store('post-files');
            $data['file3_4'] = $path;
        }

        if ($request->hasFile('file3_7')) {
            $path = $request->file('file3_7')->store('post-files');
            $data['file3_7'] = $path;
        }

        if ($request->hasFile('file3_11')) {
            $path = $request->file('file3_11')->store('post-files');
            $data['file3_11'] = $path;
        }

        if ($request->hasFile('file3_12')) {
            $path = $request->file('file3_12')->store('post-files');
            $data['file3_12'] = $path;
        }

        if ($request->hasFile('file3_13')) {
            $path = $request->file('file3_13')->store('post-files');
            $data['file3_13'] = $path;
        }

        //file sesi 5
        if ($request->hasFile('file4_1')) {
            $path = $request->file('file4_1')->store('post-files');
            $data['file4_1'] = $path;
        }

        if ($request->hasFile('file4_2')) {
            $path = $request->file('file4_2')->store('post-files');
            $data['file4_2'] = $path;
        }
        
        if ($request->hasFile('file4_3')) {
            $path = $request->file('file4_3')->store('post-files');
            $data['file4_3'] = $path;
        }

        if ($request->hasFile('file4_4')) {
            $path = $request->file('file4_4')->store('post-files');
            $data['file4_4'] = $path;
        }

        if ($request->hasFile('file4_5')) {
            $path = $request->file('file4_5')->store('post-files');
            $data['file4_5'] = $path;
        }

        if ($request->hasFile('file4_6')) {
            $path = $request->file('file4_6')->store('post-files');
            $data['file4_6'] = $path;
        }

        if ($request->hasFile('file4_7')) {
            $path = $request->file('file4_7')->store('post-files');
            $data['file4_7'] = $path;
        }

        if ($request->hasFile('file4_8')) {
            $path = $request->file('file4_8')->store('post-files');
            $data['file4_8'] = $path;
        }

        if ($request->hasFile('file4_9')) {
            $path = $request->file('file4_9')->store('post-files');
            $data['file4_9'] = $path;
        }

        if ($request->hasFile('file4_10')) {
            $path = $request->file('file4_10')->store('post-files');
            $data['file4_10'] = $path;
        }

        if ($request->hasFile('file4_11')) {
            $path = $request->file('file4_11')->store('post-files');
            $data['file4_11'] = $path;
        }

        if ($request->hasFile('file4_12')) {
            $path = $request->file('file4_12')->store('post-files');
            $data['file4_12'] = $path;
        }

        //file sesi 6
        if ($request->hasFile('file5_1')) {
            $path = $request->file('file5_1')->store('post-files');
            $data['file5_1'] = $path;
        }

        if ($request->hasFile('file5_2')) {
            $path = $request->file('file5_2')->store('post-files');
            $data['file5_2'] = $path;
        }
        
        if ($request->hasFile('file5_3')) {
            $path = $request->file('file5_3')->store('post-files');
            $data['file5_3'] = $path;
        }

        if ($request->hasFile('file5_4')) {
            $path = $request->file('file5_4')->store('post-files');
            $data['file5_4'] = $path;
        }

        if ($request->hasFile('file5_5')) {
            $path = $request->file('file5_5')->store('post-files');
            $data['file5_5'] = $path;
        }

        if ($request->hasFile('file5_6')) {
            $path = $request->file('file5_6')->store('post-files');
            $data['file5_6'] = $path;
        }

        if ($request->hasFile('file5_7')) {
            $path = $request->file('file5_7')->store('post-files');
            $data['file5_7'] = $path;
        }   

        Formulir::create($data);
        $formResponse = new Formulir([
            'user_id' => $user->id,
        ]);

        return redirect('/formulir')->with('success', 'Formulir berhasil disubmit dan tersimpan ke database! Untuk melihat, klik Partisipasi > Grafik Pribadi');
    }

    public function datatable()
    {
        $formulirs = Formulir::all();

        return view('admin.formulir.datatable', compact('formulirs'));
    }

    public function datadetail($id)
    {
        $formulir = Formulir::findOrFail($id);
        
        //hitungan tatakelola
        $ratarata1 = ($formulir->jawaban_1 + $formulir->jawaban_2 + $formulir->jawaban_3 + $formulir->jawaban_4 + $formulir->jawaban_5 + $formulir->jawaban_6 + $formulir->jawaban_7 + $formulir->jawaban_8 + $formulir->jawaban_9 + $formulir->jawaban_10) / 10;
        $hasilnilai1 = $ratarata1 * 100;

        //hitungan SDM
        $ratarata2 = ($formulir->jawaban2_6 + $formulir->jawaban2_7 + $formulir->jawaban2_8 + $formulir->jawaban2_9 + $formulir->jawaban2_10 + $formulir->jawaban2_11 + $formulir->jawaban2_12 + $formulir->jawaban2_13) / 8;
        $hasilnilai2 = $ratarata2 * 100;
        //hitungan keuangan
        $ratarata3 = ($formulir->jawaban3_7 + $formulir->jawaban3_8 + $formulir->jawaban3_9 + $formulir->jawaban3_10 + $formulir->jawaban3_11 + $formulir->jawaban3_12 + $formulir->jawaban3_13 + $formulir->jawaban3_14) / 8;
        $hasilnilai3 = $ratarata3 * 100;

        //hitungan inovasi
        $ratarata4 = ($formulir->jawaban4_2 + $formulir->jawaban4_3 + $formulir->jawaban4_4 + $formulir->jawaban4_5 + $formulir->jawaban4_6 + $formulir->jawaban4_7 + $formulir->jawaban4_8 + $formulir->jawaban4_9 + $formulir->jawaban4_10 + $formulir->jawaban4_11 + $formulir->jawaban4_12) / 11;
        $hasilnilai4 = $ratarata4 * 100;

        //hitungan jaringan
        $ratarata5 = ($formulir->jawaban5_1 + $formulir->jawaban5_2 + $formulir->jawaban5_3 + $formulir->jawaban5_4 + $formulir->jawaban5_5 + $formulir->jawaban5_6 + $formulir->jawaban5_7) / 7;
        $hasilnilai5 = $ratarata5 * 100;

        //hitungan rata-rata keseluruhan
        $ratarata6 = ($hasilnilai1 + $hasilnilai2 + $hasilnilai3 + $hasilnilai4 + $hasilnilai5 ) / 5;
        
        //hitungan variance
        $selisihKuadratTotal = pow($hasilnilai1 - $ratarata6, 2)
                     + pow($hasilnilai2 - $ratarata6, 2)
                     + pow($hasilnilai3 - $ratarata6, 2)
                     + pow($hasilnilai4 - $ratarata6, 2)
                     + pow($hasilnilai5 - $ratarata6, 2);

            $variance = $selisihKuadratTotal / 5;
        return view('admin.formulir.datadetail', compact('formulir', 'hasilnilai1', 'hasilnilai2', 'hasilnilai3', 'hasilnilai4', 'hasilnilai5', 'ratarata6', 'variance'));
    }

    public function hitunganGlobal()
    {
        $formulirs = Formulir::all();

        $totalFormulirs = count($formulirs);

        $totalRatarata1 = 0;
        $totalRatarata2 = 0;
        $totalRatarata3 = 0;
        $totalRatarata4 = 0;
        $totalRatarata5 = 0;
        $totalRatarata6 = 0;

        foreach ($formulirs as $formulir) {
            $totalRatarata1 += ($formulir->jawaban_1 + $formulir->jawaban_2 + $formulir->jawaban_3 + $formulir->jawaban_4 + $formulir->jawaban_5 + $formulir->jawaban_6 + $formulir->jawaban_7 + $formulir->jawaban_8 + $formulir->jawaban_9 + $formulir->jawaban_10) / 10;
            $totalRatarata2 += ($formulir->jawaban2_6 + $formulir->jawaban2_7 + $formulir->jawaban2_8 + $formulir->jawaban2_9 + $formulir->jawaban2_10 + $formulir->jawaban2_11 + $formulir->jawaban2_12 + $formulir->jawaban2_13) / 8;
            $totalRatarata3 += ($formulir->jawaban3_7 + $formulir->jawaban3_8 + $formulir->jawaban3_9 + $formulir->jawaban3_10 + $formulir->jawaban3_11 + $formulir->jawaban3_12 + $formulir->jawaban3_13 + $formulir->jawaban3_14) / 8;
            $totalRatarata4 += ($formulir->jawaban4_2 + $formulir->jawaban4_3 + $formulir->jawaban4_4 + $formulir->jawaban4_5 + $formulir->jawaban4_6 + $formulir->jawaban4_7 + $formulir->jawaban4_8 + $formulir->jawaban4_9 + $formulir->jawaban4_10 + $formulir->jawaban4_11 + $formulir->jawaban4_12) / 11;
            $totalRatarata5 += ($formulir->jawaban5_1 + $formulir->jawaban5_2 + $formulir->jawaban5_3 + $formulir->jawaban5_4 + $formulir->jawaban5_5 + $formulir->jawaban5_6 + $formulir->jawaban5_7) / 7;
        }

        $ratarata1 = $totalRatarata1 / $totalFormulirs;
        $hasilnilai1 = $ratarata1 * 100;
        
        $ratarata2 = $totalRatarata2 / $totalFormulirs;
        $hasilnilai2 = $ratarata2 * 100;
        
        $ratarata3 = $totalRatarata3 / $totalFormulirs;
        $hasilnilai3 = $ratarata3 * 100;

        $ratarata4 = $totalRatarata4 / $totalFormulirs;
        $hasilnilai4 = $ratarata4 * 100;

        $ratarata5 = $totalRatarata5 / $totalFormulirs;
        $hasilnilai5 = $ratarata5 * 100;

        $totalRatarata6 += ($hasilnilai1 + $hasilnilai2 + $hasilnilai3 + $hasilnilai4 + $hasilnilai5 ) / 5;

        $selisihKuadratTotal = pow($hasilnilai1 - $totalRatarata6, 2)
                        + pow($hasilnilai2 - $totalRatarata6, 2)
                        + pow($hasilnilai3 - $totalRatarata6, 2)
                        + pow($hasilnilai4 - $totalRatarata6, 2)
                        + pow($hasilnilai5 - $totalRatarata6, 2);

                $variance = $selisihKuadratTotal / 5;

        return view('formulir.dataglobal', compact('formulirs', 'hasilnilai1', 'hasilnilai2', 'hasilnilai3', 'hasilnilai4', 'hasilnilai5', 'totalRatarata6', 'variance' ));
    }

    public function userResponses()
    {
        $user = auth()->user();
        $responses = Formulir::where('user_id', $user->id)->get();
        return view('view_anda', compact('responses'));
    }

    public function dataindividu()
    {
       
        $username = auth()->user()->username;
        $formulir = Formulir::where('nama_user', $username)->first();

        if (!$formulir) {
            $pesan = "Anda belum mengisikan formulir.";
            return view('formulir.dataindividu', compact('pesan'));
        }

        //hitungan tatakelola
        $ratarata1 = ($formulir->jawaban_1 + $formulir->jawaban_2 + $formulir->jawaban_3 + $formulir->jawaban_4 + $formulir->jawaban_5 + $formulir->jawaban_6 + $formulir->jawaban_7 + $formulir->jawaban_8 + $formulir->jawaban_9 + $formulir->jawaban_10) / 10;
        $hasilnilai1 = $ratarata1 * 100;

        //hitungan SDM
        $ratarata2 = ($formulir->jawaban2_6 + $formulir->jawaban2_7 + $formulir->jawaban2_8 + $formulir->jawaban2_9 + $formulir->jawaban2_10 + $formulir->jawaban2_11 + $formulir->jawaban2_12 + $formulir->jawaban2_13) / 8;
        $hasilnilai2 = $ratarata2 * 100;
        //hitungan keuangan
        $ratarata3 = ($formulir->jawaban3_7 + $formulir->jawaban3_8 + $formulir->jawaban3_9 + $formulir->jawaban3_10 + $formulir->jawaban3_11 + $formulir->jawaban3_12 + $formulir->jawaban3_13 + $formulir->jawaban3_14) / 8;
        $hasilnilai3 = $ratarata3 * 100;

        //hitungan inovasi
        $ratarata4 = ($formulir->jawaban4_2 + $formulir->jawaban4_3 + $formulir->jawaban4_4 + $formulir->jawaban4_5 + $formulir->jawaban4_6 + $formulir->jawaban4_7 + $formulir->jawaban4_8 + $formulir->jawaban4_9 + $formulir->jawaban4_10 + $formulir->jawaban4_11 + $formulir->jawaban4_12) / 11;
        $hasilnilai4 = $ratarata4 * 100;

        //hitungan jaringan
        $ratarata5 = ($formulir->jawaban5_1 + $formulir->jawaban5_2 + $formulir->jawaban5_3 + $formulir->jawaban5_4 + $formulir->jawaban5_5 + $formulir->jawaban5_6 + $formulir->jawaban5_7) / 7;
        $hasilnilai5 = $ratarata5 * 100;

        //hitungan rata-rata keseluruhan
        $ratarata6 = ($hasilnilai1 + $hasilnilai2 + $hasilnilai3 + $hasilnilai4 + $hasilnilai5 ) / 5;
        
        //hitungan variance
        $selisihKuadratTotal = pow($hasilnilai1 - $ratarata6, 2)
                     + pow($hasilnilai2 - $ratarata6, 2)
                     + pow($hasilnilai3 - $ratarata6, 2)
                     + pow($hasilnilai4 - $ratarata6, 2)
                     + pow($hasilnilai5 - $ratarata6, 2);

            $variance = $selisihKuadratTotal / 5;
        return view('formulir.dataindividu', compact('formulir', 'hasilnilai1', 'hasilnilai2', 'hasilnilai3', 'hasilnilai4', 'hasilnilai5', 'ratarata6', 'variance'));
    }

    public function perbandingan(Request $request)
    {
    
        // Dapatkan data formulir untuk user yang login
        $username = auth()->user()->username;
        $formulirUser = Formulir::where('nama_user', $username)->first();

        

        $formulirLainnya = Formulir::find(request('user_id'));
        $semuaFormulir = Formulir::all();

        $hasilnilai1_1 = 0;
        $hasilnilai2_1 = 0;
        $hasilnilai3_1 = 0;
        $hasilnilai4_1 = 0;
        $hasilnilai5_1 = 0;
        $hasilnilai1_2 = 0;
        $hasilnilai2_2 = 0;
        $hasilnilai3_2 = 0;
        $hasilnilai4_2 = 0;
        $hasilnilai5_2 = 0;
        $ratarata6_1 = 0;
        $ratarata6_2 = 0;
        $variance1 = 0;
        $variance2 = 0;

        
        
        if ($formulirLainnya) {
        //hitungan tatakelola
        $ratarata1_1 = ($formulirUser->jawaban_1 + $formulirUser->jawaban_2 + $formulirUser->jawaban_3 + $formulirUser->jawaban_4 + $formulirUser->jawaban_5 + $formulirUser->jawaban_6 + $formulirUser->jawaban_7 + $formulirUser->jawaban_8 + $formulirUser->jawaban_9 + $formulirUser->jawaban_10) / 10;
        $hasilnilai1_1 = $ratarata1_1 * 100;

        $ratarata1_2 = ($formulirLainnya->jawaban_1 + $formulirLainnya->jawaban_2 + $formulirLainnya->jawaban_3 + $formulirLainnya->jawaban_4 + $formulirLainnya->jawaban_5 + $formulirLainnya->jawaban_6 + $formulirLainnya->jawaban_7 + $formulirLainnya->jawaban_8 + $formulirLainnya->jawaban_9 + $formulirLainnya->jawaban_10) / 10;
        +$hasilnilai1_2 = $ratarata1_2 * 100;

        //hitungan SDM
        $ratarata2_1 = ($formulirUser->jawaban2_6 + $formulirUser->jawaban2_7 + $formulirUser->jawaban2_8 + $formulirUser->jawaban2_9 + $formulirUser->jawaban2_10 + $formulirUser->jawaban2_11 + $formulirUser->jawaban2_12 + $formulirUser->jawaban2_13) / 8;
        $hasilnilai2_1 = $ratarata2_1 * 100;

        $ratarata2_2 = ($formulirLainnya->jawaban2_6 + $formulirLainnya->jawaban2_7 + $formulirLainnya->jawaban2_8 + $formulirLainnya->jawaban2_9 + $formulirLainnya->jawaban2_10 + $formulirLainnya->jawaban2_11 + $formulirLainnya->jawaban2_12 + $formulirLainnya->jawaban2_13) / 8;
        $hasilnilai2_2 = $ratarata2_2 * 100;

        //hitungan keuangan
        $ratarata3_1 = ($formulirUser->jawaban3_7 + $formulirUser->jawaban3_8 + $formulirUser->jawaban3_9 + $formulirUser->jawaban3_10 + $formulirUser->jawaban3_11 + $formulirUser->jawaban3_12 + $formulirUser->jawaban3_13 + $formulirUser->jawaban3_14) / 8;
        $hasilnilai3_1 = $ratarata3_1 * 100;

        $ratarata3_2 = ($formulirLainnya->jawaban3_7 + $formulirLainnya->jawaban3_8 + $formulirLainnya->jawaban3_9 + $formulirLainnya->jawaban3_10 + $formulirLainnya->jawaban3_11 + $formulirLainnya->jawaban3_12 + $formulirLainnya->jawaban3_13 + $formulirLainnya->jawaban3_14) / 8;
        $hasilnilai3_2 = $ratarata3_2 * 100;

        //hitungan inovasi
        $ratarata4_1 = ($formulirUser->jawaban4_2 + $formulirUser->jawaban4_3 + $formulirUser->jawaban4_4 + $formulirUser->jawaban4_5 + $formulirUser->jawaban4_6 + $formulirUser->jawaban4_7 + $formulirUser->jawaban4_8 + $formulirUser->jawaban4_9 + $formulirUser->jawaban4_10 + $formulirUser->jawaban4_11 + $formulirUser->jawaban4_12) / 11;
        $hasilnilai4_1 = $ratarata4_1 * 100;

        $ratarata4_2 = ($formulirLainnya->jawaban4_2 + $formulirLainnya->jawaban4_3 + $formulirLainnya->jawaban4_4 + $formulirLainnya->jawaban4_5 + $formulirLainnya->jawaban4_6 + $formulirLainnya->jawaban4_7 + $formulirLainnya->jawaban4_8 + $formulirLainnya->jawaban4_9 + $formulirLainnya->jawaban4_10 + $formulirLainnya->jawaban4_11 + $formulirLainnya->jawaban4_12) / 11;
        $hasilnilai4_2 = $ratarata4_2 * 100;

        //hitungan jaringan
        $ratarata5_1 = ($formulirUser->jawaban5_1 + $formulirUser->jawaban5_2 + $formulirUser->jawaban5_3 + $formulirUser->jawaban5_4 + $formulirUser->jawaban5_5 + $formulirUser->jawaban5_6 + $formulirUser->jawaban5_7) / 7;
        $hasilnilai5_1 = $ratarata5_1 * 100;

        $ratarata5_2 = ($formulirLainnya->jawaban5_1 + $formulirLainnya->jawaban5_2 + $formulirLainnya->jawaban5_3 + $formulirLainnya->jawaban5_4 + $formulirLainnya->jawaban5_5 + $formulirLainnya->jawaban5_6 + $formulirLainnya->jawaban5_7) / 7;
        $hasilnilai5_2 = $ratarata5_2 * 100;

        //hitungan rata-rata keseluruhan
        $ratarata6_1 = ($hasilnilai1_1 + $hasilnilai2_1 + $hasilnilai3_1 + $hasilnilai4_1 + $hasilnilai5_1 ) / 5;

        $ratarata6_2 = ($hasilnilai1_2 + $hasilnilai2_2 + $hasilnilai3_2 + $hasilnilai4_2 + $hasilnilai5_2 ) / 5;

        // Hitung variance untuk pengguna pertama
        $selisihKuadratTotal1 = pow($hasilnilai1_1 - $ratarata6_1, 2)
                     + pow($hasilnilai2_1 - $ratarata6_1, 2)
                     + pow($hasilnilai3_1 - $ratarata6_1, 2)
                     + pow($hasilnilai4_1 - $ratarata6_1, 2)
                     + pow($hasilnilai5_1 - $ratarata6_1, 2);

        $variance1 = $selisihKuadratTotal1 / 5;

        // Hitung variance untuk pengguna kedua
        $selisihKuadratTotal2 = pow($hasilnilai1_2 - $ratarata6_2, 2)
                     + pow($hasilnilai2_2 - $ratarata6_2, 2)
                     + pow($hasilnilai3_2 - $ratarata6_2, 2)
                     + pow($hasilnilai4_2 - $ratarata6_2, 2)
                     + pow($hasilnilai5_2 - $ratarata6_2, 2);

        $variance2 = $selisihKuadratTotal2 / 5;

    } 

       
    return view('formulir.perbandingan', [
        'formulirUser' => $formulirUser,
        'formulirLainnya' => $formulirLainnya,
        'hasilnilai1_1' => $hasilnilai1_1,
        'hasilnilai2_1' => $hasilnilai2_1,
        'hasilnilai3_1' => $hasilnilai3_1,
        'hasilnilai4_1' => $hasilnilai4_1,
        'hasilnilai5_1' => $hasilnilai5_1,
        'hasilnilai1_2' => $hasilnilai1_2,
        'hasilnilai2_2' => $hasilnilai2_2,
        'hasilnilai3_2' => $hasilnilai3_2,
        'hasilnilai4_2' => $hasilnilai4_2,
        'hasilnilai5_2' => $hasilnilai5_2,
        'ratarata6_1' => $ratarata6_1,
        'ratarata6_2' => $ratarata6_2,
        'variance1' => $variance1,
        'variance2' => $variance2,
        'semuaFormulir' => $semuaFormulir,
    ]);
    }

    public function delete($id)
    {
        $formulir = Formulir::find($id);

        if (!$formulir) {
            return redirect()->back()->with('error', 'Data formulir tidak ditemukan');
        }

        $formulir->delete();

        return redirect()->back()->with('success', 'Data formulir berhasil dihapus');
    }
}

