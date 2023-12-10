<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="LOKAL." />
    <title>Jasa Desain Grafis | LOKAL.</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/fahli.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logokecil.png') }}">
  </head>
  <body>
 <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark justify-content-between fixed-top navbar-fixed-top">
      <div class="container">
        <a class="navbar-brand" href=""><img style="height: 40px" src="images/logo.png" /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#nav1"
          aria-controls="nav1"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="nav1">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#products">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#review">Ulasan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Hubungi Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cara-pemesanan">Cara Pemesanan</a>
            </li>
            <?php
                session_start();
                if (auth()->check()) {
                    echo '<button id="light-mode-toggle"  type="button" class="btn btn-info"><a href="/logout">Keluar</a></button>';
                } else {
                    echo '<button id="light-mode-toggle"  type="button" class="btn btn-info"><a href="/login">Masuk</a></button>';
                }
                ?>
          </ul>
        </div>
      </div>
    </nav>
    <div id="startchange"></div>
    <div class="">
      <div class="container jumbcn">
        <div class="row">
          <div class="col-12 col-md-4 my-auto order-md-2">
            <p class="text-md-center">
              <img class="people-img" src="images/people.png" />
            </p>
          </div>
          <div class="col-12 col-md-8 my-auto order-md-1" >
            <div class="info-jumbo">
              <p class="lead">Halo, Selamat Datang</p>
              <h1>Jasa bikin desain grafis<br />untuk semua kebutuhan Anda</h1>
              <p>Sekarang anda bisa fokus berbisnis,<br />tentang desain biar kami yang atasi</p>
              <button class="btn btn-yellow" onclick="location.href='#products'"><b>Pesan Sekarang</b></button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- why -->
    <section id="why-us" class="container section">
      <h1 class="text-center">Kenapa Memilih Kami ?</h1><br><br>
      <div class="row equal">
          <div class="col-12 col-md-4 spc">
              <div class="card features-2 shadow-lg">
                  <span class="text-center content">
                      <img src="images/kreatif.png" style="width: 100px;">
                      <h4>Desain Kreatif</h4>
                      <p>Kami membuat desain yang <b>unik</b> dan <b>menarik</b> untuk setiap produk yang kami jual.</p>
                  </span>
              </div>
          </div>
          <div class="col-12 col-md-4 spc">
              <div class="card features-2 shadow-lg">
                  <span class="text-center content">
                      <img src="images/price.png" style="width: 130px;">
                      <h4>Harga Terjangkau</h4>
                      <p>Kami menyediakan produk kualitas <b>terbaik</b> dengan harga yang <b>ramah dikantong</b>. </p>
                  </span>
              </div>
          </div>
          <div class="col-12 col-md-4 spc">
              <div class="card features-2 shadow-lg">
                  <span class="text-center content">
                      <img src="images/proses.png" style="width: 120px;">
                      <h4>Proses Cepat</h4>
                      <p>Kami memroses desain yang anda pesan <b>secepat kilat</b>.</p>
                  </span>
              </div>
          </div>
      </div>
  </section>

<!-- jasa -->
<section id="products" class="section" style="background-color: #F3F3F3;">
  <div class="container">
      <h1 class="text-center">Produk Jasa Desain Grafis</h1>
      <p class="text-center" style="font-size: 20px; color: #99A6C0">Berikut adalah jasa yang kami tawarkan</p>
      <br><br>
      <div class="row equal">
          <div class="col-12 col-md-4 spc">
              <div class="card features shadow-lg">
                  <div class="features-body">
                      <span class="text-center content">
                          <p class="text-center">
                              <img src="images/paint.png" style="width: 100px;">
                          </p><br>
                          <h4 class="inside">Jasa Desain Logo</h4>
                          <p>Sebuah desain logo merupakan perwakilan sebuah perusahaan.</p>
                      </span>
                  </div>
                  <div class="bottom-pos text-center">
                      <button class="btn btn-purple shadow-lg" onclick="location.href='desain-logo.html'">Lebih Lanjut</button>
                  </div>
              </div>
          </div>
          <div class="col-12 col-md-4 spc">
              <div class="card features shadow-lg">
                  <div class="features-body">
                      <span class="text-center content">
                          <p class="text-center">
                              <img src="images/vector1.png" style="width: 115px;">
                          </p><br>
                          <h4 class="inside">Jasa Desain Vector</h4>
                      <p>Vector adalah gambar yang terbuat dari beberapa titik dan garis (poligon).</p>
                      </span>
                  </div>
                  <div class="bottom-pos text-center">
                      <button class="btn btn-purple shadow-lg" onclick="location.href='desain-vector.html'">Lebih Lanjut</button>
                  </div>
              </div>
          </div>
          <div class="col-12 col-md-4 spc">
              <div class="card features shadow-lg">
                  <div class="features-body">
                      <span class="text-center content">
                          <p class="text-center">
                              <img src="images/brosur.png" style="width: 115px;">
                          </p><br>
                          <h4 class="inside">Jasa Desain Brosur</h4>
                          <p> Brosur adalah bahan informasi tertulis mengenai suatu masalah yang disusun secara bersistem.</p>
                      </span>
                  </div>
                  <div class="bottom-pos text-center">
                      <button class="btn btn-purple shadow-lg" onclick="location.href='desain-brosur.html'">Lebih Lanjut</button>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<!-- ulasan -->
