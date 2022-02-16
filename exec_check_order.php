<?php error_reporting(0); ?>

<?php require_once dirname (__FILE__) . "/config/connection.php"; ?>
<?php

date_default_timezone_set("Asia/Bangkok");


if (isset($_POST['submit']))
{
	$forder = $_POST["forder"];
	
	$queryku = mysqli_query($con, "select COUNT(fid) AS COUNTX from tb_order where forder = '$forder' and ftesti is null");
	while($queryku2=mysqli_fetch_array($queryku))
		{			
			$COUNTX = $queryku2['COUNTX'];
		}
	
	if($COUNTX > 0){
		echo "<script>window.location='detail_pesanan.php?forder=$forder'</script>";
	}else{
		echo "<script>alert('No Order yang dimasukan tidak ada! Mohon check Kembali!');window.location='index.php'</script>";
	}		
	
}

?>