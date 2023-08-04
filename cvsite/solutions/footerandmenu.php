				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="../index">Anasayfa</a></li>
										<li><a href="../index#sertifika">Sertifikalar</a></li>
										<li><a href="../index#proje">Projeler</a></li>
										<li>
											<span class="opener">Çözümler</span>
											<ul>
												
												<li><a href="index?solution"><?php echo "Bütün Çözümler($cozumsayi)"; ?></a></li>
												<?php while($diller = $dillistele -> fetch(PDO::FETCH_ASSOC)){ ?>
												<li><a href="index?solution=<?php echo $diller['dil_ad'] ?>"><?php echo $diller['dil_ad']."(".$diller['dil_sayi'].")" ?></a></li>
											<?php } ?>
											
											</ul>
											
										</li>
										
										
									
										
									</ul>
								</nav>

							

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Mesaj İletin
											<sup>
											<small>
											<?php if(isset($_GET['mesajgonderildi']))
											{
												echo "| Mesajınız İletildi!";
											} 
											if(isset($_GET['mesajgonderilmedi'])){
												echo "| Mesajınız İletilemedi!";
											}
											?>
										</small>
									</sup>
										</h2>
									</header>
									<form method="POST" action="kullaniciislem.php">
														<div class="col-12-xsmall">
																<input type="text" name="mesaj_adsoyad" id="demo-name" value="" placeholder="Ad Soyad" required />
														</div>
														<br>
														<div class="col-12-xsmall">
																<input type="text" name="mesaj_mail" id="demo-name" value="" placeholder="Mail" required />
														</div>
														<br>
														<div class="col-12-xsmall">
																<input type="text" name="mesaj_konu" id="demo-name" value="" placeholder="Konu" required />
														</div>
														<br>
														<div class="col-12-xsmall">
																<textarea rows="4" cols="30" type="text" name="mesaj_detay" id="demo-name" value="" placeholder="Mesaj" required /></textarea>
														</div>
														<br>
														<div class="text-center">	
														<button class="button primary" name="mesajilet">Mesaj Gönder</button>
														</div>
										</form>



									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="mailto:<?php echo $ayargetir['ayar_mail']; ?>"><?php echo $ayargetir['ayar_mail']; ?></a></li>
										<li class="icon solid fa-phone"><a href="http://api.whatsapp.com/send?phone=<?php echo $ayargetir['ayar_gsm']; ?>" target="_blank"><?php echo $ayargetir['ayar_gsm']; ?></a></li>
										
									</ul>
								</section>

					<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; 2023| Erdinç Öztürk Kişisel Web Sitesi.</p>
									<a href="#ust" class="button primary small">Başa Dön</a>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
			

	</body>
</html>

