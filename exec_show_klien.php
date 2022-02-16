<?php require_once dirname (__FILE__) . "/config/connection.php"; ?>

<?php

$royo = $_POST['parameter'];

$isi = "";
$isi = "<div class='row text-center' style='overflow : auto; background : #333;'>";	
$isi .= "<div class='col-lg-12 text-center'><h1 style='color : #fff;'>$royo</h1></div><div class='row'>";	
$queryku = mysqli_query($con, "select * from tb_galery where fkategori = '$royo'");
										while($queryku2=mysqli_fetch_array($queryku))
										{			
											
											$fname = $queryku2['fname'];
											$fimg = $queryku2['fimg'];
											
											if($royo != ''){
											
	
$isi .= "<div class='col-sm-2 text-center portfolio-item filter-app gallery-img list_item' >";											
$isi .= "<a href='assets/img/portfolio/$fimg' target='_blank' data-gall='portfolioGallery' class='venobox preview-link'><img src='assets/img/portfolio/$fimg' style='width: 150px;' alt='$fname'><hr/>";
$isi .= "<h6 style='color : #fff;'>$fname</h6></a>";		
$isi .= "</div>";								

											}else{
												
$isi .= "<div class='col-sm-2 text-center' >";											
$isi .= "<h6 style='color : #fff;'>Data Kosong</h6>";		
$isi .= "</div>";														

											}
											
										}	

$isi .= "</div></div>";	
//==============================================================================================================================


echo "tes-;-".$isi; 

?>
