<?php
include 'connection.php';
if(strpos($_SERVER['REQUEST_URI'],"status=1")){
	$sql = "INSERT INTO gpsubscription (msisdn,flag,status,sub_time)VALUES('$msisdn','2','Subscribed',NOW())";	
}
if(isset($_GET['play'])) {
	$msisdn="8801715185988";
	$sql = "SELECT status, flag FROM gpsubscription where msisdn = '$msisdn' order by id desc limit 1";	
	$content_id=$_GET['id'];
	$name=$_GET['name'];	
	$duration=$_GET['duration'];
	$category=$_GET['category'];
	$subcategory=$_GET['subcategory'];	
	$result = mysqli_query($connection,$sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc() ;
		$status = $row['status'];		
		$flag = $row['flag'];
		if($status  ="Subscribed" and $flag > 0){			
			$sql = "INSERT INTO downloaded (msisdn,category,subcategory,name,content_id)VALUES('$msisdn','$category','$subcategory','$name','$content_id')";
			mysqli_query($connection,$sql);	
			$sql = "UPDATE contents SET downloaded= (downloaded+1) WHERE category='$category' and content_id='$content_id'";
			mysqli_query($connection,$sql);
			$sql="SELECT count(*) from downloaded where msisdn = '$msisdn' and content_id='$content_id' and date(time) = CURDATE()";
			$result = mysqli_query($connection,$sql);
			if ($result->num_rows > 0) {
				$sql = "UPDATE gpsubscription SET flag = (flag-1) WHERE msisdn = '$msisdn'";
				mysqli_query($connection,$sql);				
			}
			$confirmation=1;
			header("Location: player.php?content_id=$content_id&name=$name&category=$category&subcategory=$subcategory&confirmation=$confirmation&duration=$duration");

		}
		else if($status  ="Subscribed" and $flag < 1 ){
			echo "sent charge request";
			if(true){
				echo"Permission granted";
			}
			else{
				echo"Not enough balance";
			}
	  }
	  else{
		  header('Location: gp_page.php');
	  }
	}else{
		$url = urlencode( "192.168.0.104".$_SERVER['REQUEST_URI'] );
		header('Location: gp_page.php?CpUrl='.$url);
	}
}
else if(isset($_GET['download'])) {
	$msisdn="8801715185988";
	$sql = "SELECT status, flag FROM gpsubscription where msisdn = '$msisdn' order by id desc limit 1";
	$id=$_GET['id'];
	$name=$_GET['name'];	
	$duration=$_GET['duration'];
	$category=$_GET['category'];
	$subcategory=$_GET['subcategory'];	
	$result = mysqli_query($connection,$sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc() ;
		$status = $row['status'];		
		$flag = $row['flag'];
		echo $flag;
		if($status  ="Subscribed" and $flag > 0){
			$sql = "INSERT INTO downloaded (msisdn,category,subcategory,name,content_id)VALUES('$msisdn','$category','$subcategory','$name','$content_id')";
			mysqli_query($connection,$sql);	
			$sql = "UPDATE contents SET downloaded= (downloaded+1) WHERE category='$category' and content_id='$content_id'";
			mysqli_query($connection,$sql);
			$sql="SELECT count(*) from downloaded where msisdn = '$msisdn' and content_id='$content_id' and date(time) = CURDATE()";
			$result = mysqli_query($connection,$sql);
			if ($result->num_rows > 0) {
				$sql = "UPDATE gpsubscription SET flag = (flag-1) WHERE msisdn = '$msisdn'";
				mysqli_query($connection,$sql);				
			}
			header('Location: http:download.apk');
		}
		else if($status  ="Subscribed" and $flag < 1 ){
			echo "sent charge request";
			if(true){
				echo"Permission granted";
			}
			else{
				echo"Not enough balance";
			}
	  }
	  else{
		  header('Location: gp_page.php');
	  }
	}else{
		$url = urlencode( "192.168.0.104".$_SERVER['REQUEST_URI'] );
		header('Location: gp_page.php?CpUrl='.$url);
	}
}
?>