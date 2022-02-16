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

$queryku = mysqli_query($con, "select * from tb_galery order by fid asc limit $start,$per_page");

?>
<div class="row">
	<?php
	while($queryku2=mysqli_fetch_array($queryku))
			{			
				$fid = $queryku2['fid'];
				$fname = $queryku2['fname'];
				$fimg = $queryku2['fimg'];
	
	?>	
	
          <div class="col-lg-2 col-md-3 portfolio-item filter-app gallery-img list_item">
			<a href="assets/img/portfolio/<?php echo $fimg; ?>" data-gall="portfolioGallery" class="venobox preview-link">
            <img src="assets/img/portfolio/<?php echo $fimg; ?>" class="img-fluid" alt="">
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