@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Pembayaran</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center">Data Pembayaran</h2>
                                <a href="{{ route('admin.pembayaran.create') }}"><button class="btn btn-primary mb-1">Tambah Data</button></a>
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
                                                <th>Tanggal</th>
                                                <th>Jumlah Bayar</th>
                                                <th>Peminjaman ID</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($list_pembayaran as $pembayaran)
                                                <tr>
                                                    <td>{{ $pembayaran->id }}</td>
                                                    <td>{{ $pembayaran->tanggal }}</td>
                                                    <td>{{ $pembayaran->jumlah_bayar }}</td>
                                                    <td>{{ $pembayaran->peminjaman_id }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.pembayaran.edit', $pembayaran->id) }}"><button class="btn btn-warning">Edit</button></a>
                                                        <form action="{{ route('admin.pembayaran.destroy', $pembayaran->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data?')">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('admin.kendaraan.index') }}"><button class='btn btn-success'>Daftar kendaraan</button></a>
                                <a href="{{ route('admin.peminjaman.index') }}"><button class='btn btn-success'>Daftar peminjaman</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
