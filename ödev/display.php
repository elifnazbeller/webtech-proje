<?php
session_start();
if (!isset($_SESSION['name']) || !isset($_SESSION['email']) || !isset($_SESSION['message'])) {
    header("Location: contact.html");
    exit;
}

$name = $_SESSION['name'];
$email = $_SESSION['email'];
$message = $_SESSION['message'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gönderilen Form Bilgileri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e2e3db;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 1em;
            box-sizing: border-box;
        }
        .container {
            max-width: 600px;
            width: 100%;
            padding: 2em;
            border: 1px solid #ccc;
            border-radius: 1em;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }
        h2 {
            text-align: center;
            margin-bottom: 1em;
        }
        p {
            margin: 0.5em 0;
        }
        @media (max-width: 600px) {
            .container {
                padding: 1em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Gönderilen Form Bilgileri</h2>
        <p><strong>Adınız:</strong> <?php echo htmlspecialchars($name); ?></p>
        <p><strong>E-posta:</strong> <?php echo htmlspecialchars($email); ?></p>
        <p><strong>Mesajınız:</strong></p>
        <p><?php echo nl2br(htmlspecialchars($message)); ?></p>
    </div>
</body>
</html>
