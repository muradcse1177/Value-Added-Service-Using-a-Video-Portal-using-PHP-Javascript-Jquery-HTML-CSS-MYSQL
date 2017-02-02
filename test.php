

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-2360655384036283",
		enable_page_level_ads: true
	  });
	</script>

	<title>Home | WAP</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	 
	<link href="mainwap.css" rel="stylesheet" type="text/css" media="screen">
	<style>
		ul.pagination {
			display: inline-block;
		}
		div.center {text-align: center;}
		
		#search-box {
		position: relative;
		width: 100%;
		}

		#search-form 
		{
		height: 30px;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
		background-color: #fff;
		overflow: hidden;
		}

		#search-text 
		{
		font-size: 14px;
		color: #ddd;
		border-width: 0;
		background: transparent;

		}

		#search-box input[type="text"]
		{
		width: 90%;
		padding: 8px ;
		color: #333;
		outline: none;
		}

		#search-button {
		position: absolute;
		top: 0;
		right: 0;
		height: 30px;
		width: 80px;
		font-size: 14px;
		color: #fff;
		text-align: center;
		border-width: 0;
		background-color:#cb0003;
		-webkit-border-radius: 0px 5px 5px 0px;
		-moz-border-radius: 0px 5px 5px 0px;
		border-radius: 0px 5px 5px 0px;
		cursor: pointer;
		}
	</style>
<!--	<link rel="icon" type="image/ico" href="http://wap.chl-bd.com/images/favicon.ico">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  -->
</head>

<body oncontextmenu="return true">
<!-- banner image
<table class="index_table" border="0" width="100%">
  <tbody>
	<tr>
		<td align="center" > 
			
		</td>       
	</tr>
  </tbody>
</table>		
-->
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jssor.slider.mini.js"></script>
<script type="text/javascript" src="js/slide.js"></script>	
<link rel="stylesheet" href="css/jssor_slide.css" type="text/css">
<?php include 'slide.php';?>	
 <!--Menu buttons-->
<p style="margin-top:-2px;"></p>

	<table class="index_table" border="1" width="100%" style="background-color: ">
		<tbody>
		   <tr>
				<td width="33%" height="30" align="center"  bgcolor="#fe1a00">
					<a href="http://wap.chl-bd.com/" class="myButton-group-justified">Subscription based</a>
				</td>				
				<td width="33%" height="30" align="center" bgcolor="#ffffff">
					<a href="http://wap.chl-bd.com/ondemand" class="myButton-group-justified">Pay & Download</a>
				</td>		
				<td width="33%" height="30" align="center" bgcolor="#ffffff">
					<a href="http://wap.chl-bd.com/gp_myaccount" class="myButton-group-justified">My Account</a>
				</td>	
		   </tr>   
		</tbody>
	 </table>
	 <p style="margin-top:2px;"></p>
<!--Marqueue Text-->
<table  width="100%" align="center" bgcolor="#000000" background="#">
 <tr>
  <td width="100%" align="center" height=30><a href="#"><font style="font-family:Amarante;font-size:16px;font-weight:lighter;color:#fe1a00;">
	<marquee>Subscription charge TK. 2.44/day(autorenew) with daily 2 FREE downloads and after daily 2 free download charge will be Tk 2.44 for every next downloads. For Pay & Download each content price is 2.44 Tk and no daily subscription fee.</marquee></font></a></td>  
 </tr> 
</table>
<!--End of Marqueue Text-->
<p style="margin-top:-10px;"></p>

<p style="margin-top:-10px;"></p><br>
<div id='search-box'>
<form action='search_item.php' id='search-form' method='get' target='_top'>
<input id='search-text' name='content' placeholder='Search' value="<?php if(isset($_GET['content'])) echo $search;?>" type='text'/>
<button id='search-button' type='submit'>                     
<span><img src="search.png" alt="Smiley face" height="20" width="20"></span>
</button>
</form>
</div><br>
<!--<table border="0" width="100%" style="background-color: ">
	<tbody>
	   <tr>
			<td width="90%" height="30" align="right">
				<input type="text" name="txtsearch" id="txtsearch" size="30px"  placeholder="Search here">
			</td>
			<td width="10%" height="30" align="center">
				<button class="myButton" id="btnsearch" onclick="search_content();">Search</button>
			</td>
	   </tr>   
	   <tr>
			<td width="100%" height="100%" align="center">
				<img id="ajax-loader" src="/http://wap.chl-bd.com/images/ajax-loading.gif" style="display:none"/>
			</td>
	   </tr>
	</tbody>-->
 </table>
 <div id="search-result">

 </div><table class="special_links" width="100%">
	<tbody>
		<tr>
			<td class="titlebar" width="100%">			
				<a href="http://wap.chl-bd.com/TopDownloads.php">Top Downloads </a>
			</td>
		</tr>
	</tbody>
