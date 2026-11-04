<?php
require_once "config/database.php";

// Mengambil data kos yang berstatus aktif
$query = "SELECT * FROM kos
          WHERE status = 'aktif'
          ORDER BY created_at DESC";

$stmt = $pdo->prepare($query);
$stmt->execute();

$dataKos = $stmt->fetchAll();
?>

<?php
$pageTitle = "NgekosYuk - Temukan Kos Impianmu";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $pageTitle; ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

<!-- NAVBAR -->
<header class="navbar">
    <div class="container nav-container">

        <a href="index.php" class="logo">
            <span class="logo-icon">
                <i class="fa-solid fa-house"></i>
            </span>
            Ngekos<span>Yuk.</span>
        </a>

        <nav class="nav-menu" id="navMenu">
            <a href="index.php" class="active">Beranda</a>
            <a href="pages/kos.php">Cari Kos</a>
            <a href="#tentang">Tentang Kami</a>
            <a href="#kontak">Kontak</a>
        </nav>

        <div class="nav-actions">
            <a href="pages/login.php" class="login-btn">Masuk</a>
            <a href="pages/register.php" class="register-btn">Daftar</a>
        </div>

        <button class="menu-toggle" id="menuToggle" aria-label="Buka menu">
            <i class="fa-solid fa-bars"></i>
        </button>

    </div>
</header>


<!-- HERO SECTION -->
<section class="hero">
    <div class="container hero-container">

        <div class="hero-content">

            <div class="hero-label">
                <i class="fa-solid fa-location-dot"></i>
                Temukan tempat tinggal terbaikmu
            </div>

            <h1>
                Temukan Kos Impianmu,
                <span>Booking Tanpa Ribet.</span>
            </h1>

            <p>
                Cari tempat tinggal nyaman dengan harga terbaik.
                Temukan kos sesuai kebutuhanmu hanya melalui NgekosYuk.
            </p>

            <div class="hero-buttons">
                <a href="pages/kos.php" class="primary-btn">
                    Cari Kos Sekarang
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

                <a href="#keunggulan" class="secondary-btn">
                    Pelajari Lebih Lanjut
                </a>
            </div>

            <div class="hero-stats">
                <div>
                    <h3>100+</h3>
                    <span>Pilihan Kamar</span>
                </div>

                <div>
                    <h3>50+</h3>
                    <span>Pengguna</span>
                </div>

                <div>
                    <h3>24/7</h3>
                    <span>Layanan Online</span>
                </div>
            </div>

        </div>

        <div class="hero-image">
            <img
                src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?w=1000"
                alt="Interior kamar kos modern"
            >

            <div class="floating-card">
                <div class="floating-icon">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>

                <div>
                    <strong>Booking Lebih Mudah</strong>
                    <span>Temukan kos favoritmu</span>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- SEARCH SECTION -->
<section class="search-section">
    <div class="container">

        <div class="search-box">

            <div class="search-item">
                <i class="fa-solid fa-location-dot"></i>
                <div>
                    <label>Lokasi</label>
                    <input type="text" id="locationSearch" placeholder="Cari kota atau daerah">
                </div>
            </div>

            <div class="search-divider"></div>

            <div class="search-item">
                <i class="fa-solid fa-wallet"></i>
                <div>
                    <label>Budget</label>
                    <select id="budgetSearch">
                        <option value="">Semua harga</option>
                        <option value="500000">Di bawah Rp500 ribu</option>
                        <option value="1000000">Di bawah Rp1 juta</option>
                        <option value="2000000">Di bawah Rp2 juta</option>
                    </select>
                </div>
            </div>

            <div class="search-divider"></div>

            <div class="search-item">
                <i class="fa-solid fa-house"></i>
                <div>
                    <label>Tipe Kos</label>
                    <select id="typeSearch">
                        <option value="">Semua tipe</option>
                        <option value="putra">Kos Putra</option>
                        <option value="putri">Kos Putri</option>
                        <option value="campur">Kos Campur</option>
                    </select>
                </div>
            </div>

            <button class="search-btn" id="searchButton">
                <i class="fa-solid fa-magnifying-glass"></i>
                Cari Kos
            </button>

        </div>

    </div>
