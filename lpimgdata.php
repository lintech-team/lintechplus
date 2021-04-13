<?php
$con=mysqli_connect("localhost","id6424970_hirenpithwa","hiren6024","id6424970_hiren");

$sql="SELECT * FROM `laptop";
$result=mysqli_query($con,$sql);

$data=array();
while($row=mysqli_fetch_assoc($result)){
$data[]=$row;

}



	
	header('Content-Type:Application/json');
			
	echo json_encode($data);
	
	
	?>
