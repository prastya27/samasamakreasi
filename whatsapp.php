<?php require_once dirname (__FILE__) . "/config/connection.php"; 


date_default_timezone_set("Asia/Bangkok");

$queryku = mysqli_query($con, "select fphone from tb_contact");
			while($queryku2=mysqli_fetch_array($queryku))
			{			
				$fphone = $queryku2['fphone'];
				
				$distelp = substr($fphone,1,14);
				$ftelp = '+62'.$distelp ;
			}


if (isset($_POST['submit']))
{


	
	$message = $_POST["message"];
	

	
	echo "<script>window.location='https://api.whatsapp.com/send?phone=$ftelp&text=$message';</script>";
	
}

?>