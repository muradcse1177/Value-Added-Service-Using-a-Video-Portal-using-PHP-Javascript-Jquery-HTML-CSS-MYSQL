<!DOCTYPE html>
<html lang="en">


<style type="text/css">
	  .owl-carousel {
	  position: relative;
	  }
	  .owl-prev,
	  .owl-next {
	  position: absolute;
	  top: 35%;
	  margin-top: 0px;
	  }
	  .owl-prev {
	  left: 0;
	  }
	  .owl-next {
	  right: 0;
	  }
</style>
<body>
	<div id="demo">
		<div id="owl-demo111" class="owl-carousel">
		<?php
			//session_start();   
			include("connection.php");
			if(isset($_GET['category'])){
				if(($_GET['category'])=="natok"){
					$sql = "SELECT * FROM contents where remarks != 'banner' and category='natok' order by downloaded desc";
				}
				else if(($_GET['category'])=="movie"){
					$sql = "SELECT * FROM contents where remarks != 'banner' and category='movie' order by downloaded desc";
				}
				else if(($_GET['category'])=="music_video"){
					$sql = "SELECT * FROM contents where remarks != 'banner' and category='music_video' order by downloaded desc";
				}
				else if(($_GET['category'])=="movie_song"){
					$sql = "SELECT * FROM contents where remarks != 'banner' and category='movie_song' order by downloaded desc";
				}	
			}else{
				$sql = "SELECT * FROM contents where remarks != 'banner' order by downloaded desc ";
			}								 
			$result = mysqli_query($connection,$sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					//print_r($row);
					?>
			<ul class="img-list">
				<li>
					<a href="preview.php?id=<?php echo $row['content_id'];?>&name=<?php echo $row['name'];?>&duration=<?php echo $row['duration'];?>&category=<?php echo $row['category'];?>&subcategory=<?php echo $row['subcategory'];?>">
						<div class="item">
							<img class="lazyOwl" data-src="<?php echo $row['preview_link'];?>" />
							<span class="text-content"><span ><?php echo substr($row['name'],0,15)."...";?></span></span>
						</div>
					</a>
				</li>
			</ul>
			<?php
				}
			}
			?>
		</div>
	</div>
	<script src="js/owl.carousel.js"></script>
	<style>
	    #owl-demo111 .item{
        margin: 2px;

    }
    #owl-demo111 .item img{
        display: block;
        width: 100%;
        height: auto;
    }
	</style>
	<script>
		$(document).ready(function() {

			if ($(window).width() > 100 && $(window).width() < 500) {
				// for Tab
				if ($("#owl-demo111 div").length + 1 > 1) {
					$("#owl-demo111").owlCarousel({
						navigation: true,
						autoPlay: true,
						lazyLoad: true,
						items: 5,
						itemsDesktop: [1199, 3],
						itemsDesktopSmall: [979, 3],
						itemsTablet: [600, 3],
						itemsMobile: [400, 2]
					});
				}
			} else

				$("#owl-demo111").owlCarousel({
					navigation: true,
					autoPlay: true,
					lazyLoad: true,
					items: 5,
					itemsDesktop: [1199, 3],
					itemsDesktopSmall: [979, 3],
					itemsTablet: [600, 3],
					itemsMobile: [400, 2]
				});

		});
	</script>
</body>
</html>