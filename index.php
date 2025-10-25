<?php
$message = "Zeynep seni seviorym 💖";
?>
<!doctype html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <title>Aşk Mesajı</title>
  <style>
    body {
      margin: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(135deg, #ff9a9e, #fad0c4, #fbc2eb, #a6c1ee);
      background-size: 400% 400%;
      animation: bgMove 10s ease infinite;
      font-family: 'Poppins', sans-serif;
    }

    @keyframes bgMove {
      0% {background-position: 0% 50%;}
      50% {background-position: 100% 50%;}
      100% {background-position: 0% 50%;}
    }

    h1 {
      font-size: 3em;
      color: white;
      text-shadow: 0 0 20px rgba(255, 255, 255, 0.8);
      opacity: 0;
      animation: fadeIn 3s forwards, heartbeat 1.5s infinite 3s;
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: scale(0.8);}
      to {opacity: 1; transform: scale(1);}
    }

    @keyframes heartbeat {
      0%, 100% {transform: scale(1);}
      50% {transform: scale(1.1);}
    }
  </style>
</head>
<body>
  <h1><?php echo $message; ?></h1>
</body>
</html>
