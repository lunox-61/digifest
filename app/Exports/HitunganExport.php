<?php

namespace App\Exports;
use App\Models\Formulir;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;

class HitunganExport implements FromCollection, WithHeadings, WithStyles
{
    public function collection()
    {
        // Ambil data formulir dari database
        $formulirs = Formulir::all();
        $totalFormulirs = count($formulirs);

        // Inisialisasi array untuk menyimpan data yang akan diekspor ke Excel
        $exportData = [];

        // Loop melalui setiap formulir untuk menghitung hasilnya dan menambahkan nama perusahaan
        foreach ($formulirs as $formulir) {
            $hasilnilai1 = $this->hitungTatakelola($formulir);
            $hasilnilai2 = $this->hitungSDM($formulir);
            $hasilnilai3 = $this->hitungKeuangan($formulir);
            $hasilnilai4 = $this->hitungInovasi($formulir);
            $hasilnilai5 = $this->hitungJaringan($formulir);

            // Tambahkan data ke dalam array
            $exportData[] = [
                'Nama Perusahaan' => $formulir->nama_perusahaan,
                'Tatakelola' => $hasilnilai1,
                'SDM' => $hasilnilai2,
                'Keuangan' => $hasilnilai3,
                'Inovasi' => $hasilnilai4,
                'Jaringan' => $hasilnilai5,
                
            ];
        }

        // Return data sebagai collection
        return collect($exportData);
    }

    public function headings(): array
    {
        return [
            'Nama Perusahaan',
            'Tatakelola',
            'SDM',
            'Keuangan',
            'Inovasi',
            'Jaringan',
        ];
    }

    // Fungsi untuk menghitung Tatakelola
    private function hitungTatakelola($formulir)
    {
        $totalRatarata1 = ($formulir->jawaban_1 + $formulir->jawaban_2 + $formulir->jawaban_3 + $formulir->jawaban_4 + $formulir->jawaban_5 + $formulir->jawaban_6 + $formulir->jawaban_7 + $formulir->jawaban_8 + $formulir->jawaban_9 + $formulir->jawaban_10) / 10;
        return $totalRatarata1 * 100;
    }

    // Fungsi untuk SDM
    private function hitungSDM($formulir)
    {
        $totalRatarata2 = ($formulir->jawaban2_6 + $formulir->jawaban2_7 + $formulir->jawaban2_8 + $formulir->jawaban2_9 + $formulir->jawaban2_10 + $formulir->jawaban2_11 + $formulir->jawaban2_12 + $formulir->jawaban2_13) / 8;
        return $totalRatarata2 * 100;
    }

    // Fungsi untuk keuangan
    private function hitungKeuangan($formulir)
    {
        $totalRatarata3 = ($formulir->jawaban3_7 + $formulir->jawaban3_8 + $formulir->jawaban3_9 + $formulir->jawaban3_10 + $formulir->jawaban3_11 + $formulir->jawaban3_12 + $formulir->jawaban3_13 + $formulir->jawaban3_14) / 8;
        return $totalRatarata3 * 100;
    }

    // Fungsi untuk inovasi
    private function hitungInovasi($formulir)
    {
        $totalRatarata4 = ($formulir->jawaban4_2 + $formulir->jawaban4_3 + $formulir->jawaban4_4 + $formulir->jawaban4_5 + $formulir->jawaban4_6 + $formulir->jawaban4_7 + $formulir->jawaban4_8 + $formulir->jawaban4_9 + $formulir->jawaban4_10 + $formulir->jawaban4_11 + $formulir->jawaban4_12) / 11;
        return $totalRatarata4 * 100;
    }

    // Fungsi untuk jaringan
    private function hitungJaringan($formulir)
    {
        $totalRatarata5 = ($formulir->jawaban5_1 + $formulir->jawaban5_2 + $formulir->jawaban5_3 + $formulir->jawaban5_4 + $formulir->jawaban5_5 + $formulir->jawaban5_6 + $formulir->jawaban5_7) / 7;
        return $totalRatarata5 * 100;
    }

    //desain table excel
    public function styles($sheet)
    {
        // Hitung jumlah baris yang akan diekspor
        $totalRows = count($this->collection());
    
        // Menambahkan garis tepi tabel
        $sheet->getStyle('A1:F' . ($totalRows + 1))->getBorders()->getAllBorders()->setBorderStyle('thin');
        
        // Contoh menambahkan garis horizontal pada header
        $sheet->getStyle('A1:F1')->getBorders()->getBottom()->setBorderStyle('thick');
        
        // Menambahkan latar belakang warna pada baris pertama
        $sheet->getStyle('A1:F1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF00');
    
        // Membuat teks pada baris pertama menjadi bold
        $sheet->getStyle('A1:F1')->getFont()->setBold(true);
    
        // Mengatur perataan teks pada sel header menjadi tengah
        $sheet->getStyle('A1:F1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
    
        // Mengatur lebar kolom sesuai dengan panjang teks di header
        $sheet->getColumnDimension('A')->setWidth(20);  // Sesuaikan lebar kolom sesuai kebutuhan
        $sheet->getColumnDimension('B')->setWidth(15);
        $sheet->getColumnDimension('C')->setWidth(15);
        $sheet->getColumnDimension('D')->setWidth(15);
        $sheet->getColumnDimension('E')->setWidth(15);
        $sheet->getColumnDimension('F')->setWidth(15);
    
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}
