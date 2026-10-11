<?php

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

    <title>Pilih Teknisi - TEKNOFIX</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>


<header class="navbar">

    <a href="index.php" class="logo">
        🔧 TEKNOFIX
    </a>

</header>


<main class="page">

    <div class="step">
        LANGKAH 3 DARI 5
    </div>


    <h1>
        Pilih Teknisi
    </h1>

    <p class="muted">
        Pilih teknisi yang sesuai dengan kebutuhan Anda.
    </p>


    <div class="technician-grid">


        <form action="pesanan.php" method="GET" class="technician">

            <input type="hidden" name="device"
                   value="<?php echo htmlspecialchars($device); ?>">

            <input type="hidden" name="keluhan"
                   value="<?php echo htmlspecialchars($keluhan); ?>">

            <input type="hidden" name="tanggal"
                   value="<?php echo htmlspecialchars($tanggal); ?>">

            <input type="hidden" name="alamat"
                   value="<?php echo htmlspecialchars($alamat); ?>">

            <input type="hidden" name="teknisi"
                   value="Tono Sumanto">

            <input type="hidden" name="harga"
                   value="130000">


            <div class="avatar">
                TS
            </div>


            <div>

                <h3>
                    Tono Sumanto
                </h3>

                <p>
                    ⭐ 4.8 · 120 ulasan
                </p>

                <p>
                    Surabaya · Smartphone, TV
                </p>

                <strong>
                    Mulai Rp130.000
                </strong>


                <button
                    class="btn btn-orange"
                    type="submit">

                    Pilih Teknisi

                </button>

            </div>

        </form>



        <form action="pesanan.php" method="GET" class="technician">

            <input type="hidden" name="device"
                   value="<?php echo htmlspecialchars($device); ?>">

            <input type="hidden" name="keluhan"
                   value="<?php echo htmlspecialchars($keluhan); ?>">

            <input type="hidden" name="tanggal"
                   value="<?php echo htmlspecialchars($tanggal); ?>">

            <input type="hidden" name="alamat"
                   value="<?php echo htmlspecialchars($alamat); ?>">

            <input type="hidden" name="teknisi"
                   value="Budi Teknisi">

            <input type="hidden" name="harga"
                   value="110000">


            <div class="avatar">
                BT
            </div>


            <div>

                <h3>
                    Budi Teknisi
                </h3>

                <p>
                    ⭐ 4.7 · 96 ulasan
                </p>

                <p>
                    Surabaya · Laptop, Smartphone
                </p>

                <strong>
                    Mulai Rp110.000
                </strong>


                <button
                    class="btn btn-orange"
                    type="submit">

                    Pilih Teknisi

                </button>

            </div>

        </form>



        <form action="pesanan.php" method="GET" class="technician">

            <input type="hidden" name="device"
                   value="<?php echo htmlspecialchars($device); ?>">

            <input type="hidden" name="keluhan"
                   value="<?php echo htmlspecialchars($keluhan); ?>">

            <input type="hidden" name="tanggal"
                   value="<?php echo htmlspecialchars($tanggal); ?>">

            <input type="hidden" name="alamat"
                   value="<?php echo htmlspecialchars($alamat); ?>">

            <input type="hidden" name="teknisi"
                   value="Raka Elektronik">

            <input type="hidden" name="harga"
                   value="150000">


            <div class="avatar">
                RE
            </div>


            <div>

                <h3>
                    Raka Elektronik
                </h3>

                <p>
                    ⭐ 4.9 · 143 ulasan
                </p>

                <p>
                    Gresik · Laptop, TV
                </p>

                <strong>
                    Mulai Rp150.000
                </strong>


                <button
                    class="btn btn-orange"
                    type="submit">

                    Pilih Teknisi

                </button>

            </div>

        </form>


    </div>

</main>

</body>

</html>