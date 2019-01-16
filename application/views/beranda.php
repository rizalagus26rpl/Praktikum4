<html lang="en">
<head>
    <title>Beranda</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/style.css">
</head>
<body style="background: linear-gradient(135deg, #325adf 0%, #e7530f 100%);">
<header class="ob">
    <div class="atas">
<div id="logo"><img style="width: 127px;margin-left: 40px;float: left;margin-top:40px;"src="<?=base_url()?>asset/halomalang.png" alt=""></div>
    <nav>
        <ul>
            <li><a href="<?=base_url()?>index.php/welcome/utama"> Home </a></li>
            <li><a href="<?=base_url()?>index.php/welcome/event"> Event </a></li>
            <li><a href="<?=base_url()?>index.php/welcome/gallery"> Gallery </a></li>
            <li><a href="<?=base_url()?>index.php/welcome/contact"> Contact </a></li>
            <li><a href="<?=base_url()?>index.php/welcome/profil"> MyProfil </a></li>
        </ul>
    </nav>
    </div>
</header>
<h1 style="color:skyblue;text-align: left;font-size: 10.3mm;margin-top:150px;margin-left: 12px;font-family; sans-serif;">Selamat Datang <?= $nama_lengkap?><br> Ikuti Acara <?= $jenis_kelamin?></h1>
<p style="font-size: 18px;margin-left: 56px;margin-top: 39px;margin-right:900px;font-style: italic;">Malang Gowes adalah acara tahunan yang diadakan oleh HaloMalang.com untuk seluruh warga Kota Malang. Acara ini diadakan untuk menjadikan warga Kota Malang selalu sehat dengan berolah raga. Acara ini juga dimeriahkan oleh artis-artis terkenal dari Indonesia.</p>
<img style="width: 823px;margin-left: 535px;margin-top: -413px;" src="<?=base_url()?>asset/cycling.jpg" alt="">
</body>
</html>