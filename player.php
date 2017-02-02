<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $_GET['name'];?> | Video channel</title>
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
			p {
					text-align: center;
					color:white;
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
	<?php
//session_start();						
	include("connection.php");
	if($_GET['confirmation']==1){
		$content_id=$_GET['content_id'];
		$msisdn="8801715185988";	
		$name=$_GET['name'];	
		$category=$_GET['category'];
		$subcategory=$_GET['subcategory'];	
		$confirmation=5;
		
	}
	else{
		header("Lcation: index.php");
	}
	?>

	<!doctype html>
	<html lang="en">
	<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	  <title>player | video Channel</title>
	  <meta name="author" content="Jake Rocheleau">
	  <link rel="stylesheet" type="text/css" href="style.css">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="HandheldFriendly" content="true">
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	  <script type="text/javascript" src="http://api.html5media.info/1.1.5/html5media.min.js"></script>
	</head>
	<style>
	video::-internal-media-controls-download-button {
		display:none;
	}
	video::-webkit-media-controls-enclosure {
		overflow:hidden;
	}

	video::-webkit-media-controls-panel {
		width: calc(100% + 30px); /* Adjust as needed */
	}
	html { height: 101%; }
	body { background: black ;}
	video { max-width: 100%; height: auto; }
	h1 { font-family: "Calisto MT", Georgia, serif; font-size: 20px; margin-bottom: 1px; color: white;  }
	#wrapper { 
		display: block; 
		max-width: 800px; 
		margin: 0 auto; 
		background: black; 
		text-align: center;
	}
	video.loading {
	  background: black url(/css/spin.gif) center center no-repeat;
	}
	</style>
	<body>
		<?php
		if($confirmation==5){
			$sql = "SELECT file_link FROM contents where content_id='$content_id'";					
			$result = mysqli_query($connection,$sql);
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc(); 
			}
		}
		$play=" is Playing Now"
		?>
		<div id="wrapper">			
			<video id="asdf"  width="640" height="480" controls autoplay >
			 <source src="<?php echo $row['file_link'];?>" type="video/mp4"></source>
			</video>
		</div>
		<?php
		?>
	<script type="text/javascript">
	$(document).ready(function(){
		$("video").on("click", function(){
			if(this.paused == true) {
				this.play();
			} else {
				this.pause();
			}
		}); 
		
		$("html").on("keydown", function(e){
			var kcode = (e.keyCode ? e.keyCode : e.which);
			var viddy = $("video")[0];
			
			if(kcode == 32) {
				e.preventDefault();
				
				if(viddy.paused == true) {
					viddy.play();
				} else {
					viddy.pause();
				}
			} 
		});
	});
	
	 $('#asdf').on('loadstart', function (event) {
		$(this).addClass('loading');
	  });
	  $('#asdf').on('canplay', function (event) {
		$(this).removeClass('loading');
		$(this).attr('poster', '');
	  });
		
	</script>
	</body>
	</html>


	<script src="js/owl.carousel.js"></script>
	<div id="desktop">
	<p style="text-align:left">Name:<?php echo $_GET['name'];?></p>
	<p style="text-align:left">Duration:<?php echo $_GET['duration'];?></p>
	<p style="text-align:left">Catagory:<?php echo $_GET['category'];?></p>	
	<div id="play" class="col-sm-12">
	 <h4 style="color:black; text-align:center; padding-top:3px;">Recomended Videos</a></h4>
	</div><br>
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/owl.theme.css" rel="stylesheet">
	<?php include 'owl_button.php';?>
	<?php include 'recomended.php';?>
	<div id="tabl" class="image" style=""style="text-align:center;">
			<div id="play" class="col-sm-12" >
			 <h4 style="color:black; text-align:center; padding-top:3px;">All Categorey</h4>
			</div><br>
			 <a href="all_natok.php?category=<?php echo"natok";?>"><img src="3.PNG" alt=""/></a> 
			 <a href="all_movies.php?category=<?php echo"movie";?>"><img src="4.PNG" alt=""/></a>
			 <a href="all_music_video.php?category=<?php echo"music_video";?>"><img src="1.png" alt=""/></a>
			 <a href="all_movie_song.php?category=<?php echo"movie_song";?>"><img src="2.png" alt=""/></a>
			</div>			
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
		document.getElementById("desktop").style.marginLeft = '20%';
		document.getElementById("desktop").style.marginRight = '20%';
		document.getElementById("table").style.display = 'none';		
	}	
</script>
