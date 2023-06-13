<?php 

function connection(){
   
   $dbServer = 'localhost:3308';
   $dbUser = 'root';
   $dbPass = '';
   $dbName = "fik_sneak";

   $conn = mysqli_connect($dbServer, $dbUser, $dbPass);

   if(! $conn) {
	die('Koneksi gagal: ' . mysqli_error());
   }
   //memilih database yang akan dipakai
   mysqli_select_db($conn,$dbName);
	
   return $conn;
}