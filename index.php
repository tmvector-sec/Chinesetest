<?php
// SIZNING PAPKANGIZ: /var/www/html/qr
$papka = 'qr/';

// Papkada barcha .html fayllarini avtomatik topish
$htmlFayllar = glob($papka . '*.html');
?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>QR HTML Fayllarim</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            padding: 40px;
            background: #f0f2f5;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #222;
            margin-bottom: 25px;
            text-align: center;
        }
        ul {
            list-style: none;
        }
        li {
            margin: 10px 0;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 6px;
            transition: 0.2s;
        }
        li:hover {
            background: #e9ecef;
        }
        a {
            text-decoration: none;
            color: #007bff;
            font-size: 18px;
            font-weight: 500;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>QR papkasidagi HTML fayllar</h1>
        <ul>
            <?php if (!empty($htmlFayllar)): ?>
                <?php foreach ($htmlFayllar as $fayl): ?>
                    <?php $faylNomi = basename($fayl); ?>
                    <li>
                        <a href="<?= $fayl ?>" target="_blank">
                            <?= $faylNomi ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <li style="color: #dc3545; text-align: center; font-size: 17px;">
                    ❌ Hozircha `qr` papkasida hech qanday HTML fayl yo'q!
                </li>
            <?php endif; ?>
        </ul>
    </div>
</body>
</html>
