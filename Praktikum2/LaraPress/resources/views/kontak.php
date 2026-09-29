<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Shehan - Muhammad Shehan Algi</title>
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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
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

        /* Header Judul Tengah */
        .hero-contact {
            text-align: center;
            padding: 50px 20px 30px;
        }

        .hero-contact h1 {
            font-size: 2rem;
            color: #0f172a;
            margin-bottom: 8px;
            font-weight: 700;
        }

        .hero-contact p {
            font-size: 0.95rem;
            color: #64748b;
        }

        /* Container Kartu Tengah */
        .container {
            flex: 1;
            max-width: 550px;
            width: 100%;
            margin: 0 auto 50px;
            padding: 0 20px;
        }

        .contact-card {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 40px 35px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
        }

        .contact-card h2 {
            font-size: 1.25rem;
            color: #1e293b;
            text-align: center;
            margin-bottom: 28px;
            font-weight: 700;
        }

        /* Tabel Informasi Kontak */
        .info-table {
            width: 100%;
            border-collapse: collapse;
        }

        .info-table td {
            padding: 10px 0;
            vertical-align: top;
            font-size: 0.95rem;
        }

        .info-table .label {
            font-weight: 600;
            color: #334155;
            width: 30%;
        }

        .info-table .colon {
            width: 5%;
            color: #64748b;
        }

        .info-table .value {
            color: #475569;
            width: 65%;
        }

        .info-table .value a {
            color: #4f46e5;
            text-decoration: none;
        }

        .info-table .value a:hover {
            text-decoration: underline;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 25px;
            color: #94a3b8;
            font-size: 0.85rem;
        }
    </style>
</head>
<body>

    <!-- Header Navigation -->
    <header class="navbar">
        <div class="logo"> PunyaShehan</div>
        <nav>
            <a href="/">Beranda</a>
            <a href="/tentang-kami">Tentang Kami</a>
            <a href="/kontak" class="active">Kontak</a>
        </nav>
    </header>

    <!-- Header Judul Utama -->
    <section class="hero-contact">
        <h1>Kontak Shehan</h1>
        <p>Halaman Kontak</p>
    </section>

    <!-- Main Content: Kartu Informasi Pemilik -->
    <main class="container">
        <div class="contact-card">
            <h2>Informasi Pemilik</h2>
            
            <table class="info-table">
                <tr>
                    <td class="label">Nama</td>
                    <td class="colon">:</td>
                    <td class="value">Shehan</td>
                </tr>
                <tr>
                    <td class="label">Email</td>
                    <td class="colon">:</td>
                    <td class="value"><a href="mailto:Shehanalgi@gmail.com">Shehanalgi@gmail.com</a></td>
                </tr>
                <tr>
                    <td class="label">Nomor Hp</td>
                    <td class="colon">:</td>
                    <td class="value"><a href="https://wa.me/6281382524013" target="_blank">081382524013</a></td>
                </tr>
            </table>
        </div>
    </main>

    <footer>
        &copy; 2026 Shehan. All Rights Reserved.
    </footer>

</body>
</html>