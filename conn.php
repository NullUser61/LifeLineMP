 <?php
	$server="sql104.epizy.com";
	$username="epiz_32237546";
	$password="xyDfM1eZgClw7rR";
	$database="epiz_32237546_LifeLine";
	$con =mysqli_connect($server,$username,$password,$database);
	if(!$con){
		echo "Connection Failed";
	}
?>