@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Peminjaman</h1>
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
                                <h3 class="card-title">Form Tambah Peminjaman</h3>
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

                                <form action="{{ route('admin.peminjaman.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama_peminjam">Nama Peminjam:</label>
                                        <input type="text" name="nama_peminjam" class="form-control" id="nama_peminjam" placeholder="Nama Peminjam" value="{{ old('nama_peminjam') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="ktp_peminjam">KTP Peminjam:</label>
                                        <input type="text" name="ktp_peminjam" class="form-control" id="ktp_peminjam" placeholder="KTP Peminjam" value="{{ old('ktp_peminjam') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="keperluan_pinjam">Keperluan Pinjam:</label>
                                        <input type="text" name="keperluan_pinjam" class="form-control" id="keperluan_pinjam" placeholder="Keperluan Pinjam" value="{{ old('keperluan_pinjam') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="mulai">Mulai:</label>
                                        <input type="date" name="mulai" class="form-control" id="mulai" value="{{ old('mulai') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="selesai">Selesai:</label>
                                        <input type="date" name="selesai" class="form-control" id="selesai" value="{{ old('selesai') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="biaya">Biaya:</label>
                                        <input type="number" name="biaya" class="form-control" id="biaya" placeholder="Biaya" value="{{ old('biaya') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="armada_id">Armada ID:</label>
                                        <input type="number" name="armada_id" class="form-control" id="armada_id" placeholder="Armada ID" value="{{ old('armada_id') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="komentar_peminjam">Komentar Peminjam:</label>
                                        <input type="text" name="komentar_peminjam" class="form-control" id="komentar_peminjam" placeholder="Komentar Peminjam" value="{{ old('komentar_peminjam') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="status_pinjam">Status Pinjam:</label>
                                        <input type="text" name="status_pinjam" class="form-control" id="status_pinjam" placeholder="Status Pinjam" value="{{ old('status_pinjam') }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
