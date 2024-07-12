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
                        <h1>Direktori Armada</h1>
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
                                <h2 class="text-center">Data Armada</h2>
                                <a href="{{ route('admin.armada.create') }}"><button class="btn btn-primary mb-1">Tambah Data</button></a>
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
                                                <th>Foto</th>                                       
                                                <th>Merk</th>
                                                <th>Nopol</th>
                                                <th>Thn Beli</th>
                                                <th>Deskripsi</th>
                                                <th>Kendaraan ID</th>
                                                <th>Kapasitas Kursi</th>
                                                <th>Rating</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($list_armada as $armada)
                                            <tr>
                                                <td>{{ $armada->id }}</td>
                                                <td><img src="{{ asset('assets/images/' . $armada->foto)}}.jpg" alt="Image" class="img-fluid">
                                                </td>
                                                <td>{{ $armada->merk }}</td>
                                                <td>{{ $armada->nopol }}</td>
                                                <td>{{ $armada->thn_beli }}</td>
                                                <td>{{ $armada->deskripsi }}</td>
                                                <td>{{ $armada->kendaraan_id }}</td>
                                                <td>{{ $armada->kapasitas_kursi }}</td>
                                                <td>{{ $armada->rating }}</td>
                                                <td>{{ $armada->created_at }}</td>
                                                <td>{{ $armada->updated_at }}</td>
                                                <td>
                                                    <a href="{{ route('admin.armada.edit', $armada->id) }}"><button class='btn btn-warning'>Edit</button></a>
                                                    <form action="{{ route('admin.armada.destroy', $armada->id) }}" method="POST" style="display:inline;">
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
                                <a href="{{ route('admin.kendaraan.index') }}"><button class='btn btn-success'>Daftar kendaraan</button></a>
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
