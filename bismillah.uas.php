<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabtu Budaya</title>
    <style>
        /* Resetting styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            background-color: #733d21;
            color: white;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo img {
            width: 50px;
            height: auto;
            display: block;
        }

        .logo-text {
            font-size: 24px;
            font-weight: bold;
        }

        .nav-links {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
            position: relative;
        }

        .nav-links li {
            margin: 0 15px;
            position: relative;
        }

        .nav-links a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #000000;
        }

        .submenu-top {
    list-style: none;
    margin: 0;
    padding: 0;
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background: white;
    border-radius: 5px;
    transition: box-shadow 0.3s;
}

.submenu-top li {
    padding: 5px 10px;
}

.submenu-top a {
    text-decoration: none;
    color: chocolate;
    display: block;
    transition: background-color 0.3s;
}

.nav-links li:hover .submenu-top {
    display: block;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Efek timbul */
}
        .hero {
            background-color: #d85f27;
            text-align: center;
            padding: 50px 20px;
        }

        /* Main Section Styling */
        .kotak {
            display: grid;
            grid-template-columns: 1fr 2fr 1fr;
            gap: 20px;
            padding: 20px;
        }

        .kiri, .kanan, .tengah {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .kiri, .kanan {
            color: #333;
            text-align: justify; /* Rata kiri-kanan */
            background-color: #eac2ae  ;
            font-weight: bold;
            font-size: 1rem;
            line-height: 1.5;
        }

        .tengah {
            text-align: justify; /* Rata kiri-kanan */
            padding-right: 20px;
            padding-top: 20px;
            font-weight: bold;
            font-size: 1rem;
            line-height: 1.5;
            background-color:  #e7dfdb; /* Coklat lembut */
            ;
        }

        .kanan {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .kanan form input,
        .kanan form textarea {
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            width: 100%;
        }

        .kanan form textarea {
            min-height: 100px;
            resize: vertical;
        }

        .kanan form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            padding: 12px;
            font-size: 1.1em;
            transition: background-color 0.3s;
        }

        .kanan form input[type="submit"]:hover {
            background-color: #45a049;
        }

        .kanan .nav-button {
            display: block;
            text-align: center;
            background-color: #263d27;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 1.2em;
            text-decoration: none;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        .kanan .nav-button:hover {
            background-color: #1e2e20;
        }
        h2{
            text-align: center;
        }

    </style>
</head>
<body>
<header>
        <div class="logo">
            <img src="gambar1.png" alt="Logo ">
            <div class="logo-text">KEGIATAN SABTU BUDAYA</div>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="http://localhost/PUNYA%20PYA/bismillah.uas.php">Beranda</a></li>
                <li>
                <a href="#services">Media Sosial</a>
                    <ul class="submenu-top">
                        <li><a href="https://www.google.com">Google</a></li>
                        <li><a href="https://www.youtube.com">Youtube</a></li>
                    </ul>
                     </li>
                <li>
                    <a href="#services">Macam-Macam Kegiatan</a>
                    <ul class="submenu-top">
                     <li><a href="http://localhost/PUNYA%20PYA/REGISTERTARI.php">Tari Tradisional</a></li>
                     <li><a href="http://localhost/PUNYA%20PYA/REGISTERTEATER.php">Teater</a></li>
                        <li><a href="http://localhost/PUNYA%20PYA/REGISTERPAMERAN.php">Pameran Kerajinan</a></li>
                        <li><a href="http://localhost/PUNYA%20PYA/REGISTER%20BAZAR.php">Bazar Makanan</a></li>
                        <li><a href="http://localhost/PUNYA%20PYA/REGISTERSENAM.php">Senam Gemar Gatra</a></li>
                    </ul>
        </nav>
    </header>

    <div class="kotak">
        <div class="kiri">
            <h2>Budaya</h2>
            <img src="budaya.jpg" alt="Budaya" style="width:70%; height:auto; margin-top:20px;margin-left: 15%;">
            <p>Budaya adalah warisan berharga yang mencerminkan identitas bangsa. Di Indonesia, budaya memiliki makna yang sangat luas dan mencakup berbagai aspek kehidupan. Dari seni tari, musik tradisional, hingga adat istiadat yang diwariskan secara turun-temurun, semua elemen budaya ini membentuk karakter bangsa yang unik. Salah satu contoh budaya yang terkenal adalah batik, yang telah diakui oleh UNESCO sebagai Warisan Budaya Takbenda. Budaya tidak hanya menjadi kebanggaan, tetapi juga menjadi pengingat akan pentingnya menjaga keberagaman dalam persatuan.</p>
        </div>

        <div class="tengah">
            <h2>Sabtu Budaya</h2>
            <img src="gambar.3.jpg" alt="Budaya" style="width:45%; height:auto; margin-top:20px; margin-right: 20px;">
            <img src="gambar.4.jpg" alt="Sabtu Budaya" style="width:45%; height:auto; margin-top:20px;  margin-left: 20px;">
            <p>Program Culture Saturday adalah program pendidikan berbasis budaya yang bertujuan untuk membangun rasa nasionalisme, menanamkan cinta pada tanah air, dan memupuk semangat solidaritas. (Kurniawansyah and Rodiatun, 2022). Kementerian Pendidikan dan Kebudayaan Nusa Tenggara Barat menggelar Program Budaya Sabtu di Nusa Tenggara Barat dengan tujuan memberikan ruang bagi sekolah, pemerintah daerah, distrik/kota, dan provinsi untuk menciptakan layanan pendidikan dan pembelajaran dengan memaksimalkan potensi dan peluang wilayah dalam mempromosikan budaya di Nus Tenggara Barat.</p>
            <img src="g1.png" alt="Keragaman Budaya Indonesia" style="width:100%; height:auto; margin-top:20px;">
            <p>Keberagaman budaya adalah salah satu ciri khas yang ada di dunia, dengan berbagai suku bangsa yang tersebar di seluruh dunia, termasuk di Indonesia. Sebagai warga negara Indonesia, kita tidak bisa mengabaikan fakta bahwa negara Indonesia memiliki keragaman yang sangat besar, dari ras, suku bangsa, hingga bahasa. Keragaman ini telah melahirkan budaya Indonesia yang sangat kaya dan unik, seperti rumah adat, upacara adat, pakaian adat tradisional, tarian adat tradisional, alat musik dan lagu tradisional, senjata tradisional, dan berbagai makanan khas.</p>
        </div>

        <div class="kanan">
            <h2>Ceritakan Cerita Seru Tentang Sabtu Budaya di Tempatmu!</h2>
            <form action="insert.php" method="post">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama"><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br>

                <label for="kesan">Kesan:</label>
                <textarea id="kesan" name="kesan"></textarea><br>

                <input type="submit" value="Posting">
            </form>
            <a href="cobapya.php" class="nav-button">Lihat Postingan</a>
        </div>
    </div>

    <script>
        // Menambahkan event listener untuk klik submenu
        const menuItems = document.querySelectorAll('nav ul li');

        menuItems.forEach(item => {
            const submenu = item.querySelector('.submenu');
            
            // Menambahkan event listener untuk hover
            item.addEventListener('mouseenter', function() {
                if (submenu) {
                    submenu.style.display = 'block';
                    submenu.style.opacity = '1';
                }
            });

            item.addEventListener('mouseleave', function() {
                if (submenu) {
                    submenu.style.display = 'none';
                    submenu.style.opacity = '0';
                }
            });

            // Menambahkan event listener untuk klik submenu
            item.addEventListener('click', function(e) {
                e.stopPropagation(); // Menghentikan event bubbling
                if (submenu) {
                    // Toggle display submenu saat klik
                    const isVisible = submenu.style.display === 'block';
                    submenu.style.display = isVisible ? 'none' : 'block';
                    submenu.style.opacity = isVisible ? '0' : '1';
                    item.classList.toggle('active', !isVisible);
                }
            });
        });

        // Menambahkan event listener untuk klik di luar menu untuk menutup submenu
        document.addEventListener('click', function() {
            const submenus = document.querySelectorAll('.submenu');
            submenus.forEach(submenu => {
                submenu.style.display = 'none';
                submenu.style.opacity = '0';
            });

            // Remove active class from all menu items
            const menuItems = document.querySelectorAll('nav ul li');
            menuItems.forEach(item => {
                item.classList.remove('active');
            });
        });
    </script>
</body>
</html>
