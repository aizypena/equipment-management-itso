<div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
    <div class="container mx-auto p-4 max-w-lg bg-white dark:bg-gray-800 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4 text-gray-900 dark:text-gray-100">Equipment Details</h1>
        <?php if (isset($equipment)): ?>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                <tbody>
                    <tr class="border-b dark:border-gray-700">
                        <th class="px-4 py-2 text-left text-gray-900 dark:text-gray-100">Equipment ID</th>
                        <td class="px-4 py-2 text-gray-900 dark:text-gray-100">
                            <?= htmlspecialchars($equipment['equipment_id']) ?></td>
                    </tr>
                    <tr class="border-b dark:border-gray-700">
                        <th class="px-4 py-2 text-left text-gray-900 dark:text-gray-100">Name</th>
                        <td class="px-4 py-2 text-gray-900 dark:text-gray-100">
                            <?= htmlspecialchars($equipment['name']) ?></td>
                    </tr>
                    <tr class="border-b dark:border-gray-700">
                        <th class="px-4 py-2 text-left text-gray-900 dark:text-gray-100">Category</th>
                        <td class="px-4 py-2 text-gray-900 dark:text-gray-100">
                            <?= htmlspecialchars($equipment['category']) ?></td>
                    </tr>
                    <tr class="border-b dark:border-gray-700">
                        <th class="px-4 py-2 text-left text-gray-900 dark:text-gray-100">Status</th>
                        <td class="px-4 py-2 text-gray-900 dark:text-gray-100">
                            <?= htmlspecialchars($equipment['status']) ?></td>
                    </tr>
                    <tr class="border-b dark:border-gray-700">
                        <th class="px-4 py-2 text-left text-gray-900 dark:text-gray-100">Assigned To</th>
                        <td class="px-4 py-2 text-gray-900 dark:text-gray-100">
                            <?= htmlspecialchars($equipment['assigned_to']) ?></td>
                    </tr>
                    <tr class="border-b dark:border-gray-700">
                        <th class="px-4 py-2 text-left text-gray-900 dark:text-gray-100">Notes</th>
                        <td class="px-4 py-2 text-gray-900 dark:text-gray-100">
                            <?= htmlspecialchars($equipment['notes']) ?></td>
                    </tr>
                    <tr class="border-b dark:border-gray-700">
                        <th class="px-4 py-2 text-left text-gray-900 dark:text-gray-100">Created At</th>
                        <td class="px-4 py-2 text-gray-900 dark:text-gray-100">
                            <?= htmlspecialchars($equipment['created_at']) ?></td>
                    </tr>
                    <tr class="border-b dark:border-gray-700">
                        <th class="px-4 py-2 text-left text-gray-900 dark:text-gray-100">Deleted At</th>
                        <td class="px-4 py-2 text-gray-900 dark:text-gray-100">
                            <?= htmlspecialchars($equipment['deleted_at']) ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php else: ?>
        <p class="text-red-500 dark:text-red-400">No equipment details available.</p>
        <?php endif; ?>
        <a href="<?= base_url('itso-personnel/equipment') ?>"
            class="mt-4 inline-block bg-blue-500 dark:bg-blue-700 text-white px-4 py-2 rounded">Back to Equipment
            List</a>
    </div>
</div>