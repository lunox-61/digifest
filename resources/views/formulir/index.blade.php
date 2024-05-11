@extends('layouts.form')

@section('content')
<div class="category-heading text-uppercase">
    <h4>Index Inovasi Produk dan Usaha Cimahi Digifest</h4>
</div>
<div>
    <p>Silakan untuk isi formulir berikut, pastikan semua jawaban terisi!</p>
</div>
<hr>
<div class="container">
    @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif

    <form action="/formulir/submit" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- SESI 1 a-->
        <div class="sesi sesi-aktif" id="sesi-1">
            <h2>Detail Perusahaan</h2>

            <div class="form-group">
                <label for="nama_perusahaan">Nama Perusahaan</label>
                <input type="text" class="form-control" name="nama_perusahaan">
                <span class="error-message" id="error-nama_perusahaan"></span>
            </div>
            
            <div class="form-group">
                <label>Sektor Usaha (lihat kode KLBI terbaru 2022)</label>
                <select class="form-select" name="kategori">
                    <option value="animasi/film">Animasi/film</option>
                    <option value="telematika">Telematika</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="bentuk_perusahaan">Bentuk Perusahaan</label>
                <select class="form-control" name="bentuk_perusahaan" id="bentuk_perusahaan">
                    <option value="">Pilih bentuk perusahaan...</option>
                    <option value="PT">PT</option>
                    <option value="CV">CV</option>
                    <option value="Firma">Firma</option>
                    <option value="Perseorangan">Perseorangan</option>
                </select>
                <span class="error-message" id="error-bentuk_perusahaan"></span>
            </div>
            
            <div class="form-group">
                <label for="alamat_perusahaan">Alamat Perusahaan (lengkap)</label>
                <input type="text" class="form-control" name="alamat_perusahaan">
                <span class="error-message" id="error-alamat_perusahaan"></span>
            </div>
            
            <div class="form-group">
                <label for="notelp">No Telephone/Fax</label>
                <input type="number" class="form-control" name="notelp" id="notelp" step="0" required>
                <span class="error-message" id="error-notelp"></span>
            </div>
            
            <div class="form-group">
                <label for="nohp">No HP (Bisa Whatsapp)</label>
                <input type="text" class="form-control" name="nohp">
                <span class="error-message" id="error-nohp"></span>
            </div>
            
            <div class="form-group">
                <label for="tahun">Tahun Berdiri Perusahaan/PT/CV/Firma</label>
                <input type="number" class="form-control" name="tahun">
                <span class="error-message" id="error-tahun"></span>
            </div>
            
            <div class="form-group">
                <label  for="nama_direktur">Nama Direktur/Pimpinan Perusahaan/Manajer </label>
                <input type="text" class="form-control" name="nama_direktur">
                <span class="error-message" id="error-nama_direktur"></span>
            </div>
            
            <div class="form-group">
                <label>Kriteria Kompetisi</label>
                <select class="form-select" name="kriteria">
                    <option value="Onovasi pembiayaan usaha bidang animasi">Inovasi pembiayaan usaha bidang animasi</option>
                    <option value="inovasi produk bidang animasi">Inovasi produk bidang animasi</option>
                    <option value="inovasi pembiayaan usaha bidang telematika">Inovasi pembiayaan usaha bidang telematika</option>
                    <option value="inovasi produk bidang telematika">Inovasi produk bidang telematika</option>
                </select>
            </div>
            
            <button type="button" class="btn btn-primary next-button" data-sesi="2">Next</button>
        </div>

        <!-- SESI 2 a-->
        <div class="sesi" id="sesi-2">
            <h2>Tatakelola dan Management</h2>
            <div class="form-group">
                <label for="jawaban_1">Pertanyaan 1: Memiliki Nomor Izin Berusaha (NIB)</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban_1" value="1">
                    <label class="form-check-label">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban_1" value="0">
                    <label class="form-check-label">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban_1"></span>
                <label>Lampirkan bukti dari OSS RBA:</label>
                <input type="file" name="file_1" accept=".docx,.pdf">
            </div>
            
            <div class="form-group">
                <p>Pertanyaan 2: Melaporkan Laporan Kegiatan Penanaman Modal (LKPM)</p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban_2" value="1">
                    <label class="form-check-label">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban_2" value="0">
                    <label class="form-check-label">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban_2"></span>
                <label>Lampirkan bukti file NIB dari OSS RBA Tahun 2021:</label>
                <input type="file" name="file_2" accept=".docx,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 3: Memiliki struktur perusahaan</p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban_3" value="1">
                    <label class="form-check-label">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban_3" value="0">
                    <label class="form-check-label">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban_3"></span>
                <label>Bukti struktur perusahaan (bagan) di ttd manager dan atau sertifikat pendirian perusahaann:</label>
                <input type="file" name="file_3" accept=".docx,.png,.jpg,.jpeg,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 4: Memiliki akta notaris/pendirain Perusahaan </p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban_4" value="1">
                    <label class="form-check-label">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban_4" value="0">
                    <label class="form-check-label">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban_4"></span>
                <label>Foto 3 halaman depan sertifikat dari notaris yang menunjukn nama direktur/pemilik perusahaan:</label>
                <input type="file" name="file_4" accept=".docx,.png,.jpg,.jpeg,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 5: Memiliki SOP produksi</p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban_5" value="1">
                    <label class="form-check-label">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban_5" value="0">
                    <label class="form-check-label">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban_5"></span>
                <label for="file_5">Dokumen SOP ditandatangani pemimpin perusahaan:</label>
                <input type="file" name="file_5" accept=".docx,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 6: Memiliki website perusahaan (harus aktif) </p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban_6" value="1">
                    <label class="form-check-label">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban_6" value="0">
                    <label class="form-check-label">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban_6"></span>
                <label>Alamat webiste dan screen shoot website aktif seminggu terakhir:</label>
                <input type="file" name="file_6" accept=".png,.jpg,.jpeg">
            </div>

            <div class="form-group">
                <p>Pertanyaan 7: Menggunakan media sosial (harus aktif) </p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban_7" value="1">
                    <label class="form-check-label">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban_7" value="0">
                    <label class="form-check-label">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban_7"></span>
                <label>Alamat webiste dan screen shoot website aktif :</label>
                <input type="file" name="file_7" accept=".png,.jpeg,.jpg">
            </div>

            <div class="form-group">
                <p>Pertanyaan 8: Kerjasama dengan perusahaan nasional (kerjasama bisnis/komersial) </p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban_8" value="1">
                    <label class="form-check-label">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban_8" value="0">
                    <label class="form-check-label">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban_8"></span>
                <label>Lampirkan bukti kerjasama dan foto kegiatan (3 tahun terakhir 2020 - 2022) :</label>
                <input type="file" name="file_8" accept=".docx,.png,.jpg,.jpeg,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 9: Kerjasama dengan perusahaan internasional (kerjasama bisnis/komersial) </p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban_9" value="1">
                    <label class="form-check-label">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban_9" value="0">
                    <label class="form-check-label">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban_9"></span>
                <label>Lampirkan bukti kerjasama dan foto kegiatan (3 tahun terakhir 2020 - 2022):</label>
                <input type="file" name="file_9" accept=".docx,.png,.jpg,.jpeg,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 10: Memiliki portofolio perusahaan/produk (di dalam website perusahaan) </p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban_10" value="1">
                    <label class="form-check-label">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban_10" value="0">
                    <label class="form-check-label">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban_10"></span>
                <label>Lampirkan dokumen, booklet, screenshot website</label>
                <input type="file" name="file_10" accept=".docx,.png,.jpg,.jpeg,.pdf">
            </div>
            
            <button type="button" onclick="kembaliKeSesi(1)" class="btn btn-secondary">Previous</button>
            <button type="button" class="btn btn-primary next-button" data-sesi="3">Next</button>
        </div>

        <!-- SESI 3 a-->
        <div class="sesi" id="sesi-3">
            <h2>SDM (Tahun 2022)</h2>
            <div class="form-group">
                <p>Pertanyaan 1: Jumlah Tenaga Kerja Tetap</p>
                <input type="number" class="form-control" name="jawaban2_1">
                <span class="error-message" id="error-jawaban2_1"></span>
                <label>Lampirkan pernyataan dari manager atau direktur:</label>
                <input type="file" name="file2_1" accept=".docx,.pdf">
            </div>
            
            <div class="form-group">
                <p>Pertanyaan 2: Jumlah Tenaga Kerja Tidak Tetap</p>
                <input type="number" class="form-control" name="jawaban2_2">
                <span class="error-message" id="error-jawaban2_2"></span>
                <label>Lampirkan pernyataan dari manager atau direktur:</label>
                <input type="file" name="file2_2" accept=".docx,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 3: Jumlah Tenaga Kerja</p>
                <input type="number" class="form-control" name="jawaban2_3">
                <span class="error-message" id="error-jawaban2_3"></span>
                <label>Lampirkan pernyataan dari manager atau direktur:</label>
                <input type="file" name="file2_3" accept=".docx,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 4: Jumlah Tenaga Kerja Yang Mengikuti Pendidikan-pelatihan</p>
                <input type="number" class="form-control" name="jawaban2_4">
                <span class="error-message" id="error-jawaban2_4"></span>
                <label>Lampirkan sertifikat pegawai 3 tahun terakhir, jumlah harus sesuai:</label>
                <input type="file" name="file2_4" accept=".docx,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 5: Apakah tingkat pendidikan direktur minimal S1 </p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban2_5" value="1">
                    <label class="form-check-label">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban2_5" value="0">
                    <label class="form-check-label">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban2_5"></span>
                <label>Lampirkan ijazah direktur perusahaan:</label>
                <input type="file" name="file2_5" accept=".docx,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 6: Persentase tenaga kerja tetap</p>
                <input type="number" class="form-control input-number" step="0.01" min="0" max="1" name="jawaban2_6" placeholder="Contoh: 0.15" required>
                <span class="error-message" id="error-jawaban2_6"></span>
            </div>

            <div class="form-group">
                <p>Pertanyaan 7: Persentase tenaga kerja tidak tetap</p>
                <input type="number" class="form-control input-number" step="0.01" min="0" max="1" name="jawaban2_7" placeholder="Contoh: 0.15" required>
                <span class="error-message" id="error-jawaban2_7"></span>
            </div>

            <div class="form-group">
                <p>Pertanyaan 8: Persentase SDM mengikuti pelatihan/peningkatan keterampilan</p>
                <input type="number" class="form-control input-number" step="0.01" min="0" max="1" name="jawaban2_8" placeholder="Contoh: 0.15" required>
                <span class="error-message" id="error-jawaban2_8"></span>
            </div>

            <div class="form-group">
                <p>Pertanyaan 9: Apakah pernah mengikuti inkubasi bisnis oleh pemerintah daerah (kota/kabupaten) atau pusat (kementrian) </p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban2_9" value="1">
                    <label class="form-check-label">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban2_9" value="0">
                    <label class="form-check-label">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban2_9"></span>
                <label>Lampirkan bukti dokumen kerjasama/kontrak, tidak dibatasi waktunya:</label>
                <input type="file" name="file2_9" accept=".docx,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 10: Apakah pernah mengikuti inkubasi bisnis oleh perguruan tinggi  </p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban2_10" value="1">
                    <label class="form-check-label">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban2_10" value="0">
                    <label class="form-check-label">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban2_10"></span>
                <label>Lampirkan bukti dokumen kerjasama/kontrak, tidak dibatasi waktunya</label>
                <input type="file" name="file2_10" accept=".docx,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 11: Apakah pernah mengikuti inkubasi bisnis oleh perusahaan/lembaga swasta non perguruan tinggi   </p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban2_11" value="1">
                    <label class="form-check-label">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban2_11" value="0">
                    <label class="form-check-label">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban2_11"></span>
                <label>Lampirkan bukti dokumen kerjasama/kontrak, tidak dibatasi waktunya</label>
                <input type="file" name="file2_11" accept=".docx,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 12: Apakah ada tenaga kerja berlatar pendidikan minimal sarjana (S1) bidang teknik  </p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban2_12" value="1">
                    <label class="form-check-label">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban2_12" value="0">
                    <label class="form-check-label">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban2_12"></span>
                <label>Lampirkan bukti ijazah gelar teknik</label>
                <input type="file" name="file2_12" accept=".docx,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 13: Apakah melakukan evaluasi komposisi pengurus dan SDM perusahaan  </p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban2_13" value="1">
                    <label class="form-check-label">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban2_13" value="0">
                    <label class="form-check-label">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban2_13"></span>
                <label>Lampirkan bukti laporan rapat atau dokumen rapat lainnya</label>
                <input type="file" name="file2_13" accept=".docx,.pdf">
            </div>

            <button type="button" class="btn btn-secondary" onclick="kembaliKeSesi(2)">Previous</button>
            <button type="button" class="btn btn-primary next-button" data-sesi="4">Next</button>
        </div>

        <!-- SESI 4 a-->
        <div class="sesi" id="sesi-4">
            <h2 class="mb-4">Keuangan (Tahun 2022)</h2>
            <div class="form-group">
                <label for="jawaban3_1">Pertanyaan 1: Nilai Aset</label>
                <input type="text" class="form-control" id="jawaban3_1" name="jawaban3_1">
                <span class="error-message" id="error-jawaban3_1"></span>
            </div>

            <div class="form-group">
                <p>Pertanyaan 2: Nilai Penjualan</p>
                <input type="number" class="form-control" name="jawaban3_2">
                <span class="error-message" id="error-jawaban3_2"></span>
                <label>Lampirkan pernyataan dari manager atau direktur, harus sama dengan di OSS RBA kecuali laporan keuangan terdupdate:</label>
                <input type="file" name="file3_2" accept=".docx,.xls,.xlsx,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 3: Nilai Modal Kerja tahun</p>
                <input type="number" class="form-control" name="jawaban3_3">
                <span class="error-message" id="error-jawaban3_3"></span>
                <label>Lampirkan pernyataan dari manager atau direktur, harus sama dengan di OSS RBA kecuali laporan keuangan terdupdate:</label>
                <input type="file" name="file3_3" accept=".docx,.xls,.xlsx,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 4: Total Modal</p>
                <input type="number" class="form-control" name="jawaban3_4">
                <span class="error-message" id="error-jawaban3_4"></span>
                <label>Lampirkan pernyataan dari manager atau direktur, harus sama dengan di OSS RBA kecuali laporan keuangan terdupdate:</label>
                <input type="file" name="file3_4" accept=".docx,.xls,.xlsx,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 5: Rata -rata tingkat kenaikan keuntungan antara tahun 2021 - 2022</p>
                <select class="form-control select-field" name="jawaban3_5">
                    <option value="merugi">Merugi</option>
                    <option value="0%">0%</option>
                    <option value="1-19%">1-19%</option>
                    <option value="20-39%">20-39%</option>
                    <option value="40-59%">40-59%</option>
                    <option value="60-79%">60-79%</option>
                    <option value="80-99%">80-99%</option>
                    <option value="100-119%">100-119%</option>
                    <option value="120% atau lebih">120% atau lebih</option>
                </select>
            </div>

            <div class="form-group">
                <p>Pertanyaan 6: Rata -rata tingat kenaikan penjualan (sales) antara tahun 2021 - 2022</p>
                <select class="form-control select-field" name="jawaban3_6">
                    <option value="merugi">Merugi</option>
                    <option value="0%">0%</option>
                    <option value="1-19%">1-19%</option>
                    <option value="20-39%">20-39%</option>
                    <option value="40-59%">40-59%</option>
                    <option value="60-79%">60-79%</option>
                    <option value="80-99%">80-99%</option>
                    <option value="100-119%">100-119%</option>
                    <option value="120% atau lebih">120% atau lebih</option>
                </select>
            </div>

            <div class="form-group">
                <p>Pertanyaan 7: Melakukan penyusunan laporan keuangan 2022</p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban3_7" value="1" id="jawaban3_7_ya">
                    <label class="form-check-label" for="jawaban3_7_ya">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban3_7" value="0" id="jawaban3_7_tidak">
                    <label class="form-check-label" for="jawaban3_7_tidak">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban3_7"></span>
                <label for="file3_7">Ditandatangan oleh direktur/manager perusahaan, Semester I (Januari - Juni) 2022</label>
                <input type="file" name="file3_7" id="file3_7" accept=".docx,.xls,.xlsx,.pdf">
            </div>


            <div class="form-group">
                <p>Pertanyaan 8: Nilai total modal dibandingkan aset</p>
                <input type="number" class="form-control input-number" step="0.01" min="0" max="1" name="jawaban3_8" placeholder="Contoh: 0.15" required>
                <span class="error-message" id="error-jawaban3_8"></span>
            </div>

            <div class="form-group">
                <p>Pertanyaan 9: Nilai tambahan modal kerja dibandingkan total modal</p>
                <input type="number" class="form-control input-number" step="0.01" min="0" max="1" name="jawaban3_9" placeholder="Contoh: 0.15" required>
                <span class="error-message" id="error-jawaban3_9"></span>
            </div>

            <div class="form-group">
                <p>Pertanyaan 10: Nilai penjualan (sales) dibandingkan asset</p>
                <input type="number" class="form-control input-number" step="0.01" min="0" max="1" name="jawaban3_10" placeholder="Contoh: 0.15" required>
                <span class="error-message" id="error-jawaban3_10"></span>
            </div>

            <div class="form-group">
                <p>Pertanyaan 11: Memiliki (pernah memiliki) angel investor</p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban3_11" value="1" id="jawaban3_11_ya">
                    <label class="form-check-label" for="jawaban3_11_ya">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban3_11" value="0" id="jawaban3_11_tidak">
                    <label class="form-check-label" for="jawaban3_11_tidak">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban3_11"></span>
                <label for="file3_11">Surat perjanjian, halaman depan dan akhir yang ada tandatangan jika rahasia</label>
                <input type="file" name="file3_11" id="file3_11" accept=".docx,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 12: Pernah/sedang dibina oleh perusahaan bapak asuh? (menjadi anak asuh perusahaan)</p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban3_12" value="1" id="jawaban3_12_ya">
                    <label class="form-check-label" for="jawaban3_12_ya">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban3_12" value="0" id="jawaban3_12_tidak">
                    <label class="form-check-label" for="jawaban3_12_tidak">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban3_12"></span>
                <label for="file3_12">Bukti surat perjanjian, ditandatangani kedua belah pihak tidak dibatasi waktu</label>
                <input type="file" name="file3_12" id="file3_12" accept=".docx,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 13: Pernah/sedang membina perusahaan lain? (menjadi bapak asuh bagi UKM atau perusahaan lain)</p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban3_13" value="1" id="jawaban3_13_ya">
                    <label class="form-check-label" for="jawaban3_13_ya">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban3_13" value="0" id="jawaban3_13_tidak">
                    <label class="form-check-label" for="jawaban3_13_tidak">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban3_13"></span>
                <label for="file3_13">Bukti surat perjanjian, ditandatangani kedua belah pihak tidak dibatasi waktu</label>
                <input type="file" name="file3_13" id="file3_13" accept=".docx,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 14: Apakah memiliki pinjaman usaha ke perbankan atau lembaga keuangan lainnya</p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban3_14" value="1" id="jawaban3_14_ya">
                    <label class="form-check-label" for="jawaban3_14_ya">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban3_14" value="0" id="jawaban3_14_tidak">
                    <label class="form-check-label" for="jawaban3_14_tidak">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban3_14"></span>
            </div>


            <button type="button" class="btn btn-secondary" onclick="kembaliKeSesi(3)">Previous</button>
            <button type="button" class="btn btn-primary next-button" data-sesi="5">Next</button>
        </div> 

        <!-- SESI 5 a-->
        <div class="sesi" id="sesi-5">
            <h2>Inovasi</h2>
            <div class="form-group">
                <p>Pertanyaan 1: Jumlah produk baru yang dikeluarkan selama 2021 dan Juli 2022</p>
                <input type="number" class="form-control" name="jawaban4_1">
                <span class="error-message" id="error-jawaban4_1"></span>
                <label>Bukti launching atau penjualan atau transaksi project, produk atau kerjasama:</label>
                <input type="file" name="file4_1" accept=".docx,.png,.jpg,.jpeg,.xls,.xlsx,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 2: Apakah mengeluarkan produk baru tahun 2021 dan Juli 2022</p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban4_2" value="1" id="jawaban4_2_ya">
                    <label class="form-check-label" for="jawaban4_2_ya">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban4_2" value="0" id="jawaban4_2_tidak">
                    <label class="form-check-label" for="jawaban4_2_tidak">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban4_2"></span>
                <label for="file4_2">Lampirkan bukti produk baru, foto, peluncuran produk baru</label>
                <input type="file" name="file4_2" id="file4_2" accept=".docx,.png,.jpg,.jpeg,.xls,.xlsx,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 3: Apakah melakukan riset dan pengembangan (R&D) produk mandiri</p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban4_3" value="1" id="jawaban4_3_ya">
                    <label class="form-check-label" for="jawaban4_3_ya">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban4_3" value="0" id="jawaban4_3_tidak">
                    <label class="form-check-label" for="jawaban4_3_tidak">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban4_3"></span>
                <label for="file4_3">Lampirkan Bukti R&D (termasuk foto kegiatan riset) (3 tahun terakhir)</label>
                <input type="file" name="file4_3" id="file4_3" accept=".docx,.png,.jpg,.jpeg,.xls,.xlsx,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 4: Melakukan kerjasama Penelitian dan Pengembangan dengan perguruan tinggi atau lembaga riset atau lembaga penyelenggaran riset lainnya termasuk labolatorium riset</p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban4_4" value="1" id="jawaban4_4_ya">
                    <label class="form-check-label" for="jawaban4_4_ya">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban4_4" value="0" id="jawaban4_4_tidak">
                    <label class="form-check-label" for="jawaban4_4_tidak">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban4_4"></span>
                <label for="file4_4">Lampirkan surat MoU atau kesepakatan/perjanjian kerjasama (harus 3 tahun terakhir)</label>
                <input type="file" name="file4_4" id="file4_4" accept=".docx,.png,.jpg,.jpeg,.xls,.xlsx,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 5: Apakah menyusun/membuat model bisnis (BMC atau design Thinking atau yang lainnya)</p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban4_5" value="1" id="jawaban4_5_ya">
                    <label class="form-check-label" for="jawaban4_5_ya">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban4_5" value="0" id="jawaban4_5_tidak">
                    <label class="form-check-label" for="jawaban4_5_tidak">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban4_5"></span>
                <label for="file4_5">Lampirkan Dok (bisa MBC atau design thinking atau yang lainnya), tidak dibatasi waktunya. Dok di ttd Manajer</label>
                <input type="file" name="file4_5" id="file4_5" accept=".docx,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 6: Melakukan pembelian mesin/teknologi baru</p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban4_6" value="1" id="jawaban4_6_ya">
                    <label class="form-check-label" for="jawaban4_6_ya">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban4_6" value="0" id="jawaban4_6_tidak">
                    <label class="form-check-label" for="jawaban4_6_tidak">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban4_6"></span>
                <label for="file4_6">Bukti pembelian mesin baru 3 tahun terakhir, bukti keterangan di ttd manajer</label>
                <input type="file" name="file4_6" id="file4_6" accept=".docx,.png,.jpg,.jpeg,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 7: Melakukan pembelian software genuine (lisensi)</p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban4_7" value="1" id="jawaban4_7_ya">
                    <label class="form-check-label" for="jawaban4_7_ya">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban4_7" value="0" id="jawaban4_7_tidak">
                    <label class="form-check-label" for="jawaban4_7_tidak">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban4_7"></span>
                <label for="file4_7">Bukti pembelian/sertifikat genuine product (3 tahun terakhir)</label>
                <input type="file" name="file4_7" id="file4_7" accept=".docx,.png,.jpg,.jpeg,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 8: Memiliki hak patent atau merek atau hak kekayaan intelektual lainnya</p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban4_8" value="1" id="jawaban4_8_ya">
                    <label class="form-check-label" for="jawaban4_8_ya">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban4_8" value="0" id="jawaban4_8_tidak">
                    <label class="form-check-label" for="jawaban4_8_tidak">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban4_8"></span>
                <label for="file4_8">Lampirkan dok</label>
                <input type="file" name="file4_8" id="file4_8" accept=".docx,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 9: Apakah melakukan riset pasar</p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban4_9" value="1" id="jawaban4_9_ya">
                    <label class="form-check-label" for="jawaban4_9_ya">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban4_9" value="0" id="jawaban4_9_tidak">
                    <label class="form-check-label" for="jawaban4_9_tidak">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban4_9"></span>
                <label for="file4_9">Lampirkan bukti riset, dokumen atau foto kegiatan (https://glints.com/id/lowongan/alpha-beta-gamma-testing/#.Ysu-03ZByUk). (3 tahun terakhir)</label>
                <input type="file" name="file4_9" id="file4_9" accept=".docx,.png,.jpg,.jpeg,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 10: Apakah melakukan alpha test atas produk</p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban4_10" value="1" id="jawaban4_10_ya">
                    <label class="form-check-label" for="jawaban4_10_ya">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban4_10" value="0" id="jawaban4_10_tidak">
                    <label class="form-check-label" for="jawaban4_10_tidak">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban4_10"></span>
                <label for="file4_10">Lampirkan bukti riset, dokumen atau foto kegiatan (https://glints.com/id/lowongan/alpha-beta-gamma-testing/#.Ysu-03ZByUk). (3 tahun terakhir)</label>
                <input type="file" name="file4_10" id="file4_10" accept=".docx,.png,.jpg,.jpeg,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 11: Apakah melakukan beta test atas produk</p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban4_11" value="1" id="jawaban4_11_ya">
                    <label class="form-check-label" for="jawaban4_11_ya">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban4_11" value="0" id="jawaban4_11_tidak">
                    <label class="form-check-label" for="jawaban4_11_tidak">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban4_11"></span>
                <label for="file4_11">Lampirkan bukti riset, dokumen atau foto kegiatan (https://glints.com/id/lowongan/alpha-beta-gamma-testing/#.Ysu-03ZByUk). (3 tahun terakhir)</label>
                <input type="file" name="file4_11" id="file4_11" accept=".docx,.png,.jpg,.jpeg,.pdf">
            </div>

            <div class="form-group">
                <p>Pertanyaan 12: Apakah melakukan gamma test atas produk</p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban4_12" value="1" id="jawaban4_12_ya">
                    <label class="form-check-label" for="jawaban4_12_ya">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban4_12" value="0" id="jawaban4_12_tidak">
                    <label class="form-check-label" for="jawaban4_12_tidak">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban4_12"></span>
                <label for="file4_12">Lampirkan bukti riset, dokumen atau foto kegiatan (https://glints.com/id/lowongan/alpha-beta-gamma-testing/#.Ysu-03ZByUk). (3 tahun terakhir)</label>
                <input type="file" name="file4_12" id="file4_12" accept=".docx,.png,.jpg,.jpeg,.pdf">
            </div>

            <button type="button" class="btn btn-secondary" onclick="kembaliKeSesi(4)">Previous</button>
            <button type="button" class="next-button btn btn-primary" data-sesi="6">Next</button>
        </div>

        <!-- SESI 6 a-->
        <div class="sesi" id="sesi-6">
            <h2>Jaringan</h2>
            <div class="form-group">
                <p>Pertanyaan 1: Apakah tergabung dalam komunitas sejenis (organisasi/komunitas)</p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban5_1" value="1" id="jawaban5_1_ya">
                    <label class="form-check-label" for="jawaban5_1_ya">Ya</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jawaban5_1" value="0" id="jawaban5_1_tidak">
                    <label class="form-check-label" for="jawaban5_1_tidak">Tidak</label>
                </div>
                <span class="error-message" id="error-jawaban5_1"></span>
                <label for="file5_1">Lampirkan bukti keanggotaan/pengurus, foto keikutsertaan</label>
                <input type="file" name="file5_1" id="file5_1" accept=".docx,.png,.jpg,.jpeg,.pdf"">
            </div>

        <div class="form-group">
            <p>Pertanyaan 2: Apakah melakukan kerjasama dengan perusahaan sejenis/terkait lini produksi</p>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="jawaban5_2" value="1" id="jawaban5_2_ya">
                <label class="form-check-label" for="jawaban5_2_ya">Ya</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="jawaban5_2" value="0" id="jawaban5_2_tidak">
                <label class="form-check-label" for="jawaban5_2_tidak">Tidak</label>
            </div>
            <span class="error-message" id="error-jawaban5_2"></span>
            <label for="file5_2">Lampirkan bukti kerjasama, foto atau update berita</label>
            <input type="file" name="file5_2" id="file5_2" accept=".docx,.png,.jpg,.jpeg,.pdf">
        </div>

        <div class="form-group">
            <p>Pertanyaan 3: Pernah Mengikuti pameran/kompetisi tingkat daerah/provinsi</p>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="jawaban5_3" value="1" id="jawaban5_3_ya">
                <label class="form-check-label" for="jawaban5_3_ya">Ya</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="jawaban5_3" value="0" id="jawaban5_3_tidak">
                <label class="form-check-label" for="jawaban5_3_tidak">Tidak</label>
            </div>
            <span class="error-message" id="error-jawaban5_3"></span>
            <label for="file5_3">Lampirkan bukti sertifikat, kontrak atau foto (3 tahun terakhir)</label>
            <input type="file" name="file5_3" id="file5_3" accept=".docx,.png,.jpg,.jpeg,.pdf">
        </div>

        <div class="form-group">
            <p>Pertanyaan 4: Pernah Mengikuti pameran/kompetisi tingkat nasional</p>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="jawaban5_4" value="1" id="jawaban5_4_ya">
                <label class="form-check-label" for="jawaban5_4_ya">Ya</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="jawaban5_4" value="0" id="jawaban5_4_tidak">
                <label class="form-check-label" for="jawaban5_4_tidak">Tidak</label>
            </div>
            <span class="error-message" id="error-jawaban5_4"></span>
            <label for="file5_4">Lampirkan bukti sertifikat, kontrak atau foto (3 tahun terakhir)</label>
            <input type="file" name="file5_4" id="file5_4" accept=".docx,.png,.jpg,.jpeg,.pdf">
        </div>

        <div class="form-group">
            <p>Pertanyaan 5: Apakah Pernah Mengikuti pameran/kompetisi internasional</p>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="jawaban5_5" value="1" id="jawaban5_5_ya">
                <label class="form-check-label" for="jawaban5_5_ya">Ya</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="jawaban5_5" value="0" id="jawaban5_5_tidak">
                <label class="form-check-label" for="jawaban5_5_tidak">Tidak</label>
            </div>
            <span class="error-message" id="error-jawaban5_5"></span>
            <label for="file5_5">Lampirkan bukti sertifikat, kontrak atau foto (3 tahun terakhir)</label>
            <input type="file" name="file5_5" id="file5_5" accept=".docx,.png,.jpg,.jpeg,.pdf">
        </div>

        <div class="form-group">
            <p>Pertanyaan 6: Apakah pernah berkantor di co-working space atau di technopark</p>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="jawaban5_6" value="1" id="jawaban5_6_ya">
                <label class="form-check-label" for="jawaban5_6_ya">Ya</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="jawaban5_6" value="0" id="jawaban5_6_tidak">
                <label class="form-check-label" for="jawaban5_6_tidak">Tidak</label>
            </div>
            <span class="error-message" id="error-jawaban5_6"></span>
            <label for="file5_6">Lampirkan bukti sertifikat, kontrak atau foto (tidak ada batas waktu)</label>
            <input type="file" name="file5_6" id="file5_6" accept=".docx,.png,.jpg,.jpeg,.pdf">
        </div>

        <div class="form-group">
            <p>Pertanyaan 7: Apakah masih berkantor di co-working space atau di technopark</p>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="jawaban5_7" value="1" id="jawaban5_7_ya">
                <label class="form-check-label" for="jawaban5_7_ya">Ya</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="jawaban5_7" value="0" id="jawaban5_7_tidak">
                <label class="form-check-label" for="jawaban5_7_tidak">Tidak</label>
            </div>
            <span class="error-message" id="error-jawaban5_7"></span>
            <label for="file5_7">Lampirkan bukti sertifikat, kontrak atau foto (3 tahun terakhir)</label>
            <input type="file" name="file5_7" id="file5_7" accept=".docx,.png,.jpg,.jpeg,.pdf">
        </div>


        <button type="button" class="btn btn-secondary"onclick="kembaliKeSesi(5)">Previous</button>
        <button type="submit" class="btn btn-primary" id="submit-button">Submit</button>
        </div>

        <div class="sesi" id="sesi-7">
        <input type="text" name="nama_user" id="nama_user" value="{{ old('nama_user', $user->username)}}">
        </div>

    </form>
</div>
<script>
// Fungsi untuk menambahkan validasi pada input
function addValidation(inputName, errorMessageId) {
    var inputElement = document.querySelector('input[name="' + inputName + '"]');
    var errorElement = document.getElementById(errorMessageId);

    inputElement.addEventListener('input', function () {
        var value = parseFloat(this.value);

        if (isNaN(value) || value < 0 || value > 1) {
            errorElement.textContent = 'Nilai harus antara 0 dan 1.';
            inputElement.setCustomValidity('Nilai harus antara 0 dan 1.');
        } else {
            errorElement.textContent = '';
            inputElement.setCustomValidity('');
        }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    const sesiForms = document.querySelectorAll('.sesi');

    function validateInputs(currentSesi) {
        const inputs = currentSesi.querySelectorAll('input, select');
        let isValid = true;

        inputs.forEach(input => {
            if (input.checkValidity() === false) {
                const errorMessage = currentSesi.querySelector(`#error-${input.name}`);
                errorMessage.textContent = input.validationMessage;
                isValid = false;
            }
        });

        return isValid;
    }

    function showSesi(sesiId) {
        sesiForms.forEach(sesi => {
            sesi.classList.remove('sesi-aktif');
        });

        const targetSesi = document.getElementById(`sesi-${sesiId}`);
        if (targetSesi) {
            targetSesi.classList.add('sesi-aktif');
        }
    }

    function saveFormData() {
        const formData = new FormData(document.querySelector('form'));

        // Simpan data formulir ke dalam objek
        let data = {};
        for (let [key, value] of formData.entries()) {
            data[key] = value;
        }

        // Simpan data formulir ke localStorage
        localStorage.setItem('formData', JSON.stringify(data));
    }

    function loadFormData() {
        // Muat kembali data formulir dari localStorage
        const savedData = localStorage.getItem('formData');

        if (savedData) {
            const data = JSON.parse(savedData);
            // Isi kembali nilai input dengan data yang disimpan
            for (let key in data) {
                if (data.hasOwnProperty(key)) {
                    const input = document.querySelector(`[name="${key}"]`);
                    if (input) {
                        input.value = data[key];
                    }
                }
            }
        }
    }

    // Panggil loadFormData saat halaman dimuat
    loadFormData();

    function validateAndProceed(sesiId) {
        const currentSesi = document.querySelector('.sesi-aktif');

        if (validateInputs(currentSesi)) {
            saveFormData();
            showSesi(sesiId);
        }
    }

    document.querySelectorAll('.next-button').forEach(button => {
        button.addEventListener('click', function(event) {
            const targetSesiId = this.getAttribute('data-sesi');
            validateAndProceed(targetSesiId);
        });
    });

    function kembaliKeSesi(sesiId) {
        showSesi(sesiId);
    }

    document.querySelectorAll('.previous-button').forEach(button => {
        button.addEventListener('click', function(event) {
            const targetSesiId = this.getAttribute('data-sesi');
            kembaliKeSesi(targetSesiId);
        });
    });
});

// document.addEventListener('DOMContentLoaded', function() {
//     const form = document.querySelector('.sesi-aktif');

//     // Memeriksa apakah ada data draft tersimpan di localStorage
//     const savedData = localStorage.getItem('formDraft');
//     if (savedData) {
//         const parsedData = JSON.parse(savedData);
//         populateForm(parsedData);
//     }

//     // Menyimpan nilai input ke localStorage setiap kali ada perubahan pada form
//     form.addEventListener('input', function(event) {
//         saveFormData();
//     });

//     // Fungsi untuk menyimpan nilai input ke localStorage
//     function saveFormData() {
//         const formData = {};
//         const inputs = form.querySelectorAll('input, select');

//         inputs.forEach(input => {
//             formData[input.name] = input.value;
//         });

//         localStorage.setItem('formDraft', JSON.stringify(formData));
//     }

//     // Fungsi untuk mengisi kembali form dengan data yang tersimpan
//     function populateForm(data) {
//         const inputs = form.querySelectorAll('input, select');

//         inputs.forEach(input => {
//             if (data[input.name]) {
//                 input.value = data[input.name];
//             }
//         });
//     }

//     function lanjutKeSesi(id) {
//         const currentSesi = document.getElementById('sesi-' + id);
//         const nextSesi = document.getElementById('sesi-' + (id + 1));

//         currentSesi.classList.remove('sesi-aktif');
//         if (nextSesi) {
//             nextSesi.classList.add('sesi-aktif');
//             scrollToTop();
//         }
//     }

//     function kembaliKeSesi(id) {
//         const currentSesi = document.getElementById('sesi-' + id);
//         const previousSesi = document.getElementById('sesi-' + (id - 1));

//         currentSesi.classList.remove('sesi-aktif');
//         if (previousSesi) {
//             previousSesi.classList.add('sesi-aktif');
//             scrollToTop();
//         }
//     }

//     // Tombol 'Next' untuk navigasi sesi
//     const nextButtons = document.querySelectorAll('.next-button');
//     nextButtons.forEach(button => {
//         button.addEventListener('click', function(event) {
//             const currentSesiId = parseInt(form.id.split('-')[1]);
//             const currentSesi = document.getElementById('sesi-' + currentSesiId);

//             saveFormData();

//             // Validasi file yang belum diunggah
//             const fileInputs = currentSesi.querySelectorAll('input[type="file"]');
//             let uploadsIncomplete = false;

//             fileInputs.forEach(fileInput => {
//                 const errorMessage = fileInput.nextElementSibling;
//                 if (fileInput.style.display !== 'none' && fileInput.files.length === 0) {
//                     errorMessage.style.display = 'block';
//                     uploadsIncomplete = true;
//                 } else {
//                     errorMessage.style.display = 'none';
//                 }
//             });

//             if (uploadsIncomplete) {
//                 alert('Mohon lengkapi semua kolom upload sebelum melanjutkan ke sesi berikutnya.');
//                 return;
//             }

//             lanjutKeSesi(currentSesiId);
//         });
//     });

// const nextButtonSesi2 = document.querySelector('#sesi-2 .next-button');
//     nextButtonSesi2.addEventListener('click', function(event) {
//         const currentSesiId = 2; // ID sesi-2
//         const currentSesi = document.getElementById('sesi-' + currentSesiId);

//         saveFormData();

//         // Validasi file yang belum diunggah
//         const fileInputs = currentSesi.querySelectorAll('input[type="file"]');
//         let uploadsIncomplete = false;

//         fileInputs.forEach(fileInput => {
//             const errorMessage = fileInput.nextElementSibling;
//             if (fileInput.style.display !== 'none' && fileInput.files.length === 0) {
//                 errorMessage.style.display = 'block';
//                 uploadsIncomplete = true;
//             } else {
//                 errorMessage.style.display = 'none';
//             }
//         });

//         if (uploadsIncomplete) {
//             alert('Mohon lengkapi semua kolom upload sebelum melanjutkan ke sesi berikutnya.');
//             return;
//         }

//         lanjutKeSesi(currentSesiId + 1); // Melanjutkan ke sesi-3
//     });
// });

// // fungsi button next
// function lanjutKeSesi(sesi) {
//     const currentSesi = document.getElementById('sesi-' + (sesi - 1));
//     const nextSesi = document.getElementById('sesi-' + sesi);

//     // Menyimpan draft form sebelum pindah ke sesi berikutnya
//     saveFormData();

//     // Pengecekan file yang belum diunggah
//     const fileInputs = currentSesi.querySelectorAll('input[type="file"]');
//     let uploadsIncomplete = false;

//     fileInputs.forEach(fileInput => {
//         const errorMessage = fileInput.nextElementSibling;
//         if (fileInput.style.display !== 'none' && fileInput.files.length === 0) {
//             errorMessage.style.display = 'block';
//             uploadsIncomplete = true;
//         } else {
//             errorMessage.style.display = 'none';
//         }
//     });

//     // Jika ada file yang belum diunggah, blokir navigasi ke sesi berikutnya
//     if (uploadsIncomplete) {
//         alert('Mohon lengkapi semua kolom upload sebelum melanjutkan ke sesi berikutnya.');
//         return;
//     }

//     // Jika semua file sudah diunggah, lanjutkan ke sesi berikutnya
//     currentSesi.classList.remove('sesi-aktif');
//     nextSesi.classList.add('sesi-aktif');
//     scrollToTop();
// }

// // fungsi button prev
function kembaliKeSesi(sesi) {
    document.getElementById('sesi-' + (sesi + 1)).classList.remove('sesi-aktif');
    document.getElementById('sesi-' + sesi).classList.add('sesi-aktif');
    scrollToTop();
}

// Tambahkan validasi untuk setiap pertanyaan pada sesi 3
addValidation('jawaban2_6', 'error-jawaban2_6');
addValidation('jawaban2_7', 'error-jawaban2_7');
addValidation('jawaban2_8', 'error-jawaban2_8');

// Tambahkan validasi untuk setiap pertanyaan pada sesi 4
addValidation('jawaban3_8', 'error-jawaban3_8');
addValidation('jawaban3_9', 'error-jawaban3_9');
addValidation('jawaban3_10', 'error-jawaban3_10');

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

document.addEventListener('DOMContentLoaded', function () {
    const radioButtons = document.querySelectorAll('input[type=radio]');

    radioButtons.forEach(function(radio) {
        radio.addEventListener('change', function() {
            const parentDiv = this.closest('.form-group');
            const fileInput = parentDiv.querySelector('input[type=file]');

            // Jika opsi "Ya" dipilih, tampilkan kolom upload
            if (this.value === '1') {
                fileInput.style.display = 'block';
            } else {
                fileInput.style.display = 'none';
            }
        });
    });
});

// Mendapatkan semua elemen input text dan radio button
const textInputs = document.querySelectorAll('input[type="text"]');
const radioButtons = document.querySelectorAll('input[type="radio"]');
const numberInputs = document.querySelectorAll('input[type="number"]');

// Sembunyikan semua kolom upload pada awalnya dan tambahkan pesan "Upload wajib diisi"
const fileInputs = document.querySelectorAll('input[type="file"]');
fileInputs.forEach(fileInput => {
    fileInput.style.display = 'none';
    const errorMessage = document.createElement('span');
    errorMessage.classList.add('error-message');
    errorMessage.textContent = 'Upload wajib diisi';
    errorMessage.style.display = 'none';
    fileInput.parentNode.appendChild(errorMessage);

    fileInput.addEventListener('change', function() {
        if (this.files.length > 0) {
            const uploadedFileName = this.files[0].name;
            const uploadedFileText = document.createElement('span');
            // uploadedFileText.textContent = `File terunggah: ${uploadedFileName}`;
            fileInput.parentNode.appendChild(uploadedFileText);
        }
    });
});

// Tambahkan event listener untuk setiap input number
numberInputs.forEach(numberInput => {
    numberInput.addEventListener('input', function() {
        const parentFormGroup = this.closest('.form-group');
        const fileInput = parentFormGroup.querySelector('input[type="file"]');
        const errorMessage = fileInput.nextElementSibling;

        // Memeriksa apakah input number dimulai dengan angka nol
        if (this.value.trim() !== '' && this.value.trim() !== '0') {
            // Jika input number diisi dan tidak dimulai dengan nol, tampilkan kolom upload dan pesan "Upload wajib diisi"
            fileInput.style.display = 'block';
            errorMessage.style.display = 'block';
        } else {
            // Jika input number kosong atau dimulai dengan nol, sembunyikan kolom upload dan pesan
            fileInput.style.display = 'none';
            errorMessage.style.display = 'none';
        }
    });
});

// Tambahkan event listener untuk setiap input teks
textInputs.forEach(textInput => {
    textInput.addEventListener('input', function() {
        const parentFormGroup = this.closest('.form-group');
        const fileInput = parentFormGroup.querySelector('input[type="file"]');
        const errorMessage = fileInput.nextElementSibling;

        // Jika input teks diisi, tampilkan kolom upload dan pesan "Upload wajib diisi"
        if (this.value.trim() !== '') {
            fileInput.style.display = 'block';
            errorMessage.style.display = 'block';
        } else {
            fileInput.style.display = 'none';
            errorMessage.style.display = 'none';
        }
    });
});

// Tambahkan event listener untuk setiap radio button
radioButtons.forEach(radioButton => {
    radioButton.addEventListener('change', function() {
        const parentFormGroup = this.closest('.form-group');
        const fileInput = parentFormGroup.querySelector('input[type="file"]');
        const errorMessage = fileInput.nextElementSibling;

        // Jika opsi "Ya" dipilih pada pertanyaan radio, tampilkan kolom upload dan pesan "Upload wajib diisi"
        if (this.value === '1') {
            fileInput.style.display = 'block';
            errorMessage.style.display = 'block';
        } else {
            fileInput.style.display = 'none';
            errorMessage.style.display = 'none';
        }
    });
});

//sistem validasi field
document.addEventListener("DOMContentLoaded", function () {
    const sesiElements = document.querySelectorAll('.sesi');
    const nextButtons = document.querySelectorAll('.next-button');
    const submitButton = document.getElementById('submit-button');

    nextButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            const sesiToMove = this.getAttribute('data-sesi');
            const currentSesi = sesiElements[sesiToMove - 2];
            const inputFields = currentSesi.querySelectorAll('input[type="text"], input[type="number"]');
            const radioButtons = currentSesi.querySelectorAll('input[type="radio"]');
            let isAllFieldsFilled = true;

            inputFields.forEach(input => {
                if (input.value.trim() === '') {
                    isAllFieldsFilled = false;
                    const errorMessage = currentSesi.querySelector(`#error-${input.name}`);
                    errorMessage.textContent = 'Field ini harus diisi.';
                    input.scrollIntoView({ behavior: 'smooth', block: 'start' });
                } else {
                    const errorMessage = currentSesi.querySelector(`#error-${input.name}`);
                    errorMessage.textContent = '';
                }
            });

            radioButtons.forEach(radio => {
                const radioGroupName = radio.getAttribute('name');
                const isChecked = Array.from(document.querySelectorAll(`input[name="${radioGroupName}"]:checked`)).length > 0;

                if (!isChecked && !radio.classList.contains('allow-skip')) {
                    isAllFieldsFilled = false;
                    const errorMessage = currentSesi.querySelector(`#error-${radioGroupName}`);
                    errorMessage.textContent = 'Pilih salah satu opsi atau lakukan upload jika dibutuhkan.';
                    radio.scrollIntoView({ behavior: 'smooth', block: 'start' });
                } else {
                    const errorMessage = currentSesi.querySelector(`#error-${radioGroupName}`);
                    errorMessage.textContent = '';
                }
            });

            if (!isAllFieldsFilled) {
                event.preventDefault();
            } else {
                lanjutKeSesi(sesiToMove);
            }
        });
    });

    submitButton.addEventListener('click', function (event) {
        const currentSesi = sesiElements[sesiElements.length - 1];
        const inputFields = currentSesi.querySelectorAll('input[type="text"], input[type="number"]');
        const radioButtons = currentSesi.querySelectorAll('input[type="radio"]');
        let isAllFieldsFilled = true;

        inputFields.forEach(input => {
            if (input.value.trim() === '') {
                isAllFieldsFilled = false;
                const errorMessage = currentSesi.querySelector(`#error-${input.name}`);
                errorMessage.textContent = 'Field ini harus diisi.';
                input.scrollIntoView({ behavior: 'smooth', block: 'start' });
            } else {
                const errorMessage = currentSesi.querySelector(`#error-${input.name}`);
                errorMessage.textContent = '';
            }
        });

        radioButtons.forEach(radio => {
            const radioGroupName = radio.getAttribute('name');
            const isChecked = Array.from(document.querySelectorAll(`input[name="${radioGroupName}"]:checked`)).length > 0;

            if (!isChecked && !radio.classList.contains('allow-skip')) {
                isAllFieldsFilled = false;
                const errorMessage = currentSesi.querySelector(`#error-${radioGroupName}`);
                errorMessage.textContent = 'Pilih salah satu opsi atau lakukan upload jika dibutuhkan.';
                radio.scrollIntoView({ behavior: 'smooth', block: 'start' });
            } else {
                const errorMessage = currentSesi.querySelector(`#error-${radioGroupName}`);
                errorMessage.textContent = '';
            }
        });

        if (!isAllFieldsFilled) {
            event.preventDefault();
        }
    });
});

// Fungsi untuk menyimpan data draft sesi-1 ke localStorage
function simpanDraftSesi1() {
    var inputNamaPerusahaan = document.querySelector('.sesi#sesi-1 input[name="nama_perusahaan"]');
    var inputKategori = document.querySelector('.sesi#sesi-1 select[name="kategori"]');
    var inputBentukPerusahaan = document.querySelector('.sesi#sesi-1 select[name="bentuk_perusahaan"]');
    var inputAlamatPerusahaan = document.querySelector('.sesi#sesi-1 input[name="alamat_perusahaan"]');
    var inputNoTelp = document.querySelector('.sesi#sesi-1 input[name="notelp"]');
    var inputNoHP = document.querySelector('.sesi#sesi-1 input[name="nohp"]');
    var inputTahun = document.querySelector('.sesi#sesi-1 input[name="tahun"]');
    var inputNamaDirektur = document.querySelector('.sesi#sesi-1 input[name="nama_direktur"]');
    var inputKriteria = document.querySelector('.sesi#sesi-1 select[name="kriteria"]');

    if (inputNamaPerusahaan && inputKategori && inputBentukPerusahaan && inputAlamatPerusahaan &&
        inputNoTelp && inputNoHP && inputTahun && inputNamaDirektur && inputKriteria) {

        var draftDataSesi1 = {
            'nama_perusahaan': inputNamaPerusahaan.value,
            'kategori': inputKategori.value,
            'bentuk_perusahaan': inputBentukPerusahaan.value,
            'alamat_perusahaan': inputAlamatPerusahaan.value,
            'notelp': inputNoTelp.value,
            'nohp': inputNoHP.value,
            'tahun': inputTahun.value,
            'nama_direktur': inputNamaDirektur.value,
            'kriteria': inputKriteria.value
        };

        localStorage.setItem('draft_sesi_1', JSON.stringify(draftDataSesi1));
    }
}

// Fungsi untuk memuat kembali data draft sesi-1 dari localStorage
function muatKembaliDraftSesi1() {
    var draftData = localStorage.getItem('draft_sesi_1');
    if (draftData) {
        var parsedDraftData = JSON.parse(draftData);
        var inputNamaPerusahaan = document.querySelector('.sesi#sesi-1 input[name="nama_perusahaan"]');
        var inputKategori = document.querySelector('.sesi#sesi-1 select[name="kategori"]');
        var inputBentukPerusahaan = document.querySelector('.sesi#sesi-1 select[name="bentuk_perusahaan"]');
        var inputAlamatPerusahaan = document.querySelector('.sesi#sesi-1 input[name="alamat_perusahaan"]');
        var inputNoTelp = document.querySelector('.sesi#sesi-1 input[name="notelp"]');
        var inputNoHP = document.querySelector('.sesi#sesi-1 input[name="nohp"]');
        var inputTahun = document.querySelector('.sesi#sesi-1 input[name="tahun"]');
        var inputNamaDirektur = document.querySelector('.sesi#sesi-1 input[name="nama_direktur"]');
        var inputKriteria = document.querySelector('.sesi#sesi-1 select[name="kriteria"]');

        if (inputNamaPerusahaan && inputKategori && inputBentukPerusahaan && inputAlamatPerusahaan &&
            inputNoTelp && inputNoHP && inputTahun && inputNamaDirektur && inputKriteria) {

            inputNamaPerusahaan.value = parsedDraftData['nama_perusahaan'];
            inputKategori.value = parsedDraftData['kategori'];
            inputBentukPerusahaan.value = parsedDraftData['bentuk_perusahaan'];
            inputAlamatPerusahaan.value = parsedDraftData['alamat_perusahaan'];
            inputNoTelp.value = parsedDraftData['notelp'];
            inputNoHP.value = parsedDraftData['nohp'];
            inputTahun.value = parsedDraftData['tahun'];
            inputNamaDirektur.value = parsedDraftData['nama_direktur'];
            inputKriteria.value = parsedDraftData['kriteria'];
        }
    }
}

// Memanggil fungsi muat kembali draft saat halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
    muatKembaliDraftSesi1();
});

