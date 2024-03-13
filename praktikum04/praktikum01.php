<?php
require_once 'header.php';
require_once 'sidebar.php';

$nilai1 = ['id' => 1, 'nim' => "10989", 'uts' => 90, 'uas' => 87, 'tugas' => 100];
$nilai2 = ['id' => 1, 'nim' => "10978", 'uts' => 80, 'uas' => 89, 'tugas' => 90];
$nilai3 = ['id' => 1, 'nim' => "10965", 'uts' => 70, 'uas' => 90, 'tugas' => 90];
$nilai4 = ['id' => 1, 'nim' => "10934", 'uts' => 80, 'uas' => 89, 'tugas' => 80];

$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Praktikum 01</h1>
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
            <div class="card-header">
              <h3 class="card-title">Judul</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <h1>Tabel Nilai Mahasiswa</h1>
              <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NIM</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">Tugas</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($kumpulan_nilai as $nilai1): ?>
    <tr>
        <td> <?php echo $nilai1["id"] ?> </td>
        <td> <?php echo $nilai1["nim"] ?> </td>
        <td> <?php echo $nilai1["uts"] ?> </td>
        <td> <?php echo $nilai1["uas"] ?> </td>
        <td> <?php echo $nilai1["tugas"] ?> </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Footer
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

<?php
require_once 'footer.php';
?>