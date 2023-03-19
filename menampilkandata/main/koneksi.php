<?php 

function connection() {
   // membuat konekesi ke database system
   $dbServer = 'localhost';
   $dbUser = 'root';
   $dbPass = '';
   $dbName = "classicmodels";

   $koneksi = mysqli_connect($dbServer, $dbUser, $dbPass);

   if(! $koneksi) {
	die('Koneksi gagal: ' . mysqli_connect_error());
   }
   //memilih database yang akan dipakai
   mysqli_select_db($koneksi,$dbName);
   return $koneksi;
}
?>