// Menyimpan draft saat pengguna meninggalkan halaman atau merefresh
window.addEventListener('beforeunload', function() {
    simpanDraftSesi1();
});

// Fungsi untuk menyimpan data draft sesi-2 ke localStorage
function simpanDraftSesi2() {
    var inputs = document.querySelectorAll('.sesi#sesi-2 input[type="radio"]');
    var fileInputs = document.querySelectorAll('.sesi#sesi-2 input[type="file"]');
    var draftDataSesi2 = {};

    inputs.forEach(input => {
        if (input.checked) {
            draftDataSesi2[input.name] = input.value;
        }
    });

    fileInputs.forEach(fileInput => {
        var file = fileInput.files[0]; // Get the uploaded file
        if (file) {
            // Menggunakan FileReader untuk membaca file sebagai data URL
            var reader = new FileReader();
            reader.onload = function(event) {
                draftDataSesi2[fileInput.name] = event.target.result; // Simpan data URL ke localStorage
                localStorage.setItem('draft_sesi_2', JSON.stringify(draftDataSesi2));
            };
            reader.readAsDataURL(file); // Membaca file sebagai data URL
        }
    });
}

// Fungsi untuk memuat kembali data draft sesi-2 dari localStorage
function muatKembaliDraftSesi2() {
    var draftData = localStorage.getItem('draft_sesi_2');
    if (draftData) {
        var parsedDraftData = JSON.parse(draftData);
        var inputs = document.querySelectorAll('.sesi#sesi-2 input[type="radio"]');
        var fileInputs = document.querySelectorAll('.sesi#sesi-2 input[type="file"]');

        inputs.forEach(input => {
            if (parsedDraftData[input.name] === input.value) {
                input.checked = true;
            }
        });

        fileInputs.forEach(fileInput => {
            var fileName = parsedDraftData[fileInput.name];
            if (fileName) {
                fileInput.previousElementSibling.textContent = fileName; // Show the file name
            }
        });
    }
}

