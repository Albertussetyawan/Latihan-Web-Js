
<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Metode tidak diizinkan.");
}

require_once "db.php";

// Mengambil data dari formulir
$nama = trim($_POST["nama"] ?? "");
$email = trim($_POST["email"] ?? "");
$pesan = trim($_POST["pesan"] ?? "");

// Memeriksa input
if ($nama === "" || $email === "" || $pesan === "") {
    exit("Semua kolom wajib diisi.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("Format email tidak valid.");
}

// Menyimpan data dengan prepared statement
$stmt = $conn->prepare(
    "INSERT INTO contacts (nama, email, pesan)
     VALUES (?, ?, ?)"
);

$stmt->bind_param("sss", $nama, $email, $pesan);

if ($stmt->execute()) {
    echo "Pesan berhasil disimpan!";
} else {
    http_response_code(500);
    echo "Pesan gagal disimpan.";
}

$stmt->close();
$conn->close();
?>
