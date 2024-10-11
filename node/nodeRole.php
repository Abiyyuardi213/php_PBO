<?php

class Role {
    public $role_id;
    public $role_name;
    public $role_description;
    public $role_salary;
    public $role_status;

    function __construct($role_id, $role_name, $role_description, $role_salary, $role_status) {
        $this->role_id = $role_id;
        $this->role_name = $role_name;
        $this->role_description = $role_description;
        $this->role_salary = $role_salary;
        $this->role_status = $role_status;
    }

    public function displayRole() {
        $status = $this->role_status ? 'Active' : 'Inactive';
        return str_pad("Role ID:", 15) . $this->role_id . "\n" .
               str_pad("Name:", 15) . $this->role_name . "\n" .
               str_pad("Description:", 15) . $this->role_description . "\n" .
               str_pad("Salary:", 15) . $this->role_salary . "\n" .
               str_pad("Status:", 15) . $status . "\n";
    }
}

$objekRole1 = new Role(1, "admin", "pengatur", 1000, 1);
$objekRole2 = new Role(2, "head admin", "pengawas", 1500, 1);
$objekRole3 = new Role(3, "kasir", "pelayan", 800, 0);

$roles = [$objekRole1, $objekRole2, $objekRole3];

foreach ($roles as $role) {
    echo nl2br($role->displayRole());
    echo str_repeat("-", 30) . "<br>";
}

?>
