<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Role</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

<!-- Navbar -->
<?php include 'includes/navbar.php'; ?>

<!-- Main container -->
<div class="flex">
    <!-- Sidebar -->
    <?php include 'includes/sidebar.php'; ?>

    <!-- Main Content -->
    <div class="flex-1 p-8">
        <div class="container mx-auto">
            <!-- Button to Insert New Role -->
            <div class="mb-4">
                <a href="views/role_input.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Insert New Role
                </a>
            </div>

            <!-- Roles Table -->
            <div class="bg-white shadow-md rounded my-6 overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/12 py-4 px-6 uppercase font-semibold text-sm text-left">Role ID</th>
                            <th class="w-1/4 py-4 px-6 uppercase font-semibold text-sm text-left">Role Name</th>
                            <th class="w-1/3 py-4 px-6 uppercase font-semibold text-sm text-left">Role Description</th>
                            <th class="w-1/5 py-4 px-6 uppercase font-semibold text-sm text-left">Role Salary</th>
                            <th class="w-1/6 py-4 px-6 uppercase font-semibold text-sm text-left">Role Status</th>
                            <th class="w-1/6 py-4 px-6 uppercase font-semibold text-sm text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <?php foreach ($obj_role as $role) { ?>
                        <tr class="border-b">
                            <td class="py-4 px-6 text-blue-600"><?php echo htmlspecialchars($role->role_id); ?></td>
                            <td class="py-4 px-6"><?php echo htmlspecialchars($role->role_name); ?></td>
                            <td class="py-4 px-6"><?php echo htmlspecialchars($role->role_description); ?></td>
                            <td class="py-4 px-6"><?php echo htmlspecialchars($role->role_salary); ?></td>
                            <td class="py-4 px-6">
                                <?php echo $role->role_status == 1 ? 'Active' : 'Inactive'; ?>
                            </td>
                            <td class="py-4 px-6">
                                <div class="inline-flex space-x-2">
                                    <a href="#" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded">Update</a>
                                    <a href="#" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>
