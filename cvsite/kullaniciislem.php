<?php 
include 'admin/islemler/baglan.php';
// KULLANICI MESAJ İLETME
if(isset($_POST['mesajilet'])){
	$insertmessage = $db->prepare("INSERT INTO mesaj set mesaj_adsoyad = ?, mesaj_mail = ?, mesaj_konu = ?, mesaj_detay = ? ");
	$mesajilet = $insertmessage->execute([
		$_POST['mesaj_adsoyad'],
		$_POST['mesaj_mail'],
		$_POST['mesaj_konu'],
		$_POST['mesaj_detay']
	]);
	if($mesajilet){
		Header("Location:index.php?mesajgonderildi");
		exit;
	}
	else{
		Header("Location:index.php?mesajgondirilemedi");
	}
}


 ?>