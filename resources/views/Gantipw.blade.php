
<!DOCTYPE html>
<html>
<head>
    <title>Ganti Password</title>
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
        input[type="password"] {
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
        #password-validation-message {
            color: red;
        }
        #back-link {
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Ganti Password</h2>
        <form id="change-password-form" method="POST" action="{{ route('changePassword.store')}}">
            @csrf
            <input type="password" name="old_password" placeholder="Password Lama" required><br>
            <input type="password" name="new_password" id="new_password" placeholder="Password Baru" required><br>
            <span id="password-validation-message"></span><br>
            <button type="submit" class="btn">Ganti Password</button>
        </form>
        <a href=/website id="back-link">Kembali ke Profil</a>
    </div>

    <script>
        // Validasi password baru menggunakan JavaScript
        const newPasswordInput = document.getElementById('new_password');
        const passwordValidationMessage = document.getElementById('password-validation-message');
        const changePasswordButton = document.querySelector('button[type="submit"]');

        newPasswordInput.addEventListener('keyup', () => {
            const newPassword = newPasswordInput.value;
            const regex = /^(?=.*[a-zA-Z])(?=.*\d).+$/;

            if (regex.test(newPassword)) {
                passwordValidationMessage.textContent = '';
                changePasswordButton.disabled = false;
            } else {
                passwordValidationMessage.textContent = 'Password harus mengandung setidaknya satu huruf dan satu angka.';
                changePasswordButton.disabled = true;
            }
        });
    </script>
</body>
</html>
