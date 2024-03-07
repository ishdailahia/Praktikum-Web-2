<?php 
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$kelamin = $_POST["kelamin"];
$prodi = $_POST["prodi"];
$skill = $_POST["skill"];
$domisili = $_POST["domisili"];
$email = $_POST["email"];

$skor = 0;
foreach ($skill as $s) {
    switch ($s) {
        case "HTML":
            $skor += 90;
            break;
        case "CSS":
            $skor += 80;
            break;
        case "JavaScript":
            $skor += 70;
            break;
        case "PHP":
            $skor += 90;
            break;
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form Registrasi</title>
  </head>
  <body>
    <div class="container">
        <h1>Form Registrasi IT Club</h1><br>
    <form method="POST" action="form.php">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adn"></i>
          </div>
        </div> 
        <input id="nim" name="nim" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="kelamin" id="kelamin_0" type="radio" class="custom-control-input" value="L"> 
        <label for="kelamin_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="kelamin" id="kelamin_1" type="radio" class="custom-control-input" value="P"> 
        <label for="kelamin_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="prodi" name="prodi" class="custom-select">
        <option value="SI">Sistem informasi</option>
        <option value="BD">Bisnis Digital</option>
        <option value="TI">Teknik Informatika</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill Web & Programming</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="HTML"> 
        <label for="skill[]_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="CSS"> 
        <label for="skill[]_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="JavaScript"> 
        <label for="skill[]_2" class="custom-control-label">JavaScript</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="PHP"> 
        <label for="skill[]_3" class="custom-control-label">PHP</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <select id="domisili" name="domisili" class="custom-select">
        <option value="Jakarta">Jakarta</option>
        <option value="Depok">Depok</option>
        <option value="Bogor">Bogor</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-mail-forward"></i>
          </div>
        </div> 
        <input id="email" name="email" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

    <h1>Data Registrasi</h1>
    <?php
    echo "NIM : " . $nim;
    echo "<br>";
    echo "Nama : " . $nama;
    echo "<br>";
    echo "Jenis Kelamin : " . $kelamin;
    echo "<br>";
    echo "Program Studi : " . $prodi;
    echo "<br>";
    echo "Skill : ";
    foreach ($skill as $s) {
        echo $s . ", ";
    }
    echo "<br>";
    echo "Skor : " . $skor;
    echo "<br>";
    echo "Domisili : " . $domisili;
    echo "<br>";
    echo "Email : " . $email;
    ?>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>