// Event listener untuk input file
document.querySelectorAll('.sesi#sesi-2 input[type="file"]').forEach(fileInput => {
    fileInput.addEventListener('change', function() {
        var fileName = this.files[0].name;
        this.previousElementSibling.textContent = fileName; // Show the file name after upload
    });
});

// Memanggil fungsi muat kembali draft saat halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
    muatKembaliDraftSesi2();
});

// Menyimpan draft saat pengguna meninggalkan halaman atau merefresh
window.addEventListener('beforeunload', function() {
    simpanDraftSesi2();
});

// Fungsi untuk menyimpan data draft sesi-3 ke localStorage
function simpanDraftSesi3() {
    var inputs = document.querySelectorAll('.sesi#sesi-3 input[type="text"], .sesi#sesi-3 input[type="number"], .sesi#sesi-3 input[type="radio"]:checked');
    var fileInputs = document.querySelectorAll('.sesi#sesi-3 input[type="file"]');
    var draftDataSesi3 = {};

    inputs.forEach(input => {
        draftDataSesi3[input.name] = input.type === 'radio' ? input.value : input.value;
    });

    fileInputs.forEach(fileInput => {
        var file = fileInput.files[0]; // Get the uploaded file
        if (file) {
            draftDataSesi3[fileInput.name] = file.name; // Save the file name or file object, as needed
        }
    });

    localStorage.setItem('draft_sesi_3', JSON.stringify(draftDataSesi3));
}

