

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Home | WAP</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	 
	<link href="http://wap.chl-bd.com/main_css4.css" rel="stylesheet" type="text/css" media="screen">
	<style>
		ul.pagination {
			display: inline-block;
		}
		div.center {text-align: center;}
	</style>
</head>

<body oncontextmenu="return true">
<style>
#txtsearch{
	border-style: solid;
	border-color: #fe1a00;
	height:30px;
	color:black;
	border-radius: 5px 0px 0px 5px;
	padding-left: 5px;
}
#btnsearch{
	border-style: solid;
	border-color: #fe1a00;
	background-color:#fe1a00;
	color:white;
	height:36px;
	border-radius: 0px 5px 5px 0px;
}
</style>
 <!--Banner image-->
<a href="index"> <img src="http://wap.chl-bd.com/images/6feb6fc2c1a0b247d0c8550f4b8c52.gif" width="100%" height="100%" > </a>
 <!--Menu buttons-->
<p style="margin-top:-2px;"></p>

	<table class="index_table" border="1" width="100%" style="background-color: ">
		<tbody>
		   <tr>
				<td width="33%" height="30" align="center"  bgcolor="">
					<a href="./index" class="myButton-group-justified">Subscription based</a>
				</td>				
				<td width="33%" height="30" align="center" bgcolor="#fe1a00">
					<a href="./ondemand" class="myButton-group-justified">Pay & Download</a>
				</td>		
				<td width="33%" height="30" align="center" bgcolor="#fe1a00">
					<a href="./gp_myaccount" class="myButton-group-justified">My Account</a>
				</td>	
		   </tr>   
		</tbody>
	 </table>
	 <p style="margin-top:2px;"></p>
<!--Marquee text-->
<table width="100%" align="center" bgcolor="#000000" background="#">
    <tr>
        <td width="100%" align="center" height=30>
            <a href="#">
                <font style="font-family:Amarante;font-size:16px;font-weight:lighter;color:#ffffff;">
                    <marquee>Subscription charge TK. 2.44/day(autorenew) with daily 2 FREE downloads and after daily 2 free download charge will be Tk 2.44 for every next downloads. For Pay & Download each content price is 2.44 Tk and no daily subscription fee. To Unsubscribe send STOP WP to 16437</marquee>
                </font>
            </a>
        </td>
    </tr>
</table>
<!--Search box and button-->
<table width="100%">
		<tbody>
	
			<tr>
				<td width="95%">
					<input id='txtsearch' style="width:100%;" name='txtsearch' placeholder='Search' type='text'/>
				</td>
				<td width="5%">
					<button id='btnsearch' style="width:100%;" type='submit' onclick="search_content();">Search</button>
				</td>
			</tr>
		</tbody>

	</table>
	<center>
		<img id="ajax-loader" src="/images/ajax-loading.gif" style="display:none;" />
    <center>
<br/>
<!--Search results-->
 <div id="search-result"> </div>
 
 <script>
document.getElementById("txtsearch")
    .addEventListener("keyup", function(event) {
    event.preventDefault();
    if (event.keyCode == 13) {
        document.getElementById("btnsearch").click();
    }
});
 </script><table class="special_links" width="100%">
	<tbody>
		<tr>
			<td class="titlebar" width="100%">			
				<a href="./TopDownloads.php">Top Downloads</a>
			</td>
		</tr>
	</tbody>
</table> 

