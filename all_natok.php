
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
			 <h4 style="color:black; text-align:center; padding-top:3px;">Latest Natok </a></h4>
			</div><br>
			<?php include 'latest.php';?>			
			<div id="play" class="col-sm-12">
			 <h4 style="color:black; text-align:center; padding-top:3px;">Popular Natok </a></h4>
			</div><br>			
			<?php include 'popular.php';?>
			<link href="css/owl.carousel.css" rel="stylesheet">
			<link href="css/owl.theme.css" rel="stylesheet">
			<div id="play" class="col-sm-12">
			 <h4 style="color:black; text-align:center; padding-top:3px;">Exclusive Natok</a></h4>
			</div><br>				
			<?php include 'exclusive.php';?>
			<div id="play" class="col-sm-12">
			 <h4 style="color:black; text-align:center; padding-top:3px;">All Natok</a></h4>
			</div><br>					
			<?php include 'natok.php';?>						
			<div id="table">
			<div id="play" class="col-sm-12" >
			 <h4 style="color:black; text-align:center; padding-top:3px;">All Categorey</h4>
			</div><br>
				<table style="width:100%; text-align:center;">
					<tr>
						<td>
							<a href="all_natok.php?category=<?php echo"natok";?>"><img src="3.PNG" alt=""/></a> 
						</td>
						<td>
							<a href="all_movies.php?category=<?php echo"movie";?>"><img src="4.PNG" alt=""/></a>
						</td>
					</tr>
					<tr><td><br/></td></tr>
					<tr>
						<td>
							<a href="all_music_video.php?category=<?php echo"music_video";?>"><img src="1.png" alt=""/></a>
						</td>
						<td>
							<a href="all_movie_song.php?category=<?php echo"movie_song";?>"><img src="2.png" alt=""/></a>
						</td>
					</tr>
				</table>
			</div>	
			
			<footer style=" background-color:#cb0003; height:8%;width:100%; ">
				<h5 style="color:black; text-align:center; padding-top:15px;"> Copyright © Video channel.mobi</h5>
			</footer>
		</div>	
	</body>
</html>
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
	}	
</script>