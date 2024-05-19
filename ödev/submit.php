<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Form verilerini kontrol et
    if (empty($name) || empty($email) || empty($message)) {
        header("Location: contact.html?error=emptyfields");
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.html?error=invalidemail");
        exit;
    }

    // Başarılıysa verileri oturuma kaydet
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['message'] = $message;

    header("Location: display.php");
    exit;
} else {
    header("Location: contact.html");
    exit;
}
?>
