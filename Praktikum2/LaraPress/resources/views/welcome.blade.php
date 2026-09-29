<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Berjuang</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f4f6f9;
            color: #333;
        }

        /* 1. Navbar */
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

        /* 2. Hero Section */
        .hero {
            background: linear-gradient(135deg, #4f46e5, #6366f1);
            color: #ffffff;
            text-align: center;
            padding: 60px 20px;
        }

        .hero h1 {
            font-size: 2.2rem;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .hero p {
            font-size: 1rem;
            opacity: 0.9;
            max-width: 650px;
            margin: 0 auto;
        }

        /* 3. Main Content Container */
        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .section-title {
            font-size: 1.4rem;
            margin-bottom: 24px;
            color: #1e293b;
        }

        /* 4. Grid & Card System */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 24px;
        }

        .card {
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 12px rgba(0,0,0,0.1);
        }

        /* CSS untuk Gambar Card */
        .card-image {
            width: 100%;
            height: 160px;
            object-fit: cover;
            display: block;
        }

        .card-body {
            padding: 20px;
        }

        .card-tag {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #6366f1;
            font-weight: 700;
            margin-bottom: 8px;
            display: block;
        }

        .card-title {
            font-size: 1.15rem;
            margin-bottom: 12px;
            color: #0f172a;
        }

        .card-list {
            padding-left: 18px;
            color: #475569;
            font-size: 0.9rem;
            line-height: 1.6;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 30px;
            color: #94a3b8;
            font-size: 0.85rem;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <!-- Header Navigation -->
    <header class="navbar">
        <div class="logo">PunyaShehan</div>
        <nav>
            <a href="/" class="active">Beranda</a>
            <a href="/tentang-kami">Tentang Saya</a>
            <a href="/kontak">Kontak</a>
        </nav>
    </header>

    <!-- Hero Banner -->
    <section class="hero">
        <h1>Selamat Datang Biodata Saya</h1>
        <p>Ini adalah halaman utama dari aplikasi blog kita. Di sini Anda dapat melihat latar belakang akademik, kemampuan, hobi, prestasi, serta pengalaman saya.</p>
    </section>

    <!-- Content Section -->
    <main class="container">
        <h2 class="section-title">Informasi Profil</h2>

        <div class="card-grid">
            
            <!-- Card 1: Akademik -->
            <div class="card">
                <img src="https://i.pinimg.com/736x/63/2b/80/632b80cca4fbc8ba249392ee473236ea.jpg" alt="Akademik" class="card-image">
                <div class="card-body">
                    <span class="card-tag">Pendidikan</span>
                    <h3 class="card-title">1. Akademik</h3>
                    <ul class="card-list">
                        <li><strong>S1 Teknik Informatika</strong> - Universitas Pancasila (2024 - Sekarang)</li>
                        <li><strong>SMA Negeri 4 Cibinong</strong> - Jurusan IPA (2021 - 2024)</li>
                    </ul>
                </div>
            </div>

            <!-- Card 2: Kemampuan -->
            <div class="card">
                <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=500" alt="Kemampuan" class="card-image">
                <div class="card-body">
                    <span class="card-tag">Keahlian</span>
                    <h3 class="card-title">2. Kemampuan (Skills)</h3>
                    <ul class="card-list">
                        <li>Desain UI/UX (Figma)</li>
                        <li>Kemampuan Komunikasi & Kerjasama Tim</li>
                    </ul>
                </div>
            </div>

            <!-- Card 3: Hobby -->
            <div class="card">
                <img src="https://i.pinimg.com/1200x/8d/db/3c/8ddb3c2f8b00caa1b45935be03610492.jpg" alt="Hobby" class="card-image">
                <div class="card-body">
                    <span class="card-tag">Minat</span>
                    <h3 class="card-title">3. Hobby</h3>
                    <ul class="card-list">
                        <li>Tari modern</li>
                        <li>Bermain musik / Olahraga</li>
                        <li>Eksplorasi teknologi baru</li>
                    </ul>
                </div>
            </div>

            <!-- Card 4: Prestasi -->
            <div class="card">
                <img src="https://images.unsplash.com/photo-1567427017947-545c5f8d16ad?w=500" alt="Prestasi" class="card-image">
                <div class="card-body">
                    <span class="card-tag">Pencapaian</span>
                    <h3 class="card-title">4. Prestasi</h3>
                    <ul class="card-list">
                        <li>Juara Harapan 1 Jumbara PMR</li>
                    </ul>
                </div>
            </div>

            <!-- Card 5: Pengalaman -->
            <div class="card">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=500" alt="Pengalaman" class="card-image">
                <div class="card-body">
                    <span class="card-tag">Organisasi</span>
                    <h3 class="card-title">5. Pengalaman</h3>
                    <ul class="card-list">
                        <li><strong>Bendahara PMR</strong> - SMAN 4 Cibinong</li>
                        <li><strong>Ketua Diklat PMR</strong> - SMAN 4 Cibinong</li>
                    </ul>
                </div>
            </div>

        </div>
    </main>

    <footer>
        &copy; 2026 Shehan. All Rights Reserved.
    </footer>

</body>
</html>