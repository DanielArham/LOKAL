<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Cara melakukan pemesanan desain di LOKAL. Mudahkan segala urusan Anda." />
    <meta name="author" content="LOKAL." />
    <title>Cara Pemesanan | LOKAL.</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/fahli.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logokecil.png') }}">

  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark justify-content-between fixed-top navbar-fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/"><img style="height: 40px" src="{{ asset('images/logo.png') }}" /></a>
      </div>
    </nav>
    <div id="startchange"></div>
    <div class="jumbotron-top">
      <div class="container jumbcn">
        <a class="back" href="/"> <img src="{{ asset('images/back.png') }}" height="15px" />&nbsp;&nbsp;</a>
        <div class="row">
          <div class="col-12 col-md-4 my-auto order-md-2">
            <p class="text-md-center">
              <img class="people-img" src="{{ asset('images/people.png') }}" />
            </p>
          </div>
          <div class="col-12 col-md-8 my-auto order-md-1">
            <div class="info-jumbo">
              <h1>Bagaimana cara memesan jasa desain kami ?</h1>
              <p>Baca dengan baik ya !!!</p>
              <button onclick="location.href='#read'" class="btn btn-yellow"><b>Baca Sekarang</b></button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section id="read" class="section" style="background-color: #f3f3f3">
      <div class="container">
        <h1 class="text-center">Cara Pemesanan</h1>
        <br /><br />
        <div class="row">
          <div class="col-12 col-sm-6 text-center how">
            <img src="{{ asset('images/how/1.jpg') }}" height="250px" />
            <h1 style="color: #5cb8e4">Pilih Paket</h1>
            <p>Pilihlah Paket Jasa Desain<br />Sesuai Kategori</p>
          </div>
          <div class="col-12 col-sm-6 text-center how">
            <img src="{{ asset('images/how/2.jpg') }}" height="250px" />
            <h1 style="color: #5cb8e4">Diskusikan</h1>
            <p>Diskusikan dengan kami melalui WA<br />untuk detail desain yang anda<br />inginkan dan anda butuhkan.</p>
          </div>
          <div class="col-12 col-sm-6 text-center how">
            <img src="{{ asset('images/how/3.jpg') }}" height="250px" />
            <h1 style="color: #5cb8e4">Pembayaran</h1>
            <p>
              Lakukan pembayaran sesuai<br />kesepakatan dan desain akan kami proses<br />sesuai jumlah
              pesanan anda.
            </p>
          </div>
          <div class="col-12 col-sm-6 text-center how">
            <img src="{{ asset('images/how/4.jpg') }}" height="250px" />
            <h1 style="color: #5cb8e4">Proses Desain</h1>
            <p>
              Lakukan konfirmasi pembayaran dan kami<br />akan lakukan proses desain sesuai request<br />dan kebutuhan.
            </p>
          </div>
          <div class="col-12 text-center how">
            <img src="{{ asset('images/how/5.jpg') }}" height="250px" />
            <h1 style="color: #5cb8e4">Revisi</h1>
            <p>Setelah selesai akan kami kirimkan desain<br />anda dan anda dapat juga meminta revisi.</p>
          </div>
        </div>
      </div>
    </section>

    <div style="background-color: #5cb8e4; padding: 10px; padding-top: 24px">
      <p class="text-center" style="color: #181818; font-size: 17px">Copyright &copy; LOKAL. 2023</p>
    </div>
    <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"
      ><img src="images/top.png" width="15px"
    /></a>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/fahli.js"></script>
  </body>
</html>
