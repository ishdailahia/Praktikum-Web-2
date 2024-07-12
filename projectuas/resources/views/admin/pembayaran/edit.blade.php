@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Pembayaran</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Form Edit Pembayaran</h3>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('admin.pembayaran.update', $pembayaran->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal:</label>
                                        <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{ $pembayaran->tanggal }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah_bayar">Jumlah Bayar:</label>
                                        <input type="text" name="jumlah_bayar" class="form-control" id="jumlah_bayar" value="{{ $pembayaran->jumlah_bayar }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="peminjaman_id">Peminjaman ID:</label>
                                        <input type="number" name="peminjaman_id" class="form-control" id="peminjaman_id" value="{{ $pembayaran->peminjaman_id }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                            <div class="card-footer">
                                Footer
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
