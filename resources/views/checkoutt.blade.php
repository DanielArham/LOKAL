<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
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
        <div class="column">
            <div class="card">
                <h3>Informasi Pembelian</h3>
                <label for="nama">Nama Pembeli:</label>
                <input type="text" id="nama" placeholder="Masukkan nama Anda"><br><br>
                <label for="noHandphone">No Handphone:</label>
                <input type="text" id="noHandphone" placeholder="Masukkan nomor Anda"><br><br>
                <label for="alamatEmail">Alamat Email: </label>
                <input type="email" id="alamatEmail" placeholder="Masukkan email Anda">
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
                        <td>Design Logo</td>
                        <td>1</td>
                        <td>Rp 350.000</td>
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
                        <p>Rp 350.000</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="total">
            <h3>Total Tagihan</h3>
            <p>Rp 350.000</p>
        </div>
        <div class="button-container">
            <a href="#" class="payment-button">Pembayaran</a>
        </div>
    </div>
</body>
</html>