</section>


<!-- CATEGORY SECTION -->
<section class="category-section" id="kategori">
    <div class="container">

        <div class="section-heading">
            <div>
                <span class="section-tag">KATEGORI</span>
                <h2>Cari Kos Sesuai Kebutuhanmu</h2>
                <p>Pilih tipe kos yang paling cocok untukmu.</p>
            </div>
        </div>

        <div class="category-grid">

            <a href="pages/kos.php?tipe=putra" class="category-card">
                <div class="category-icon blue">
                    <i class="fa-solid fa-person"></i>
                </div>
                <h3>Kos Putra</h3>
                <p>Nyaman untuk pria</p>
                <i class="fa-solid fa-arrow-right category-arrow"></i>
            </a>

            <a href="pages/kos.php?tipe=putri" class="category-card">
                <div class="category-icon pink">
                    <i class="fa-solid fa-person-dress"></i>
                </div>
                <h3>Kos Putri</h3>
                <p>Nyaman untuk wanita</p>
                <i class="fa-solid fa-arrow-right category-arrow"></i>
            </a>

            <a href="pages/kos.php?tipe=campur" class="category-card">
                <div class="category-icon green">
                    <i class="fa-solid fa-people-roof"></i>
                </div>
                <h3>Kos Campur</h3>
                <p>Untuk semua kebutuhan</p>
                <i class="fa-solid fa-arrow-right category-arrow"></i>
            </a>

        </div>
    </div>
</section>


<!-- RECOMMENDED SECTION -->
<?php if (!empty($dataKos)): ?>

    <?php foreach ($dataKos as $kos): ?>

        <?php
        // Mengambil fasilitas berdasarkan ID kos
        $queryFasilitas = "
            SELECT f.nama_fasilitas, f.icon
            FROM kos_fasilitas kf
            JOIN fasilitas f ON kf.fasilitas_id = f.id
            WHERE kf.kos_id = ?
        ";

        $stmtFasilitas = $pdo->prepare($queryFasilitas);
        $stmtFasilitas->execute([$kos['id']]);
        $fasilitasKos = $stmtFasilitas->fetchAll();
        ?>

        <article class="kos-card">

            <div class="kos-image">

                <img
                    src="<?= htmlspecialchars($kos['foto_utama'] ?: 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?w=700') ?>"
                    alt="<?= htmlspecialchars($kos['nama_kos']) ?>"
                    onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1611892440504-42a792e24d32?w=700';"
                >

                <span class="kos-badge">Pilihan NgekosYuk</span>

                <button class="favorite-btn" aria-label="Favorit">
                    <i class="fa-regular fa-heart"></i>
                </button>

            </div>

            <div class="kos-info">

                <span class="kos-type">
                    KOS <?= htmlspecialchars(strtoupper($kos['tipe'])) ?>
                </span>

                <h3>
                    <?= htmlspecialchars($kos['nama_kos']) ?>
                </h3>

                <p class="kos-location">
                    <i class="fa-solid fa-location-dot"></i>
                    <?= htmlspecialchars($kos['kota']) ?>,
                    <?= htmlspecialchars($kos['provinsi']) ?>
                </p>

                <div class="kos-facilities">

                    <?php if (!empty($fasilitasKos)): ?>

                        <?php foreach (array_slice($fasilitasKos, 0, 3) as $fasilitas): ?>

                            <span>
                                <i class="<?= htmlspecialchars($fasilitas['icon'] ?: 'fa-solid fa-check') ?>"></i>
                                <?= htmlspecialchars($fasilitas['nama_fasilitas']) ?>
                            </span>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <span>Informasi fasilitas belum tersedia</span>

                    <?php endif; ?>

                </div>

                <div class="kos-footer">

                    <div>
                        <strong>
                            Rp<?= number_format((float)$kos['harga_mulai'], 0, ',', '.') ?>
                        </strong>
                        <span>/ bulan</span>
                    </div>

                    <a
                        href="pages/detail-kos.php?id=<?= (int)$kos['id'] ?>"
                        class="detail-btn"
                    >
                        Detail
                    </a>

                </div>

            </div>

        </article>

    <?php endforeach; ?>

