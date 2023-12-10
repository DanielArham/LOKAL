<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logokecil.png') }}">
    <style>
        body
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .column {
            flex: 48%;
            padding: 10px;
            margin-bottom: 20px;
        }
        .total {
            font-weight: bold;
            margin-top: 20px;
            flex-basis: 100%;
        }
        .card {
            border: 1px solid #ddd;
            padding: 10px;
            background-color: #fff;
            margin-bottom: 10px;
        }
        .card h3 {
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .button-container {
            text-align: center;
        }
        .select-address-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #0c0c0c;
            background-color: #fcf8f8; /* Warna hijau muda */
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 5px;
        }
        .payment-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #87CEEB; /* Warna biru muda */
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .payment-column {
            flex: 48%;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">

<div class="row">
    <div class="col-md-6">
        <h4>Informasi Pembeli</h4>
        <p>Nama Pembeli: <span id="namaPembeli">{{ session('username') }}</span></p>
    </div>
    <div class="col-md-6">
        <input type="hidden" name="paket" id="hiddenPaket">
        <input type="hidden" name="harga" id="hiddenHarga">
    </div>
</div>

        <div class="column">
            <div class="card">
                <h3>Ringkasan Pembelian</h3>
                <table>
                    <tr>
                        <th>Nama Jasa</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                    </tr>
                    <tr>
                        <td><span id="namaPaket"></span></td>
                        <td>1</td>
                        <td> <span id="hargaPaket"></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="payment-column">
            <div class="card">
                <h3>Pembayaran</h3>
                <div class="row">
                    <div class="column">
                        <h4>Total Harga</h4>
                        <p><span id="totalPembayaran"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="total">
            <h3>Total Tagihan</h3>
            <p><span id="totalTagihan"></span></p>
        </div>
        <div class="button-container">
            <a href="#" class="payment-button">Pembayaran</a>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Mendapatkan parameter dari URL
            const urlParams = new URLSearchParams(window.location.search);
            const serviceName = urlParams.get('serviceName');
            const price = urlParams.get('price');

            // Menampilkan nilai pada halaman checkout
            document.getElementById('namaPaket').innerText = serviceName;
            document.getElementById('hargaPaket').innerText = formatRupiah(price.toString(), 'Rp ');
            document.getElementById('totalTagihan').innerText = formatRupiah(price.toString(), 'Rp ');
            document.getElementById('totalPembayaran').innerText = formatRupiah(price.toString(), 'Rp ');


            // Mengatur nilai pada input hidden untuk dikirim saat submit formulir
            document.getElementById('hiddenPaket').value = serviceName;
            document.getElementById('hiddenHarga').value = price;
        });

        // Fungsi untuk format angka ke dalam format rupiah
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

</body>


</html>
