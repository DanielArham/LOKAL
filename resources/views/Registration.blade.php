
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Akun</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        #login-link {
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }
        #password-validation-message {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Pendaftaran Akun</h2>
        <form id="registration-form" method="POST" action="{{ route('register.store') }}">
            @csrf
            <input type="text" name="new-username" placeholder="Username" required><br>
            <input type="password" name="new-password" id="new-password" placeholder="Password" required><br>
            <span id="password-validation-message"></span><br>
            <button type="submit" class="btn" id="registration-button" disabled>Daftar</button>
        </form>
        <a href="/Login" id="login-link">Sudah punya akun? Masuk</a>
    </div>

    <script>
        // Validasi password di sisi klien
        document.getElementById("new-password").addEventListener("keyup", function () {
            var password = this.value;
            var passwordValidationMessage = document.getElementById("password-validation-message");
            var registrationButton = document.getElementById("registration-button");

            // RegEx untuk memeriksa apakah password memiliki setidaknya satu huruf dan satu angka
            var regex = /^(?=.*[a-zA-Z])(?=.*\d).+$/;

            if (regex.test(password)) {
                passwordValidationMessage.innerText = "";
                registrationButton.disabled = false;
            } else {
                passwordValidationMessage.innerText = "Password harus memiliki setidaknya satu huruf dan satu angka.";
                registrationButton.disabled = true;
            }
        });
    </script>
</body>
</html>
