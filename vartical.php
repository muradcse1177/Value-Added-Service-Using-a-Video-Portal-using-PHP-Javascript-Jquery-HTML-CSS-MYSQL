
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>   
    <link rel="stylesheet" type="text/css" href="category/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="category/common.css"/>
	<link rel="stylesheet" type="text/css" href="category/alllist.css" />
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/jssor.slider.mini.js"></script>
	<script type="text/javascript" src="js/slide.js"></script>	
	<link rel="stylesheet" href="css/jssor_slide.css" type="text/css">	
</head>	



<body>
<head>
	<style type="text/css">
		body {
			background: #000000 !important;					
			
		}
	</style>
</head>	
<div id="desktop">
	<?php include 'slide.php';?>
	<?php include 'search.php';?>
</div><br><br>	
<!-- author list page -->
<section id="authorList">
 
  <div class="container">
    <div class="authSearchArea">
      <ul class="list-inline list-unstyled text-center">
        <li><h1>Search your favorite category</h1></li>
      </ul>
    </div>
  </div>

  <div class="container">
 
    <ul class="list-inline list-unstyled categoryList">
      <?php
	  include("connection.php");
	  $sql = "SELECT * FROM contents";
	  $result = mysqli_query($connection,$sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
	  ?>
          <li>
            <div class="pFIrstCatCaroItem">
              <a id="image" href="preview.php?id=<?php echo $row['content_id'];?>&name=<?php echo $row['name'];?>&duration=<?php echo $row['duration'];?>&category=<?php echo $row['category'];?>&subcategory=<?php echo $row['subcategory'];?>">					
                <div class="bookSubject text-center">                 
                    <img src="<?php echo $row['preview_link'];?>" >
                  <div class="text-center bookSubjectCaption"><h2><?php echo substr($row['name'],0,15)."...";?></h2></div>
                </div>
              </a>
            </div>
          </li>
      <?php
				}
			}
			?>    
  </ul>
    <div class="text-center">   
      <div class="text-center">
		<div class="pagination">
			<span class="disabled">« previous</span>
			<span class="current">1</span>
			<a href="">2</a>
			<a href="">next »</a>
		</div>
      </div>
    </div>
  </div>
</section>

<div id="footer">
<footer style=" background-color:#cb0003; height:8%;width:100%; ">
<h5 style="color:black; text-align:center; padding-top:15px;"> Copyright © Video channel.mobi</h5>
</footer>
</div>
<!-- /footer -->
</body>
</html>
<script type="text/javascript" src="//wurfl.io/wurfl.js"></script>
<script type="text/javascript">
	var platform = WURFL.form_factor;
	var device = WURFL.complete_device_name;
	if(platform=="Smartphone"){
		 document.getElementById("desktop").style.width = "auto";
		 document.getElementById("desktop").style.marginLeft = '0';
		 //document.getElementById("image").style.width = "120%";
         document.getElementById("table").style.display = 'block';
		 document.getElementById("tabl").style.display = 'none';			 
	}
	else{
		 document.getElementById("desktop").style.marginLeft = '10%';
		 document.getElementById("desktop").style.marginRight = '10%';;
		 document.getElementById("footer").style.marginLeft = '10%';
		 document.getElementById("footer").style.marginRight = '10%';
		 document.getElementById("table").style.display = 'none';
		 document.getElementById("nav").style.marginLeft = '10%';
		 document.getElementById("nav").style.marginRight = '10%';	
	}	
</script>