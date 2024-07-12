@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Direktori Peminjaman</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card">                            
                            <div class="card-body">
                                <h2 class="text-center">Data Peminjaman</h2>
                                <a href="{{ route('admin.peminjaman.create') }}"><button class="btn btn-primary mb-1">Tambah Data</button></a>
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama Peminjam</th>
                                                <th>KTP Peminjam</th>
                                                <th>Keperluan Pinjam</th>
                                                <th>Mulai</th>
                                                <th>Selesai</th>
                                                <th>Biaya</th>
                                                <th>Armada ID</th>
                                                <th>Komentar Peminjam</th>
                                                <th>Status Pinjam</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($list_peminjaman as $peminjaman)
                                            <tr>
                                                <td>{{ $peminjaman->id }}</td>
                                                <td>{{ $peminjaman->nama_peminjam }}</td>
                                                <td>{{ $peminjaman->ktp_peminjam }}</td>
                                                <td>{{ $peminjaman->keperluan_pinjam }}</td>
                                                <td>{{ $peminjaman->mulai }}</td>
                                                <td>{{ $peminjaman->selesai }}</td>
                                                <td>{{ $peminjaman->biaya }}</td>
                                                <td>{{ $peminjaman->armada_id }}</td>
                                                <td>{{ $peminjaman->komentar_peminjam }}</td>
                                                <td>{{ $peminjaman->status_pinjam }}</td>
                                                <td>
                                                    <a href="{{ route('admin.peminjaman.edit', $peminjaman->id) }}" class="btn btn-warning">Edit</a>
                                                    <form action="{{ route('admin.peminjaman.destroy', $peminjaman->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type='submit' class='btn btn-danger' onclick="return confirm('Yakin Hapus Data?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="{{ route('admin.kendaraan.index') }}" class='btn btn-success'>Daftar kendaraan</a>
                                <a href="{{ route('admin.pembayaran.index') }}" class='btn btn-success'>Daftar pembayaran</a>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
@include('admin.footer')
