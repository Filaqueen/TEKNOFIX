<?php

$device = $_GET['device'] ?? '-';
$keluhan = $_GET['keluhan'] ?? '-';
$tanggal = $_GET['tanggal'] ?? '-';
$alamat = $_GET['alamat'] ?? '-';
$teknisi = $_GET['teknisi'] ?? '-';
$harga = $_GET['harga'] ?? '0';

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Konfirmasi Pesanan - TEKNOFIX</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>


<header class="navbar">

    <a href="index.php" class="logo">
        🔧 TEKNOFIX
    </a>

</header>


<main class="page narrow">

    <div class="step">
        LANGKAH 4 DARI 5
    </div>


    <h1>
        Konfirmasi Pesanan
    </h1>


    <div class="summary">


        <div>
            <span>Perangkat</span>
            <strong>
                <?php echo htmlspecialchars($device); ?>
            </strong>
        </div>


        <div>
            <span>Keluhan</span>
            <strong>
                <?php echo htmlspecialchars($keluhan); ?>
            </strong>
        </div>


        <div>
            <span>Tanggal</span>
            <strong>
                <?php echo htmlspecialchars($tanggal); ?>
            </strong>
        </div>


        <div>
            <span>Alamat</span>
            <strong>
                <?php echo htmlspecialchars($alamat); ?>
            </strong>
        </div>


        <div>
            <span>Teknisi</span>
            <strong>
                <?php echo htmlspecialchars($teknisi); ?>
            </strong>
        </div>


        <div class="total">

            <span>
                Total Estimasi
            </span>

            <strong>
                Rp<?php echo number_format($harga, 0, ',', '.'); ?>
            </strong>

        </div>


    </div>


    <form action="pembayaran.php" method="GET">

        <input type="hidden"
               name="harga"
               value="<?php echo htmlspecialchars($harga); ?>">

        <input type="hidden" name="teknisi" value="<?php echo htmlspecialchars($teknisi, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="device" value="<?php echo htmlspecialchars($device, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="keluhan" value="<?php echo htmlspecialchars($keluhan, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="tanggal" value="<?php echo htmlspecialchars($tanggal, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="alamat" value="<?php echo htmlspecialchars($alamat, ENT_QUOTES, 'UTF-8'); ?>">

        <div class="form-actions">

            <a href="teknisi.php"
               class="btn btn-outline">

                Kembali

            </a>


            <button
                type="submit"
                class="btn btn-orange">

                Konfirmasi & Bayar →

            </button>

        </div>

    </form>

</main>

</body>

</html>