<?php else: ?>

    <p>Belum ada kos yang tersedia saat ini.</p>

<?php endif; ?>


<!-- WHY US -->
<section class="why-section" id="keunggulan">
    <div class="container why-container">

        <div class="why-content">
            <span class="section-tag">KENAPA NGEKOSYUK?</span>

            <h2>Temukan Kos Lebih Mudah, Nyaman, dan Aman.</h2>

            <p>
                Kami membantu kamu menemukan tempat tinggal
                yang sesuai dengan kebutuhan tanpa proses yang rumit.
            </p>

            <div class="why-list">

                <div class="why-item">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <div>
                        <h4>Pencarian Mudah</h4>
                        <p>Temukan kos sesuai lokasi dan budget.</p>
                    </div>
                </div>

                <div class="why-item">
                    <i class="fa-solid fa-bolt"></i>
                    <div>
                        <h4>Booking Praktis</h4>
                        <p>Kirim permintaan pemesanan secara online.</p>
                    </div>
                </div>

                <div class="why-item">
                    <i class="fa-solid fa-headset"></i>
                    <div>
                        <h4>Terhubung dengan Admin</h4>
                        <p>Komunikasi lebih mudah melalui WhatsApp.</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="why-image">
            <img src="https://images.unsplash.com/photo-1615874694520-474822394e73?w=900" alt="Kamar kos nyaman">
        </div>

    </div>
</section>


<!-- CTA -->
<section class="cta-section" id="tentang">
    <div class="container cta-container">

        <span>WAKTUNYA MENEMUKAN KOS TERBAIKMU</span>

        <h2>Sudah Siap Menemukan Tempat Tinggal Impianmu?</h2>

        <p>
            Mulai pencarianmu sekarang dan temukan kos
            yang sesuai dengan kebutuhanmu.
        </p>

        <a href="pages/kos.php" class="cta-btn">
            Mulai Cari Kos
            <i class="fa-solid fa-arrow-right"></i>
        </a>

    </div>
</section>


<!-- FOOTER -->
<footer class="footer" id="kontak">
    <div class="container footer-container">

        <div class="footer-brand">
            <a href="index.php" class="logo">
                <span class="logo-icon">
                    <i class="fa-solid fa-house"></i>
                </span>
                Ngekos<span>Yuk.</span>
            </a>

            <p>
                Temukan tempat tinggal nyaman,
                mudah, dan sesuai budget bersama NgekosYuk.
            </p>
        </div>

        <div class="footer-column">
            <h4>Menu</h4>
            <a href="index.php">Beranda</a>
            <a href="pages/kos.php">Cari Kos</a>
            <a href="#tentang">Tentang Kami</a>
        </div>

        <div class="footer-column">
            <h4>Bantuan</h4>
            <a href="#kontak">Kontak Admin</a>
            <a href="pages/status-booking.php">Cek Booking</a>
        </div>

        <div class="footer-column">
            <h4>Hubungi Kami</h4>
            <a href="https://wa.me/6283192283186" target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
                WhatsApp Admin
            </a>
            <span>Indonesia</span>
        </div>

    </div>

    <div class="footer-bottom">
        <p>© 2026 NgekosYuk. All Rights Reserved.</p>
    </div>
</footer>


<script src="assets/js/script.js"></script>

</body>
</html>
