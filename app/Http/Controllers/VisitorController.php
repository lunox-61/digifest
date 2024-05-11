<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VisitorController extends Controller
{
    public function countVisitors(Request $request)
    {
        try {
            // Dapatkan nama halaman saat ini
            $currentPage = $request->route()->getName();

            // Dapatkan tanggal kunjungan saat ini
            $visitDate = now()->toDateString();

            // Cari atau buat entri kunjungan berdasarkan halaman dan tanggal
            $visitor = Visitor::firstOrNew([
                'page_name' => $currentPage,
                'visit_date' => $visitDate,
            ]);

            // Increment jumlah kunjungan
            $visitor->visit_count++;
            $visitor->save();

            // Dapatkan jumlah kunjungan untuk semua hari dalam seminggu
            $daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            $visitorCounts = [];

            $visitorsForWeek = Visitor::select('visit_count', 'visit_date')
                ->where('page_name', $currentPage)
                ->whereBetween('visit_date', [now()->startOfWeek(), now()->endOfWeek()])
                ->get();

            foreach ($daysOfWeek as $day) {
                $visitorCounts[] = $visitorsForWeek->where('visit_date', now()->startOfWeek()->modify('next ' . $day)->toDateString())->sum('visit_count');
            }

            return response()->json(['visitor_counts' => $visitorCounts]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan dalam menghitung kunjungan.']);
        }
    }

}
