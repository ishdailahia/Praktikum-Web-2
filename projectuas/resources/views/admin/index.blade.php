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
                        <h1>RentalCars</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">PROJECT RENTAL MOBIL</h3>
                </div>
                <div class="card-body">
                    <h3>Albani Ilham - 0110123207</h3>
                    <h3>Ishda Ilahia - 0110123207</h3>
                    <h3>Albani Ilham - 0110123207</h3>
                    <h3>Ishda Ilahia - 0110123207</h3>
                </div>
                
                <div class="card-footer">
                    <a href="{{ route('admin.kendaraan.index') }}"><button class='btn btn-success'>KENDARAAN</button></a>
                    <a href="{{ route('admin.peminjaman.index') }}"><button class='btn btn-success'>PEMINJAMAN</button></a>
                    <a href="{{ route('admin.pembayaran.index') }}"><button class='btn btn-success'>PEMBAYARAN</button></a>
                    <a href="{{ route('admin.armada.index') }}"><button class='btn btn-success'>ARMADA</button></a>
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')
