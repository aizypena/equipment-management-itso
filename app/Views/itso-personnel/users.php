<div class="p-4 sm:ml-64 font-regular">
    <div class="p-6 bg-gray-100 dark:bg-gray-900 rounded-lg shadow-lg">
        <!-- Page Title -->
        <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-6">Users</h1>

        <!-- User Type Selector -->
        <div class="mb-6">
            <label for="userType" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                Select User Type:
            </label>
            <select id="userType" name="userType"
                class="block w-64 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:text-white dark:border-gray-700">
                <option value="associates">Associates</option>
                <option value="students">Students</option>
            </select>
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
                            Birthdate
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            Gender
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            Department / Course
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            Status
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            Created At
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            Updated At
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-900 dark:divide-gray-700">
                    <?php foreach ($users as $user): ?>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100">
                            <?= $user['school_id'] ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100">
                            <?= $user['first_name'] ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100">
                            <?= $user['middle_name'] ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100">
                            <?= $user['last_name'] ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100">
                            <?= $user['birthdate'] ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100"><?= $user['gender'] ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100">
                            <?= $user['department'] ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100"><?= $user['status'] ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100">
                            <?= $user['created_at'] ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100">
                            <?= $user['updated_at'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>