<?php
if(!empty($_POST["id"])){

    // Include the database configuration file
	require_once dirname (__FILE__) . "/config/connection.php";
    
    // Count all records except already displayed
	$queryku = mysqli_query($con, "select COUNT(*) as num_rows from tb_galery  ORDER BY fid DESC");
	while($queryku2=mysqli_fetch_array($queryku))
			{			
				$num_rows = $queryku2['num_rows'];
			}
			$totalRowCount  = mysqli_num_rows($queryku);
			
	 $showLimit = 6;		

    // Get records from the database
	$queryku = mysqli_query($con, "select * from tb_galery ORDER BY fid DESC LIMIT 24");
	$row = mysqli_num_rows($queryku);
			if($row > 0){
			
			while($queryku2=mysqli_fetch_array($queryku))
			{			
				$fid = $queryku2['fid'];
				$fname = $queryku2['fname'];
				$fimg = $queryku2['fimg'];

    ?>
          <div class="col-lg-2 col-md-3 portfolio-item filter-app gallery-img list_item">
            <img src="assets/img/portfolio/<?php echo $fimg; ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?php echo $fname; ?></h4>
              <p><?php echo $fname; ?></p>
              <a href="assets/img/portfolio/<?php echo $fimg; ?>" data-gall="portfolioGallery" class="venobox preview-link" title="<?php echo $fname; ?>"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
    <?php } ?>
    <?php if($totalRowCount > $showLimit){ ?>
        <div class="show_more_main" id="show_more_main<?php echo $fid; ?>">
            <span id="<?php echo $fid; ?>" class="show_more" title="Load more posts">Show more</span>
            <span class="loding" style="display: none;"><span class="loding_txt">Loading...</span></span>
        </div>
    <?php } ?>
<?php
    }
}
?>