</table> 


<p class="white_spacer_divider"></p><br/>
<table border="0" width="100%">
	<tbody>
	   <tr>
			<td width="30%" align="center">
				<a href="#"><img src="http://wap.chl-bd.com/demo/Wallpaper/Celebrity/129e0da6d22b11d8e6899d1f91e9bf.jpg" width="95" height="95"></a>
				<p>Wallpapers</p>	
						
									<form action="download_gp.php" method="GET">										
						<input name="MSISDN"  type="hidden"  value="8801755680869">
						<input name="category"  type="hidden"  value="wallpaper">
						<input name="ContentId"  type="hidden"  value="129e0da6d22b11d8e6899d1f91e9bf">
						<input name="download"  type="submit"  class="myButton" role="button" value="Download">
					</form>
									<br/>
			</td>
			<td width="30%" align="center">
				<a href="#"><img src="http://wap.chl-bd.com/demo/Animation/Flower/a92fa4ef0ca039c28f661ad93571b8.gif" width="95" height="95"></a>			
				<p>Animations</p>	
									<form action="download_gp.php" method="GET">										
						<input name="MSISDN"  type="hidden"  value="8801755680869"> <input name="category"  type="hidden"  value="animation">
						<input name="ContentId"  type="hidden"  value="a92fa4ef0ca039c28f661ad93571b8">
						<input name="download"  type="submit"  class="myButton" role="button" value="Download">
					</form>
									<br/>
			</td>
			<td width="30%" align="center">
				<a href="#"><img src="http://wap.chl-bd.com/demo/Video/Bangla Funny Video/431526224e863c3c9d0315b0c230a5.gif" width="95" height="95"></a>
				<p>Videos</p>				
									<form action="download_gp.php" method="GET">										
						<input name="MSISDN"  type="hidden"  value="8801755680869"> <input name="category"  type="hidden"  value="video">
						<input name="ContentId"  type="hidden"  value="431526224e863c3c9d0315b0c230a5">
						<input name="download"  type="submit"  class="myButton" role="button" value="Download">
					</form>
									<br/>
			</td>			
	   </tr>
	   <tr>
			<td width="30%" align="center">
				<a href="#"><img src="http://wap.chl-bd.com/demo/games/Action/0e261f16bed76a634fb2a7f729ca24.png" width="95" height="95"></a>				
				<p>Games & Apps</p>				
									<form action="download_gp.php" method="GET">										
						<input name="MSISDN"  type="hidden"  value="8801755680869"> <input name="category"  type="hidden"  value="games">
						<input name="ContentId"  type="hidden"  value="0e261f16bed76a634fb2a7f729ca24">
						<input name="download"  type="submit"  class="myButton" role="button" value="Download">
					</form>
									<br/>
			</td>
			<td width="30%" align="center">
				<a href="#"><img src="http://wap.chl-bd.com/demo/Music/Bangla Hot Song/6bead993899e75bc96a99fc4a947f3.jpg" width="95" height="95"></a>
				<p>Music</p>				
									<form action="download_gp.php" method="GET">										
						<input name="MSISDN"  type="hidden"  value="8801755680869"> <input name="category"  type="hidden"  value="music">
						<input name="ContentId"  type="hidden"  value="6bead993899e75bc96a99fc4a947f3">
						<input name="download"  type="submit"  class="myButton" role="button" value="Download">
					</form>
									<br/>
			</td>
			<td width="30%" align="center">
				<a href="#"><img src="http://wap.chl-bd.com/demo/Ringtone/Remix/dc12607ca86408682f463ee95b4f17.jpg" width="95" height="95"></a>
				<p>Ringtones</p>				
									<form action="download_gp.php" method="GET">										
						<input name="MSISDN"  type="hidden"  value="8801755680869"> <input name="category"  type="hidden"  value="ringtone">
						<input name="ContentId"  type="hidden"  value="dc12607ca86408682f463ee95b4f17">
						<input name="download"  type="submit"  class="myButton" role="button" value="Download">
					</form>
									<br/>				
			</td>							
	  </tr>
		<tr>
			<td colspan="3" align="right"> 
				<a href="http://wap.chl-bd.com/TopDownloads">  More...»</a>
			</td>
		</tr>
	  
	</tbody>
 </table><br/>
