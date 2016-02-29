<?php 
	
	$conn = mysql_connect("localhost","root","root");
	
	mysql_select_db('mitul_demo');	
	
        $sql = 'SELECT name, pass FROM student';
     
	$retval = mysql_query($sql , $conn);
	
	if(! $retval ) {
        die('Could not get data: ' . mysql_error());
  	   }
   
  	while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
        echo "NAME :{$row['name']}  <br> ".
        "PASSWORD : {$row['pass']} <br> ".
        "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>

