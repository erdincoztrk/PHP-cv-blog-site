<?php 
include 'headerust.php';


?>



	<section>
		<?php if(empty($_GET['solution'])){ ?>
		<header class="major">
			<h2><?php echo "BÜTÜN ÇÖZÜMLER" ?></h2>
		</header>
		<div class="posts">
			<?php while($solution = $dillistele2->fetch(PDO::FETCH_ASSOC)){ ?>
				<article>
					<a href="solutiondetail?answer=<?php echo $solution['solution_seo'] ?>" class="image"><img src="../images/<?php echo $solution['solution_language'].".png" ?>" alt="" /></a>
					<h3><?php echo $solution['solution_name'] ?></h3>
					<p><?php  ?></p>
					<ul class="actions">
						<li><a href="solutiondetail?answer=<?php echo $solution['solution_seo'] ?>" class="button">Daha Fazla</a></li>
					</ul>
				</article>
			<?php } ?>








		<?php } if(!empty($_GET["solution"])){ $listele = $db->prepare("SELECT * FROM solutions where solution_language = ?");
		$listele->execute([$_GET['solution']]); ?>



		<header class="major">
			<h2><?php echo $_GET['solution']. " Çözümleri" ?></h2>
		</header>
		<div class="posts">
			<?php while($solution = $listele->fetch(PDO::FETCH_ASSOC)){ ?>
				<article>
					<a href="solutiondetail?answer=<?php echo $solution['solution_seo'] ?>" class="image"><img src="../images/<?php echo $solution['solution_language'].".png" ?>" alt="" /></a>
					<h3><?php echo $solution['solution_name'] ?></h3>
					<p><?php  ?></p>
					<ul class="actions">
						<li><a href="solutiondetail?answer=<?php echo $solution['solution_seo'] ?>" class="button">Daha Fazla</a></li>
					</ul>
				</article>
			<?php }} ?>




		</div>
	</section>




		







</div>
</div>


<?php include 'footerandmenu.php' ?>