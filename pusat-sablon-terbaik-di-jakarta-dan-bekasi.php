<?php require_once dirname (__FILE__) . "/config/connection.php"; ?>

<?php include('includes/header.php'); ?>

<?php 
	 $user_agent = $_SERVER['HTTP_USER_AGENT']; //user browser
     $ip_address = $_SERVER["REMOTE_ADDR"];     // user ip adderss
     $page_name = $_SERVER["SCRIPT_NAME"];      // page the user looking
     $query_string = $_SERVER["QUERY_STRING"];   // what query he used
?>
<style>
	.list_item {
		height : auto;
	}
	
	.loding {
		background-color: #e9e9e9;
		border: 1px solid;
		border-color: #c6c6c6;
		color: #333;
		font-size: 12px;
		display: block;
		text-align: center;
		padding: 10px 0;
		outline: 0;
		font-weight:bold;
	}
	.loding_txt {
		background-image: url(loading.gif);
		background-position: left;
		background-repeat: no-repeat;
		border: 0;
		display: inline-block;
		height: 16px;
		padding-left: 20px;
	}
	
	.page-item{
		cursor : pointer;
	}	
	
	@media (min-width: 768px) {
      .modal-xl {
        width: 90%;
       max-width:1800px;
	   top : 20%;
      }
    }
	
	@media (min-width: 100px) {
      .modal-xl {
        width: 90%;
       max-width:1800px;
	   top : 20%;
      }
    }

</style>

<!-- Modal -->
<div class="modal fade" id="exampleModalklien" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
	<div class="modal-content" style="background : #333;">
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel"></h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body text-center" style="overflow : auto; padding-left : 5%; padding-right : 5%;">
		<div class="row text-center" id="showklien"></div>
	  </div>
	  <div class="modal-footer">
		<!--
		<button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
		<button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
		-->
	  </div>
	
	</div>
  </div>
