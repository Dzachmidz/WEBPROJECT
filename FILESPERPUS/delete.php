<?php
if (isset($_GET['kode'])) {
    $kodeBuku = $_GET['kode'];
    $file_name = 'buku.txt';
    if (file_exists($file_name)) {
        $read = file($file_name);
        $output = '';
        foreach ($read as $buku) {
            $bukuinfo = explode('-', $buku);
            if ($bukuinfo[0] === $kodeBuku) {
                // Menghapus file cover buku jika ada
                $cover = trim($bukuinfo[5]);
                if (!empty($cover)) {
                    $cover_path = 'img/' . $cover;
                    if (file_exists($cover_path)) {
                        unlink($cover_path);
                    }
                }
                continue; // Melewati buku yang akan dihapus
            }
            $output .= $buku;
        }
        file_put_contents($file_name, $output);
        header("Location: baca.php");
        exit();
    } else {
        echo "File buku.txt tidak ditemukan.";
    }
} else {
    echo "Kode buku tidak valid.";
}
?>