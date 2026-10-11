<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Pilih Perangkat - TEKNOFIX</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>


<header class="navbar">

    <a href="index.php" class="logo">
        🔧 TEKNOFIX
    </a>

    <a href="index.php" class="btn btn-outline">
        ← Kembali
    </a>

</header>


<main class="page">

    <div class="step">
        LANGKAH 1 DARI 5
    </div>

    <h1>
        Pilih Perangkat
    </h1>

    <p class="muted">
        Pilih perangkat yang ingin Anda servis.
    </p>


    <div class="cards">


        <button
            class="card device-choice"
            data-device="Laptop">

            <span class="device-icon">
                💻
            </span>

            <h3>
                Laptop
            </h3>

            <p>
                Servis laptop
            </p>

        </button>


        <button
            class="card device-choice"
            data-device="Smartphone">

            <span class="device-icon">
                📱
            </span>

            <h3>
                Smartphone
            </h3>

            <p>
                Servis smartphone
            </p>

        </button>


        <button
            class="card device-choice"
            data-device="TV">

            <span class="device-icon">
                📺
            </span>

            <h3>
                TV
            </h3>

            <p>
                Servis televisi
            </p>

        </button>


        <button
            class="card device-choice"
            data-device="Lainnya">

            <span class="device-icon">
                🔌
            </span>

            <h3>
                Lainnya
            </h3>

            <p>
                Perangkat lainnya
            </p>

        </button>


    </div>

</main>


<script src="script.js"></script>

</body>

</html>