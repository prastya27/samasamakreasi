<?php require_once dirname (__FILE__) . "/config/connection.php";

			$queryku = mysqli_query($con, "select * from tb_global where fid = 1");
										while($queryku2=mysqli_fetch_array($queryku))
										{			
											$fbackground = $queryku2['fbackground'];
											$fcolor = $queryku2['fcolor'];
											$fcolor_font = $queryku2['fcolor_font'];
											$fcolor_title = $queryku2['fcolor_title'];
											$fdiv_color = $queryku2['fdiv'];
										}	

$per_page = 12;
if(isset($_GET['page'])) {
	$page=$_GET['page'];
}
$start = ($page-1)*$per_page;

$queryku = mysqli_query($con, "select * from tb_testimonial where fscore > 3 order by fid asc limit $start,$per_page");

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