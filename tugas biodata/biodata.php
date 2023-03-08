<?php 
    $nama = [
        "depan" => "Mochamad",
        "tengah" => "Nurul",
        "belakang" => "Taukid"
    ];

    $sekarang = new DateTime();
    $lahir = new DateTime('2003-01-13');
    $umur = $sekarang->diff($lahir)->format('%y tahun');

    $deskripsi_diri = [
        "npm" => 21081010013,
        "kelas" => "Pemrograman Web A081",
        "penjelasan" => ""
];

    $deskripsi_diri["penjelasan"] = "Saya adalah mahasiswa dengan NPM " .$deskripsi_diri["npm"]. " dari " .$deskripsi_diri["kelas"]. ", saya berumur " .$umur;

    
    $link = [
        "facebook" => "https://www.facebook.com/profile.php?id=100010035637768",
        "instagram" => "https://www.instagram.com/ntaukid",
        "github" => "https://github.com/nurultaukid13",
        "cv" => "https://drive.google.com/file/d/1L1LX4hlHB46GbIBFFj8TZ2EIpPKKMlxe/view?usp=share_link",
        "portofolio" => "https://timfutsal.000webhostapp.com/"
    ];

    $tentang_saya = "Halo, nama saya Mochamad Nurul Taukid. Cita-cita saya ingin menjadi Back-End Developer. Dengan
    mengikuti kelas Pemrograman web ini saya merasa selangkah lebih maju untuk menggapai cita-cita
    tersebut. Karena dikelas ini diajarkan membuat website menggunakan berbagai bahasa, seperti HTML,
    CSS dan PHP.";

    $bahasa = [
        "deskripsi" => "Bahasa pemrograman, atau sering diistilahkan juga dengan bahasa komputer atau bahasa pemrograman
        komputer, adalah instruksi standar untuk memerintah komputer. Saya menguasai tiga bahasa pemrograman
        yang saya dapat saat SMA, belajar Otodidak dan mata kuliah di kampus, Yaitu:",
        "html5" => "HTML5 diciptakan sebagai solusi untuk kebutuhan saat ini — salah satunya adalah dukungan untuk
        membuat website yang bersifat mobile-friendly.",
        "css3" => "CSS3 memungkinkan spesifikasi diselesaikan dan menerima lebih cepat, karena segmen diselesaikan
        dan diterima dalam porsi.",
        "javascript" => "JavaScript adalah bahasa pemrograman yang digunakan dalam pengembangan website agar lebih dinamis
        dan interaktif. "
    ];

    $portofolio = "Berikut merupakan web-web yang pernah saya buat. Yang pertama ada website <br> dengan konsep CRUD
    menggunakan bahasa HTML, CSS dan PHP. dang selanjutnya ada website CV menggunakan HTML murni.";

    $kontak = "Untuk informasi lebih lanjut, silakan hubungi saya melalui akun medsos berikut. Terima kasih
    telah mengunjungi website saya, saya siap membantu Anda";
?>