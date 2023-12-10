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

<section>
<div class="wrap py-3">
        <div class="container-lg">
            <div class="d-flex justify-content-between mb-2">
                <h2>
                    Pembayaran
                </h2>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="callout callout-info bg-white py-2 my-3">
                        <p class="lead mb-0">
                            <span class="text-secondary">Total Pembayaran: </span>
                            <small class="align-top text-secondary">Rp</small>1.700.000
                        </p>
                    </div>
                    <div class="jumbotron py-3 mb-3 bg-blue-dark text-center shadow-sm">
                        <h1 class="text-monospace text-yellow">Pembayaran</h1>
                    </div>
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <p class="lead text-center">
                                Batas Waktu Pembayaran <br>
                                <span class="text-danger" id="limit"></span> <br>
                                <small>Segera lakukan pembayaran sebelum waktu habis.</small>
                            </p>
                            <h1 class="text-center mb-5" id="clock"></h1>
                            <p class="mb-0">
                                Anda dapat melakukan pembayaran dengan cara sebagai berikut:
                            </p>
                        </div>
                        <ul id="how-to-pay" class="accordion list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="#atm-bni" class="text-decoration-none stretched-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="atm-bni">ATM BNI</a>
                            </li>
                            <div id="atm-bni" class="card-body collapse" aria-labelledby="atm-bni" data-parent="#how-to-pay">
                                <ol>
                                    <li>Transfer ke rek 1234567899 atas nama danial w</li>
                                </ol>
                            </div>
                </div>
        </div>
    </div>
</section>
<section id="why-us" class="container section">
      <h1 class="text-center">Kenapa Memilih Kami ?</h1><br><br>
      <div class="row equal">
          <div class="col-12 col-md-4 spc">
              <div class="card features-2 shadow-lg">
                  <span class="text-center content">
                      <img src="{{ asset('images/kreatif.png') }}" style="width: 100px;">
                      <h4>Desain Kreatif</h4>
                      <p>Kami membuat desain yang <b>unik</b> dan <b>menarik</b> untuk setiap produk yang kami jual.</p>
                  </span>
              </div>
          </div>
          <div class="col-12 col-md-4 spc">
              <div class="card features-2 shadow-lg">
                  <span class="text-center content">
                      <img src="{{ asset('images/price.png') }}" style="width: 130px;">
                      <h4>Harga Terjangkau</h4>
                      <p>Kami menyediakan produk kualitas <b>terbaik</b> dengan harga yang <b>ramah dikantong</b>. </p>
                  </span>
              </div>
          </div>
          <div class="col-12 col-md-4 spc">
              <div class="card features-2 shadow-lg">
                  <span class="text-center content">
                      <img src="{{ asset('images/proses.png') }}" style="width: 120px;">
                      <h4>Proses Cepat</h4>
                      <p>Kami memroses desain yang anda pesan <b>secepat kilat</b>.</p>
                  </span>
              </div>
          </div>
      </div>
  </section>
</body>
</html>
