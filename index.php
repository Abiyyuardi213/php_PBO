<?php

require_once 'domain_object/node_role.php';

$obj_role = [];
$obj_role[] = new Role(1, "kasir", "pelayan", 950000, 1);
$obj_role[] = new Role(2, "admin", "pelayan", 550000, 1);

include 'views/role_list.php';
?>