<p class="white_spacer_divider"></p>

 <table class="special_links" width="100%">
	<tbody>
		<tr>
			<td class="titlebar">			
				<a href="http://wap.chl-bd.com/RecentlyAdded.php">Recently Added</a>
			</td>
		</tr>
	</tbody>
</table> 
<br/>
<p class="white_spacer_divider"></p>
<table border="0" width="100%">
	<tbody>
	   <tr>
			<td width="30%" align="center">
				<a href="#"><img src="http://wap.chl-bd.com/demo/Wallpaper/Happy New Year/9fecfb97ecea7185d6108586e78e9f.jpeg" width="95" height="95"></a>
				<p>Wallpapers</p>					
									<form action="download_gp.php" method="GET">										
						<input name="MSISDN"  type="hidden"  value="8801755680869"> <input name="category"  type="hidden"  value="wallpaper">
						<input name="ContentId"  type="hidden"  value="9fecfb97ecea7185d6108586e78e9f">
						<input name="download"  type="submit"  class="myButton" role="button" value="Download">
					</form>
									<br/>
			</td>
			<td width="30%" align="center">
				<a href="#"><img src="http://wap.chl-bd.com/demo/Animation/New Year/65865b45880039ff14d6ceb079e2cd.gif" width="95" height="95"></a>			
				<p>Animations</p>						<form action="download_gp.php" method="GET">										
						<input name="MSISDN"  type="hidden"  value="8801755680869"> <input name="category"  type="hidden"  value="animation">
						<input name="ContentId"  type="hidden"  value="65865b45880039ff14d6ceb079e2cd">
						<input name="download"  type="submit"  class="myButton" role="button" value="Download">
					</form>
									<br/>
			</td>
			<td width="30%" align="center">
				<a href="#"><img src="http://wap.chl-bd.com/demo/Video/Bangla funny Natok/9b535a0ccfeafb4a41a90929a5adbc.gif" width="95" height="95"></a>
				<p>Videos</p>				
									<form action="download_gp.php" method="GET">										
						<input name="MSISDN"  type="hidden"  value="8801755680869"> <input name="category"  type="hidden"  value="video">
						<input name="ContentId"  type="hidden"  value="9b535a0ccfeafb4a41a90929a5adbc">
						<input name="download"  type="submit"  class="myButton" role="button" value="Download">
					</form>
									<br/>
			</td>			
	   </tr>
	   <tr>
			<td width="30%" align="center">
				<a href="#"><img src="http://wap.chl-bd.com/demo/games/Action/0e261f16bed76a634fb2a7f729ca24.png" width="95" height="95"></a>				
				<p>Games & Apps</p>				
									<form action="download_gp.php" method="GET">										
						<input name="MSISDN"  type="hidden"  value="8801755680869"> <input name="category"  type="hidden"  value="games">
						<input name="ContentId"  type="hidden"  value="0e261f16bed76a634fb2a7f729ca24">
						<input name="download"  type="submit"  class="myButton" role="button" value="Download">
					</form>
									<br/>
			</td>
			<td width="30%" align="center">
				<a href="#"><img src="http://wap.chl-bd.com/demo/Music/Bangla Music/ad1024107b2023a5337f336330477c.jpg" width="95" height="95"></a>
				<p>Music</p>				
									<form action="download_gp.php" method="GET">										
						<input name="MSISDN"  type="hidden"  value="8801755680869"> <input name="category"  type="hidden"  value="music">
						<input name="ContentId"  type="hidden"  value="ad1024107b2023a5337f336330477c">
						<input name="download"  type="submit"  class="myButton" role="button" value="Download">
					</form>
									<br/>
			</td>
			<td width="30%" align="center">
				<a href="#"><img src="http://wap.chl-bd.com/demo/Ringtone/Bangla Rington/dfe7bd6df9b1ed5d1432ff77802379.jpg" width="95" height="95"></a>
				<p>Ringtones</p>				
									<form action="download_gp.php" method="GET">										
						<input name="MSISDN"  type="hidden"  value="8801755680869"> <input name="category"  type="hidden"  value="ringtone">
						<input name="ContentId"  type="hidden"  value="dfe7bd6df9b1ed5d1432ff77802379">
						<input name="download"  type="submit"  class="myButton" role="button" value="Download">
					</form>
									<br/>				
			</td>							
	  </tr>
		<tr>
			<td colspan="3" align="right"> 
				<a href="http://wap.chl-bd.com/RecentlyAdded">  More...»</a> 
			</td>
		</tr>
	  
	</tbody>
 </table>
