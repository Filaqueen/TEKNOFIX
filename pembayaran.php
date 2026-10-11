<?php

$harga = $_GET['harga'] ?? '0';
$teknisi = $_GET['teknisi'] ?? '-';
$device = $_GET['device'] ?? '-';
$keluhan = $_GET['keluhan'] ?? '-';
$tanggal = $_GET['tanggal'] ?? '-';
$alamat = $_GET['alamat'] ?? '-';

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Pembayaran - TEKNOFIX</title>

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
        LANGKAH 5 DARI 5
    </div>


    <h1>
        Pembayaran Servis
    </h1>


    <div class="payment-card">

        <p>
            Total Pembayaran
        </p>


        <h2>
            Rp<?php echo number_format($harga, 0, ',', '.'); ?>
        </h2>


        <hr>


        <p class="muted">Pembayaran pada versi ini hanya simulasi tugas, belum memproses uang sungguhan.</p>
        <form action="rating.php" method="GET">
            <input type="hidden" name="device" value="<?php echo htmlspecialchars($device, ENT_QUOTES, 'UTF-8'); ?>">
            <input type="hidden" name="keluhan" value="<?php echo htmlspecialchars($keluhan, ENT_QUOTES, 'UTF-8'); ?>">
            <input type="hidden" name="tanggal" value="<?php echo htmlspecialchars($tanggal, ENT_QUOTES, 'UTF-8'); ?>">
            <input type="hidden" name="alamat" value="<?php echo htmlspecialchars($alamat, ENT_QUOTES, 'UTF-8'); ?>">

            <input type="hidden"
                   name="harga"
                   value="<?php echo htmlspecialchars($harga); ?>">

            <input type="hidden"
                   name="teknisi"
                   value="<?php echo htmlspecialchars($teknisi); ?>">


            <label>
                Metode Pembayaran
            </label>


            <label class="radio">

                <input
                    type="radio"
                    name="metode"
                    value="QRIS"
                    checked>

                QRIS

            </label>


            <label class="radio">

                <input
                    type="radio"
                    name="metode"
                    value="E-Wallet">

                E-Wallet

            </label>


            <label class="radio">

                <input
                    type="radio"
                    name="metode"
                    value="Transfer Bank">

                Transfer Bank

            </label>


            <button
                type="submit"
                class="btn btn-orange full">

                Bayar Sekarang

            </button>

        </form>

    </div>

</main>

</body>

</html>