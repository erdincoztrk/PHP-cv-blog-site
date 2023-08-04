<?php 
include 'headerust.php';
$kac = 3;
$sayfa1_1 = $_GET['sayfa'];
$sayfa1=($sayfa1_1 * $kac) - $kac;
$proje = $db->prepare("SELECT * FROM proje where proje_id = ? ");
$proje->execute([$_GET['id']]);
$project = $proje->fetch(PDO::FETCH_ASSOC);
$projesayfasayi = ceil($project['proje_fotosayi']/3);

?>

							<!-- Banner -->
								

							<!-- Section -->
								<section>
									<header class="main">
										<h1><?php echo $project['proje_name'] ?></h1>
									</header>

									<p><?php echo $project['proje_aciklama'] ?></p>
									

									<?php for($i=1; $i<=$project['proje_fotosayi']; $i++){ ?>
									<span class="image main">
										<img src="images/<?php echo $project['proje_link']."$i.jpg"; ?>" alt="" />
									</span>
									<p><?php echo $project['proje_foto'.$i.'_aciklama'] ?></p>
								<?php } ?>
								
								</section>

							<!-- Section -->


							





						</div>
					</div>

				
								<!-- FOOTER -->
								<?php include 'footerandmenu.php'; ?>
		