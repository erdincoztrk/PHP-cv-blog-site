<?php include 'siteislemler/sitebaglan.php';
$ayar = $db->prepare("SELECT * FROM ayar where ayar_id = ?");
$ayar->execute([1]);
$ayargetir = $ayar->fetch(PDO::FETCH_ASSOC);
$adsoyad = explode(" ", $ayargetir['ayar_author']);
$adres = explode(" ",$ayargetir['ayar_adres']);
// SERTİFİKA GETİR
$sertifika = $db->prepare("SELECT * FROM sertifika order by sertifika_tarih ASC");
$sertifika->execute();
// YETENEK GETİR
$yetenek = $db->prepare("SELECT * FROM yetenek order by yetenek_seviye ASC");
$yetenek->execute();
//  HAKKIMDA BİLGİ ÇEKME
$hakkimda = $db->prepare("SELECT * FROM hakkimda where hakkimda_id = ?");
$hakkimda->execute([1]);
// PROJELER
$projeler = $db->prepare("SELECT * FROM proje");
$projeler->execute();
// DİLLERİ ÇEKME
$dillistele = $db->prepare("SELECT * FROM diller where dil_sayi > ?");
$dillistele->execute([0]);
// BÜTÜN DİLLERİ ÇEKME
$dillistele2 = $db->prepare("SELECT * FROM solutions");
$dillistele2 -> execute();
$cozumsayi = $dillistele2->rowCount();


 ?>		

<!DOCTYPE HTML>

<html>
	<head>
			
		<title><?php echo $ayargetir['ayar_title'] ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="<?php echo $ayargetir['ayar_description']; ?>">
 		<meta name="keywords" content="<?php echo $ayargetir['ayar_keyword']; ?>">
  		<meta name="author" content="<?php echo $ayargetir['ayar_author']; ?>">
  		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index" class="logo"><strong><?php echo $adsoyad[0]." ".$adsoyad[1];?></strong> Jr. PHP Developer </a>
									<ul class="icons">
										<li><a href="<?php echo $ayargetir['ayar_twitter'] ?>" class="icon brands fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
										<li><a href="<?php echo $ayargetir['ayar_instagram'] ?>" class="icon brands fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
										<li><a href="<?php echo $ayargetir['ayar_linkedin'] ?>" class="icon brands fa-linkedin" target="_blank"><span class="label">LinkedIn</span></a></li>
										<li><a href="<?php echo $ayargetir['ayar_github'] ?>" class="icon brands fa-github" target="_blank"><span class="label">GitHub</span></a></li>
									</ul>
								</header>