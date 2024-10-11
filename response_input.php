<?php

echo "Ini adalah file testing response input";
echo "<br>";
echo "modul = ".$_GET['modul']."<br>";
echo "fitur = ".$_GET['fitur']."<br>";
echo "request method :".$_SERVER['REQUEST_METHOD']."<br>";
print_r($_POST);

?>