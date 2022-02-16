<?php require_once dirname (__FILE__) . "/config/connection.php"; ?>



<?php 

if(isset($_GET["forder"])) {
		$forderx = $_GET["forder"];
		
	}else{
		$forderx = '';
	}

?>

<link rel = "icon" href = 
"assets/img/<?php echo $fimg; ?>" 
        type = "image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
  
  
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
 
  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style>

.rating{
	position: absolute;
	left :80px;
	transform: translate(-50%, -50%) rotateY(180deg);
	display: flex;
	
}
.rating input{
	display: none;
}
.rating label{
	display: block;
	cursor: pointer;
	width: 30px;
	/*background: #ccc;*/
}
.rating label:before{
	content:'\f005';
	font-family: fontAwesome;
	position: relative;
	display: block;
	font-size: 20px;
	color: #101010;
}
.rating label:after{
	content:'\f005';
	font-family: fontAwesome;
	position: absolute;
	display: block;
	font-size: 20px;
	color: #fffa00;
	top:0;
	opacity: 0;
	transition: .5s;
	text-shadow: 0 2px 5px rgba(0,0,0,.5);
}
.rating label:hover:after,
.rating label:hover ~ label:after,
.rating input:checked ~ label:after
{
	opacity: 1;
}
</style>

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" style="background : white; min-height: 400px; padding : 20px; box-shadow: 0px 2px 2px 2px #888;" data-aos="fade-up">

        <div class="row content p-4">
         <?php
			$queryku = mysqli_query($con, "select * from tb_order where forder = '$forderx'");
			while($queryku2=mysqli_fetch_array($queryku))
			{			
				$forder = $queryku2['forder'];
				$fname = $queryku2['fname'];
				$fcompany = $queryku2['fcompany'];
				$fqty = $queryku2['fqty'];
				$fpaidx = $queryku2['fpaid'];
				$ftotalx = $queryku2['ftotal'];
				$fproduct = $queryku2['fproduct'];
				$fdate_order = $queryku2['fdate_order'];
				$fdate_finish = $queryku2['fdate_finish'];
				$fstatus = $queryku2['fstatus'];
				$fstatus_bayarx = $queryku2['fstatus_bayar'];
				
				if($fstatus == 'PROGRESS'){
					$fstatus_pesanan_style = 'background:red; color : white;';
					$font_style_status = ' color : red;';
				}else{
					$fstatus_pesanan_style = 'background:green; color : white;';
					$font_style_status = ' color : green;';
				}
				
				$sisax = $ftotalx - $fpaidx;
				
				$ftotal = "Rp " . number_format($ftotalx,0,',','.');
				$fpaid = "Rp " . number_format($fpaidx,0,',','.');
				$sisa = "Rp " . number_format($sisax,0,',','.');
				
				if($sisax  == 0){
					$fstatus_bayar = 'Lunas';
					$fstatus_bayar_style = 'background:green; color : white;';
					$font_style = ' color : green;';
				}else{
					$fstatus_bayar = 'Belum Lunas';
					$fstatus_bayar_style = 'background:red; color : white;';
					$font_style = ' color : red;';
				}
			}	
				
		?>
		
          <div class="col-lg-12" >
		  
			<table class="table">
				<tr>
					<td>
						<h1 data-aos="fade-right">Tanggal Pemesanan </h1>
						<h3 data-aos="fade-right" style="color : green;"><?php echo $fdate_order; ?></h3></td>
					<td>
						<h1>No. Order</h1>
						<h3 style="color : green;"><?php echo $forder; ?></h3>
					</td>
				</tr>
			</table>
			<hr/>
			
			
			<table class="table">
				<tr colspan='3'>
					<td><h1><b>Detail Pesanan :</b></h1></td>
				</tr>	
				<tr>
					<td>
						<b>Nama Pemesanan</b><br/>
						<h3 style="color : green;"><?php echo $fname; ?></h3>
						
						<br/>
						
						<b>Nama Perusahaan</b><br/>
						<h3 style="color : green;"><?php echo $fcompany; ?></h3>
						
						<br/>
						
						<b>Detail Pesanan</b><br/>
						<h3 style="color : green;"><?php echo $fproduct; ?></h3>
					<td>
						<b>Qty</b><br/>
							<h3 style="color : green;"><?php echo $fqty; ?></h3>
							
							<br/>
							
							<b>Total Harga</b><br/>
							<h3 style="color : green;"><?php echo $ftotal; ?></h3>
							
							<br/>
							
							<b>Total Bayar</b><br/>
							<h3 style="color : green;"><?php echo $fpaid; ?></h3>
							
							<br/>
							
							<b>Sisa Bayar</b><br/>
							<h3 style="<?php echo $font_style; ?>"><?php echo $sisa; ?></h3>
					</td>
					<td>
						<b>Status Bayar</b><br/>
						<h3 style="<?php echo $font_style; ?>" ><?php echo $fstatus_bayar; ?></h3>
						
						<br/>
						
						<b>Status Pesanan</b><br/>
						<h3 style="<?php echo $font_style_status; ?>"><?php echo $fstatus; ?></h3>
						
						
					</td>
				</tr>
			</table>
			
			<br/>
			
						<?php if($fstatus == 'PROGRESS'){ ?>
							 <img src="assets/img/progress.gif" style="width : 300px" />
							<?php } else { ?>
								<img src="assets/img/finished.gif" style="width : 300px" />
							<?php } ?>

		  
		
		  </div>
          
        </div>

      </div>
    </section><!-- End About Us Section -->



  </main><!-- End #main -->

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  <script src="assets/tinymce/tinymce.min.js"></script>
									<script>
										tinymce.init({
										  selector: 'textarea#basic-example',
										  height: 300,
										  menubar: false,
										  plugins: [
											'advlist autolink lists link image charmap print preview anchor',
											'searchreplace visualblocks code fullscreen',
											'insertdatetime media table paste code help wordcount'
										  ],
										  toolbar: 'undo redo | formatselect | fontselect fontsizeselect| ' +
										  'bold italic backcolor | alignleft aligncenter ' +
										  'alignright alignjustify | bullist numlist outdent indent | ' +
										  'removeformat | help',
										  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
										});
									</script>	