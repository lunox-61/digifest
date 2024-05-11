@extends('layouts.master')

@section('title', 'Detail Formulir')

@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>Detail Perusahaan</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Nama Perusahaan</label>
                <p>Jawaban anda: {{ $formulir->nama_perusahaan }}</p>
            </div>

            <div class="form-group">
                <label>Sektor Usaha</label>
                <p>Jawaban anda: {{ $formulir->kategori }}</p>
            </div>

            <div class="form-group">
                <label>Bentuk Perusahaan</label>
                <p>Jawaban anda: {{ $formulir->bentuk_perusahaan }}</p>
            </div>

            <div class="form-group">
                <label>Alamat Perusahaan</label>
                <p>Jawaban anda: {{ $formulir->alamat_perusahaan }}</p>
            </div>

            <div class="form-group">
                <label>No Telephone/Fax</label>
                <p>Jawaban anda: {{ $formulir->notelp }}</p>
            </div>

            <div class="form-group">
                <label>No HP</label>
                <p>Jawaban anda: {{ $formulir->nohp }}</p>
            </div>

            <div class="form-group">
                <label>Email</label>
                <p>Jawaban anda: {{ $formulir->email }}</p>
            </div>

            <div class="form-group">
                <label>Tahun Berdiri Perusahaan/PT/CV/Firma</label>
                <p>Jawaban anda: {{ $formulir->tahun }}</p>
            </div>

            <div class="form-group">
                <label>Nama Direktur/Pimpinan Perusahaan/Manajer</label>
                <p>Jawaban anda: {{ $formulir->nama_direktur }}</p>
            </div>

            <div class="form-group">
                <label>Kriteria Kompetisi</label>
                <p>Jawaban anda: {{ $formulir->kriteria }}</p>
            </div>   
        </div>  
    </div>

    <div class="card mt-4">
        <div class="card-header">
            Tatakelola dan Management
        </div>
        <div class="card-body">
            <!-- Pertanyaan 1 -->
            <div class="form-group">
                <label>Pertanyaan 1: Memiliki Nomor Izin Berusaha (NIB)</label>
                <p>Jawaban anda: {{ $formulir->jawaban_1 == 1 ? 'Ya' : 'Tidak' }}</p>
                <label>Lampiran File:</label>
                @if ($formulir->file_1)
                    <p><a href="{{ asset('storage/' . $formulir->file_1) }}" target="_blank">Lihat File 1</a></p>
                @else
                    <p style="color: red;">Dokumen Tidak Ada</p>
                @endif
            </div>

            <!-- Pertanyaan 2 -->
            <div class="form-group">
                <label>Pertanyaan 2: Melaporkan Laporan Kegiatan Penanaman Modal (LKPM)</label>
                <p>Jawaban anda: {{ $formulir->jawaban_2 == 1 ? 'Ya' : 'Tidak' }}</p>
                <label>Lampiran File:</label>
                @if ($formulir->file_2)
                    <p><a href="{{ asset('storage/' . $formulir->file_2) }}" target="_blank">Lihat File 2</a></p>
                @else
                    <p style="color: red;">Dokumen Tidak Ada</p>
                @endif
            </div>

            <div class="form-group">
                <label>Pertanyaan 3: Memiliki struktur perusahaan</label>
                <p>Jawaban anda: {{ $formulir->jawaban_3 == 1 ? 'Ya' : 'Tidak' }}</p>
                <label>Lampiran File:</label>
                @if ($formulir->file_3)
                    <p><a href="{{ asset('storage/' . $formulir->file_3) }}" target="_blank">Lihat File 3</a></p>
                @else
                    <p style="color: red;">Dokumen Tidak Ada</p>
                @endif
            </div>

            <div class="form-group">
                <label>Pertanyaan 4: Memiliki akta notaris/pendirain Perusahaan</label>
                <p>Jawaban anda: {{ $formulir->jawaban_4 == 1 ? 'Ya' : 'Tidak' }}</p>
                <label>Lampiran File:</label>
                @if ($formulir->file_4)
                    <p><a href="{{ asset('storage/' . $formulir->file_4) }}" target="_blank">Lihat File 4</a></p>
                @else
                    <p style="color: red;">Dokumen Tidak Ada</p>
                @endif
            </div>
            <div class="form-group">
                <label>Pertanyaan 5: Memiliki SOP produksi</label>
                <p>Jawaban anda: {{ $formulir->jawaban_5 == 1 ? 'Ya' : 'Tidak' }}</p>
                <label>Lampiran File:</label>
                @if ($formulir->file_5)
                    <p><a href="{{ asset('storage/' . $formulir->file_5) }}" target="_blank">Lihat File 5</a></p>
                @else
                    <p style="color: red;">Dokumen Tidak Ada</p>
                @endif
            </div>

            <div class="form-group">
                <label>Pertanyaan 6: Memiliki website perusahaan (harus aktif)</label>
                <p>Jawaban anda: {{ $formulir->jawaban_6 == 1 ? 'Ya' : 'Tidak' }}</p>
                <label>Lampiran File:</label>
                @if ($formulir->file_6)
                    <p><a href="{{ asset('storage/' . $formulir->file_6) }}" target="_blank">Lihat File 6</a></p>
                @else
                    <p style="color: red;">Dokumen Tidak Ada</p>
                @endif
            </div>

            <div class="form-group">
                <label>Pertanyaan 7: Menggunakan media sosial (harus aktif)</label>
                <p>Jawaban anda: {{ $formulir->jawaban_7 == 1 ? 'Ya' : 'Tidak' }}</p>
                <label>Lampiran File:</label>
                @if ($formulir->file_7)
                    <p><a href="{{ asset('storage/' . $formulir->file_7) }}" target="_blank">Lihat File 7</a></p>
                @else
                    <p style="color: red;">Dokumen Tidak Ada</p>
                @endif
            </div>

            <div class="form-group">
                <label>Pertanyaan 8: Kerjasama dengan perusahaan nasional (kerjasama bisnis/komersial)</label>
                <p>Jawaban anda: {{ $formulir->jawaban_8 == 1 ? 'Ya' : 'Tidak' }}</p>
                <label>Lampiran File:</label>
                @if ($formulir->file_8)
                    <p><a href="{{ asset('storage/' . $formulir->file_8) }}" target="_blank">Lihat File 8</a></p>
                @else
                    <p style="color: red;">Dokumen Tidak Ada</p>
                @endif
            </div>
            <div class="form-group">
                <label>Pertanyaan 9: Kerjasama dengan perusahaan internasional (kerjasama bisnis/komersial)</label>
                <p>Jawaban anda: {{ $formulir->jawaban_9 == 1 ? 'Ya' : 'Tidak' }}</p>
                <label>Lampiran File:</label>
                @if ($formulir->file_9)
                    <p><a href="{{ asset('storage/' . $formulir->file_9) }}" target="_blank">Lihat File 9</a></p>
                @else
                    <p style="color: red;">Dokumen Tidak Ada</p>
                @endif
            </div>

            <div class="form-group">
                <label>Pertanyaan 10: Memiliki portofolio perusahaan/produk (di dalam website perusahaan)</label>
                <p>Jawaban anda: {{ $formulir->jawaban_10 == 1 ? 'Ya' : 'Tidak' }}</p>
                <label>Lampiran File:</label>
                @if ($formulir->file_10)
                    <p><a href="{{ asset('storage/' . $formulir->file_10) }}" target="_blank">Lihat File 10</a></p>
                @else
                    <p style="color: red;">Dokumen Tidak Ada</p>
                @endif
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            SDM (Tahun 2022)
        </div>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label>Pertanyaan 1: Jumlah Tenaga Kerja Tetap</label>
                    <p>Jawaban anda: {{ $formulir->jawaban2_1 }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file2_1)
                        <p><a href="{{ asset('storage/' . $formulir->file2_1) }}" target="_blank">Lihat File 1</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 2: Jumlah Tenaga Kerja Tidak Tetap</label>
                    <p>Jawaban anda: {{ $formulir->jawaban2_2 }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file2_3)
                        <p><a href="{{ asset('storage/' . $formulir->file2_2) }}" target="_blank">Lihat File 2</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 3: Jumlah Tenaga Kerja</label>
                    <p>Jawaban anda: {{ $formulir->jawaban2_3 }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file2_3)
                        <p><a href="{{ asset('storage/' . $formulir->file2_3) }}" target="_blank">Lihat File 3</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 4: Jumlah Tenaga Kerja Yang Mengikuti Pendidikan-pelatihan</label>
                    <p>Jawaban anda: {{ $formulir->jawaban2_4 }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file2_4)
                        <p><a href="{{ asset('storage/' . $formulir->file2_4) }}" target="_blank">Lihat File 4</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Pertanyaan 5: Apakah tingkat pendidikan direktur minimal S1</label>
                    <p>Jawaban anda: {{ $formulir->jawaban2_5 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file2_5)
                        <p><a href="{{ asset('storage/' . $formulir->file2_5) }}" target="_blank">Lihat File 5</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 6: Persentase tenaga kerja tetap</label>
                    <p>Jawaban anda: {{ $formulir->jawaban2_6 }}</p>
                </div>

                <div class="form-group">
                    <label>Pertanyaan 7: Persentase tenaga kerja tidak tetap</label>
                    <p>Jawaban anda: {{ $formulir->jawaban2_7 }}</p>
                </div>

                <div class="form-group">
                    <label>Pertanyaan 8: Persentase SDM mengikuti pelatihan/peningkatan keterampilan</label>
                    <p>Jawaban anda: {{ $formulir->jawaban2_8 }}</p>
                </div>
                <div class="form-group">
                    <label>Pertanyaan 9: Apakah pernah mengikuti inkubasi bisnis oleh pemerintah daerah (kota/kabupaten) atau pusat (kementrian)</label>
                    <p>Jawaban anda: {{ $formulir->jawaban2_9 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file2_9)
                        <p><a href="{{ asset('storage/' . $formulir->file2_9) }}" target="_blank">Lihat File 9</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 10: Apakah pernah mengikuti inkubasi bisnis oleh perguruan tinggi</label>
                    <p>Jawaban anda: {{ $formulir->jawaban2_10 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file2_10)
                        <p><a href="{{ asset('storage/' . $formulir->file2_10) }}" target="_blank">Lihat File 10</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 11: Apakah pernah mengikuti inkubasi bisnis oleh perusahaan/lembaga swasta non perguruan tinggi</label>
                    <p>Jawaban anda: {{ $formulir->jawaban2_11 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file2_11)
                        <p><a href="{{ asset('storage/' . $formulir->file2_11) }}" target="_blank">Lihat File 11</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 12: Apakah ada tenaga kerja berlatar pendidikan minimal sarjana (S1) bidang teknik</label>
                    <p>Jawaban anda: {{ $formulir->jawaban2_12 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file2_12)
                        <p><a href="{{ asset('storage/' . $formulir->file2_12) }}" target="_blank">Lihat File 12</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 13: Apakah melakukan evaluasi komposisi pengurus dan SDM perusahaan</label>
                    <p>Jawaban anda: {{ $formulir->jawaban2_13 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file2_13)
                        <p><a href="{{ asset('storage/' . $formulir->file2_13) }}" target="_blank">Lihat File 13</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>
            </div>

        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            Keuangan (Tahun 2022)
        </div>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label>Pertanyaan 1: Nilai Aset</label>
                    <p>Jawaban anda: {{ $formulir->jawaban3_1 }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file3_1)
                        <p><a href="{{ asset('storage/' . $formulir->file3_1) }}" target="_blank">Lihat File 1</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 2: Nilai Penjualan</label>
                    <p>Jawaban anda: {{ $formulir->jawaban3_2 }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file3_2)
                        <p><a href="{{ asset('storage/' . $formulir->file3_2) }}" target="_blank">Lihat File 2</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 3: Nilai Modal Kerja tahun</label>
                    <p>Jawaban anda: {{ $formulir->jawaban3_3 }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file3_3)
                        <p><a href="{{ asset('storage/' . $formulir->file3_3) }}" target="_blank">Lihat File 3</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 4: Total Modal</label>
                    <p>Jawaban anda: {{ $formulir->jawaban3_4 }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file3_4)
                        <p><a href="{{ asset('storage/' . $formulir->file3_4) }}" target="_blank">Lihat File 4</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 5: Rata-rata tingkat kenaikan keuntungan antara tahun 2021 - 2022</label>
                    <p>Jawaban anda: {{ $formulir->jawaban3_5 }}</p>
                </div>

                <div class="form-group">
                    <label>Pertanyaan 6: Rata-rata tingkat kenaikan penjualan (sales) antara tahun 2021 - 2022</label>
                    <p>Jawaban anda: {{ $formulir->jawaban3_6 }}</p>
                </div>

                <div class="form-group">
                    <label>Pertanyaan 7: Melakukan penyusunan laporan keuangan 2022</label>
                    <p>Jawaban anda: {{ $formulir->jawaban3_7 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file3_7)
                        <p><a href="{{ asset('storage/' . $formulir->file3_7) }}" target="_blank">Lihat File 7</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 8: Nilai total modal dibandingkan aset</label>
                    <p>Jawaban anda: {{ $formulir->jawaban3_8 }}</p>
                </div>

                <div class="form-group">
                    <label>Pertanyaan 9: Nilai tambahan modal kerja dibandingkan total modal</label>
                    <p>Jawaban anda: {{ $formulir->jawaban3_9 }}</p>
                </div>

                <div class="form-group">
                    <label>Pertanyaan 10: Nilai penjualan (sales) dibandingkan asset</label>
                    <p>Jawaban anda: {{ $formulir->jawaban3_10 }}</p>
                </div>

                <div class="form-group">
                    <label>Pertanyaan 11: Memiliki (pernah memiliki) angle investor</label>
                    <p>Jawaban anda: {{ $formulir->jawaban3_11 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file3_11)
                        <p><a href="{{ asset('storage/' . $formulir->file3_11) }}" target="_blank">Lihat File 11</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 12: Pernah/sedang dibina oleh perusahaan bapak asuh? (menjadi anak asuh perusahaan)</label>
                    <p>Jawaban anda: {{ $formulir->jawaban3_12 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file3_12)
                        <p><a href="{{ asset('storage/' . $formulir->file3_12) }}" target="_blank">Lihat File 12</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 13: Pernah/sedang membina perusahaan lain? (mejadi bapak asuh bagi UKM atau perusahaan lain)</label>
                    <p>Jawaban anda: {{ $formulir->jawaban3_13 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file3_13)
                        <p><a href="{{ asset('storage/' . $formulir->file3_13) }}" target="_blank">Lihat File 13</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 14: Apakah memiliki pinjaman usaha ke perbankan atau lembaga keuangan lainnya</label>
                    <p>Jawaban anda: {{ $formulir->jawaban3_14 == 1 ? 'Ya' : 'Tidak' }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            Inovasi
        </div>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label>Pertanyaan 1: Jumlah produk baru yang dikeluarkan selama 2021 dan Juli 2022</label>
                    <p>Jawaban anda: {{ $formulir->jawaban4_1 }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file4_1)
                        <p><a href="{{ asset('storage/' . $formulir->file_1) }}" target="_blank">Lihat File 1</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 2: Apakah mengeluarkan produk baru tahun 2021 dan Juli 2022</label>
                    <p>Jawaban anda: {{ $formulir->jawaban4_2 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file4_2)
                        <p><a href="{{ asset('storage/' . $formulir->file_2) }}" target="_blank">Lihat File 2</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 3: Apakah melakukan riset dan pengembangan (R&D) produk mandiri</label>
                    <p>Jawaban anda: {{ $formulir->jawaban4_3 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file4_3)
                        <p><a href="{{ asset('storage/' . $formulir->file4_3) }}" target="_blank">Lihat File 3</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 4: Melakukan kerjasama Penelitian dan Pengembangan dengan perguruan tinggi atau lembaga riset atau lembaga penyelenggaran riset lainnya termasuk laboratorium riset</label>
                    <p>Jawaban anda: {{ $formulir->jawaban4_4 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file4_4)
                        <p><a href="{{ asset('storage/' . $formulir->file4_4) }}" target="_blank">Lihat File 4</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 5: Apakah menyusun/membuat model bisnis (BMC atau design Thinking atau yang lainnya)</label>
                    <p>Jawaban anda: {{ $formulir->jawaban4_5 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file4_5)
                        <p><a href="{{ asset('storage/' . $formulir->file4_5) }}" target="_blank">Lihat File 5</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 6: Melakukan pembelian mesin/teknologi baru</label>
                    <p>Jawaban anda: {{ $formulir->jawaban4_6 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file4_6)
                        <p><a href="{{ asset('storage/' . $formulir->file4_6) }}" target="_blank">Lihat File 6</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 7: Melakukan pembelian software genuine (lisensi)</label>
                    <p>Jawaban anda: {{ $formulir->jawaban4_7 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file4_7)
                        <p><a href="{{ asset('storage/' . $formulir->file4_7) }}" target="_blank">Lihat File 7</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 8: Memiliki hak paten atau merek atau hak kekayaan intelektual lainnya</label>
                    <p>Jawaban anda: {{ $formulir->jawaban4_8 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file4_8)
                        <p><a href="{{ asset('storage/' . $formulir->file4_8) }}" target="_blank">Lihat File 8</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 9: Apakah melakukan riset pasar</label>
                    <p>Jawaban anda: {{ $formulir->jawaban4_9 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file4_9)
                        <p><a href="{{ asset('storage/' . $formulir->file4_9) }}" target="_blank">Lihat File 9</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 10: Apakah melakukan alpha test atas produk</label>
                    <p>Jawaban anda: {{ $formulir->jawaban4_10 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file4_10)
                    <p><a href="{{ asset('storage/' . $formulir->file4_10) }}" target="_blank">Lihat File 10</a></p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 11: Apakah melakukan beta test atas produk</label>
                    <p>Jawaban anda: {{ $formulir->jawaban4_11 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file4_11)
                        <p><a href="{{ asset('storage/' . $formulir->file4_11) }}" target="_blank">Lihat File 11</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 12: Apakah melakukan gamma test atas produk</label>
                    <p>Jawaban anda: {{ $formulir->jawaban4_12 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file4_12)
                        <p><a href="{{ asset('storage/' . $formulir->file4_12) }}" target="_blank">Lihat File 12</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                    </div>
                </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            Jaringan
        </div>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label>Pertanyaan 1: Apakah tergabung dalam komunitas sejenis (organisasi/komunitas)</label>
                    <p>Jawaban anda: {{ $formulir->jawaban5_1 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file5_1)
                        <p><a href="{{ asset('storage/' . $formulir->file5_1) }}" target="_blank">Lihat File 1</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 2: Apakah melakukan kerjasama dengan perusahaan sejenis/terkait lini produksi</label>
                    <p>Jawaban anda: {{ $formulir->jawaban5_2 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file5_2)
                        <p><a href="{{ asset('storage/' . $formulir->file5_2) }}" target="_blank">Lihat File 2</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 3: Pernah Mengikuti pameran/kompetisi tingkat daerah/provinsi</label>
                    <p>Jawaban anda: {{ $formulir->jawaban5_3 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file5_3)
                        <p><a href="{{ asset('storage/' . $formulir->file5_3) }}" target="_blank">Lihat File 3</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 4: Pernah Mengikuti pameran/kompetisi tingkat nasional</label>
                    <p>Jawaban anda: {{ $formulir->jawaban5_4 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file5_4)
                        <p><a href="{{ asset('storage/' . $formulir->file5_4) }}" target="_blank">Lihat File 4</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 5: Apakah Pernah Mengikuti pameran/kompetisi internasional</label>
                    <p>Jawaban anda: {{ $formulir->jawaban5_5 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file5_5)
                        <p><a href="{{ asset('storage/' . $formulir->file5_5) }}" target="_blank">Lihat File 5</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 6: Apakah pernah berkantor di co-working space atau di technopark</label>
                    <p>Jawaban anda: {{ $formulir->jawaban5_6 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file5_6)
                        <p><a href="{{ asset('storage/' . $formulir->file5_6) }}" target="_blank">Lihat File 6</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Pertanyaan 7: Apakah masih berkantor di co-working space atau di technopark</label>
                    <p>Jawaban anda: {{ $formulir->jawaban5_7 == 1 ? 'Ya' : 'Tidak' }}</p>
                    <label>Lampiran File:</label>
                    @if ($formulir->file5_7)
                        <p><a href="{{ asset('storage/' . $formulir->file5_7) }}" target="_blank">Lihat File 7</a></p>
                    @else
                        <p style="color: red;">Dokumen Tidak Ada</p>
                    @endif
                </div>
            </div>

        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Index</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Tatakelola dan Management</td>
                        <td>{{ number_format($hasilnilai1, 2) }}</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>SDM</td>
                        <td>{{ number_format($hasilnilai2, 2) }}</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Keuangan</td>
                        <td>{{ number_format($hasilnilai3, 2) }}</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Inovasi</td>
                        <td>{{ number_format($hasilnilai4, 2) }}</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Jaringan</td>
                        <td>{{ number_format($hasilnilai5, 2) }}</td>
                    </tr>
                    <tr>
                        <td colspan="2">Rata - Rata</td>
                        <td>{{ number_format($ratarata6, 2) }}</td>
                    </tr>
                    <tr>
                        <td colspan="2">Variance</td>
                        <td>{{ number_format($variance, 2) }}</td>
                    </tr>
                </tbody>
            </table>
            <canvas id="radarChart" width="400" height="400"></canvas>
            <br>
        </div>
    </div>
<script>
    // Mendapatkan semua elemen file yang terdapat dalam formulir
    const fileElements = document.querySelectorAll('div.form-group input[type="file"]');

    // Loop melalui setiap elemen file
    fileElements.forEach(fileElement => {
        fileElement.addEventListener('change', function() {
            const parentFormGroup = this.closest('.form-group');
            const fileLink = parentFormGroup.querySelector('a');

            // Jika tidak ada file yang di-upload, beri keterangan "Dokumen Tidak Ada"
            if (!this.files || this.files.length === 0) {
                if (fileLink) {
                    fileLink.textContent = 'Dokumen Tidak Ada';
                    fileLink.removeAttribute('href');
                    fileLink.removeAttribute('target');
                }
            } else {
                // Jika ada file yang di-upload, tampilkan link untuk melihat file
                if (fileLink) {
                    fileLink.textContent = 'Lihat File';
                    fileLink.setAttribute('href', URL.createObjectURL(this.files[0]));
                    fileLink.setAttribute('target', '_blank');
                }
            }
        });
    });

    function lanjutKeSesi(sesi) {
        document.getElementById('sesi-' + (sesi - 1)).classList.remove('sesi-aktif');
        document.getElementById('sesi-' + sesi).classList.add('sesi-aktif');
        scrollToTop();
    }

    function kembaliKeSesi(sesi) {
        document.getElementById('sesi-' + (sesi + 1)).classList.remove('sesi-aktif');
        document.getElementById('sesi-' + sesi).classList.add('sesi-aktif');
        scrollToTop();
    }

    function pindahKeAkhir() {
        document.getElementById('sesi-1').classList.remove('sesi-aktif');
        document.getElementById('sesi-2').classList.remove('sesi-aktif');
        document.getElementById('sesi-3').classList.remove('sesi-aktif');
        document.getElementById('sesi-4').classList.remove('sesi-aktif');
        document.getElementById('sesi-5').classList.remove('sesi-aktif');
        document.getElementById('sesi-6').classList.remove('sesi-aktif');
        document.getElementById('sesi-7').classList.add('sesi-aktif');
        scrollToTop();
    }
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    //radar chart
    var ctx = document.getElementById('radarChart').getContext('2d');
        var radarChart = new Chart(ctx, {
            type: 'radar',
            data: {
                labels: ['Tatakelola dan Management', 'SDM', 'Keuangan', 'Inovasi', 'Jaringan'],
                datasets: [{
                    label: 'Nilai',
                    data: [
                        {{ $hasilnilai1 }},
                        {{ $hasilnilai2 }},
                        {{ $hasilnilai3 }},
                        {{ $hasilnilai4 }},
                        {{ $hasilnilai5 }}
                    ],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                }]
            },
            options: {
                scale: {
                    ticks: {
                        beginAtZero: true,
                        max: 100
                    }
                }
            }
        });
</script>
</div>
@endsection