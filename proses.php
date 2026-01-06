<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];

    if (isset($_POST["cekweb"])) {
        $folderPath = "Contoh/amang1";

        if (file_exists($folderPath)) {
            header("Location: $folderPath");
            exit();
        } else {
            echo "Folder $nomor tidak ditemukan.";
        }
    } elseif (isset($_POST["buatweb"])) {
        $newfol = uniqid();
        $folderPath = "x/$newfol";

        mkdir($folderPath);

        $zipFilePath = "scriptamang/mang1.zip";
        $newZipFilePath = "$folderPath/mang1.zip";
        copy($zipFilePath, $newZipFilePath);

        $zip = new ZipArchive;
        if ($zip->open($newZipFilePath) === TRUE) {
            $zip->extractTo($folderPath);
            $zip->close();
        }

        unlink($newZipFilePath);

        // Arahkan ke done.php setelah proses selesai
        header("Location: done.php?folder=$newfol");
        exit();
    }
}
?>