</div>	

 <?php
			$queryku = mysqli_query($con, "select * from tb_slide where factive = 'active'");
			while($queryku2=mysqli_fetch_array($queryku))
			{			
				$fimg = $queryku2['fimg'];
				$ftitle = $queryku2['ftitle'];
				$fcontent = $queryku2['fcontent'];
				$factive = $queryku2['factive'];
			}	
			?>

  <!-- ======= Hero Section ======= -->

  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
   <div class="hero-img"></div>
	<div class="container" data-aos="fade-right">
      <h1 style="color : <?php echo $fcolor_title; ?>; text-shadow: 2px 2px <?php echo $fdiv_color; ?>;"><?php echo $ftitle; ?></h1>
      <!--<h2 style="text-shadow: 2px 2px #333;"><?php //echo $fcontent; ?></h2>-->
	  <!--
      <div class="d-flex align-items-center mb-2">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>
	  -->
    </div>
	</div>
  </section><!-- End Hero -->

  <main id="main">

	<input type="hidden" id="fip_address" value="<?php echo $ip_address; ?>" />
	<input type="hidden" id="fuser_agent" value="<?php echo $user_agent; ?>" />		  

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-xl-4 col-lg-5" data-aos="fade-right">
            <div class="content icon-box d-flex flex-column justify-content-center">
			  <center><i style="font-size : 50px;" class="bx bx-receipt"></i></center>
				<!--
              <h3 style="text-shadow: 2px 2px #333;"><?php echo $ftitle; ?></h3>
			  -->
			  
			 			 
			  
              <p>
               <?php echo $fcontent; ?>
              </p>
			  <!--
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
			  -->
            </div>
          </div>
          <div class="col-xl-8 col-lg-7 d-flex">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
			  <?php
			$queryku = mysqli_query($con, "select * from tb_slide where factive <> 'active' limit 3");
			while($queryku2=mysqli_fetch_array($queryku))
			{			
				$fimg = $queryku2['fimg'];
				$ftitle = $queryku2['ftitle'];
				$fcontent = $queryku2['fcontent'];
				$factive = $queryku2['factive'];
				
			?>
                <div class="col-xl-4 d-flex align-items-stretch gallery-img" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4><?php echo $ftitle; ?></h4>
                    <p><?php //echo $fcontent; ?></p>
                  </div>
                </div>
				
			<?php } ?>

              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
		 <div class="section-title">
          <h1 style="color : <?php echo $fcolor_title; ?>; text-shadow: 1px 1px #333; font-weight : bold;" data-aos="fade-up">Tentang Kami</h1>
         </div>
        <div class="row pt-5">
		<!--
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h4 data-aos="fade-up">About us</h4>
            <h3 data-aos="fade-up">Enim quis est voluptatibus aliquid consequatur fugiat</h3>
            <p data-aos="fade-up">Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p>

            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Dine Pad</a></h4>
              <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
            </div>

          </div>
		  -->
		  	<?php
			$queryku = mysqli_query($con, "select * from tb_about");
			while($queryku2=mysqli_fetch_array($queryku))
			{			
				$fcontent1 = $queryku2['fcontent1'];
				$fcontent2 = $queryku2['fcontent2'];
			}	
				
		?>
		
          <div class="col-lg-6 tentang1 text-center" data-aos="fade-right">
		   <img src="assets/img/<?php echo $fimgx; ?>" style="border-radius : 10%; width : 50%; "  />
          
          </div>
		  
          <div class="col-lg-6 pt-4 pt-lg-0" id="tentang2" data-aos="fade-left">
		    <p><?php echo $fcontent1; ?></p>
			<br/><br/>
			<p><?php echo $fcontent2; ?></p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">
	  
		 <div class="section-title">
          <h1 style="color : <?php echo $fcolor_title; ?>; text-shadow: 1px 1px #333; font-weight : bold;" data-aos="fade-up">Klien Kami</h1>
		  <!--
          <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
		  -->
	   </div>
        <div class="owl-carousel clients-carousel text-center pt-5">
		<?php
					$queryku = mysqli_query($con, "select * from tb_order where fstatus = 'FINISHED' order by fid desc");
					while($queryku2=mysqli_fetch_array($queryku))
					{			
						$ftitle = $queryku2['fcompany'];
						$fimgx = $queryku2['fimg'];
						
						if($fimgx != ''){
							$fimg = $fimgx;
						}else{
							$fimg = 'noimage.png';
						}
						
				?>
				
		
				
		<div data-toggle="modal" data-target="#exampleModalklien" onclick="showklien('<?php echo $ftitle; ?>')" >		
          <img src="admin/assets/images/ORDER/<?php echo $fimg; ?>" alt="<?php echo $ftitle; ?>"><hr/>
		  <h6><?php echo $ftitle; ?></h6>
		</div>
		
	
		
		
		<?php } ?>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h1 style="color : <?php echo $fcolor_title; ?>; text-shadow: 1px 1px #333; font-weight : bold;">Servis Kami</h1>
		  <!--
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
		  -->
	   </div>

        <div class="row pt-5">
		<?php
			$queryku = mysqli_query($con, "select * from tb_services order by fid desc limit 3");
			while($queryku2=mysqli_fetch_array($queryku))
			{			
				$fimg = $queryku2['fimg'];
				$ftitle = $queryku2['ftitle'];
				$fcontent = $queryku2['fcontent'];
				
				
		?>
          <div class="col-lg-4 col-md-6 gallery-img mb-5" data-aos="fade-up">
            <div class="" style="background : <?php echo $fbackground; ?>; padding : 0 !important;">
			<div class="pt-5 pl-5 pr-5 ">
              <div class="icon">  <img src="assets/img/<?php echo $fimg; ?>" style="max-width : 50px; max-height : 50px;" /></div>
              <h4 class="title" style="color : <?php echo $fcolor_title; ?>;"><?php echo $ftitle; ?></h4>
              <h6 style="color : #ccc !important;"><?php echo $fcontent; ?></h6>
			</div>  
			  <div style="height: 100px; overflow: hidden; background : <?php echo $fdiv_color; ?>;"> 
			  <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
				<path fill="<?php echo $fbackground; ?>" d="M0.00,190 L800.00,0.00 L0.00,0.00 Z"></path>
				<style type="text/css">
					rect{fill:url(#MyGradient)}
				  </style>
				  <defs>
					<linearGradient id="MyGradient">
					  <stop offset="5%" stop-color="#333" />
					  <stop offset="95%" stop-color="#333" />
					</linearGradient>
				  </defs>
			  </svg>
			</div>
            </div>
			
          </div>
			<?php } ?>
         

      </div>
	  
	  
    </section><!-- End Services Section -->
	
	<div style="height: 150px; overflow: hidden; background : <?php echo $fbackground; ?>;">
			  <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
				<path fill="<?php echo $fdiv_color; ?>" d="M0.00,100 0.00,100 500,0 L900.00,0.00 L0.00,0.00 Z"></path>
				<style type="text/css">
					rect{fill:url(#MyGradient)}
				  </style>
				  <defs>
					<linearGradient id="MyGradient">
					  <stop offset="5%" stop-color="#333" />
					  <stop offset="95%" stop-color="#333" />
					</linearGradient>
				  </defs>
			  </svg>
			</div>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio" style="background : <?php echo $fbackground; ?>;">
      <div class="container">

        <div class="section-title">
          <h1 data-aos="fade-up" style="color : <?php echo $fcolor_title; ?>; text-shadow: 1px 1px #333; font-weight : bold;">Galeri</h1>
		  <!--
          <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
		  -->
		</div>
		<div class="row">
	<?php
						$queryku = mysqli_query($con, "select * from tb_global where fid = 1");
										while($queryku2=mysqli_fetch_array($queryku))
										{			
											$fbackground = $queryku2['fbackground'];
											$fcolor = $queryku2['fcolor'];
											$fcolor_font = $queryku2['fcolor_font'];
											$fcolor_title = $queryku2['fcolor_title'];
											$fdiv_color = $queryku2['fdiv'];
										}	

						
			$queryku = mysqli_query($con, "select distinct(fjenis) as fjenis from tb_galery");


			while($queryku2=mysqli_fetch_array($queryku))
					{			
						//$fid = $queryku2['fid'];
						//$fname = $queryku2['fname'];
						//$fimg = $queryku2['fimg'];
						$fjenis = $queryku2['fjenis'];
		
		?>
		
			<div class="col-lg-6 text-center gallery-imgx" style="padding-left : 25px; padding-right : 25px; padding-top : 25px;" >
			<h3 style="color : <?php echo $fcolor; ?>"><b><?php echo $fjenis; ?></b></h3>
			<div class="row" style="padding : 20px; background-color : <?php echo $fcolor_title; ?>; border-radius : 10px;">
			<?php
			
			$querykux = mysqli_query($con, "select * from tb_galery where fjenis = '$fjenis' order by fid desc");
			while($queryku2x=mysqli_fetch_array($querykux))
					{			
						$fid = $queryku2x['fid'];
						$fname = $queryku2x['fname'];
						$fimg = $queryku2x['fimg'];
			
			?>	
			
				  <div class="col-sm-4 portfolio-item filter-app gallery-img list_item" >
					
					<a href="assets/img/portfolio/<?php echo $fimg; ?>" data-gall="portfolioGallery" class="venobox preview-link">
					<img src="assets/img/portfolio/<?php echo $fimg; ?>" class="img-fluid" alt="" style="border-radius : 10px;">
					<!--
					<div class="portfolio-info">
					  <h4><?php echo $fname; ?></h4>
					  <p><?php echo $fname; ?></p>
					 
					
					 <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
					 
					</div>
					-->
					</a>
				  </div>
				  
			<?php }	?>
		</div>
		</div>
		
		<?php }	?>
		<!--	
		<iframe width="320" height="460" src="https://www.instagram.com/bontot_lah/embed" frameborder="0"></iframe>
		-->
		</div>
      </div>
	  
	 
	  
    </section><!-- End Portfolio Section -->
	
	<div style="height: 150px; overflow: hidden; background : <?php echo $fcolor; ?>;">
			  <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
				<path fill=<?php echo $fbackground; ?> d="M0.00,100 0.00,100 500,0 L900.00,0.00 L0.00,0.00 Z"></path>
				<style type="text/css">
					rect{fill:url(#MyGradient)}
				  </style>
				  <defs>
					<linearGradient id="MyGradient">
					  <stop offset="5%" stop-color="#333" />
					  <stop offset="95%" stop-color="#333" />
					</linearGradient>
				  </defs>
			  </svg>
			</div>

    <!-- ======= Team Section ======= -->
    <section id="team" class="team" style="background : <?php echo $fcolor; ?>;">
      <div class="container text-center">

        <div class="section-title">
          <h1 data-aos="fade-up" style="color : <?php echo $fcolor_title; ?>; text-shadow: 1px 1px #333; font-weight : bold;">Testimoni</h1>
		  <!--
          <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
		  -->
	   </div>


		<?php

			$queryku = mysqli_query($con, "select * from tb_testimonial where fscore > 3 order by fid desc limit 12");

		?>
		<div class="row">
			<?php
			while($queryku2=mysqli_fetch_array($queryku))
					{			
						$fname = $queryku2['fname'];
						$fcompany = $queryku2['fcompany'];
						$ftesti = $queryku2['ftesti'];
						$fscore = $queryku2['fscore'];
						
						if($fscore == 1){
							$rating = 'rating1.png';
						}elseif($fscore == 2){
							$rating = 'rating2.png';
						}elseif($fscore == 3){
							$rating = 'rating3.png';
						}elseif($fscore == 4){
							$rating = 'rating4.png';
						}elseif($fscore == 5){
							$rating = 'rating5.png';
						}
			
			?>	
			
				  <div class="col-lg-3 col-md-6 d-flex align-items-stretch gallery-img" data-aos="fade-up">
					<div class="member">
					
					  <div class="member-img p-3">
						<img src="assets/img/<?php echo $rating; ?>" class="img-fluid" alt="">
						<!--
						<div class="social">
						  <a href=""><i class="icofont-twitter"></i></a>
						  <a href=""><i class="icofont-facebook"></i></a>
						  <a href=""><i class="icofont-instagram"></i></a>
						  <a href=""><i class="icofont-linkedin"></i></a>
						</div>
						-->
					  </div>
					  <div class="text-center" style="background : #000;">
						<div class="p-2" style="color : #fff !important; display : flex;">
						<table width="100%" style="">
							<tr>
								<td width="10%" style="vertical-align : top;"><i class='fa fa-quote-left fa-sm' aria-hidden='true'></i></td>
								<td width="80%" style="vertical-align : middle;"><h1><?php echo $ftesti; ?></h1></td>
								<td width="10%" style="vertical-align : bottom;"><i class='fa fa-quote-right fa-sm' aria-hidden='true'></i></td>
							</tr>
						</table>
						</div>
						
						<div class="p-2">
							<span style="color : <?php echo $fcolor_title; ?>;"><?php echo $fname; ?> - <?php echo $fcompany; ?></span>
						</div>
					  </div>
					</div>
				  </div>
			<?php }	?>
		</div>

		</div>
		
		<br/>
		<hr/>
		<br/>
		
	   <div class="section-title text-center">
          <h1 data-aos="fade-up" style="color : <?php echo $fcolor_title; ?>; text-shadow: 1px 1px #333; font-weight : bold;">Bagaimana cara order?</h1>
		  <!--
          <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
		  -->
		  <br/>
		  <a class="btn btn-warning btn-lg text-area" href="#" data-toggle="modal" data-target="#exampleModal3"><h3>colek kami!</h3></a>
	   </div>
		
		
      </div>
	  

	  
    </section><!-- End Team Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
	<div class="contact-img"></div>
	<div class="container">
	 <div class="section-title">
          <h1 data-aos="fade-up" style="color : <?php echo $fcolor_title; ?>; text-shadow: 1px 1px #333; font-weight : bold;">Contact</h1>
		  <!--
          <p data-aos="fade-up" style="color : #ccc; text-shadow : 2px 2px #333;">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
		  -->
		</div>
		
	</div>	


     

       
        <div class="row justify-content-center">
		
		<?php
			$queryku = mysqli_query($con, "select * from tb_contact");
			while($queryku2=mysqli_fetch_array($queryku))
			{			
				$fcompany = $queryku2['fcompany'];
				$faddress = $queryku2['faddress'];
				$fcity = $queryku2['fcity'];
				$fcountry = $queryku2['fcountry'];
				$fphone = $queryku2['fphone'];
				$femail = $queryku2['femail'];
				
				$distelp = substr($fphone,1,14);
				$ftelp = '+62'.$distelp ;
			}
		  ?>

          <div class="col-xl-3 col-lg-4 mt-4 p-2" data-aos="fade-up">
            <div class="info-box"  style="min-height : 200px; border-radius : 10px;">
              <i class="bx bx-map" style="background : <?php echo $fcolor_title; ?>;"></i>
              <h3 style="color : <?php echo $fcolor_title; ?>; text-shadow : 1px 1px #333;">Our Address</h3>
              <p style="color : <?php echo $fcolor_font; ?>"><?php echo $faddress; ?><br><?php echo $fcity; ?>, <?php echo $fcountry; ?></p>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 mt-4 p-2" data-aos="fade-up" data-aos-delay="100">
			<a href="#" data-toggle="modal" data-target="#exampleModal2">
				<div  class="info-box"  style="min-height : 200px; border-radius : 10px;">
				  <i class="bx bx-envelope" style="background : <?php echo $fcolor_title; ?>;"></i>
				  <h3 style="color : <?php echo $fcolor_title; ?>; text-shadow : 1px 1px #333;">Email Us</h3>
				  <a  style="color : <?php echo $fcolor_font; ?>"><?php echo $femail; ?></a>
				</div>
			</a>
          </div>
          <div class="col-xl-3 col-lg-4 mt-4 p-2" data-aos="fade-up" data-aos-delay="200">
			  <a href="https://api.whatsapp.com/send?phone=<?php echo $ftelp; ?>">
				<div class="info-box"  style="min-height : 200px; border-radius : 10px;">
				  <i class="bx bx-phone-call" style="background : <?php echo $fcolor_title; ?>;"></i>
				  <h3 style="color : <?php echo $fcolor_title; ?>; text-shadow : 1px 1px #333;">Call Us</h3>
				  <a style="color : <?php echo $fcolor_font; ?>"><?php echo $fphone; ?></a>
				</div>
			  </a>
          </div>
		  
		  
		  
        </div>
		
		<hr/>
	<div class="map-section">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15863.746952342643!2d106.9361504!3d-6.2720496!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x517d21c66ac1085!2sSAMA%20SAMA%20KREASI!5e0!3m2!1sid!2sid!4v1623918632194!5m2!1sid!2sid" style="border:0; width: 100%; height: 350px;" allowfullscreen="" loading="lazy"></iframe>
	</div>
		


      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<?php include('includes/footer.php'); ?>

<script type="text/javascript">
function showklien(company){
	//alert(company);
	
	
	var query_parameter = company;
			var dataString = 'parameter=' + query_parameter;
			//alert(dataString);
			$.ajax({
			type: "POST",
			url: "exec_show_klien.php",
			cache: false,
			data: dataString,
			success: function(html) {
				var myStr = html;
				var strArray = myStr.split("-;-");
				//alert(strArray[7]);
				document.getElementById("showklien").innerHTML = strArray[1];
				
				}
			});
	
}	



</script>