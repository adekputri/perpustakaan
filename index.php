<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Base Perpustakaan</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <style type="text/css">
    body {
      padding-top: 70px;
      background: #eeeeee;
    }

    .container-body {
      background: #ffffff;
      box-shadow: 1px 1px 1px #999;
      padding: 20px;
    }
  </style>

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand"  target="_blank">PERPUSTAKAAN KEMENTERIAN HUKUM DAN HAM</a>N
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>          
          <li><a href="download.php">Kumpulan Perda</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php
          if($_SESSION['user']){
            echo '<li><a href="profile.php">Profile</a></li>';
            echo '<li><a href="logout.php" onclick="return confirm(\'Yakin?\')">Logout</a></li>';
          }else{
            echo '<li><a href="login.php">Login</a></li>';
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container container-body">
    <h1>Selamat datang!</h1>
    <hr>
    
    
 
</p>
<p>&nbsp;</p>
    <p><img src="logo_kumham.png" alt="" height="362"
align="left"/> </p>
    <p>Kementerian Hukum dan Hak Asasi Manusia Republik Indonesia (disingkat Kemenkumham RI) adalah kementerian dalam Pemerintah Indonesia yang membidangi urusan hukum dan hak asasi manusia. Kementerian Hukum dan Hak Asasi Manusia berada di bawah dan bertanggung jawab kepada Presiden. Kementerian Hukum dan Hak Asasi Manusia dipimpin oleh seorang Menteri yang sejak 27 Oktober 2014 dijabat oleh Yasonna Laoly. Kemenkumham beberapa kali mengalami pergantian nama yakni: "Departemen Kehakiman" (1945-1999), "Departemen Hukum dan Perundang-undangan" (1999-2001), "Departemen Kehakiman dan Hak Asasi Manusia" (2001-2004), "Departemen Hukum dan Hak Asasi Manusia" (2004-2009), dan "Kementerian Hukum dan Hak Asasi Manusia" (2009-sekarang).</p>
    <p>Kementerian Hukum dan Hak Asasi Manusia pertama kali dibentuk pada tanggal 19 Agustus 1945 dengan nama Departemen Kehakiman. Menteri Kehakiman yang pertama menjabat adalah Soepomo. Kementerian Hukum dan Hak Asasi Manusia pada zaman pemerintahan Belanda disebut Departemen Van Justitie yaitu berdasarkan peraturan Herdeland Yudie Staatblad No.576.
      
      Dalam sidang PPKI tahun 1945 menetapkan mengenai Departemen Kehakiman dalam struktur Negara menurut UUD. Dalam UUD tadi disebutkan departemen termasuk Departemen Kehakiman yang mengurus tentang pengadilan, penjara, kejaksaan dan sebagainya. Dalam sidang PPKI tersebut dibuat pula penetapan tentang tugas pokok masalah ruang lingkup tugas Departemen Kehakiman walaupun secara singkat masih mengacu kepada peraturan Herdeland Yudie Staatblad No.576.
      
    Pada tanggal 1 Oktober 1945 kewenangan Departemen Kehakiman diperluas yakni Kejaksaan berdasarkan Maklumat Pemerintah tahun 1945 tanggal 1 0ktober 1945 dan Jawatan Topograpi berdasarkan Penetapan pemerintah tahun 1945 Nomor 1/S.D. Jawatan Topograpi kemudian dikeluarkan dari Departemen Kehakiman dan masuk ke Departemen Pertahanan berdasarkan Penetapan Pemerintah tahun 1946 nomor 8/S.D.</p>
	<p>Ketika Departemen Agama dibentuk pada tanggal 3 Januari 1946, Mahkamah Islam Tinggi dikeluarkan dari Departemen Kehakiman Republik Indonesia dan masuk ke Departemen Agama Republik Indonesia berdasarkan penetapan pemerintah tahun 1946 Nomor 5/S.D.

Pada 22 Juli 1960, rapat kabinet memutuskan bahwa kejaksaan menjadi departemen dan keputusan tersebut dituangkan dalam Keputusan Presiden RI Nomor 204/1960 tertanggal 1 Agustus 1960 yang berlaku sejak 22 Juli 1960. Sejak itu pula, Kejaksaan RI dipisahkan dari Departemen Kehakiman. Pemisahan tersebut dilatarbelakangi rencana kejaksaan mengusut kasus yang melibatkan Menteri Kehakiman pada saat itu.

Pengalihan Peradilan Umum dan Peradilan Tata Usaha Negara dari Kementerian Hukum dan Hak Asasi Manusia ke Mahkamah Agung berawal dari Undang-Undang No 35 Tahun 1999 tentang Ketentuan-ketentuan Pokok Kekuasaan Kehakiman yang kemudian dijabarkan dalam Undang-Undang No. 4 Tahun 2004 tentang Kekuasaan Kehakiman dan Undang-Undang No. 5 Tahun 2004 tentang Perubahan atas Undang-Undang No. 14 Tahun 1985 tentang Mahkamah Agung. Pada tanggal 23 Maret 2004 Presiden Megawati mengeluarkan Keputusan Presiden RI No. 21 Tahun 2004 tentang pengalihan organisasi, administrasi dan finansial dan lingkungan Peradilan Umum dan Tata Usaha Negara, Pengadilan Agama ke Mahkamah Agung yang kemudian ditindaklanjuti dengan serah terima Pengalihan organisasi, administrasi dan finansial di lingkungan Peradilan Umum dan Peradilan Tata Usaha Negara ke Mahkamah Agung pada tanggal 31 Maret 2004.

    <P>
    Nama Departemen Kehakiman telah beberapa kali berubah nama karena disesuaikan dengan fungsi dari Departemen tersebut yaitu dari Departemen Kehakiman menjadi Departemen Hukum dan Perundang Undangan dan sekarang menjadi Kementerian Hukum Dan Hak Asasi Manusia.

Kantor wilayah (kanwil) Kementerian Hukum dan Hak Asasi Manusia merupakan instansi vertikal Kementerian Hukum dan Hak Asasi Manusia yang berkedudukan di setiap provinsi, yang berada di bawah dan bertanggung jawab kepada Menteri Hukum dan Hak Asasi Manusia. Kanwil terdiri atas beberapa divisi serta sejumlah Unit Pelaksana Teknis (UPT), termasuk Kantor Imigrasi, Lembaga Pemasyarakatan (Lapas), Lapas Terbuka • Lapas Narkotika, Rumah Tahanan Negara (Rutan), Cabang Rutan, Rumah Penyimpanan Benda Sitaan Negara (Rupbasan), Balai Pemasyarakatan (Bapas), Balai Harta Peninggalan (BHP), serta Rumah Detensi Imigrasi (Rudenim).
	</P>
    <hr>
   
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>