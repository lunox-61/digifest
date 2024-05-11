<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;
use App\Models\Jadwal;
use App\Models\Formulir;

use App\Exports\HitunganExport;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Models\Formulir as FormulirDashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function index()
    {
        // Simulate data retrieval
        $totalUsers = User::count();
        $formStats = Formulir::count();
        $totalPosts = Post::count();
        $totalSchedule = Jadwal::count();


        //tampil radar chart
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

        return view('admin.dashboard', compact('totalUsers', 'formStats', 'totalPosts', 'totalSchedule', 'formulirs', 'hasilnilai1', 'hasilnilai2', 'hasilnilai3', 'hasilnilai4', 'hasilnilai5', 'totalRatarata6', 'variance'));
    }
    public function showUser()
    {
        // Logika yang diperlukan untuk menampilkan halaman
        return view('admin.user.index');
    }
    public function showPost()
    {
        $post = Post::all();
        return view('admin.post.index', compact('post'));
    }
    public function showSchedule()
    {
        $jadwal = Jadwal::all();
        return view('admin.jadwal.index', compact('jadwal'));
    }
    public function showForm()
    {
        $jadwal = Jadwal::all();
        return view('admin.formulir.datatable', compact('form'));
    }

    public function exportToExcel()
    {
    // Export data ke Excel
    return Excel::download(new HitunganExport(), 'hitungan_tabulasi.xlsx');
    }
}
