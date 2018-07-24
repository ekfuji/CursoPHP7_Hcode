<?php 

try {  
   $conn = new PDO( "sqlsrv:Server=(localdb)\mssqllocaldb;Database=dbphp7", NULL, NULL);   
   $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
}  

catch( PDOException $e ) {  
   die( "Error connecting to SQL Server<br/>". $e );   
}  

echo "Connected to SQL Server";  
echo "<br/><br/>";


$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER by deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>". $key .":</strong>" . $value . "<br/>" ;
	}
	echo "==================================================<br/>";
}

 ?>