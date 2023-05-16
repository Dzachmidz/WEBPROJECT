<?php
require_once('CDMusic.php');
require_once('CDCabinet.php');

// membuat objek CDMusic
$cd_music = new CDMusic("Rahmatan Lil Alameen", "Maher Zain", "Pop", 5000, 0);
$cd_cabinet = new CDCabinet($cd_music->getName(), 20, "CD", $cd_music->getPrice(), $cd_music->getDiscount());

echo "-------------CD MUSIC--------------<br>";
echo "Nama : " . $cd_music->getName() . "<br>";
echo "Harga : " . $cd_music->getArtist() . "<br>";
echo "Diskon : " . $cd_music->getDiscount() ."% <br>";

echo "-------------CD MUSIC--------------<br>";
echo "Nama : " . $cd_music->getName() . "<br>";
echo "Artis : " . $cd_music->getArtist() . "<br>";
echo "Genre : " . $cd_music->getGenre() . "<br>";
echo "Harga Awal : " . $cd_music->getPrice() . "<br>";
$cd_music->setPrice(2000);
echo "Harga Awal + 10% : " . $cd_music->getPrice() . "<br>";
$cd_music->setDiscount(0.1);
echo "Diskon + 5%: " . $cd_music->getDiscount() . "<br>";
echo "<b>Harga Akhir : " . $cd_music->getPrice() * (1 - $cd_music->getDiscount()) . "<br></b>";
echo "<br>";

echo "----------CD RACK-------------<br>";
echo "Nama : " . $cd_cabinet->getName() . "<br>";
echo "Kapasitas: " . $cd_cabinet->getCapacity() . " CD<br>";
echo "Model : " . $cd_cabinet->getModel() . "<br>";
echo "Harga Awal : " . $cd_cabinet->getPrice() . "<br>";
echo "Harga Awal + 15% : " . $cd_cabinet->getPrice() . "<br>";
echo "Diskon : " . $cd_cabinet->getDiscount() . "<br>";
echo "<b>Harga Akhir : " . $cd_cabinet->getPrice() * (1 - $cd_cabinet->getDiscount()) . "<br></b>";
echo "<br>";
?>
