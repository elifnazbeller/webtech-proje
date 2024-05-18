<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sayfası</title>
    <style>
        form {
            max-width: 300px;
            margin: auto;
            padding: 1em;
            border: 1px solid #ccc;
            border-radius: 1em;
        }
        div + div {
            margin-top: 1em;
        }
    </style>
</head>
<body>
    <h2>Giriş Yap</h2>
    <form action="validate.php" method="POST">
        <div>
            <label for="username">Kullanıcı Adı (Öğrenci Numarası):</label>
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
