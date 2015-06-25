<?php  $hs = $_POST['tes']; print_r($hs); ?>
<br/><Br/>
<?php   $ts = json_decode($hs, true); 
print_r($ts);
echo"<br/><br/>";

foreach($ts as $cba){
	echo "<br/>".$cba["Name"]."<br/>";
	echo $cba["Employees"]."<br/>";
	echo $cba["Head Office"]."<br/>";
	
}
?>
