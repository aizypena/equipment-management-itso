<?php
function getRoleDisplayName($role) {
    switch ($role) {
        case 'itso_personnel':
            return 'ITSO Personnel';
        case 'associate':
            return 'Associate';
        case 'student':
            return 'Student';
        default:
            return 'Unknown';
    }
}
?>

<div class="p-4 sm:ml-64 font-regular">
    <div class="p-6 bg-gray-100 dark:bg-gray-900 rounded-lg shadow-lg">
        <!-- Page Title -->
        <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-6">Users</h1>

        <!-- User Type Selector -->
        <div class="mb-6 flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-4">
            <div class="w-full sm:w-auto">
                <label for="userType" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Select User Type:
                </label>
                <select id="userType" name="userType"
                    class="block w-full sm:w-64 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:text-white dark:border-gray-700">
                    <option value="associate">Associates</option>
                    <option value="itso_personnel">ITSO Personnel</option>
                    <option value="student">Students</option>
                    <option value="all" selected>View All</option>
                </select>
            </div>
            <div class="w-full sm:w-64">
                <label for="searchInput" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Search:
                </label>
                <input id="searchInput" type="text"
                    class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:text-white dark:border-gray-700"
                    placeholder="Search by ID">
            </div>
        </div>

        <!-- Users Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            School ID
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            First Name
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            Middle Name
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            Last Name
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            Gender
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            Department / Course
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            Role
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            Status
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody id="usersTableBody"
                    class="bg-white divide-y divide-gray-200 dark:bg-gray-900 dark:divide-gray-700">
                    <?php foreach ($users as $user): ?>
                    <tr data-role="<?= $user['role'] ?>">
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100">
                            <?= $user['school_id'] ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100">
                            <?= $user['first_name'] ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100">
                            <?= $user['middle_name'] ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100">
                            <?= $user['last_name'] ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100"><?= $user['gender'] ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100">
                            <?= $user['department'] ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100">
                            <?= getRoleDisplayName($user['role']) ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100"><?= $user['status'] ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100">
                            <!-- Action Icons -->
                            <div class="flex space-x-2">
                                <a href="#">
                                    <svg class="hover:text-green-500 w-6 h-6 text-gray-800 dark:text-white"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg class="hover:text-blue-500 w-6 h-6 text-gray-800 dark:text-white"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg class="hover:text-red-500 w-6 h-6 text-gray-800 dark:text-white"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<script>
document.getElementById('userType').addEventListener('change', function() {
    filterUsers();
});

document.getElementById('searchInput').addEventListener('keyup', function() {
    filterUsers();
});

function filterUsers() {
    var selectedRole = document.getElementById('userType').value;
    var searchValue = document.getElementById('searchInput').value.toLowerCase();
    var rows = document.querySelectorAll('#usersTableBody tr');

    rows.forEach(function(row) {
        var role = row.getAttribute('data-role');
        var schoolId = row.querySelector('td').textContent.toLowerCase();
        var isVisible = (selectedRole === 'all' || role === selectedRole) && schoolId.includes(searchValue);
        row.style.display = isVisible ? '' : 'none';
    });
}

// Trigger the change event to display all users by default
document.getElementById('userType').dispatchEvent(new Event('change'));
</script>