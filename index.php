
<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . "db.php";

// Mengambil data project dari database
$projects = $conn->query(
    "SELECT id, title, description FROM projects ORDER BY id ASC"
);

if (!$projects) {
    die("Gagal mengambil data project.");
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portofolio Mekatronika</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- CSS utama -->
    <link rel="stylesheet" href="style.css">

    <!-- CSS Pop-up -->
    <style>
        .popup-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            z-index: 99999;
        }

        .popup-overlay[hidden] {
            display: none;
        }

        .popup-box {
            background: #ffffff;
            width: 100%;
            max-width: 380px;
            padding: 30px 25px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.2);
            animation: popupMuncul 0.25s ease;
        }

        .popup-icon {
            width: 65px;
            height: 65px;
            line-height: 65px;
            margin: 0 auto 15px;
            border-radius: 50%;
            background: #d1fae5;
            color: #059669;
            font-size: 38px;
            font-weight: bold;
        }

        .popup-box h2 {
            color: #123b72;
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .popup-box p {
            color: #555555;
            font-size: 15px;
            margin-bottom: 20px;
        }

        .popup-box button {
            min-width: 100px;
        }

        @keyframes popupMuncul {
            from {
                opacity: 0;
                transform: scale(0.9);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
</head>

<body>

<div class="utama">

    <!-- HEADER -->
    <header class="header">

        <div class="logo">
            <img src="img/Logo A Biru dengan Swoosh Dinamis.png" alt="Logo">
        </div>

        <nav>
            <a href="#home" class="nav-link active">Home</a>
            <a href="#services" class="nav-link">Project</a>
            <a href="#pendidikan" class="nav-link">Education</a>
            <a href="#about" class="nav-link">About</a>
            <a href="#contact" class="nav-link">Contact</a>
        </nav>

    </header>

    <!-- HOME -->
    <section id="home" class="hero">

        <video class="hero-video" autoplay muted loop playsinline>
            <source src="img/videoplayback.mp4" type="video/mp4">
            Browser Anda tidak mendukung video.
        </video>

        <div class="hero-content">

            <h1>Portofolio</h1>

            <p>Mahasiswa Teknik Mekatronika</p>

            <a href="#services" class="btn btn-primary">
                Lihat Project
            </a>

        </div>

    </section>

    <!-- PROJECT -->
    <section id="services" class="services">

        <button class="judul" type="button">Project</button>

        <div class="row">

            <?php
            // Mempertahankan nama class CSS untuk gambar project
            $kelasProject = [
                1 => "project-gps",
                2 => "project-feeder",
                3 => "project-iot"
            ];
            ?>

            <?php while ($project = $projects->fetch_assoc()) { ?>

                <?php
                $idProject = (int) $project["id"];
                $kelas = $kelasProject[$idProject] ?? "";
                ?>

                <div class="col-md-4">

                    <div class="project <?= htmlspecialchars($kelas, ENT_QUOTES, 'UTF-8') ?>">

                        <div class="project-overlay">

                            <h2>
                                <?= htmlspecialchars($project["title"], ENT_QUOTES, "UTF-8") ?>
                            </h2>

                            <p>
                                <?= htmlspecialchars($project["description"], ENT_QUOTES, "UTF-8") ?>
                            </p>

                        </div>

                    </div>

                </div>

            <?php } ?>

        </div>

    </section>

    <!-- EDUCATION -->
    <section id="pendidikan" class="pendidikan">

        <div class="container">

            <div class="judul-pendidikan">
                <h2>Education</h2>
                <p></p>
            </div>

            <div class="timeline">

                <div class="timeline-item">
                    <div class="timeline-content">

                        <span class="jenjang">Perguruan Tinggi</span>

                        <h3>Politeknik ATMI Surakarta</h3>

                        <p>Program Studi Teknik Mekatronika.</p>

                        <p class="alamat-sekolah">
                            📍 Jl. Adisucipto (Mojo) No. 1,
                            Surakarta, Jawa Tengah.
                        </p>

                        <a
                            href="https://www.google.com/maps/search/?api=1&query=Politeknik+ATMI+Surakarta"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="btn-lokasi">
                            📍 Lihat Lokasi di Google Maps
                        </a>

                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-content">

                        <span class="jenjang">Sekolah Menengah Atas</span>

                        <h3>SMA Negeri 1 Muntilan</h3>

                        <p>Menempuh pendidikan menengah atas.</p>

                        <p class="alamat-sekolah">
                            📍 Muntilan, Kabupaten Magelang,
                            Jawa Tengah.
                        </p>

                        <a
                            href="https://www.google.com/maps/search/?api=1&query=SMA+Negeri+1+Muntilan"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="btn-lokasi">
                            📍 Lihat Lokasi di Google Maps
                        </a>

                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-content">

                        <span class="jenjang">Sekolah Menengah Pertama</span>

                        <h3>SMP Negeri 1 Muntilan</h3>

                        <p>Menempuh pendidikan menengah pertama.</p>

                        <p class="alamat-sekolah">
                            📍 Muntilan, Kabupaten Magelang,
                            Jawa Tengah.
                        </p>

                        <a
                            href="https://www.google.com/maps/search/?api=1&query=SMP+Negeri+1+Muntilan"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="btn-lokasi">
                            📍 Lihat Lokasi di Google Maps
                        </a>

                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-content">

                        <span class="jenjang">Sekolah Dasar</span>

                        <h3>SD Marsudirini Muntilan</h3>

                        <p>Awal perjalanan pendidikan saya.</p>

                        <p class="alamat-sekolah">
                            📍 Muntilan, Kabupaten Magelang,
                            Jawa Tengah.
                        </p>

                        <a
                            href="https://www.google.com/maps/search/?api=1&query=SD+Marsudirini+Muntilan"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="btn-lokasi">
                            📍 Lihat Lokasi di Google Maps
                        </a>

                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- ABOUT -->
    <section id="about" class="about">

        <button class="judul" type="button">About</button>

        <p class="deskripsi">
            Mekatronika menggabungkan elemen-elemen mekanis, elektronik, dan
            komputasi ke dalam suatu sistem tunggal. Ini mencakup perancangan dan
            pengembangan sensor, aktuator, kontroler elektronik, dan perangkat
            lunak untuk mengontrol dan mengoptimalkan kinerja sistem.
        </p>

        <div class="row">

            <div class="col-md-6">

                <h2>Tentang Saya</h2>

                <p>
                    Saya Albert, Mahasiswa teknik Mekatronika Politeknik ATMI
                    Surakarta. Disini saya mempelari berbagai hal tentang
                    elektronika, mikrokontroller, otomasi, dan pemrograman.
                    Selain itu, saya juag mempelajari bagaimana hardware dan
                    software dapat digabungkan untuk membuat sebuah sistem otomatis.
                </p>

                <!-- GRAFIK -->
                <div class="mt-4 p-3 bg-white rounded-4 shadow-sm border border-info">

                    <h3 class="fs-5 text-primary mb-3">
                        Statistik Kompetensi Proyek
                    </h3>

                    <canvas id="projectChart"></canvas>

                </div>

            </div>

            <div class="col-md-6">

                <h2>Skills</h2>

                <div class="skills">
                    <span>Arduino</span>
                    <span>ESP32</span>
                    <span>PLC</span>
                    <span>IoT</span>
                </div>

            </div>

        </div>

    </section>

    <!-- CONTACT -->
    <section id="contact" class="contact">

        <button class="judul" type="button">Contact</button>

        <form id="contactForm" action="save_contact.php" method="POST">

            <div class="row">

                <div class="col-md-6">

                    <input
                        type="text"
                        name="nama"
                        class="form-control"
                        placeholder="Nama"
                        maxlength="100"
                        required>

                </div>

                <div class="col-md-6">

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Email"
                        maxlength="150"
                        required>

                </div>

            </div>

            <textarea
                name="pesan"
                class="form-control"
                placeholder="Pesan"
                required></textarea>

            <button
                type="submit"
                class="btn btn-primary kirim">
                Kirim
            </button>

        </form>

    </section>

    <!-- POP-UP PESAN BERHASIL -->
    <div
        id="popupBerhasil"
        class="popup-overlay"
        role="dialog"
        aria-modal="true"
        aria-labelledby="judulPopup"
        hidden>

        <div class="popup-box">

            <div class="popup-icon">✓</div>

            <h2 id="judulPopup">Pesan Berhasil Terkirim!</h2>

            <p>Terima kasih, pesan kamu berhasil dikirim.</p>

            <button type="button" id="tutupPopup" class="btn btn-primary">
                OK
            </button>

        </div>

    </div>

    <!-- SOCIAL MEDIA -->
    <section class="social" id="social">

        <button class="judul" type="button">
            Hubungi Saya
        </button>

        <p class="social-deskripsi">
            Silakan hubungi saya melalui media sosial atau email
            untuk berdiskusi mengenai proyek dan kolaborasi.
        </p>

        <div class="social-container">

            <a
                href="https://www.instagram.com/albertussetyawan_/"
                target="_blank"
                rel="noopener noreferrer"
                class="social-card instagram">

                <div class="social-icon">IG</div>
                <h2>Instagram</h2>
                <p>Lihat profil dan aktivitas saya di Instagram.</p>
                <span>Kunjungi Instagram ↗</span>

            </a>

            <a
                href="https://wa.me/625800152535"
                target="_blank"
                rel="noopener noreferrer"
                class="social-card whatsapp">

                <div class="social-icon">WA</div>
                <h2>WhatsApp</h2>
                <p>Hubungi saya secara langsung melalui WhatsApp.</p>
                <span>Chat WhatsApp ↗</span>

            </a>

            <a
                href="mailto:emailkamu@gmail.com"
                class="social-card email">

                <div class="social-icon">@</div>
                <h2>Email</h2>
                <p>Kirim pesan atau pertanyaan melalui email.</p>
                <span>Kirim Email ↗</span>

            </a>

        </div>

    </section>

    <!-- FOOTER -->
    <footer class="footer">
        Portofolio Albertus © 2026. All rights reserved.
    </footer>

</div>

<!-- BOOTSTRAP JAVASCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Animasi Skills
    const skills = document.querySelector(".skills");

    if (skills) {
        const skillObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    skills.classList.add("active");
                }
            });
        }, { threshold: 0.4 });

        skillObserver.observe(skills);
    }

    // Menu navigasi aktif saat halaman digulir
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll("header nav a");

    window.addEventListener("scroll", () => {
        let current = "";

        sections.forEach(section => {
            if (window.pageYOffset >= section.offsetTop - 200) {
                current = section.getAttribute("id");
            }
        });

        navLinks.forEach(link => {
            link.classList.remove("active");

            if (link.getAttribute("href") === `#${current}`) {
                link.classList.add("active");
            }
        });
    });

    // Grafik mengambil data dari database
    const chartCanvas = document.getElementById("projectChart");

    if (chartCanvas) {
        const ctx = chartCanvas.getContext("2d");

        const projectChart = new Chart(ctx, {
            type: "bar",

            data: {
                labels: [],
                datasets: [{
                    label: "Jumlah Data",
                    data: [],
                    backgroundColor: "rgba(37, 99, 235, 0.7)",
                    borderColor: "rgba(37, 99, 235, 1)",
                    borderWidth: 2,
                    borderRadius: 8
                }]
            },

            options: {
                responsive: true,

                plugins: {
                    legend: {
                        display: true,
                        position: "top"
                    }
                },

                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Memperbarui grafik dari database
        async function updateChart() {
            try {
                const response = await fetch("get_chart_data.php");

                if (!response.ok) {
                    throw new Error("Gagal mengambil data grafik.");
                }

                const data = await response.json();

                projectChart.data.labels = data.map(item => item.label);
                projectChart.data.datasets[0].data =
                    data.map(item => item.nilai);

                projectChart.update();

            } catch (error) {
                console.error("Kesalahan saat memperbarui grafik:", error);
            }
        }

        updateChart();
        setInterval(updateChart, 5000);
    }

    // Mengirim pesan tanpa berpindah halaman
    const contactForm = document.getElementById("contactForm");
    const popupBerhasil = document.getElementById("popupBerhasil");
    const tombolTutupPopup = document.getElementById("tutupPopup");

    if (contactForm && popupBerhasil) {
        contactForm.addEventListener("submit", async function(event) {
            event.preventDefault();

            const tombolKirim = contactForm.querySelector(
                'button[type="submit"]'
            );

            if (tombolKirim) {
                tombolKirim.disabled = true;
            }

            try {
                const response = await fetch("save_contact.php", {
                    method: "POST",
                    body: new FormData(contactForm)
                });

                const hasil = await response.text();
                const hasilKecil = hasil.toLowerCase();

                if (
                    !response.ok ||
                    hasilKecil.includes("gagal") ||
                    hasilKecil.includes("tidak diizinkan") ||
                    hasilKecil.includes("tidak valid") ||
                    hasilKecil.includes("wajib diisi") ||
                    hasilKecil.includes("error")
                ) {
                    throw new Error(hasil || "Pesan gagal disimpan.");
                }

                contactForm.reset();
                popupBerhasil.hidden = false;

                if (tombolTutupPopup) {
                    tombolTutupPopup.focus();
                }

            } catch (error) {
                alert("Pesan gagal terkirim. Silakan coba lagi.");
                console.error("Kesalahan pengiriman pesan:", error);

            } finally {
                if (tombolKirim) {
                    tombolKirim.disabled = false;
                }
            }
        });
    }

    // Menutup pop-up dengan tombol OK
    if (tombolTutupPopup && popupBerhasil) {
        tombolTutupPopup.addEventListener("click", function() {
            popupBerhasil.hidden = true;
        });
    }

    // Menutup pop-up jika area gelap di luar kotak diklik
    if (popupBerhasil) {
        popupBerhasil.addEventListener("click", function(event) {
            if (event.target === popupBerhasil) {
                popupBerhasil.hidden = true;
            }
        });
    }

    // Menutup pop-up dengan tombol Escape
    document.addEventListener("keydown", function(event) {
        if (event.key === "Escape" && popupBerhasil) {
            popupBerhasil.hidden = true;
        }
    });
</script>

</body>
</html>
