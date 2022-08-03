 <?php
	$host="185.27.134.10";
	$username="epiz_32237546";
	$password="xyDfM1eZgClw7rR";
	$database="epiz_32237546_LifeLine";
	$con =mysqli_connect($host,$username,$password,$database);
	if(!$con){
		echo "Connection Failed";
	}
?>
