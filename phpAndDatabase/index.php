<?php
//start session
@session_start();
//set values to session variables
$_SESSION["username"]="Jas";
$_SESSION["password"]="Singh";
$_SESSION["color"]="red";
$_SESSION["address"]="139 Carrington Road";

if (isset($_POST["message"])) {
    echo "<p>I have a post message in this page </p>";
    //start a session
    @session_start();
    //set session variable
}else{
    echo "<p>please post a message to me</p>";

}
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
<form action="<?php $_server["PHP_SELF"]; ?>" method="post">
    <input name="message" type="text" placeholder="message here">
    <input type="submit" value="post">

</body>
</html>
