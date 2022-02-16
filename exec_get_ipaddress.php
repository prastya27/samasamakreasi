<?php require_once dirname (__FILE__) . "/config/connection.php"; ?>

<?php

$fip_addres = $_POST['fip_addres'];
$fuser_agent = $_POST['fuser_agent'];

$today = date('Y-m-d');

//$fip_addres = '127.0.0.1';
//$fuser_agent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0';



$queryku = mysqli_query($con, "select count(fid) as htg from tb_visitor where fip_address = '$fip_addres' and substring(fdatetime_modified,1,10) = '$today'");
										while($queryku2=mysqli_fetch_array($queryku))
										{			
											
											$htg = $queryku2['htg'];
										}
										
if($htg < 1){
	mysqli_query($con, "insert into tb_visitor (fip_address, fuser_agent, fdatetime_modified) values ('$fip_addres', '$fuser_agent', now())");

}	

$htg_today = 0;
$queryku = mysqli_query($con, "select count(fid) as htg from tb_visitor where substring(fdatetime_modified,1,10) = '$today'");
										while($queryku2=mysqli_fetch_array($queryku))
										{			
											
											$htg_today = $queryku2['htg'];
										}	

$htg_all = 0;
$queryku = mysqli_query($con, "select count(fid) as htg from tb_visitor");
										while($queryku2=mysqli_fetch_array($queryku))
										{			
											
											$htg_all = $queryku2['htg'];
										}											
	

//==============================================================================================================================


echo "tes-;-".$htg_today."-;-".$htg_all; 

?>