<p class="white_spacer_divider"></p><br/>
<table border="0" width="100%">
	<tbody>
	   <tr>
			<td width="30%" align="center">
				<a href="#"><img src="/demo/Wallpaper/promotion/8c07fe5e01bb962a62b6166a3d0795.jpg" width="95" height="95"></a>
				<p>Wallpapers</p>	
						
									<form action="download_gp.php" method="GET">										
						<input name="MSISDN"  type="hidden"  value="8801755680869">
						<input name="category"  type="hidden"  value="wallpaper">
						<input name="ContentId"  type="hidden"  value="8c07fe5e01bb962a62b6166a3d0795">
						<input name="download"  type="submit"  class="myButton" role="button" value="Download">
					</form>
									<br/>
			</td>
			<td width="30%" align="center">
				<a href="#"><img src="/demo/Animation/Flower/a92fa4ef0ca039c28f661ad93571b8.gif" width="95" height="95"></a>			
				<p>Animations</p>	
									<form action="download_gp.php" method="GET">										
						<input name="MSISDN"  type="hidden"  value="8801755680869"> <input name="category"  type="hidden"  value="animation">
						<input name="ContentId"  type="hidden"  value="a92fa4ef0ca039c28f661ad93571b8">
						<input name="download"  type="submit"  class="myButton" role="button" value="Download">
					</form>
									<br/>
			</td>
			<td width="30%" align="center">
				<a href="#"><img src="/demo/Video/Bangla Funny Video/431526224e863c3c9d0315b0c230a5.gif" width="95" height="95"></a>
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
				<a href="#"><img src="/demo/games/Action/0e261f16bed76a634fb2a7f729ca24.png" width="95" height="95"></a>				
				<p>Games & Apps</p>				
									<form action="download_gp.php" method="GET">										
						<input name="MSISDN"  type="hidden"  value="8801755680869"> <input name="category"  type="hidden"  value="games">
						<input name="ContentId"  type="hidden"  value="0e261f16bed76a634fb2a7f729ca24">
						<input name="download"  type="submit"  class="myButton" role="button" value="Download">
					</form>
									<br/>
			</td>
			<td width="30%" align="center">
				<a href="#"><img src="/demo/Music/Bangla Hot Song/6bead993899e75bc96a99fc4a947f3.jpg" width="95" height="95"></a>
				<p>Music</p>				
									<form action="download_gp.php" method="GET">										
						<input name="MSISDN"  type="hidden"  value="8801755680869"> <input name="category"  type="hidden"  value="music">
						<input name="ContentId"  type="hidden"  value="6bead993899e75bc96a99fc4a947f3">
						<input name="download"  type="submit"  class="myButton" role="button" value="Download">
					</form>
									<br/>
			</td>
			<td width="30%" align="center">
				<a href="#"><img src="/demo/Ringtone/Remix/dc12607ca86408682f463ee95b4f17.jpg" width="95" height="95"></a>
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
				<a href="./TopDownloads">  More...»</a>
			</td>
		</tr>
	  
	</tbody>
 </table><br/>
