# rahmad11111
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Baju</title>
    <style>
        /* CSS untuk styling halaman */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header, nav, main, footer {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        footer {
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }

        .product {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
        }

        .product img {
            width: 100%;
            max-width: 300px;
            height: auto;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat datang di Website Baju!</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Produk</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>Produk Terbaru</h2>
            <div class="product">
                <img src="th (15).jpeg" alt="kemeja hitam">
                <p>Nama Baju 1</p>
                <p>Harga: Rp. 200.000</p>
            </div>
            <div class="product">
                <img src="kemeja putih(16).jpeg" alt="kemeja putih">
                <p>Nama Baju 2</p>
                <p>Harga: Rp. 250.000</p>
            </div>
        </section>
        <section>
            <h2>Tentang Kami</h2>
            <p>Deskripsi singkat tentang perusahaan atau toko baju Anda.</p>
        </section>
        <section>
            <h2>Kontak</h2>
            <p>Informasi kontak perusahaan atau toko baju Anda.</p>
        </section>
    </main>
    <footer>
        <p>&copy; <script>document.write(new Date().getFullYear())</script> Website Baju</p>
    </footer>
</body>
</html>
