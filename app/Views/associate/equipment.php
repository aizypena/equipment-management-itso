<style>
body {
    background-color: #0b3612;
}
</style>

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
                <?php foreach ($equipment as $item): ?>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100">
                        <?= $item['equipment_id'] ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100"><?= $item['name'] ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100"><?= $item['category'] ?>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100">
                        <?= ucfirst($item['status']) ?></td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button class="bg-blue-600 dark:bg-green-700 text-white px-3 py-1 rounded">Borrow</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
// JavaScript function to filter table rows
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
</script>