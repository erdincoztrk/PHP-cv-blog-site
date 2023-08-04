<?php 
include 'headerust.php';
$sertifikaa = $db->prepare("SELECT * FROM sertifika where sertifika_id = ?");
$sertifikaa -> execute([$_GET['id']]);
$sertifika = $sertifikaa->fetch(PDO::FETCH_ASSOC);
?>

							<!-- Banner -->
								

							<!-- Section -->
								<section>
									<header class="main">
										<h1><?php echo $sertifika['sertifika_ad'] ?></h1>
									</header>

									<span class="image main"><img src="<?php echo $sertifika['sertifika_fotograf'] ?>" alt="" /></span>

									<p><?php echo $sertifika['sertifika_detay'] ?></p>
								
								</section>

							<!-- Section -->


							





						</div>
					</div>

				
								<!-- FOOTER -->
								<?php include 'footerandmenu.php'; ?>
		