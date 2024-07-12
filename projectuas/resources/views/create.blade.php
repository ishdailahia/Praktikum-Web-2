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


<div class="container-fluid px-4">
    <div class="content-wrapper">
      </br>
      </br>
      </br>
      </br>
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

                                <form action="{{ route('peminjaman.store') }}" method="POST">
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