// Fungsi untuk memuat kembali data draft sesi-3 dari localStorage
function muatKembaliDraftSesi3() {
    var draftData = localStorage.getItem('draft_sesi_3');
    if (draftData) {
        var parsedDraftData = JSON.parse(draftData);
        var inputs = document.querySelectorAll('.sesi#sesi-3 input[type="text"], .sesi#sesi-3 input[type="number"], .sesi#sesi-3 input[type="radio"]');
        var fileInputs = document.querySelectorAll('.sesi#sesi-3 input[type="file"]');

        inputs.forEach(input => {
            if (input.type === 'radio') {
                if (parsedDraftData[input.name] === input.value) {
                    input.checked = true;
                }
            } else {
                input.value = parsedDraftData[input.name] || '';
            }
        });

        fileInputs.forEach(fileInput => {
            var fileName = parsedDraftData[fileInput.name];
            if (fileName) {
                fileInput.previousElementSibling.textContent = fileName; // Show the file name
            }
        });
    }
}

// Event listener untuk input file
document.querySelectorAll('.sesi#sesi-3 input[type="file"]').forEach(fileInput => {
    fileInput.addEventListener('change', function() {
        var fileName = this.files[0].name;
        this.previousElementSibling.textContent = fileName; // Show the file name after upload
    });
});

