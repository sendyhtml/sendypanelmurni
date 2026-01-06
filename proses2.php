<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomor = $_POST["nomor"];

    if (isset($_POST["cekweb"])) {
        $folderPath = "Contoh/$nomor";

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

        $zipFilePath = "scriptamang2/mang$nomor.zip";
        $newZipFilePath = "$folderPath/mang$nomor.zip";
        copy($zipFilePath, $newZipFilePath);

        $zip = new ZipArchive;
        if ($zip->open($newZipFilePath) === TRUE) {
            $zip->extractTo($folderPath);
            $zip->close();
        }

        unlink($newZipFilePath);

        // Arahkan ke done.php setelah proses selesai
        header("Location: done2.php?folder=$newfol");
        exit();
        }
        
         if (isset($_POST["buahweb"])) {
        $folderPath = "create1.php"; 
   }
}
?>
