<?php
$nume=$_POST['nume'];
$prenume=$_POST['parola'];
$xml = simplexml_load_file('data1.xml');
$date=$xml->addChild('date');
$date->addChild('nume', $nume);
$date->addChild('parola', $prenume);
file_put_contents('data1.xml', $xml->asXML());
?>
<a href="pagina2.php">View xml data</a>
<a href="pagina3.php">Login</a>