// Memanggil fungsi muat kembali draft saat halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
    muatKembaliDraftSesi3();
});

// Menyimpan draft saat pengguna meninggalkan halaman atau merefresh
window.addEventListener('beforeunload', function() {
    simpanDraftSesi3();
});

// Fungsi untuk menyimpan data draft sesi-4 ke localStorage
function simpanDraftSesi4() {
    var inputs = document.querySelectorAll('.sesi#sesi-4 input[type="text"], .sesi#sesi-4 select, .sesi#sesi-4 input[type="number"], .sesi#sesi-4 input[type="radio"]:checked');
    var fileInputs = document.querySelectorAll('.sesi#sesi-4 input[type="file"]');
    var draftDataSesi4 = {};

    inputs.forEach(input => {
        draftDataSesi4[input.name] = input.type === 'radio' ? input.value : input.value;
    });

    fileInputs.forEach(fileInput => {
        var file = fileInput.files[0]; // Get the uploaded file
        if (file) {
            draftDataSesi4[fileInput.name] = file.name; // Save the file name or file object, as needed
        }
    });

    localStorage.setItem('draft_sesi_4', JSON.stringify(draftDataSesi4));
}

// Fungsi untuk memuat kembali data draft sesi-4 dari localStorage
function muatKembaliDraftSesi4() {
    var draftData = localStorage.getItem('draft_sesi_4');
    if (draftData) {
        var parsedDraftData = JSON.parse(draftData);
        var inputs = document.querySelectorAll('.sesi#sesi-4 input[type="text"], .sesi#sesi-4 select, .sesi#sesi-4 input[type="number"], .sesi#sesi-4 input[type="radio"]');
        var fileInputs = document.querySelectorAll('.sesi#sesi-4 input[type="file"]');

        inputs.forEach(input => {
            if (input.type === 'radio') {
                if (parsedDraftData[input.name] === input.value) {
                    input.checked = true;
                }
            } else {
                input.value = parsedDraftData[input.name] || '';
            }
        });

        fileInputs.forEach(fileInput => {
            var fileName = parsedDraftData[fileInput.name];
            if (fileName) {
                fileInput.previousElementSibling.textContent = fileName; // Show the file name
            }
        });
    }
}

