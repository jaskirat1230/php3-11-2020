<?php
//start a session
@session_start();
//get session's value
$message = $_SESSION["message"];
echo "message".$message;