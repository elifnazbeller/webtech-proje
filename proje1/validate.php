<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Boş alan kontrolü
    if (empty($username) || empty($password)) {
        header("Location: login.php");
        exit;
    }

    // Kullanıcı adı (email) kontrolü
    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        header("Location: login.php");
        exit;
    }

    // Kullanıcı adı ve şifrenin doğrulanması
    $studentNumber = explode('@', $username)[0];
    if ($password === $studentNumber) {
        echo "Hoşgeldiniz, " . htmlspecialchars($studentNumber);
    } else {
        header("Location: login.php");
        exit;
    }
} else {
    header("Location: login.php");
    exit;
}
?>
