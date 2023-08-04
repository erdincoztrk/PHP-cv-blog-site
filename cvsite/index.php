<?php 
include 'headerust.php';
$hakkimdagetir = $hakkimda->fetch(PDO::FETCH_ASSOC); 
?>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1 id="ust">Kişisel Web Siteme Hoşgeldin!</h1>
											
											<h4>Ben Kimim?</h4>
										</header>
										<p><?php 
										if(isset($_GET['hakkimdafazla'])){
										echo $hakkimdagetir['hakkimda_benkimim'];
										echo "<br><h4>Hedefim</h4><br>".$hakkimdagetir['hakkimda_hedef'];
										echo "<br><h4>Hobilerim</h4><br>".$hakkimdagetir['hakkimda_hobi'];
									}
									else{
										echo substr($hakkimdagetir['hakkimda_benkimim'],0,500)."..."; 
									}

									?></p>
										<ul class="actions">
											<?php if(!isset($_GET['hakkimdafazla'])){ ?>
											<li><a href="?hakkimdafazla" class="button big">Devamı</a></li>
										<?php }
										else{ ?>
											<li><a href="?" class="button big">Küçült</a></li>
										<?php } ?>
										</ul>
									</div>
									<span class="image object">
										<h3>Hoşgeldin 😊</h3>
														<pre class="bg-dark text-light"><code>< ?php <br> echo 'Kişisel Web Siteme Hoşgeldiniz.<br> Ben '.$ad.' '.$soyad.<br>' '. İyi Gezinmeler Dilerim :)';<br>?></code></pre>
									</span>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Yetenekler</h2>
									</header>
									
										
									<?php
									
									 while($yetenekgetir = $yetenek->fetch(PDO::FETCH_ASSOC)){ 
									 	if($yetenekgetir['yetenek_ad'] != 'İngilizce'){ ?>
										<h5><?php echo $yetenekgetir['yetenek_ad'] ?></h5>
									<div class="progress">
  									<div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $yetenekgetir['yetenek_seviye']."%" ?>" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"> <?php echo $yetenekgetir['yetenek_seviye']."%" ?> </div>

									</div>
									<hr>
									<?php } 
									else{ ?> 
										
											<h5><?php echo $yetenekgetir['yetenek_ad'] ?></h5>
																<input type="radio" id="demo-priority-low" name="demo-priority" checked>
																<label for="demo-priority-low"><?php echo $yetenekgetir['yetenek_seviye'] ?></label>
																
									<?php } }?>	
									
								</section>

							<!-- Section -->

							<!-- SERTİFİKALAR -->
								<section>
									<header class="major">
										<h2 id="sertifika">Sertifikalar</h2>
									</header>
									<div class="posts">
										<?php while($sertifikalistele = $sertifika->fetch(PDO::FETCH_ASSOC)){ ?>
										<article>
											<a href="sertifikalar?id=<?php echo $sertifikalistele['sertifika_id'] ?>&sertifika=<?php echo $sertifikalistele['sertifika_ad'] ?>" class="image"><img src="<?php echo $sertifikalistele['sertifika_fotograf'] ?>" alt="" /></a>
											<h3><?php echo $sertifikalistele['sertifika_ad'] ?></h3>
											<p><?php echo substr($sertifikalistele['sertifika_detay'], 0,100)."..." ?></p>
											<ul class="actions">
												<li><a href="sertifikalar?id=<?php echo $sertifikalistele['sertifika_id'] ?>&sertifika=<?php echo $sertifikalistele['sertifika_ad'] ?>" class="button">Daha Fazla</a></li>
											</ul>
										</article>
										<?php } ?>
									
										
										
										
									</div>
								</section>
								<!-- PROJELER -->
								<section>
									<header class="major">
										<h2 id="proje">Projeler</h2>
									</header>
									<div class="posts">
										<?php while($projelistele = $projeler->fetch(PDO::FETCH_ASSOC)){ ?>
										<article>
											<a href="<?php if($projelistele['proje_id']!=1){ ?>
													projeler?sayfa=1&id=<?php echo $projelistele['proje_id'] ?>&proje=<?php echo $projelistele['proje_name'] ?> <?php } 
													else{ 
														echo "https://www.smaicinyardim.com";	
												} ?>" class="image" target="_blank"><img src="
												<?php if($projelistele['proje_id'] != 1){ ?>
												images/<?php echo $projelistele['proje_link']."1.jpg" ;
											}
											else{ 
												echo "https://smaicinyardim.com/images/logolar/logo.jpg";

												}?>"
											 alt="" /></a>
											<h3><?php echo $projelistele['proje_name'] ?></h3>
											<p><?php echo $projelistele['proje_cvaciklama']."..." ?></p>
											<ul class="actions">
												<li><a href="
													<?php if($projelistele['proje_id']!=1){ ?>
													projeler?sayfa=1&id=<?php echo $projelistele['proje_id'] ?>&proje=<?php echo $projelistele['proje_name'] ?> <?php } 
													else{ 
														echo "https://www.smaicinyardim.com";	
												} ?>
													" class="button" target="_blank">Daha Fazla</a></li>
											</ul>
										</article>
										<?php } ?>
									
										
										
										
									</div>
								</section>

						</div>
					</div>

				
								<!-- FOOTER -->
								<?php include 'footerandmenu.php'; ?>
		