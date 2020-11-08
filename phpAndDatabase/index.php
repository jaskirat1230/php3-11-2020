<?php
//start session
@session_start();
//set values to session variables
$_session ["username"]="Jas";
$_session ["password"]="Singh";
$_session ["color"]="red";
$_session ["address"]="139 Carrington Road";
?>

<html>
<head>
<title>session exercise</title>
</head>

<body>

<ul>
<li><a herf="page1.php">page 1 </a> </li>
<li><a herf="page1.php">page 2 </a> </li>
<li><a herf="page1.php">page 3 </a> </li>
<li><a herf="page1.php">page 4 </a> </li>
<li><a herf="page1.php">page 5 </a> </li>

</ul>
</body>
</html>
