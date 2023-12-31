<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="LOKAL." />
    <title>Pembayaran | LOKAL.</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/fahli.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logokecil.png') }}">
</head>
<body>
<section>
<div class="d-flex justify-content-center">
        <div class="wrap py-3 col-md-7">
        <div class="card features-2 shadow-lg">
            <div class="container-lg">
                <div class="jumbotron py-3 mb-3 text-center shadow-sm">
                    <h1 class="text-monospace">Pembayaran</h1>
                    <p class="lead mb-0">
                        <span class="text-secondary">Total Pembayaran: </span>
                        <small class="align-top text-secondary">Rp</small> <span id="totaltransfer">
                    </p>
                </div>
                <div class="card shadow-sm">
                    <div class="card-body">
                    <input type="hidden" id="hiddenPaket" name="hiddenPaket">
                        <input type="hidden" id="hiddenHarga" name="hiddenHarga">
                        <p class="lead text-center mb-4">
                            Batas Waktu Pembayaran <br>
                            <span class="text-danger" id="limit"></span> <br>
                            <small> Anda dapat melakukan pembayaran dengan cara sebagai berikut:</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>  </div>
    <script type="text/javascript">

    var limit = new Date().toLocaleString("en-US", {timeZone: "Asia/Jakarta"}).slice(0,10).replace(/\//g,'-') + " 23:59:59";
    // Set the date we're counting down to
    var countDownDate = new Date(limit).getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        // var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        hours = (hours < 10) ? '0' + hours : hours;
        document.getElementById("limit").innerHTML = limit;
        document.getElementById("clock").innerHTML = hours + ":" + minutes + ":" + seconds;

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("clock").innerHTML = "EXPIRED";
        }
    }, 1000);

    document.addEventListener("DOMContentLoaded", function () {
    // Get parameters from the URL
    const urlParams = new URLSearchParams(window.location.search);
    const serviceName = urlParams.get('serviceName');
    const price = urlParams.get('price');

    // Display values on the checkout page
    document.getElementById('totaltransfer').innerText = formatRupiah(price, 'Rp ');

    // Set values for hidden form input fields
    document.getElementById('hiddenPaket').value = serviceName;
    document.getElementById('hiddenHarga').value = price;
});

// Function to format numbers into Indonesian Rupiah format
function formatRupiah(angka, prefix) {
    var number_string = angka.toString().replace(/[^,\d]/g, ''),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix === undefined ? rupiah : rupiah ? 'Rp ' + rupiah : '';
}

    </script>

</section>
<section id="why-us" class="container section">
      <div class="row equal">
          <div class="col-12 col-md-4 spc">
              <div class="card features-2 shadow-lg">
                  <span class="text-center content">
                      <img src="{{ asset('images/bni.jpg') }}" style="width: 100px;">
                      <h4>Transfer Bank BNI</h4>
                      <strong>No Rekening:</strong> 5678-123-456
                  </span>
              </div>
          </div>
          <div class="col-12 col-md-4 spc">
              <div class="card features-2 shadow-lg">
                  <span class="text-center content">
                      <img src="{{ asset('images/bri.jpg') }}" style="width: 130px;">
                      <h4>Transfer Bank BRI</h4>
                      <strong>No Rekening:</strong> 5678-123-456
                  </span>
              </div>
          </div>
          <div class="col-12 col-md-4 spc">
              <div class="card features-2 shadow-lg">
                  <span class="text-center content">
                      <img src="{{ asset('images/bca.jpg') }}" style="width: 120px;">
                      <h4>Transfer Bank BCA</h4>
                      <strong>No Rekening:</strong> 5678-123-456
                  </span>
              </div>
          </div>
      </div>

      <div class="row equal">
          <div class="col-12 col-md-4 spc">
              <div class="card features-2 shadow-lg">
                  <span class="text-center content">
                      <img src="{{ asset('images/dana.jpg') }}" style="width: 100px;">
                      <h4>Transfer Dana</h4>
                      <strong>No HP:</strong> 5678-123-456
                  </span>
              </div>
          </div>
          <div class="col-12 col-md-4 spc">
              <div class="card features-2 shadow-lg">
                  <span class="text-center content">
                      <img src="{{ asset('images/shopeepay.jpg') }}" style="width: 130px;">
                      <h4>Transfer ShopeePay</h4>
                      <strong>No HP:</strong> 5678-123-456
                  </span>
              </div>
          </div>
          <div class="col-12 col-md-4 spc">
              <div class="card features-2 shadow-lg">
                  <span class="text-center content">
                      <img src="{{ asset('images/gopay.jpg') }}" style="width: 120px;">
                      <h4>Transfer Gopay</h4>
                      <strong>No HP:</strong> 5678-123-456
                  </span>
              </div>
          </div>
      </div>
  </section>

  <div class="container">
  <div class="col-12 spc">
              <div class="card features-2 shadow-lg">
                  <span class="text-center content">
                  <h4 class="mb-0">
                                Silahkan konfirmasi pada nomor dibawah jika sudah melakukan pembayaran dan kirim bukti pembayaran
</h4> <br><br>
                            <a href="https://wa.me/085856267775" class="btn btn-purple" target="_blank">
                                Hubungi via WhatsApp
                            </a>
                  </span>
              </div>
          </div>
    </div>
    <br>
    <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><img src="images/top.png" width="15px"></a>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/fahli.js"></script>
</body>
</html>
