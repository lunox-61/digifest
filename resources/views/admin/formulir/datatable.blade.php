@extends('layouts.master')

@section('title', 'Data Table')

@section('content')
<style>
    .btn-group {
    display: fixed;
    gap: 10px; /* Jarak antara tombol di dalam grup */
}

</style>
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold">Hasil Respon Formulir</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perusahaan</th>
                            <th>Sektor Usaha</th>
                            <!-- Tambahkan kolom lain sesuai kebutuhan -->
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($formulirs as $index => $formulir)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $formulir->nama_perusahaan }}</td>
                                <td>{{ $formulir->kategori }}</td>
                                <!-- Tambahkan kolom lain sesuai kebutuhan -->
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.formulir.datadetail', ['id' => $formulir->id]) }}" class="btn btn-primary btn-sm">Lihat Detail</a>
                                        <form action="{{ route('admin.formulir.delete', ['id' => $formulir->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables CSS -->
<link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">

<!-- DataTables JavaScript -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#dataTable').DataTable();
    });
</script>
@endsection
