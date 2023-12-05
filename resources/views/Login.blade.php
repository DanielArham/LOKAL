<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | LOKAL.</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/fahli.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="img/logo.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <style>
      .card {
        width: 350px;
        margin: 0 auto;
        float: none;
        color: #5CB8E4;
      }
      .halaman-login {
        background-color: #5CB8E4;
      }
    </style>

    <body class="halaman-login">
      <div class="container">
        <div class="card text-center position-absolute top-50 start-50 translate-middle">
          <div class="card-header">
            <h1 style="text-align: center">Login</h1>
            <h5 style="text-align: center">silahkan login dahulu</h5>
          </div>
          <div class="card-body" style="background-color: #5CB8E4">
            <form autocomplete="off" action="{{ route('login.store') }}" class="" method="POST">
              @csrf
              <input type="hidden" id="action" value="login" />
              <div class="m-2">
                <input type="text" name="username" placeholder="Username" required><br>

              </div>
              <div class="m-2">
                <input type="password" name="password" placeholder="Password" required><br>

              </div>
              <div class="m-2" style="float: center">
                <button class="btn btn-danger" type="submit">Masuk</button>
              </div>
              <div>
                <a href="lupapassword" style="color: white">Lupa password?</a>
              </div>
              <div>
                <a href="/Registration" style="color: white">Belum punya akun?</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </body>
    <script src="js/bootstrap.min.js"></script>
  </html>
</html>
