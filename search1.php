<html>
<style>
input{
	border-style: solid;
	border-color: red;
    border-width: 4px;
	height:35px;
	border-radius: 13px 13px 13px 13px;
}
button{
	background-color:#cb0003;
	color:white;
	height:35px;
	border-radius: 13px 13px 13px 13px;
}
</style>

<body>
	<table width="100%">
	<tbody>
	
		<tr>
			<td width="90%">
				<input id='search-text' style="width:100%;" name='content' placeholder='Search' value="" type='text'/>
			</td>
			<td width="10%">
				<button id='search-button' style="width:100%;" type='submit'>Search</button>
			</td>
		</tr>
		</tbody>

	</table>	
<body>
<html>
<script type="text/javascript" src="//wurfl.io/wurfl.js"></script>
<script type="text/javascript">
	var platform = WURFL.form_factor;
	var device = WURFL.complete_device_name;
	if(platform=="Smartphone"){
		 document.getElementById("search-text").style.height = "60px";
		 document.getElementById("search-button").style.height = "60px";		
	}		
</script>