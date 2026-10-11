<?php

$teknisi = $_GET['teknisi'] ?? '';
$harga = $_GET['harga'] ?? '';
$metode = $_GET['metode'] ?? '';
$rating = $_GET['rating'] ?? '';
$ulasan = $_GET['ulasan'] ?? '';
$device = $_GET['device'] ?? '';
$keluhan = $_GET['keluhan'] ?? '';
$tanggal = $_GET['tanggal'] ?? '';
$alamat = $_GET['alamat'] ?? '';

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Riwayat - TEKNOFIX</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>


<header class="navbar">

    <a href="index.php" class="logo">
        🔧 TEKNOFIX
    </a>

    <a href="index.php"
       class="btn btn-blue">

        Beranda

    </a>

</header>


<main class="page narrow">


    <h1>
        Riwayat Layanan
    </h1>


    <?php if ($teknisi != ''): ?>

        <div class="history-card">

            <h2>
                Servis Elektronik
            </h2>


            <p><strong>Perangkat:</strong> <?php echo htmlspecialchars($device, ENT_QUOTES, 'UTF-8'); ?></p>
            <p><strong>Keluhan:</strong> <?php echo htmlspecialchars($keluhan, ENT_QUOTES, 'UTF-8'); ?></p>
            <p><strong>Tanggal:</strong> <?php echo htmlspecialchars($tanggal, ENT_QUOTES, 'UTF-8'); ?></p>
            <p><strong>Alamat:</strong> <?php echo htmlspecialchars($alamat, ENT_QUOTES, 'UTF-8'); ?></p>
            <p>
                <strong>Teknisi:</strong>

                <?php
                echo htmlspecialchars($teknisi);
                ?>

            </p>


            <p>
                <strong>
                    Biaya:
                </strong>

                Rp<?php
                echo number_format(
                    $harga,
                    0,
                    ',',
                    '.'
                );
                ?>

            </p>


            <p>
                <strong>
                    Pembayaran:
                </strong>

                <?php
                echo htmlspecialchars($metode);
                ?>

            </p>


            <p>
                <strong>
                    Rating:
                </strong>

                ⭐<?php
                echo htmlspecialchars($rating);
                ?>

            </p>


            <p>
                <strong>
                    Ulasan:
                </strong>

                <?php
                echo htmlspecialchars($ulasan);
                ?>

            </p>


            <div class="success">

                ✓ Layanan selesai

            </div>

        </div>


    <?php else: ?>

        <div class="history-card">

            <p class="muted">
                Belum ada riwayat layanan.
            </p>

        </div>

    <?php endif; ?>


</main>

</body>

</html>