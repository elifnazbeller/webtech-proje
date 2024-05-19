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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title> Elif Naz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stil.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container {
            margin-top: auto;
            margin-bottom: auto;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            width: 600%;
            padding: 2em;
            border: 1px solid #ccc;
            border-radius: 1em;
            background-color: #c7a9bf;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body style="background-color: #f8f8f8;" >
  <a class="link active" aria-current="page" href="main.html"></a>
     <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" style=" background-color:#e3e2db">
          <a class="navbar-brand" href="main.html">
            <img src="elifnazline.png" width="125" height="50">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="hakkimda.html">Hakkımda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="hobies.html">Hobilerim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cv.html">CV</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #e3e2db;">
                  Şehrim</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="bursa.html">Bursa</a></li>
                    <li><a class="dropdown-item" href="bursahakkinda.html">Bursa Hakkında</a></li>
                    <li><a class="dropdown-item" href="gezilecekyerler.html">Gezilecek Yerler</a></li>
                    <li><a class="dropdown-item" href="mirasimiz.html">Mirasımız</a></li>
                  </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">İletişim</a>
              </li>
            </ul>
          </div>
        </div>
      </nav> 

    <div class="container">
        <h2>Form Başarıyla Gönderildi</h2>
    </div>
</body>
</html>
