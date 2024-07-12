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
                        <h1>Direktori Kendaraan</h1>
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
                                <h2 class="text-center">Data Kendaraan</h2>
                                <a href="{{ route('admin.kendaraan.create') }}"><button class="btn btn-primary mb-1">Tambah Data</button></a>
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
                                                <th>Nama</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($list_kendaraan as $kendaraan)
                                            <tr>
                                                <td>{{ $kendaraan->id }}</td>
                                                <td>{{ $kendaraan->nama }}</td>
                                                <td>{{ $kendaraan->created_at }}</td>
                                                <td>{{ $kendaraan->updated_at }}</td>
                                                <td>
                                                    <a href="{{ route('admin.kendaraan.edit', $kendaraan->id) }}"><button class='btn btn-warning'>Edit</button></a>
                                                    <form action="{{ route('admin.kendaraan.destroy', $kendaraan->id) }}" method="POST" style="display:inline;">
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
                                <a href="{{ route('admin.pembayaran.index') }}"><button class='btn btn-success'>Daftar pembayaran</button></a>
                                <a href="{{ route('admin.peminjaman.index') }}"><button class='btn btn-success'>Daftar peminjaman</button></a>
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
