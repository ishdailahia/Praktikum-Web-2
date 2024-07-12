<!doctype html>
<html lang="en">

  <head>
    <title>Rental Cars &mdash; Booking</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="assets/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


  </head>

  <body>

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3">
              <div class="site-logo">
                <a href="index.html"><strong>Rental Cars</strong></a>
              </div>
            </div>

            <div class="col-9  text-right">
              
              <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto "> 
                  <li><a href="/" class="nav-link">Home</a></li>                
                  <li><a href="admin" class="nav-link">Admin</a></li>                 
                  
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          {{ Auth::user()->name }}
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
            
                          <li>
                              <form method="POST" action="{{ route('logout') }}">
                                  @csrf <!-- Tambahkan CSRF token -->
                                  <a class="dropdown-item" href="#" onclick="event.preventDefault(); this.closest('form').submit();">
                                      {{ __('Log Out') }}
                                  </a>
                              </form>
                          </li>
                      </ul>
                  </li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

      
      <div class="hero" style="background-image: url('assets/images/hero_1_a.jpg');">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-10">

              <div class="row mb-2">
                <div class="col-lg-15 intro">
                  <h1><strong>Need a-Car</strong> Jelajahi lebih jauh dengan armada mobil terbaru dan terawat</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  


      <div class="site-section">
        <div class="container">
          <h2 class="section-heading"><strong>Informasi</strong></h2>
          <div class="row mb-5">
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="step">
                <span>1</span>
                <div class="step-inner">
                  <span class="number text-primary">01.</span>
                  <h3>Kendaraan Berkualitas</h3>
                  <p>RentalCars menghadirkan armada mobil baru dan berkualitas tinggi untuk memastikan pengalaman berkendara yang terbaik bagi Anda. Kami selalu memperbarui armada kami dengan model-model terbaru dan terawat dengan baik, sehingga Anda dapat menikmati perjalanan yang aman, nyaman, dan menyenangkan.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="step">
                <span>2</span>
                <div class="step-inner">
                  <span class="number text-primary">02.</span>
                  <h3>Layanan</h3>
                  <p>RentalCars berkomitmen untuk memberikan layanan pelanggan terbaik kepada Anda. Tim kami yang ramah dan profesional siap membantu Anda dalam setiap proses sewa mobil, mulai dari pemilihan mobil hingga pengembalian mobil.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="step">
                <span>3</span>
                <div class="step-inner">
                  <span class="number text-primary">03.</span>
                  <h3>Pembayaran</h3>
                  <p>RentalCars menyediakan berbagai pilihan metode pembayaran yang nyaman dan aman untuk Anda. Anda dapat memilih metode pembayaran yang paling sesuai dengan kebutuhan Anda. Pembayaran di RentalCars diproses dengan sistem yang aman dan terjamin, sehingga Anda tidak perlu khawatir dengan keamanan data Anda.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="site-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 text-center order-lg-100">
              <div class="img-wrap-1 mb-3">
                <img src="assets/images/car_7.jpg" alt="Image" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-4 ml-auto order-lg-1">
              <h3 class="mb-4 section-heading"><strong>Sewa Mobil Murah dan Mudah - Kemana Saja Menyenangkan!</strong></h3>
              <p class="mb-5">Apakah Anda sedang merencanakan perjalanan darat? Atau membutuhkan kendaraan untuk keperluan bisnis? Website rental mobil kami hadir untuk memenuhi kebutuhan Anda! Kami menawarkan berbagai macam pilihan mobil dengan harga sewa yang kompetitif dan proses pemesanan yang mudah.</p>
            </div>
          </div>
        </div>
      </div>
     

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="section-heading"><strong>Car Listings</strong></h2>
            <p class="mb-5">Pilihan mobil lengkap, harga terbaik, untuk perjalanan Anda yang sempurna</p>    
          </div>
        </div>
        
        <div class="row">
            @foreach ($list_armada as $armada)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="listing d-block align-items-stretch">
                    <div class="listing-img h-100 mr-4">
                        <img src="{{ asset('assets/images/' . $armada->foto) }}.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="listing-contents h-100">
                        <h3>{{ $armada->merk }}</h3>
                        <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                            <div>
                                <span>Nopol: {{ $armada->nopol }}</span><br>
                                <span>Thn Beli: {{ $armada->thn_beli }}</span><br>
                                <span>Kapasitas Kursi: {{ $armada->kapasitas_kursi }}</span><br>
                                <span>Rating: {{ $armada->rating }}</span><br>
                            </div>
                        </div>
                        <div>
                            <p>{{ $armada->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
         </div>
      </div>
    </div>

    <div class="site-section bg-primary py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 mb-4 mb-md-0">
            <h2 class="mb-0 text-white">Pesan Sekarang</h2>
            <p class="mb-0 opa-7">Bebaskan semangat petualang Anda! Sewa mobil sekarang dan jelajahi ke mana pun Anda inginkan!</p>
          </div>
          <div class="col-lg-5 text-md-right">
            <a href="{{ route('peminjaman.create') }}" class="btn btn-primary btn-white">Pesan</a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section py-5">
      <div class="container">
      <div class="row justify-content-center">  
        <h2 class="text-center">Daftar Peminjaman</h2>
          <br>
          <div class="table-responsive">
              <div class="card">
                  <div class="card-body">
                      <table class="table table-hover">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Nama Peminjam</th>
                              <th>KTP Peminjam</th>
                              <th>Keperluan Pinjam</th>
                              <th>Mulai</th>
                              <th>Selesai</th>
                              <th>Biaya</th>
                              <th>Armada ID</th>
                              <th>Komentar Peminjam</th>
                              <th>Status Pinjam</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($list_peminjaman as $peminjaman)
                          <tr>
                              <td>{{ $peminjaman->id }}</td>
                              <td>{{ $peminjaman->nama_peminjam }}</td>
                              <td>{{ $peminjaman->ktp_peminjam }}</td>
                              <td>{{ $peminjaman->keperluan_pinjam }}</td>
                              <td>{{ $peminjaman->mulai }}</td>
                              <td>{{ $peminjaman->selesai }}</td>
                              <td>{{ $peminjaman->biaya }}</td>
                              <td>{{ $peminjaman->armada_id }}</td>
                              <td>{{ $peminjaman->komentar_peminjam }}</td>
                              <td>{{ $peminjaman->status_pinjam }}</td>
                          </tr>
                          @endforeach
                      </tbody>
                      </table>
                      </br>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>


    <footer class="site-footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <ul class="list-unstyled social">
                    <li class="d-inline-block mx-2">
                        <a href="#" class="text-dark">
                            <span class="icon-facebook"></span>
                        </a>
                    </li>
                    <li class="d-inline-block mx-2">
                        <a href="#" class="text-dark">
                            <span class="icon-instagram"></span>
                        </a>
                    </li>
                    <li class="d-inline-block mx-2">
                        <a href="#" class="text-dark">
                            <span class="icon-twitter"></span>
                        </a>
                    </li>
                    <li class="d-inline-block mx-2">
                        <a href="#" class="text-dark">
                            <span class="icon-linkedin"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <div class="border-top pt-5">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        &copy;<script>document.write(new Date().getFullYear());</script> Albaniilham_
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Ensure you include necessary CSS files for Bootstrap and icons in the head section -->
<head>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>


    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>