// Event listener untuk input file
document.querySelectorAll('.sesi#sesi-4 input[type="file"]').forEach(fileInput => {
    fileInput.addEventListener('change', function() {
        var fileName = this.files[0].name;
        this.previousElementSibling.textContent = fileName; // Show the file name after upload
    });
});

// Memanggil fungsi muat kembali draft saat halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
    muatKembaliDraftSesi4();
});

// Menyimpan draft saat pengguna meninggalkan halaman atau merefresh
window.addEventListener('beforeunload', function() {
    simpanDraftSesi4();
});

// Fungsi untuk menyimpan data draft sesi-5 ke localStorage
function simpanDraftSesi5() {
    var inputs = document.querySelectorAll('.sesi#sesi-5 input[type="text"], .sesi#sesi-5 select, .sesi#sesi-5 input[type="radio"]:checked');
    var fileInputs = document.querySelectorAll('.sesi#sesi-5 input[type="file"]');
    var draftDataSesi5 = {};

    inputs.forEach(input => {
        draftDataSesi5[input.name] = input.type === 'radio' ? input.value : input.value;
    });

    fileInputs.forEach(fileInput => {
        var file = fileInput.files[0]; // Get the uploaded file
        if (file) {
            draftDataSesi5[fileInput.name] = file.name; // Save the file name or file object, as needed
        }
    });

    localStorage.setItem('draft_sesi_5', JSON.stringify(draftDataSesi5));
}

