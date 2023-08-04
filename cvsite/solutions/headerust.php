<?php include '../siteislemler/sitebaglan.php';
$ayar = $db->prepare("SELECT * FROM ayar where ayar_id = ?");
$ayar->execute([1]);
$ayargetir = $ayar->fetch(PDO::FETCH_ASSOC);
$adsoyad = explode(" ", $ayargetir['ayar_author']);
$adres = explode(" ",$ayargetir['ayar_adres']);
// DİLLERİ ÇEKME
$dillistele = $db->prepare("SELECT * FROM diller where dil_sayi > ?");
$dillistele->execute([0]);
// BÜTÜN Çözümleri ÇEKME
$dillistele2 = $db->prepare("SELECT * FROM solutions");
$dillistele2 -> execute();
$cozumsayi = $dillistele2->rowCount();
// BÜTÜN DİLLER ÇEKME
$dillericek = $db->prepare("SELECT * FROM diller");
$dillericek->execute();
 ?>		

<!DOCTYPE HTML>

<html>
	<head>
			
		<title><?php echo $ayargetir['ayar_title'] ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="<?php echo $ayargetir['ayar_description']; ?>">

		<?php if(!isset($_GET['answer'])) {?>
 		<meta name="keywords" content="<?php while($dillerigetir = $dillericek -> fetch(PDO::FETCH_ASSOC)){ echo $dillerigetir['dil_ad'].", "; } ?>">
 	<?php } 
 	else{	
 		$answer = $db->prepare("SELECT * FROM solutions where solution_seo = ?");
 		$answer -> execute([$_GET['answer']]);
 		$answergetir = $answer->fetch(PDO::FETCH_ASSOC);
 		?>
 		<meta name="keywords" content="<?php echo $answergetir['solution_keys'] ?>">

 	<?php } ?>

  		<meta name="author" content="<?php echo $ayargetir['ayar_author']; ?>">
  		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="../index" class="logo"><strong><?php echo $adsoyad[0]." ".$adsoyad[1];?></strong> Jr. PHP Developer </a>
									<ul id="ust" class="icons">
										<li><a href="<?php echo $ayargetir['ayar_twitter'] ?>" class="icon brands fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
										<li><a href="<?php echo $ayargetir['ayar_instagram'] ?>" class="icon brands fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
										<li><a href="<?php echo $ayargetir['ayar_linkedin'] ?>" class="icon brands fa-linkedin" target="_blank"><span class="label">LinkedIn</span></a></li>
										<li><a href="<?php echo $ayargetir['ayar_github'] ?>" class="icon brands fa-github" target="_blank"><span class="label">GitHub</span></a></li>
									</ul>
								</header>