<!DOCTYPE html>
<html lang="en">

<body>
	<div id="demo">
		<div id="owl-demo119" class="owl-carousel">
		 <?php
			//session_start();   
			include("connection.php");
			$sql = "SELECT * FROM contents where category='natok'";					 
			$result = mysqli_query($connection,$sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					//print_r($row);
					?>
			<ul class="img-list">
				<li>
					<a href="preview.php?id=<?php echo $row['content_id'];?>&name=<?php echo $row['name'];?>&duration=<?php echo $row['duration'];?>&category=<?php echo $row['category'];?>&subcategory=<?php echo $row['subcategory'];?>">
						<div class="item">
								<iframe width="853" height="480" src="https://www.youtube.com/embed/z9Ul9ccDOqE" frameborder="0"  allowfullscreen="true" allowScriptAccess="always"  ></iframe>						
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
	    #owl-demo119 .item{
        margin: 2px;

    }
    #owl-demo119 .item iframe{
        display: block;
        width: 100%;
        height: auto;
    }
	</style>
<script>
		$(document).ready(function() {

			if ($(window).width() > 100 && $(window).width() < 500) {
				// for Tab
				if ($("#owl-demo119 div").length + 1 > 1) {
					$("#owl-demo119").owlCarousel({
						navigation: true,
						autoPlay: false,
						lazyLoad: true,
						items: 5,
						itemsDesktop: [1199, 3],
						itemsDesktopSmall: [979, 3],
						itemsTablet: [600, 3],
						itemsMobile: [400, 2]
					});
				}
			} else

				$("#owl-demo119").owlCarousel({
					navigation: true,
					autoPlay: false,
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