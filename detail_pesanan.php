<?php require_once dirname (__FILE__) . "/config/connection.php"; ?>

<?php include('includes/header_detail.php'); 

if(isset($_GET["forder"])) {
		$forderx = $_GET["forder"];
		
	}else{
		$forderx = '';
	}

?>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style>

h1{
	color : #000 !important;
}	

b{
	color : #000 !important;
}	

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

  <main id="main" style="background : <?php echo $fcolor; ?>; color : #fff;">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" style="background : <?php echo $fbackground; ?>" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Order Detail</h2>
          <ol>
            <li><a href="index.php">Beranda</a></li>
            <li>Order Detail</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

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
				$fcompanyx = $queryku2['fcompany'];
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
		   <div class="row">
		   
		   <div class="col-lg-6" style="width: 100% !important; ">
			<h1 data-aos="fade-right">Tanggal Pemesanan </h1>
			<h3 data-aos="fade-right" style="color : <?php echo $fcolor_font; ?>;"><?php echo $fdate_order; ?></h3>
	
			</div>
			 <div data-aos="fade-left" class="col-lg-6" style="width: 100% !important; text-align : right !important;">
			  <h1>No. Order</h1>
			  <h3 style="color : <?php echo $fcolor_font; ?>;"><?php echo $forder; ?></h3>
			  </div>
			<div class="col-lg-12 text-center" style="width: 100% !important; ">
			  <a href="index" style="float: left;" class="btn btn-success"><i class="fas fa-arrow-left"></i>  Back</a>
			  <a href="print_order.php?forder=<?php echo $forder; ?>" class="btn btn-warning" style="float: right;" target="_blank"> Print <i class="fas fa-print"></i></a>
			</div>
			</div>
			<br/>
		   <hr style="border : 4px dashed #cdcdcd"/>
		   <br/>
		   <div class="row">
		   
		   <div class="col-lg-4" data-aos="fade-right" style="width: 100% !important; ">
			<b>Nama Pemesanan</b><br/>
			<h3 style="color : <?php echo $fcolor_font; ?>;"><?php echo $fname; ?></h3>
			
			<br/>
			
			<b>Nama Perusahaan</b><br/>
			<h3 style="color : <?php echo $fcolor_font; ?>;"><?php echo $fcompanyx; ?></h3>
			
			<br/>
			
			<b>Detail Pesanan</b><br/>
			<h3 style="color : <?php echo $fcolor_font; ?>;"><?php echo $fproduct; ?></h3>
			
			</div>
			
			
			 <div class="col-lg-4" data-aos="fade-up" style="width: 100% !important; ">
			<b>Qty</b><br/>
			<h3 style="color : <?php echo $fcolor_font; ?>;"><?php echo $fqty; ?></h3>
			
			<br/>
			
			<b>Total Harga</b><br/>
			<h3 style="color : <?php echo $fcolor_font; ?>;"><?php echo $ftotal; ?></h3>
			
			<br/>
			
			<b>Total Bayar</b><br/>
			<h3 style="color : green;"><?php echo $fpaid; ?></h3>
			
			<br/>
			
			<b>Sisa Bayar</b><br/>
			<h3 style="<?php echo $font_style; ?>"><?php echo $sisa; ?></h3>
			
			</div>
			
			<div class="col-lg-4" data-aos="fade-left" style="width: 100% !important; ">
		   
			<b>Status Bayar</b><br/>
			<h3 style="<?php echo $font_style; ?>" ><?php echo $fstatus_bayar; ?></h3>
			
			<br/>
			
			<b>Status Pesanan</b><br/>
			<h3 style="<?php echo $font_style_status; ?>"><?php echo $fstatus; ?></h3>
		   
			<br/>
			
			<?php if($fstatus == 'PROGRESS'){ ?>
				 <img src="assets/img/progress.gif" style="width : 300px" />
				<?php } else { ?>
					<img src="assets/img/finished.gif" style="width : 300px" />
				<?php } ?>
		   
			</div>
          </div>
		  
		  <?php if($fstatus == 'FINISHED'){ ?>
		  <hr/>
		   <form action="exec_testi_order.php" method="post" enctype="multipart/form-data" novalidate>
		  <h1 class="text-center" style="color : <?php echo $fcolor_title; ?>;">Testimonial</h1>
		  <input type="hidden" name="forder" value="<?php echo $forderx; ?>" />
		  <input type="hidden" name="fname" value="<?php echo $fname; ?>" />
		  <input type="hidden" name="fcompany" value="<?php echo $fcompanyx; ?>" />
		  <hr/>
		  <b>
		  Mohon diisi :
		  </b>
		  <br/> <br/>
		   	<div class="rating">
				<input type="radio" name="star" value="5" id="star1"><label for="star1"></label>
				<input type="radio" name="star" value="4" id="star2"><label for="star2"></label>
				<input type="radio" name="star" value="3" id="star3"><label for="star3"></label>
				<input type="radio" name="star" value="2" id="star4"><label for="star4"></label>
				<input type="radio" name="star" value="1" id="star5"><label for="star5"></label>
			</div>
			
			<hr/>
			 <b>
			Testimonial
			</b>
			<br/>
			<textarea name="ftesti" id="basic-example" required></textarea>
			<br/>
			<div class="text-center">
			
			<?php if($fstatus_bayarx == 'LUNAS'){ ?>
			
			<input type="submit" name="submit" class="btn btn-success text-center" value="Submit"></button>
			
			<?php } else { ?>
			
			<h3 style="color : red;">Mohon untuk Melunasi terlebih dahulu!</h3>
			
			<?php } ?>
			</div>
			</FORM>
		<?php } ?>	
		  </div>
          
        </div>

      </div>
    </section><!-- End About Us Section -->

	<hr/>

  </main><!-- End #main -->

  <?php include('includes/footer.php'); ?>
  
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