@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Peminjaman</h1>
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
                                <h3 class="card-title">Form Edit Peminjaman</h3>
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

                                <form action="{{ route('admin.peminjaman.update', $peminjaman->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="nama_peminjam">Nama Peminjam:</label>
                                        <input type="text" name="nama_peminjam" class="form-control" id="nama_peminjam" value="{{ $peminjaman->nama_peminjam }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="ktp_peminjam">KTP Peminjam:</label>
                                        <input type="text" name="ktp_peminjam" class="form-control" id="ktp_peminjam" value="{{ $peminjaman->ktp_peminjam }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="keperluan_pinjam">Keperluan Pinjam:</label>
                                        <input type="text" name="keperluan_pinjam" class="form-control" id="keperluan_pinjam" value="{{ $peminjaman->keperluan_pinjam }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="mulai">Mulai:</label>
                                        <input type="date" name="mulai" class="form-control" id="mulai" value="{{ $peminjaman->mulai }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="selesai">Selesai:</label>
                                        <input type="date" name="selesai" class="form-control" id="selesai" value="{{ $peminjaman->selesai }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="biaya">Biaya:</label>
                                        <input type="number" name="biaya" class="form-control" id="biaya" value="{{ $peminjaman->biaya }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="armada_id">Armada ID:</label>
                                        <input type="number" name="armada_id" class="form-control" id="armada_id" value="{{ $peminjaman->armada_id }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="komentar_peminjam">Komentar Peminjam:</label>
                                        <input type="text" name="komentar_peminjam" class="form-control" id="komentar_peminjam" value="{{ $peminjaman->komentar_peminjam }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="status_pinjam">Status Pinjam:</label>
                                        <input type="text" name="status_pinjam" class="form-control" id="status_pinjam" value="{{ $peminjaman->status_pinjam }}">
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
