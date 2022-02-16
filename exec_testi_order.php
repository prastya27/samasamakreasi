<?php require_once dirname (__FILE__) . "/config/connection.php"; 

date_default_timezone_set("Asia/Bangkok");


if (isset($_POST['submit']))
{

	if(isset($_POST["star"])) {
		$star = $_POST["star"];
		
	}else{
		$star = '';
	}
	$ftesti = $_POST["ftesti"];
	$forder = $_POST["forder"];
	$fname = $_POST["fname"];
	$fcompany = $_POST["fcompany"];
	
	if($star == ''){
		echo "<script>alert('Rating belum diisi');window.location='detail_pesanan.php?forder=$forder'</script>";
	}else{	
	
	mysqli_query($con, "update tb_order set fscore = '$star', ftesti = '$ftesti' where forder = '$forder'");
	
	mysqli_query($con, "insert into tb_testimonial (forder, fname, fcompany, ftesti, fscore, fstatus, fdate_modified) values ('$forder', '$fname', '$fcompany', '$ftesti', '$star', 'sent', now())");
	
	//ECHO "";
	
	echo "<script>alert('Terima kasih telah memberikan testimoni');window.location='index.php'</script>";
	}
	
}

?>