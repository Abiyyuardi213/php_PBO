<?php

// echo "Ini adalah file testing response input";
// echo "<br>";
// echo "modul = ".$_GET['modul']."<br>";
// echo "fitur = ".$_GET['fitur']."<br>";
// echo "request method :".$_SERVER['REQUEST_METHOD']."<br>";
// print_r($_POST);
// echo "<br>";
// echo "nama role       : ".$_POST['role_name']."<br>";
// echo "keterangan role : ".$_POST['role_description']."<br>";
// echo "sallary role    : ".$_POST['role_salary']."<br>";
// echo "status role     : ".$_POST['role_status']."<br>";

require_once 'domain_object/node_role.php';
$obj_role = [];
$obj_role[] = new Role(4, "amelya sofia", "teman saya", 350000, 1);
include 'views/role_list.php';

?>