<?php require_once dirname (__FILE__) . "/config/connection.php"; ?>

<?php include('includes/header.php'); ?>

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
   
	<div class="container" data-aos="fade-in">
      <h1 style="color : <?php echo $fcolor_title; ?>; text-shadow: 2px 2px #333;"><?php echo $ftitle; ?></h1>
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

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-xl-4 col-lg-5" data-aos="fade-up">
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
          <h2 style="color : <?php echo $fcolor_title; ?>; text-shadow: 1px 1px #333;" data-aos="fade-up">Tentang Kami</h2>
         </div>
        <div class="row">
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
		    <?php echo $fcontent1; ?>
			<br/><br/>
			<?php echo $fcontent2; ?>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">
	  
		 <div class="section-title">
          <h2 style="color : <?php echo $fcolor_title; ?>; text-shadow: 1px 1px #333;" data-aos="fade-up">Klien Kami</h2>
		  <!--
          <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
		  -->
	   </div>
        <div class="owl-carousel clients-carousel text-center">
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
          <h2 style="color : <?php echo $fcolor_title; ?>; text-shadow: 1px 1px #333;">Servis Kami</h2>
		  <!--
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
		  -->
	   </div>

        <div class="row">
		<?php
			$queryku = mysqli_query($con, "select * from tb_services order by fid desc limit 3");
			while($queryku2=mysqli_fetch_array($queryku))
			{			
				$fimg = $queryku2['fimg'];
				$ftitle = $queryku2['ftitle'];
				$fcontent = $queryku2['fcontent'];
				
				
		?>
          <div class="col-lg-4 col-md-6 gallery-img mb-5" data-aos="fade-up">
            <div class="" style="background : #000; padding : 0 !important;">
			<div class="pt-5 pl-4 pr-4 ">
              <div class="icon">  <img src="assets/img/<?php echo $fimg; ?>" style="max-width : 50px; max-height : 50px;" /></div>
              <h4 class="title" style="color : <?php echo $fcolor_title; ?>;"><?php echo $ftitle; ?></h4>
              <h6 style="color : #ccc !important;"><?php echo $fcontent; ?></h6>
			</div>  
			  <div style="height: 100px; overflow: hidden; background : <?php echo $fdiv_color; ?>;"> 
			  <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
				<path fill="#000" d="M0.00,190 L800.00,0.00 L0.00,0.00 Z"></path>
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
          <h2 data-aos="fade-up" style="color : <?php echo $fcolor_title; ?>; text-shadow: 1px 1px #333;">Galeri</h2>
		  <!--
          <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
		  -->
		</div>



        
			<?php
			$per_pagex = 12;	
			$querykux = mysqli_query($con, "select * from tb_galery ORDER BY fid DESC");
			
			$countx = mysqli_num_rows($querykux);
			$pagesx = ceil($countx/$per_pagex);
				
		?>
		
		<div style="height : min-700px;" id="content_container2"></div>
			<div class="text-center">
				
				<nav aria-label="Page navigation example">
				  <ul class="pagination justify-content-center"  id="paginatex">
					 <li id="1" class="page-item">
					  <a class="page-link">First</a>
					</li>
					<?php		
						for($a=1; $a<=$pagesx; $a++)	{
						echo '<li id="'.$a.'" class="page-item"><a class="page-link">'.$a.'</a></li>';

						}
					?>
					<li id="<?php echo $pagesx; ?>" class="page-item">
					  <a class="page-link">Last</a>
					</li>
				  </ul>
				</nav>
			</div>
		<!--	
		<iframe width="320" height="460" src="https://www.instagram.com/bontot_lah/embed" frameborder="0"></iframe>
		-->
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
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up" style="color : <?php echo $fcolor_title; ?>; text-shadow: 1px 1px #333;">Testimoni</h2>
		  <!--
          <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
		  -->
	   </div>


				<?php
			$per_page = 8;	
			$queryku = mysqli_query($con, "select * from tb_testimonial where fscore > 2 order by fid asc");
			
			$count = mysqli_num_rows($queryku);
			$pages = ceil($count/$per_page);
			
				
		?>



        <div id="content_container" style="height : min-500px;"></div>

		<div class="text-center">
	
			<nav aria-label="Page navigation example">
			  <ul class="pagination justify-content-center"  id="paginate">
				 <li id="1" class="page-item">
				  <a class="page-link">First</a>
				</li>
				<?php		
					for($i=1; $i<=$pages; $i++)	{
					echo '<li id="'.$i.'" class="page-item"><a class="page-link">'.$i.'</a></li>';

					}
				?>
				<li id="<?php echo $pages; ?>" class="page-item">
				  <a class="page-link">Last</a>
				</li>
			  </ul>
			</nav>
		</div>
      </div>
    </section><!-- End Team Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
	<div class="container">
	 <div class="section-title">
          <h2 data-aos="fade-up" style="color : <?php echo $fcolor_title; ?>; text-shadow: 1px 1px #333;">Contact</h2>
		  <!--
          <p data-aos="fade-up" style="color : #ccc; text-shadow : 2px 2px #333;">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
		  -->
		</div>
		
	</div>	 <div class="map-section">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15863.746952342643!2d106.9361504!3d-6.2720496!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x517d21c66ac1085!2sSAMA%20SAMA%20KREASI!5e0!3m2!1sid!2sid!4v1623918632194!5m2!1sid!2sid" style="border:0; width: 100%; height: 350px;" allowfullscreen="" loading="lazy"></iframe>
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

          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
            <div class="info-box"  style="min-height : 200px; border-radius : 10px;">
              <i class="bx bx-map"></i>
              <h3 style="color : <?php echo $fcolor_title; ?>; text-shadow : 1px 1px #333;">Our Address</h3>
              <p style="color : <?php echo $fcolor_font; ?>"><?php echo $faddress; ?><br><?php echo $fcity; ?>, <?php echo $fcountry; ?></p>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
			<a href="#" data-toggle="modal" data-target="#exampleModal2">
				<div  class="info-box"  style="min-height : 200px; border-radius : 10px;">
				  <i class="bx bx-envelope"></i>
				  <h3 style="color : <?php echo $fcolor_title; ?>; text-shadow : 1px 1px #333;">Email Us</h3>
				  <a  style="color : <?php echo $fcolor_font; ?>"><?php echo $femail; ?></a>
				</div>
			</a>
          </div>
          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
			  <a href="https://api.whatsapp.com/send?phone=<?php echo $ftelp; ?>">
				<div class="info-box"  style="min-height : 200px; border-radius : 10px;">
				  <i class="bx bx-phone-call"></i>
				  <h3 style="color : <?php echo $fcolor_title; ?>; text-shadow : 1px 1px #333;">Call Us</h3>
				  <a style="color : <?php echo $fcolor_font; ?>"><?php echo $fphone; ?></a>
				</div>
			  </a>
          </div>
        </div>
		


      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<?php include('includes/footer.php'); ?>

<script type="text/javascript">
$(document).ready(function(){
    $(document).on('click','.show_more',function(){
        var ID = $(this).attr('id');
		//alert(ID);
        $('.show_more').hide();
        $('.loding').show();
        $.ajax({
            type:'POST',
            url:'ajax_more-without-design.php',
            data:'id='+ID,
            success:function(html){
                $('#show_more_main'+ID).remove();
                $('.postList').append(html);
				 $('#portfolio').animate({height:'1300'})
            }
        });
    });
});


$(document).ready(function(){	
	function hideLoading() {
		$("#loading").fadeOut('slow');
	};	
	$("#paginate li:first").css({'color' : '#FF0084', 'border' : 'none'});
	$("#content_container").load("data.php?page=1", hideLoading());
	$("#paginate li").click(function(){		
		$("#paginate li").css({'color' : '#0063DC'});
		$(this).css({'color' : '#FF0084', 'border' : 'none'});
		var page_num = this.id;
		//alert(page_num);
		$("#content_container").load("data.php?page=" + page_num, hideLoading());
	});
});

$(document).ready(function(){	
	function hideLoading() {
		$("#loading").fadeOut('slow');
	};	
	$("#paginatex li:first").css({'color' : '#FF0084', 'border' : 'none'});
	$("#content_container2").load("data1.php?page=1", hideLoading());
	$("#paginatex li").click(function(){		
		$("#paginatex li").css({'color' : '#0063DC'});
		$(this).css({'color' : '#FF0084', 'border' : 'none'});
		var page_num = this.id;
		//alert(page_num);
		$("#content_container2").load("data1.php?page=" + page_num, hideLoading());
	});
});

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