<div class="py-5 sm:ml-64 font-regular">
    <div class="container mx-auto bg-white dark:bg-gray-900 shadow-md rounded-lg p-6 overflow-x-auto">
        <h1 class="text-3xl font-bold mb-6 text-gray-800 dark:text-white">Equipment List</h1>

        <!-- Add filter section if needed -->
        <div class="mb-4 flex items-center">
            <label for="filter-type" class="text-gray-800 dark:text-white mr-2">Search:</label>
            <input id="filter-input" type="text"
                class="px-4 py-2 rounded bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-300 border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Search name/category">
        </div>

        <div class="mb-4 flex justify-end">
            <a href="<?= base_url('itso-personnel/equipment/add') ?>"
                class="bg-blue-700 text-white px-3 py-1 rounded">Add Equipment</a>
        </div>

        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-100 dark:bg-gray-800">
                <tr>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                        ID</th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                        Name</th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                        Category</th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                        Status</th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                        Actions</th>
                </tr>
            </thead>
            <tbody id="equipment-table" class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                <?php foreach ($school_equipment as $item): ?>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100">
                        <?= $item['equipment_id'] ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100"><?= $item['name'] ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100"><?= $item['category'] ?>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100">
                        <?= ucfirst($item['status']) ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100">
                        <!-- Action Icons -->
                        <div class="flex space-x-2">
                            <a href="<?= base_url('itso-personnel/equipment/view/' . $item['equipment_id']) ?>">
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
                                <svg class="hover:text-red-500 w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
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

<script>
// JS filter
document.getElementById('filter-input').addEventListener('keyup', function() {
    const filterValue = this.value.toLowerCase();
    const rows = document.querySelectorAll('#equipment-table tr');

    rows.forEach(row => {
        const cells = row.querySelectorAll('td');
        const isVisible = Array.from(cells).some(cell => cell.textContent.toLowerCase().includes(
            filterValue));
        row.style.display = isVisible ? '' : 'none';
    });
});

// Add 'dark' class to body if the user prefers dark mode
if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    document.body.classList.add('dark');
}

// Listen for changes in the user's color scheme preference
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
    document.body.classList.toggle('dark', event.matches);
});
</script>