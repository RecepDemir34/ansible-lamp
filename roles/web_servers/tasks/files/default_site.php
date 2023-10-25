

<?php
/*database connection*/
$host = '192.168.4.18';
$dbname = 'alkacirma';
$username = 'recep@localhost';
$password = 'Recep123-';


$conn = new PDO('mysql:host='.$host.';dbname='.$dbname,$username,$password);

echo "<h2>PHP is Fun!</h2>";
echo "DATABASE BAĞLANTISINI SAĞLADIM <br>";

?>