<?php 
include 'headerust.php';

 ?>


<?php if(isset($_GET['answer'])){
$cek = $db->prepare("SELECT * FROM solutions where solution_seo = ?");
$cek->execute([$_GET['answer']]);
$cozumgetir = $cek -> fetch(PDO::FETCH_ASSOC); ?>
<h3><?php echo $cozumgetir['solution_name'] ?></h3>
<code><?php echo $cozumgetir['solution_detail'] ?></code>

<?php } ?>





 </div>
</div>



<?php include 'footerandmenu.php' ?>