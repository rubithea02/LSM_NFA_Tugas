<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ujian</title>
</head>

<body>

    <h2>Tugas1 Form Ujian</h2>
    <form method="POST">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="score">Nilai Ujian:</label><br>
        <input type="number" id="score" name="score" required><br><br>

        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil data form
        $name = $_POST['name'];
        $email = $_POST['email'];
        $score = $_POST['score'];

        // Struktur kendali if-else
        if ($score > 70) {
            $result = "Lulus";
        } else {
            $result = "Remedial";
        }

        // Menampilkan output
        echo "<h3>Hasil Form</h3>";
        echo "Nama: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Nilai Ujian: " . $score . "<br>";
        echo "Status: " . $result . "<br>";
    }
    ?>

</body>

</html>