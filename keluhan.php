<?php

$device = $_GET['device'] ?? 'Belum dipilih';

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Keluhan - TEKNOFIX</title>

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
        LANGKAH 2 DARI 5
    </div>


    <h1>
        Detail Keluhan
    </h1>

    <p class="muted">
        Jelaskan masalah perangkat Anda.
    </p>


    <form action="teknisi.php" method="GET">

        <div class="selected-device">

            Perangkat:

            <strong>
                <?php echo htmlspecialchars($device); ?>
            </strong>

        </div>


        <input
            type="hidden"
            name="device"
            value="<?php echo htmlspecialchars($device); ?>"
        >


        <label>
            Keluhan
        </label>

        <textarea
            name="keluhan"
            rows="5"
            placeholder="Contoh: HP tidak bisa menyala..."
            required
        ></textarea>


        <label>
            Tanggal Servis
        </label>

        <input
            type="date"
            name="tanggal"
            required
        >


        <label>
            Alamat Servis
        </label>

        <textarea
            name="alamat"
            rows="3"
            placeholder="Masukkan alamat lengkap"
            required
        ></textarea>


        <div class="form-actions">

            <a
                href="perangkat.php"
                class="btn btn-outline">

                Kembali

            </a>

            <button
                type="submit"
                class="btn btn-orange">

                Cari Teknisi →

            </button>

        </div>

    </form>

</main>

</body>

</html>