// Fungsi untuk memuat kembali data draft sesi-5 dari localStorage
function muatKembaliDraftSesi5() {
    var draftData = localStorage.getItem('draft_sesi_5');
    if (draftData) {
        var parsedDraftData = JSON.parse(draftData);
        var inputs = document.querySelectorAll('.sesi#sesi-5 input[type="text"], .sesi#sesi-5 select, .sesi#sesi-5 input[type="radio"]');
        var fileInputs = document.querySelectorAll('.sesi#sesi-5 input[type="file"]');

        inputs.forEach(input => {
            if (input.type === 'radio') {
                if (parsedDraftData[input.name] === input.value) {
                    input.checked = true;
                }
            } else {
                input.value = parsedDraftData[input.name] || '';
            }
        });

        fileInputs.forEach(fileInput => {
            var fileName = parsedDraftData[fileInput.name];
            if (fileName) {
                fileInput.previousElementSibling.textContent = fileName; // Show the file name
            }
        });
    }
}

// Event listener untuk input file
document.querySelectorAll('.sesi#sesi-5 input[type="file"]').forEach(fileInput => {
    fileInput.addEventListener('change', function() {
        var fileName = this.files[0].name;
        this.previousElementSibling.textContent = fileName; // Show the file name after upload
    });
});

// Memanggil fungsi muat kembali draft saat halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
    muatKembaliDraftSesi5();
});

