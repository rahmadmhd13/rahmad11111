<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .login-container {
            width: 300px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-button {
            width: 100%;
            padding: 10px;
            background-image: url('path_to_your_image.jpg');
            background-size: cover;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .login-button:hover {
            background-color: #007bff; /* Warna latar belakang tombol saat dihover */
        }
        .form-group {
            margin-bottom: 10px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>website baju </h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <input type="submit" value="Login" class="login-button">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil data dari form login
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Cek kredensial pengguna
            if ($username == 'outfit lebaran' && $password == 'kemeja123') {
                // Kredensial benar, arahkan ke halaman selamat datang
                header('Location:Untitled-1.html');
                exit();
            } else {
                // Kredensial salah, tampilkan pesan error
                echo '<div class="error-message">Username atau password salah!</div>';
            }
        }
        ?>
    </div>
</body>
</html>