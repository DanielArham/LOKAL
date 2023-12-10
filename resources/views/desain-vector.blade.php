<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta
      name="description"
      content="Jasa desain vector untuk segala kebutuhan Anda. Fokus ke bisnis Anda, urusan desain serahkan ke kami."
    />
    <meta name="author" content="LOKAL." />
    <title>Desain Vector | LOKAL.</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/fahli.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logokecil.png') }}" />

  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark justify-content-between fixed-top navbar-fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/"><img style="height: 40px" src="{{ asset('images/logo.png') }}" /></a>
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
              <a class="nav-link" href="#">Desain Vector</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#products">Paket</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#review">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cara-pemesanan">Cara Pemesanan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div id="startchange"></div>
    <div class="jumbotron-top">
      <div class="container jumbcn">
        <a class="back" href="/"> <img src="{{ asset('images/back.png') }}" height="15px" />&nbsp;&nbsp;Back </a>
        <div class="row">
          <div class="col-12 col-md-4 my-auto order-md-2">
            <p class="text-md-center">
              <img class="people-img" src="{{ asset('images/people.png') }}" />
            </p>
          </div>
          <div class="col-12 col-md-8 my-auto order-md-1">
            <div class="info-jumbo">
              <h1>Desain Vector</h1>
              <p>
                Vector adalah salah satu cara untuk<br />mengekspresikan dirimu dalam bentuk yang unik<br />dan berbeda.
              </p>
              <button class="btn btn-yellow" onclick="location.href='#products'"><b>Pesan Sekarang</b></button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section id="products" class="section" style="background-color: #f3f3f3">
      <div class="container">
        <h1 class="text-center">Paket Desain Vector</h1>
        <p class="text-center" style="font-size: 20px; color: #99a6c0">Pilih sesuai kebutuhan anda</p>
        <br /><br />
        <div class="row equal">
          <div class="col-12 col-md-4 spc">
            <div class="card features shadow-lg">
              <div class="features-body">
                <span class="text-center content">
                  <h4 class="inside">Paket Kaki 5</h4>
                  <p>Paket terbaik untuk ukm dan mahasiswa.</p>
                  <h1 style="color: #5cb8e4" class="price">Rp 50.000</h1>
                  <p style="color: black; font-size: 16px; line-height: 2.5" class="text-center">
                    Revisi 2x<br />
                    1 - 3 Hari<br />
                    Color Guide<br />
                    .cdr .jpg .png<br />
                  </p>
                </span>
              </div>
              <div class="bottom-pos text-center">
                <button class="btn btn-yellow shadow-lg" onclick="redirectToCheckout('/checkout', 'Vector Paket Kaki 5 ', 50000)">Pesan</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 spc">
            <div class="card features shadow-lg">
              <div class="features-body">
                <span class="text-center content">
                  <h4 class="inside">Paket Istimewa</h4>
                  <p>Paket terbaik untuk anda yang mulai serius berbisnis</p>
                  <h1 style="color: #5cb8e4" class="price">Rp 250.000</h1>
                  <p style="color: black; font-size: 16px; line-height: 2.5" class="text-center">
                    Revisi 5x<br />
                    2 - 4 Hari<br />
                    Color Guide<br />
                    Filosofi Logo<br />
                    Kartu Nama<br />
                    .ai .psd .eps .cdr .jpg .png<br />
                  </p>
                </span>
              </div>
              <div class="bottom-pos text-center">
                <button class="btn btn-yellow shadow-lg" onclick="redirectToCheckout('/checkout', 'Vector Paket Istimewa ', 250000)">Pesan</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 spc">
            <div class="card features shadow-lg">
              <div class="features-body">
                <span class="text-center content">
                  <h4 class="inside">Paket Bintang 5</h4>
                  <p>Paket terbaik untuk para profesional.</p>
                  <h1 style="color: #5cb8e4" class="price">Rp 1.000.000</h1>
                  <p style="color: black; font-size: 16px; line-height: 2.5" class="text-center">
                    Revisi Unlimited <small>(60 Hari)</small><br />
                    5 - 7 Hari<br />
                    Color Guide<br />
                    Filosofi Logo<br />
                    Hak Cipta<br />
                    Kartu Nama<br />
                    .ai .psd .eps .cdr .jpg .png<br />
                  </p>
                </span>
              </div>
              <div class="bottom-pos text-center">
                <button class="btn btn-yellow shadow-lg" onclick="redirectToCheckout('/checkout', 'Vector Paket Bintang 5 ', 1000000)">Pesan</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="review" class="section">
      <div class="container">
        <h1 class="text-center">Portofolio Desain Vector</h1>
        <br /><br />

        <div class="row">
          <div class="text-center gallery_product col-lg-3 col-md-4 col-sm-4 col-xs-6">
            <img src="{{ asset('portofolio/vector1.png') }}" class="img-fluid" />
          </div>
          <div class="text-center gallery_product col-lg-3 col-md-4 col-sm-4 col-xs-6">
            <img src="{{ asset('portofolio/vector2.png') }}" class="img-fluid" />
          </div>
          <div class="text-center gallery_product col-lg-3 col-md-4 col-sm-4 col-xs-6">
            <img src="{{ asset('portofolio/vector3.png') }}" class="img-fluid" />
          </div>
          <div class="text-center gallery_product col-lg-3 col-md-4 col-sm-4 col-xs-6">
            <img src="{{ asset('portofolio/vector4.png') }}" class="img-fluid" />
          </div>
          <div class="text-center gallery_product col-lg-3 col-md-4 col-sm-4 col-xs-6">
            <img src="{{ asset('portofolio/vector5.png') }}" class="img-fluid" />
          </div>
          <div class="text-center gallery_product col-lg-3 col-md-4 col-sm-4 col-xs-6">
            <img src="{{ asset('portofolio/vector6.png') }}" class="img-fluid" />
          </div>
          <div class="text-center gallery_product col-lg-3 col-md-4 col-sm-4 col-xs-6">
            <img src="{{ asset('portofolio/vector7.png') }}" class="img-fluid" />
          </div>
          <div class="text-center gallery_product col-lg-3 col-md-4 col-sm-4 col-xs-6">
            <img src="{{ asset('portofolio/vector8.png') }}" class="img-fluid" />
          </div>
        </div>
      </div>
    </section>

    <div style="background-color: #5cb8e4; padding: 10px; padding-top: 24px">
      <p class="text-center" style="color: white; font-size: 17px">Copyright &copy; LOKAL. 2023</p>
    </div>
    <a id="back-to-top" href="#" class="btn btn-yellow btn-lg back-to-top" role="button"
      ><img src="{{ asset('images/top.png') }}" width="15px"
    /></a>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/fahli.js"></script>
    <script>
      function redirectToCheckout(url, serviceName, price) {
          // Menggunakan URLSearchParams untuk menyusun parameter URL
          const params = new URLSearchParams();
          params.append('serviceName', serviceName);
          params.append('price', price);

          // Menggabungkan URL dengan parameter
          const urlWithParams = `${url}?${params.toString()}`;

          // Mengarahkan pengguna ke halaman checkout dengan parameter serviceName dan price
          window.location.href = urlWithParams;
      }
  </script>
  </body>
</html>
