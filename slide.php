<!DOCTYPE html>
<html>
<body>
<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 600px; overflow: hidden; visibility: hidden;">
		<!-- Loading Screen -->
		<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
			<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
			<div style="position:absolute;display:block;background:url('loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
		</div>

		<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 600px; overflow: hidden;">

			<?php
			//session_start();   
			include("connection.php");
			$remarks="banner";	
			$sql = "SELECT * FROM contents  where remarks='$remarks' order by id desc limit 10";					 
			$result = mysqli_query($connection,$sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					//print_r($row);
					?>
					<div data-p="225.00" style="display: block;">
						<a href="preview.php?id=<?php echo $row['content_id'];?>&name=<?php echo $row['name'];?>&duration=<?php echo $row['duration'];?>&category=<?php echo $row['category'];?>&subcategory=<?php echo $row['subcategory'];?>"><img class="lazy" data-u="image" src="<?php echo $row['preview_link'];?>" width=auto height=auto/></a>
					</div>
					
					<?php
				}
			}
			?>
		</div>
		<!-- Bullet Navigator -->
		<div data-u="navigator" class="jssorb05" style="bottom: 40px; right: 16px; width: 458px; height: 16px; left: 421px;" data-autocenter="1">
		<!-- bullet navigator item prototype -->
		
			<div data-u="prototype" style="width: 16px; height: 16px; position: absolute; left: 0px; top: 0px;" class=""></div>
		</div>
		<!-- Arrow Navigator -->
		<span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>	
		<span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
	</div>
</body>
</html>