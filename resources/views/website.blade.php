<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
       <link rel="stylesheet" href="design.css">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@500&family=Poppins:ital,wght@0,300;1,200;1,800&display=swap" rel="stylesheet">
       <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Saya</title>
</head>
<body>
<style>
  h4 {
    margin: 0;
  }
</style>
    <div class="top container-fluid ">
  <h4 id="1"></h4>
  <nav style="background-color: black !important;" class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <img style="padding-top: 5px;" width="200px" src="Fontks.png" alt="">
      <button style="background-color: darkgoldenrod;padding: 1px;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span  class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item px-5 pt-4">
            <a  style="font-family: Poppins ; color: darkgoldenrod; font-size: 20px;" class="nav-link" href="#1">Beranda</a>
          </li>
          <li class="nav-item px-5 pt-4">
            <a style="font-family: Poppins; color: darkgoldenrod;font-size: 20px;" class="nav-link" href="#2">Menu</a>
          </li>
          <li class="nav-item dropdown px-5 pt-4">
            <a style="font-family: Poppins; color: darkgoldenrod;font-size: 20px;" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Lainnya
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/Gantipw">Ganti Password</a></li>
              <li><a class="dropdown-item" href="/Hapusakun">Hapus Akun</a></li>
            </ul>
          </li>
          <li class="nav-item px-5 pt-4">
            <button id="dark-mode-toggle" style="color: white; font-size: 20px; font-family: Poppins;" type="button" class="btn btn-warning">Mode</button>
          </li>

          <li class="nav-item px-5 pt-4">
          <?php
          session_start(); 
    if (auth()->check()) {
        echo '<button id="dark-mode-toggle" style="margin-left: 750px; color: white; font-size: 20px; font-family: Poppins;" type="button" class="btn btn-warning"><a href="/Logout">Keluar</a></button>';
    } else {
        echo '<button id="dark-mode-toggle" style="margin-left: 750px; color: white; font-size: 20px; font-family: Poppins;" type="button" class="btn btn-warning"><a href="/Login">Masuk</a></button>';
    }
    ?>       
            </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <br>

  <div class="top2 container-fluid ">
  <div class="container text-center">
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
      <div class="col mb-5">
        <div style="max-width: 100%;" id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="logo besar.png" width="424px"  alt="">
            </div>
            <div class="carousel-item">
              <img src="11.jpg" width="424px" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="col mb-5">
        <div style="color: darkgoldenrod; font-family: Poppins; font-size: 30px; text-align: justify;">
          <br>
          Kedaisemut adalah destinasi kopi yang sempurna bagi pecinta kopi yang mencari pengalaman kopi kekinian tanpa harus merogoh kocek dalam-dalam. Dengan lokasi yang nyaman dan suasana yang santai, Kedaisemut menawarkan berbagai pilihan kopi berkualitas tinggi dengan harga yang terjangkau.
        </div>
      </div>
    </div>
  </div>
  </div>
    <h4 id="2"></h4>
    <div class="mid container-fluid">
      <div class="container text-center">
        <div class="row">
          <div  class="col-12 col-md-4 mb-3">
            <img width="400px" src="21.png" alt="" class="gambar img-fluid">
            <br>
            <br>
            <button style="font-weight: bold; font-size: 30px; font-family: Poppins;padding: 0px 20px;" type="button" class="btn btn-warning">7K</button>
          </div>
          <div class="col-12 col-md-4 mb-3">
            <img width="400px" src="22.png" alt="" class="gambar img-fluid">
            <br>
            <br>
            <button style="font-weight: bold; font-size: 30px; font-family: Poppins;padding: 0px 20px;" type="button" class="btn btn-warning">7K</button>
          </div>
          <div class="col-12 col-md-4 mb-3">
            <img width="400px" src="23.png" alt="" class="gambar img-fluid">
            <br>
            <br>
            <button style="font-weight: bold; font-size: 30px; font-family: Poppins;padding: 0px 20px;" type="button" class="btn btn-warning">7K</button>

          </div>
        </div>
      </div>
    
        <br>
        <br>
        <div class="row">
          <div style="color: darkgoldenrod; font-family: Poppins; font-size: 30px; text-align: center;" class="col">
            Selain menu di atas, Kedai Semut juga menawarkan berbagai macam ice blend yang menyegarkan. Dengan variasi minuman yang menggugah selera, Anda dapat menikmati berbagai rasa ice blend yang khas dari kedai ini. Jadi, saat berkunjung ke Kedai Semut, jangan lewatkan kesempatan untuk mencicipi beragam ice blend yang menarik dan menyegarkan!
      </div>
  </div>
</div>
</div>
</div>

<div class="bot container-fluid">
  <div class="container text-center"></div>
<div class="row">
  <div style="text-align: center;" class="col">
    <br>
    <br>
    <img width="600px" src="Menu.png" class="img-fluid" alt="">
</div>
</div>
</div>

<h4 id="3"></h4>
<div  class="bot3 container-fluid">
  <br>
  <br>

  <div style="color: darkgoldenrod; font-family: Poppins; font-size: 30px; text-align: center;"  class="container d-flex flex-column justify-content-center align-items-center">
    <h1 ><u>Lokasi</u></h1>
    <span class="d-flex  items-center justify-content-center">

      <div  class="border border-warning d-flex d-inline-block">
        
          <div class="gmap_canvas img-fluid">
            
            <iframe src="https://maps.google.com/maps?q=KEDAI%20SEMUT%20Jl.%20KH.%20Yusuf%20No.58A,%20RW.05,%20Tasikmadu,%20Kec.%20Lowokwaru,%20Kota%20Malang,%20Jawa%20Timur%2065143&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=&amp;output=embed" id="gmap_canvas" frameborder="0" scrolling="no" ></iframe>
          </div>
        
      </div>
    </span>
      <div style="color: darkgoldenrod; font-family: Poppins; font-size: 30px; text-align: center;padding-bottom: 100px;">
        <br>
        <br>
        <h1 ><u>Ikuti Kami</u></h1>
            <a  style="color: darkgoldenrod; border-color: darkgoldenrod;" href="https://instagram.com/kedaisemut__?utm_source=qr&igshid=MzNlNGNkZWQ4Mg==" class="btn">Instagram</a>
        <a style="color: darkgoldenrod; border-color: darkgoldenrod;" href="http://wa.me/6281249268088" class="btn" >Whatsapp</a>
      </div>
      </div>
    </div>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" ></script>
<script src="./js.js" ></script>
</html>
