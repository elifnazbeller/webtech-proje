<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sayfası</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e2e3db;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            max-width: 300px;
            width: 100%;
            padding: 2em;
            border: 1px solid #ccc;
            border-radius: 1em;
            background-color: #c7a9bf;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        div + div {
            margin-top: 1em;
        }
        label {
            display: block;
            margin-bottom: 0.5em;
        }
        input[type="email"]{
            width: 100%;
            padding: 0.5em;
            border: 1px solid #ccc;
            border-radius: 0.5em;
        }

        input[type="password"] {
            width: 100%;
            padding: 0.5em;
            border: 1px solid #ccc;
            border-radius: 0.5em;
        }
        button {
            width: 100%;
            padding: 0.75em;
            border: none;
            border-radius: 0.5em;
            background-color: #895f7c;
            color: #fff;
            font-size: 1em;
            cursor: pointer;
        }
        button:hover {
            background-color: #004494;
        }
        .giris {
            text-align: center;
        }
        .error {
            color: red;
            text-align: center;
            margin-bottom: 1em;
        }
    </style>
</head>
<body>
    <form action="validate.php" method="POST">
        <h2 class="giris">Giriş Yap</h2>
        <?php 
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo "<p class='error'>Lütfen tüm alanları doldurunuz.</p>";
                } else if ($_GET['error'] == "invalidemail") {
                    echo "<p class='error'>Geçersiz e-posta adresi. Lütfen geçerli bir e-posta giriniz.</p>";
                } else if ($_GET['error'] == "invalidcredentials") {
                    echo "<p class='error'>Yanlış kullanıcı adı veya şifre.</p>";
                }
            }
        ?>
        <div>
            <label for="username">Kullanıcı Adı (E-posta):</label>
            <input type="email" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Şifre:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Giriş Yap</button>
        </div>
    </form>
</body>
</html>