<section id="review" class="section">
  <div class="container">
      <h1 class="text-center">Ulasan</h1>
      <p class="text-center" style="font-size: 20px; color: #99A6C0">Ini adalah komentar dari pelanggan kami</p>
      <br><br>
      <div class="row equal">
          <div class="col-12 col-md-4 spc">
              <div class="card features-2 shadow-lg">
                  <span class="text-center content">
                      <div>
                          <img style="margin-top: -10px; margin-right: 10px;" src="images/user.png" height="40">
                          <span style="font-size: 20px; position: relative;"><b>M. Danial</b></span>
                      </div><br>
                      <h1 style="color: #5CB8E4;">4.1  <small style="font-size: 20px; color: #99A6C0">/ 5</small></h1>
                      <p>Mantap, senang lihat karya kamu. Terimakasih ya</p>
                  </span>
              </div>
          </div>
          <div class="col-12 col-md-4 spc">
              <div class="card features-2 shadow-lg">
                  <span class="text-center content">
                      <div>
                          <img style="margin-top: -10px; margin-right: 10px;" src="images/user.png" height="40">
                          <span style="font-size: 20px; position: relative;"><b>M. Zul</b></span>
                      </div><br>
                      <h1 style="color: #5CB8E4;">4.2  <small style="font-size: 20px; color: #99A6C0">/ 5</small></h1>
                      <p>Mantap, senang lihat karya kamu. Terimakasih ya</p>
                  </span>
              </div>
          </div>
          <div class="col-12 col-md-4 spc">
              <div class="card features-2 shadow-lg">
                  <span class="text-center content">
                      <div>
                          <img style="margin-top: -10px; margin-right: 10px;" src="images/user.png" height="40">
                          <span style="font-size: 20px; position: relative;"><b>Intan Nur</b></span>
                      </div><br>
                      <h1 style="color: #5CB8E4;">4.3  <small style="font-size: 20px; color: #99A6C0">/ 5</small></h1>
                      <p>Mantap, senang lihat karya kamu. Terimakasih ya</p>
                  </span>
              </div>
          </div>
      </div>
  </div>
</section>

<!-- footer -->
    <section id="contact" class="section" style="background-color: #F2F2F2;">
        <div class="container">
            <h1 class="text-center" style="color: #181818;">Hubungi Kami</h1>
            <br><br>
            <div class="email-container">
                <div class="row">
                    <div class="col-12 col-sm-9 col-md-10">
                        <div class="form-group">
                            <input type="email" id="email-cust" class="form-control email-input" placeholder="Katakan kebutuhan anda disini...">
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-md-2">
                        <button class="btn btn-block btn-purple-1 shadow-lg" onclick="sendmail()">Kirim</button>
                    </div>
                </div>
            </div>
            <br><br>
            <p class="text-center" style="color: #181818;">atau</p><br>
            <div class="row">
                <div class="col-12 col-sm-4 contact">
                    <div class="contact-item text-center">
                        <img style="margin-top: -10px; margin-right: 10px;" src="images/whatsapp.png" height="25">
                        <span style="color: #181818;"font-size: 20px; position: relative;">085856267775</span>
                    </div>
                </div>
                <div class="col-12 col-sm-4 contact">
                    <div class="contact-item text-center">
                        <img style="margin-top: -10px; margin-right: 10px;" src="images/instagram.png" height="25">
                        <span style="color: #181818;"font-size: 20px; position: relative;">lokal.</span>
                    </div>
                </div>
                <div class="col-12 col-sm-4 contact">
                    <div class="contact-item text-center">
                        <img style="margin-top: -10px; margin-right: 10px;" src="images/email.png" height="25">
                        <span style="color: #181818;"font-size: 20px; position: relative;">help@lokal.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div style="background-color: #5CB8E4; padding: 10px;">
        <p class="text-center" style="color: #181818; font-size: 17px;">Copyright &copy; LOKAL. 2023</p>
    </div>
    <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><img src="images/top.png" width="15px"></a>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/fahli.js"></script>

  </body>
</html>
