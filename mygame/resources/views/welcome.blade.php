<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oyun Tanıtım Sayfası</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Genel Stil */
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #0e0e0e;
            color: #f4f4f4;
        }

        /* Header */
        header {
            background: linear-gradient(145deg, #1e3a8a, #1d4ed8, #9333ea);
            color: white;
            padding: 80px 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        header h1 {
            font-size: 3.5rem;
            position: relative;
            text-shadow: 0px 0px 15px #00000066, 0px 0px 10px #ff00ffcc;
            animation: slide-in 1.5s ease-out;
        }

        header p {
            margin-top: 10px;
            font-size: 1.2rem;
            animation: fade-in 2s ease-in;
        }

        @keyframes slide-in {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fade-in {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Ana İçerik */
        .info-section {
            text-align: center;
            margin: 40px auto 20px;
        }

        .info-section h2 {
            font-size: 2.5rem;
            color: #60a5fa;
            animation: fade-in-down 1.5s ease-in-out;
        }

        .info-section p {
            font-size: 1.2rem;
            color: #ccc;
            margin-top: 15px;
        }

        @keyframes fade-in-down {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .container {
            margin-top: 40px;
            background-color: #181818;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0px 12px 24px rgba(0, 0, 0, 0.8);
        }

        .game-section {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 50px;
            position: relative;
        }

        .game-section img {
            width: 100%;
            max-width: 500px;
            border-radius: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0px 8px 24px rgba(0, 0, 0, 0.6);
        }

        .game-section img:hover {
            transform: scale(1.05);
            box-shadow: 0px 12px 30px rgba(255, 50, 50, 0.7);
        }

        .game-section:hover h3 {
            transform: translateX(10px);
        }

        .game-section:hover p {
            transform: translateX(-10px);
        }

        .game-section h3,
        .game-section p {
            transition: transform 0.3s ease, color 0.3s ease;
        }

        .game-section h3 {
            font-size: 2rem;
            color: #60a5fa;
        }

        .game-section p {
            font-size: 1.1rem;
            color: #ddd;
        }

        /* Footer */
        footer {
            background-color: #111;
            text-align: center;
            padding: 40px;
            font-size: 0.9rem;
            color: #aaa;
            border-top: 1px solid #444;
            margin-top: 40px;
        }

        footer a {
            color: #60a5fa;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Mobil Uyumluluk */
        @media (max-width: 768px) {
            .game-section {
                flex-direction: column;
                text-align: center;
            }

            .game-section img {
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <h1>GAME STUDİO</h1>
        <p>En yeni oyun deneyimini keşfetmeye hazır olun!</p>
    </header>

    <!-- Kısa Bilgi -->
    <section class="info-section">
        <h2>FPS-TPS SHOOTER GAME</h2>
        <p>Oyun, heyecan verici görevler ve inanılmaz bir atmosfer sunar. Gerçekçi grafikler ve yenilikçi oynanış ile sizi büyüleyecek.</p>
    </section>

    <!-- Ana İçerik -->
    <div class="container">
        <!-- Özellik 1 -->
        <div class="game-section">
            <img src="images/game_image2.jpg" alt="Oyun Özelliği 1">
            <div>
                <h3>HARİTA</h3>
                <p>Oyunumuz, stilize bir harita sunmaktadır. Harita içerisinde patlayan nesneler, vurulabilir poligonlar bulunmaktadır. Aynı zamanda atmosfer çalışması da yapılmıştır.</p>
            </div>
        </div>

        <!-- Özellik 2 -->
        <div class="game-section">
            <img src="images/game_image1.jpg" alt="Oyun Özelliği 2">
            <div>
                <h3>TPS MEKANİĞİ</h3>
                <p>Bu projede TPS(Third-Person Shooter) mekaniği vardır. Karakterin tüm animasyonları yapılmıştır. İçerisinde dönme, koşma, zıplama  animasyonları mevcuttur. </p>
            </div>
        </div>

        <!-- Özellik 3 -->
        <div class="game-section">
            <img src="images/game_image3.jpg" alt="Oyun Özelliği 3">
            <div>
                <h3>FPS SHOOTER</h3>
                <p>Bu projede simülasyonu arttırmak için FPS mekaniği eklenmiştir. Burada dürbünden bakma mekaniği mevcuttur. Karakter gerçekçi ateş etme,şarjör değiştirme animasyonları eklenmiştir.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Oyun Stüdyosu. Tüm Hakları Saklıdır. | <a href="#">Destek</a></p>
    </footer>
</body>

</html>
