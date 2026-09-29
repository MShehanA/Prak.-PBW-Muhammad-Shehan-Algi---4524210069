<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Shehan - Muhammad Shehan Algi</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f8fafc;
            color: #334155;
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ffffff;
            padding: 15px 8%;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .navbar .logo {
            font-size: 1.2rem;
            font-weight: bold;
            color: #4f46e5;
        }

        .navbar nav a {
            text-decoration: none;
            color: #64748b;
            margin-left: 20px;
            font-size: 0.95rem;
            font-weight: 500;
        }

        .navbar nav a.active, .navbar nav a:hover {
            color: #4f46e5;
            border-bottom: 2px solid #4f46e5;
            padding-bottom: 4px;
        }

        /* Hero / Header Section */
        .hero-about {
            text-align: center;
            padding: 60px 20px 40px;
            max-width: 700px;
            margin: 0 auto;
        }

        .hero-about h1 {
            font-size: 2rem;
            color: #0f172a;
            margin-bottom: 12px;
            font-weight: 700;
        }

        .hero-about p {
            font-size: 1rem;
            color: #64748b;
            line-height: 1.6;
        }

        /* 2-Column Card Grid */
        .container {
            max-width: 1000px;
            margin: 0 auto 50px;
            padding: 0 20px;
        }

        .about-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 24px;
        }

        .card {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
        }

        .card h2 {
            font-size: 1.3rem;
            color: #1e293b;
            margin-bottom: 16px;
        }

        .card p {
            color: #475569;
            line-height: 1.6;
            font-size: 0.95rem;
        }

        .card ul {
            padding-left: 20px;
            color: #475569;
            font-size: 0.95rem;
            line-height: 1.7;
        }

        .card ul li {
            margin-bottom: 10px;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 30px;
            color: #94a3b8;
            font-size: 0.85rem;
        }
    </style>
</head>
<body>

    <!-- Header Navigation -->
    <header class="navbar">
        <div class="logo">PunyaShehan</div>
        <nav>
            <a href="/">Beranda</a>
            <a href="/tentang-kami" class="active">Tentang Kami</a>
            <a href="/kontak">Kontak</a>
        </nav>
    </header>

    <!-- Header Judul Tengah -->
    <section class="hero-about">
        <h1>Tentang Shehan</h1>
        <p>Shehan orang yang ektrovert, mempunya pendirian yang cukup mandiri, terbilang gitu si</p>
    </section>

    <!-- Konten 2 Kartu Bersebelahan -->
    <main class="container">
        <div class="about-grid">
            
            <!-- Kartu 1: Siapa Kami -->
            <div class="card">
                <h2>Siapa saya?</h2>
                <p>Saya adalah shehan yang mempunyai kemampuan membaca <strong>Tarot</strong>. Website ini dibuat untuk mengetahui kesukaan saya</p>
            </div>

            <!-- Kartu 2: Fokus & Latar Belakang Kami -->
            <div class="card">
                <h2>Fokus & Latar Belakang Kami</h2>
                <ul>
                    <li><strong>Latar Belakang Akademik:</strong> Berfokus pada pendidikan di bidang Teknologi Informasi.</li>
                    <li><strong>Kemampuan Utama:</strong> Menguasai pengembangan web (HTML, CSS, PHP, Laravel) & UI/UX Design.</li>
                    <li><strong>Hobi & Minat:</strong> Tari modern, bermain musik, olahraga, dan eksplorasi teknologi baru.</li>
                    <li><strong>Pencapaian & Prestasi:</strong> Juara Harapan 1 Jumbara PMR.</li>
                    <li><strong>Pengalaman:</strong> Bendahara & Ketua Diklat PMR SMAN 4 Cibinong.</li>
                </ul>
            </div>

        </div>
    </main>

    <footer>
        &copy; 2026 Shehan. All Rights Reserved.
    </footer>

</body>
</html>