// Menyimpan draft saat pengguna meninggalkan halaman atau merefresh
window.addEventListener('beforeunload', function() {
    simpanDraftSesi5();
});

// Fungsi untuk menyimpan data draft sesi-6 ke localStorage
function simpanDraftSesi6() {
    var inputs = document.querySelectorAll('.sesi#sesi-6 input[type="text"], .sesi#sesi-6 select, .sesi#sesi-6 input[type="radio"]:checked');
    var fileInputs = document.querySelectorAll('.sesi#sesi-6 input[type="file"]');
    var draftDataSesi6 = {};

    inputs.forEach(input => {
        draftDataSesi6[input.name] = input.type === 'radio' ? input.value : input.value;
    });

    fileInputs.forEach(fileInput => {
        var file = fileInput.files[0]; // Get the uploaded file
        if (file) {
            draftDataSesi6[fileInput.name] = file.name; // Save the file name or file object, as needed
        }
    });

    localStorage.setItem('draft_sesi_6', JSON.stringify(draftDataSesi6));
}

// Fungsi untuk memuat kembali data draft sesi-6 dari localStorage
function muatKembaliDraftSesi6() {
    var draftData = localStorage.getItem('draft_sesi_6');
    if (draftData) {
        var parsedDraftData = JSON.parse(draftData);
        var inputs = document.querySelectorAll('.sesi#sesi-6 input[type="text"], .sesi#sesi-6 select, .sesi#sesi-6 input[type="radio"]');
        var fileInputs = document.querySelectorAll('.sesi#sesi-6 input[type="file"]');

        inputs.forEach(input => {
            if (input.type === 'radio') {
                if (parsedDraftData[input.name] === input.value) {
                    input.checked = true;
                }
            } else {
                input.value = parsedDraftData[input.name] || '';
            }
        });

        fileInputs.forEach(fileInput => {
            var fileName = parsedDraftData[fileInput.name];
            if (fileName) {
                fileInput.previousElementSibling.textContent = fileName; // Show the file name
            }
        });
    }
}

// Event listener untuk input file
document.querySelectorAll('.sesi#sesi-6 input[type="file"]').forEach(fileInput => {
    fileInput.addEventListener('change', function() {
        var fileName = this.files[0].name;
        this.previousElementSibling.textContent = fileName; // Show the file name after upload
    });
});

// Memanggil fungsi muat kembali draft saat halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
    muatKembaliDraftSesi6();
});

// Menyimpan draft saat pengguna meninggalkan halaman atau merefresh
window.addEventListener('beforeunload', function() {
    simpanDraftSesi6();
});

</script>
@endsection