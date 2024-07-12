@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Armada</h1>
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
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> Ada masalah dengan inputan anda.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('admin.armada.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="foto">Foto:</label>
                                        <input type="text" name="foto" class="form-control" id="foto" placeholder="Foto Armada">
                                    </div>
                                    <div class="form-group">
                                        <label for="merk">Merk:</label>
                                        <input type="text" name="merk" class="form-control" id="merk" placeholder="Merk Armada">
                                    </div>
                                    <div class="form-group">
                                        <label for="nopol">Nomor Polisi:</label>
                                        <input type="text" name="nopol" class="form-control" id="nopol" placeholder="Nomor Polisi">
                                    </div>
                                    <div class="form-group">
                                        <label for="thn_beli">Tahun Beli:</label>
                                        <input type="number" name="thn_beli" class="form-control" id="thn_beli" placeholder="Tahun Beli">
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi:</label>
                                        <textarea name="deskripsi" class="form-control" id="deskripsi" placeholder="Deskripsi"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="kendaraan_id">Kendaraan ID:</label>
                                        <input type="number" name="kendaraan_id" class="form-control" id="kendaraan_id" placeholder="Kendaraan ID">
                                    </div>
                                    <div class="form-group">
                                        <label for="kapasitas_kursi">Kapasitas Kursi:</label>
                                        <input type="number" name="kapasitas_kursi" class="form-control" id="kapasitas_kursi" placeholder="Kapasitas Kursi">
                                    </div>
                                    <div class="form-group">
                                        <label for="rating">Rating:</label>
                                        <input type="number" name="rating" class="form-control" id="rating" placeholder="Rating">
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
