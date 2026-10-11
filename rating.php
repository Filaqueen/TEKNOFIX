<?php

$harga = $_GET['harga'] ?? '0';
$teknisi = $_GET['teknisi'] ?? '-';
$metode = $_GET['metode'] ?? '-';
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

    <title>Rating - TEKNOFIX</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>


<header class="navbar">

    <a href="index.php" class="logo">
        🔧 TEKNOFIX
    </a>

</header>


<main class="page narrow">


    <div class="success">

        ✓ Pembayaran berhasil

    </div>


    <h1>
        Beri Rating & Ulasan
    </h1>


    <p class="muted">

        Bagaimana pengalaman Anda menggunakan
        layanan TEKNOFIX?

    </p>


    <form action="riwayat.php" method="GET">
        <input type="hidden" name="device" value="<?php echo htmlspecialchars($device, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="keluhan" value="<?php echo htmlspecialchars($keluhan, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="tanggal" value="<?php echo htmlspecialchars($tanggal, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="alamat" value="<?php echo htmlspecialchars($alamat, ENT_QUOTES, 'UTF-8'); ?>">

        <input type="hidden"
               name="teknisi"
               value="<?php echo htmlspecialchars($teknisi); ?>">


        <input type="hidden"
               name="harga"
               value="<?php echo htmlspecialchars($harga); ?>">


        <input type="hidden"
               name="metode"
               value="<?php echo htmlspecialchars($metode); ?>">


        <label>
            Rating
        </label>


        <select name="rating" required>

            <option value="">
                Pilih rating
            </option>

            <option value="5">
                ⭐⭐⭐⭐⭐ Sangat Baik
            </option>

            <option value="4">
                ⭐⭐⭐⭐ Baik
            </option>

            <option value="3">
                ⭐⭐⭐ Cukup
            </option>

            <option value="2">
                ⭐⭐ Kurang
            </option>

            <option value="1">
                ⭐ Buruk
            </option>

        </select>


        <label>
            Ulasan
        </label>


        <textarea
            name="ulasan"
            rows="5"
            placeholder="Tulis pengalaman Anda..."
            required></textarea>


        <button
            type="submit"
            class="btn btn-blue full">

            Kirim Ulasan

        </button>


    </form>

</main>

</body>

</html>