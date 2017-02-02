<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Home | Video channel</title>
    <!-- Bootstrap core CSS -->	
    <link rel="stylesheet" href="css/ie10-viewport-bug-workaround.css" type="text/css" media="all">
    <script type="text/javascript" src="js/ie-emulation-modes-warning.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
	 <script type="text/javascript" src="js/bootstrap-hover-dropdown.min.js"></script>
	<link rel="stylesheet" href="css/ul.img_list.css" type="text/css">
</head>
	<body>
		<head>
			<style type="text/css">
				body {
					background: #000000 !important;					
					
				}
				div {
					text-align: justify;
				}

				.img {
					display: inline-block;
					width: 100px;
					height: 100px;
				}

				div:after {
					content: '';
					display: inline-block;
					width: 100%;
				}
				#play{
					background-color:#cb0003;
					display:block;
					height:4%;
					width:100%;
				}
				table, th, td {
					border: 1px solid black;
					border-collapse: collapse;
				}
				
			</style>
			
		</head>
		
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/jssor.slider.mini.js"></script>
		<script type="text/javascript" src="js/slide.js"></script>	
		<link rel="stylesheet" href="css/jssor_slide.css" type="text/css">
		<div id="desktop">		  
			<?php include 'slide.php';?>
			<?php include 'search.php';?>			 
			<div id="play" class="col-sm-12">
			 <h4 style="color:black; text-align:center; padding-top:3px;">Search Your Favourite Category<a href=" vartical.php" style="color:black; float: right; padding-top:3px;">More...</a></h4>
			</div><br>
			<?php
			  include("connection.php");
			  $sql = "SELECT * FROM contents where remarks!='banner'";
			  $result = mysqli_query($connection,$sql);
				if ($result->num_rows > 0) {			
				
			?>		
			<table class="imgTable" border="1" width="100%" style="background-color:red ">
				<tbody>
				<?php
				for ($x = 0; $x <= 2; $x++) {
				   ?>
				   <tr>
				   <?php
						while($row = $result->fetch_assoc()) {
					?>
						<td width="25%" height="20" align="center"  bgcolor="black">
							<a href="preview.php?id=<?php echo $row['content_id'];?>&name=<?php echo $row['name'];?>&duration=<?php echo $row['duration'];?>&category=<?php echo $row['category'];?>&subcategory=<?php echo $row['subcategory'];?>">					
								<div class="image">								  
									<img src="<?php echo $row['preview_link'];?>">							  							  
									<div class="imageName">
										<h2><?php echo substr($row['name'],0,15)."...";?></h2>
									</div>
								</div>
							</a>
						</td>
					<?php
					}
					?>	
				   </tr>   
				</tbody>
			 </table>
			 <?php
				}
			}
			 ?>
			<footer style=" background-color:#cb0003; height:8%;width:100%; ">
				<h5 style="color:black; text-align:center; padding-top:15px;"> Copyright © Video channel.mobi</h5>
			</footer>
		</div>	
	</body>
</html>
<script type="text/javascript" src="//wurfl.io/wurfl.js"></script>
<script type="text/javascript">
	var platform = WURFL.form_factor;
	var device = WURFL.complete_device_name;
	if(platform=="Smartphone"){
		 document.getElementById("desktop").style.width = "auto";
		 document.getElementById("desktop").style.marginLeft = '0';
         document.getElementById("table").style.display = 'block';
		 document.getElementById("tabl").style.display = 'none';			 
	}
	else{
		 document.getElementById("desktop").style.marginLeft = '10%';
		 document.getElementById("desktop").style.marginRight = '10%';
		 document.getElementById("table").style.display = 'none';
		 document.getElementById("nav").style.marginLeft = '10%';
		 document.getElementById("nav").style.marginRight = '10%';	
	}	
</script>

  