<br/>
<p class="white_spacer_divider"></p> 

<table class="special_links" width="100%">
	<tbody>
		<tr>
			<td class="titlebar">			
				<a href="#">All Category</a>
			</td>
		</tr>
	</tbody>
</table> 
<br/>
<p class="white_spacer_divider"></p>
<table class="index_table" border="0" width="100%">
  <tbody>
   <tr>	
	<td width="30%" align="center"><a href="http://wap.chl-bd.com/wallpaper"><img src="http://wap.chl-bd.com/images/wallpaper-icon.png" alt="Wallpapers"width="95" height="95"><br>Wallpaper</a> <br/><br/></td>        
    <td width="30%" align="center"><a href="http://wap.chl-bd.com/animation"><img src="http://wap.chl-bd.com/images/animation-icon.gif" alt="Animations"width="95" height="95"><br>Animation</a><br/><br/></td>
    <td width="30%" align="center"><a href="http://wap.chl-bd.com/video"><img src="http://wap.chl-bd.com/images/videos-icon.png" alt="Videos"width="95" height="95"><br>Video</a><br/><br/></td>	
   </tr>
	<td width="30%" align="center"><a href="http://wap.chl-bd.com/games"><img src="http://wap.chl-bd.com/images/android-icon.png" alt="Games & Apps"width="95" height="95"><br>Games & Apps</a><br/><br/></td>        
    <td width="30%" align="center"><a href="http://wap.chl-bd.com/music"><img src="http://wap.chl-bd.com/images/music-icon.gif" alt="Music"width="95" height="95"><br>Music</a><br/><br/></td>
    <td width="30%" align="center"><a href="http://wap.chl-bd.com/ringtone"><img src="http://wap.chl-bd.com/images/ringtone-icon.png" alt="Ringtones"width="95" height="95"><br>Ringtone</a><br/><br/></td>	
 </tbody></table>
 

<!-- footer -->

<hr style="border: 1px solid #f00" />​
<h3 align="center"><a href="index" style="color:white; font-size:12px">Home</a> | <a href="faq" style="color:white; font-size:12px">FAQ</a> | <a href=""></a></h3>

<br/>
<p align="center"> <b>To Unsubscribe send STOP WP to 16437</b></p>
<hr style="border: 1px solid #f00" />​
<p align="center"> <b>© Content House 2016 - All rights reserved.</b></p>

<hr style="border: 1px solid #f00" />​

<script>
function search_content() {
	document.getElementById('ajax-loader').style.display = 'block';
   var txt = document.getElementById("txtsearch").value;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById('ajax-loader').style.display = 'none';
			document.getElementById("search-result").innerHTML = this.responseText;
		}
	};
	xmlhttp.open("GET","ajax/search_content.php?page=/index.php&txt="+txt,true);
	xmlhttp.send();
}
</script>	   
</body>
</html>

<!--Detect visitor's device and save to visitor counter-->
<script type="text/javascript" src="//wurfl.io/wurfl.js"></script>
<script type="text/javascript">
	var device = WURFL.form_factor + " | " + WURFL.complete_device_name;
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			;
			//document.getElementById("txtHint").innerHTML = this.responseText;
		}
	};
	xmlhttp.open("GET","ajax/savevisitorinfo.php?device="+device+"&msisdn=8801755680869&ip=182.160.118.50&page=/",true);
	xmlhttp.send();
</script>