<p class="white_spacer_divider"></p>

 <table class="special_links" width="100%">
	<tbody>
		<tr>
			<td class="titlebar">			
				<a href="./RecentlyAdded.php">Recently Added</a>
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
				<a href="#"><img src="/demo/Wallpaper/Celebrity/4b7139705aa7ca2e9b1e76f70f8695.jpg" width="95" height="95"></a>
				<p>Wallpapers</p>					
									<form action="download_gp.php" method="GET">										
						<input name="MSISDN"  type="hidden"  value="8801755680869"> <input name="category"  type="hidden"  value="wallpaper">
						<input name="ContentId"  type="hidden"  value="4b7139705aa7ca2e9b1e76f70f8695">
						<input name="download"  type="submit"  class="myButton" role="button" value="Download">
					</form>
									<br/>
			</td>
			<td width="30%" align="center">
				<a href="#"><img src="/demo/Animation/New Year/65865b45880039ff14d6ceb079e2cd.gif" width="95" height="95"></a>			
				<p>Animations</p>						<form action="download_gp.php" method="GET">										
						<input name="MSISDN"  type="hidden"  value="8801755680869"> <input name="category"  type="hidden"  value="animation">
						<input name="ContentId"  type="hidden"  value="65865b45880039ff14d6ceb079e2cd">
						<input name="download"  type="submit"  class="myButton" role="button" value="Download">
					</form>
									<br/>
			</td>
			<td width="30%" align="center">
				<a href="#"><img src="/demo/Video/Bangla funny Natok/9b535a0ccfeafb4a41a90929a5adbc.gif" width="95" height="95"></a>
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
				<a href="#"><img src="/demo/games/Action/0e261f16bed76a634fb2a7f729ca24.png" width="95" height="95"></a>				
				<p>Games & Apps</p>				
									<form action="download_gp.php" method="GET">										
						<input name="MSISDN"  type="hidden"  value="8801755680869"> <input name="category"  type="hidden"  value="games">
						<input name="ContentId"  type="hidden"  value="0e261f16bed76a634fb2a7f729ca24">
						<input name="download"  type="submit"  class="myButton" role="button" value="Download">
					</form>
									<br/>
			</td>
			<td width="30%" align="center">
				<a href="#"><img src="/demo/Music/Bangla Music/ad1024107b2023a5337f336330477c.jpg" width="95" height="95"></a>
				<p>Music</p>				
									<form action="download_gp.php" method="GET">										
						<input name="MSISDN"  type="hidden"  value="8801755680869"> <input name="category"  type="hidden"  value="music">
						<input name="ContentId"  type="hidden"  value="ad1024107b2023a5337f336330477c">
						<input name="download"  type="submit"  class="myButton" role="button" value="Download">
					</form>
									<br/>
			</td>
			<td width="30%" align="center">
				<a href="#"><img src="/demo/Ringtone/Bangla Rington/dfe7bd6df9b1ed5d1432ff77802379.jpg" width="95" height="95"></a>
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
				<a href="RecentlyAdded">  More...»</a> 
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
	<td width="30%" align="center"><a href="./wallpaper"><img src="./images/wallpaper-icon.png" alt="Wallpapers"width="95" height="95"><br>Wallpaper</a> <br/><br/></td>        
    <td width="30%" align="center"><a href="./animation"><img src="./images/animation-icon.gif" alt="Animations"width="95" height="95"><br>Animation</a><br/><br/></td>
    <td width="30%" align="center"><a href="./video"><img src="./images/videos-icon.png" alt="Videos"width="95" height="95"><br>Video</a><br/><br/></td>	
   </tr>
	<td width="30%" align="center"><a href="./games"><img src="./images/android-icon.png" alt="Games & Apps"width="95" height="95"><br>Games & Apps</a><br/><br/></td>        
    <td width="30%" align="center"><a href="./music"><img src="./images/music-icon.gif" alt="Music"width="95" height="95"><br>Music</a><br/><br/></td>
    <td width="30%" align="center"><a href="./ringtone"><img src="./images/ringtone-icon.png" alt="Ringtones"width="95" height="95"><br>Ringtone</a><br/><br/></td>	
 </tbody></table>
<!-- footer -->

<br/><br/>
<footer>	
	<p align="center" style="font-size:17px; background-color:grey; font-weight:bold;"><a href="index" style="color:#de1a00;">Home</a> | <a href="faq" style="color:#de1a00;">FAQ</a> | <a href="tel:+8801787659321" style="color:#de1a00;">Helpline</a></p>
	<p style="background-color:grey;"> <b>To stop send STOP WP to 16437</b></p>
	
				<table class="index_table" border="0" width="100%">
				  <tbody>
					<tr>
						<td align="center" > 
							<button class="myButton" style="background-color:black; width:100px;" onMouseOver="this.style.color='#D9ED14'"  onMouseOut="this.style.color='white'" onclick="location.href='gp_unsub_confirm.php?back=/';">STOP</button>
							<button class="myButton" style="background-color:black;  width:100px;" onMouseOver="this.style.color='#D9ED14'"  onMouseOut="this.style.color='white'" onclick="location.href='sms:16437?body=STOP%20WP';">STOP-SMS</button>
							</td>       
					</tr>
				  </tbody>
				</table>
			
					
				<table class="index_table" border="0" width="100%">
				  <tbody>
					<tr>
						<td align="center" > 
							<button class="myButton" style="background-color:black; width:100px; float:left; width:70px; " onMouseOver="this.style.color='#05BD10'"  onMouseOut="this.style.color='white'" onclick="location.href='gp_unsub_confirm.php?back=/';">Home</button>							
							<button class="myButton" style="background-color:black;  width:100px; float:right; width:70px; " onMouseOver="this.style.color='#05BD10'"  onMouseOut="this.style.color='white'" onclick="location.href='sms:16437?body=STOP%20WP';">Back</button>						
							<p > <b>© Content House 2017 - All rights reserved.</b></p>
						</td>       
					</tr>
				  </tbody>
				</table>	
</footer>
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