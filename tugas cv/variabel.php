<?php
    $nama = [
        "depan" => "Achmad Fahmi",
        "belakang" => "Al Hafidz"
    ];

    $sekarang = new DateTime();
    $lahir = new DateTime('2002-09-20');
    $umur = $sekarang->diff($lahir)->format('%y tahun');

    $deskripsi_diri = [
        "npm" => "21081010223",
        "kelas" => "Pemograman Web A081",
        "penjelasan" => ""
       ];


    $link = [
        "portofolio" => "https://www.canva.com/projects",
        "instagram" => "https://instagram.com/fahmialhafidz._?igshid=YmMyMTA2M2Y=",
        "github" => "https://github.com/dzachmidz20",
        "biodata" => "biodata.html"
    ];

    $tentang_saya = "Alamat saya di desa Sugihwaras, Candi, Sidoarjo. Saya masuk jurusan Informatika karena saya pernah belajar coding dan saya suka dengan coding, maka dari itu saya ingin memperbaiki cara coding dengan benar";

    $about = "Saya memiliki hobi berolahraga terutama bermain badminton dan semua cabang olahraga yang dominan menggunakan tangan";

    $skill =[
        "web programming" => "Saya berspesialisasi dalam membuat situs web khusus yang disesuaikan dengan kebutuhan spesifik Anda.",
        "desain" => "Saya juga bisa membuat desain untuk membantu pengerjaan saya terhadap web programming, seperti photoshop, AI dan banyak lagi",
        "servis hardware" => "Disisi lain, saya juga bisa memperbaiki hardware yang bermasalah"
    ]
?>