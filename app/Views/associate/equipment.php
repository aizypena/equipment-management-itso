<style>
    body {
        background-color: #0B3612;
    }
</style>

<div class="p-2 sm:ml-64 font-regular">
    <div class="container mx-auto bg-gray-900 shadow-md rounded-lg p-4">
        <h1 class="text-3xl font-bold mb-6 text-white">Equipment List</h1>

        <table class="min-w-full divide-y divide-gray-700">
            <thead class="bg-gray-800">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Type</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Status</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Actions</th>
            </tr>
            </thead>
            <tbody id="equipment-table" class="bg-gray-900 divide-y divide-gray-700">
            <?php
            // Replace with your actual database connection and query
            $equipment = [
                ['id' => 1, 'name' => 'Excavator', 'type' => 'Heavy Machinery', 'status' => 'Available'],
                ['id' => 2, 'name' => 'Chainsaw', 'type' => 'Tool', 'status' => 'Out of Service']
                // ... add more equipment as needed
            ];

            foreach ($equipment as $item) {
                $statusClass = $item['status'] == 'Available' ? 'text-green-400' : 'text-red-400';
                echo "<tr>
                        <td class='px-6 py-4 whitespace-nowrap text-gray-100'>{$item['id']}</td>
                        <td class='px-6 py-4 whitespace-nowrap text-gray-100'>{$item['name']}</td>
                        <td class='px-6 py-4 whitespace-nowrap text-gray-100'>{$item['type']}</td>
                        <td class='px-6 py-4 whitespace-nowrap {$statusClass}'>{$item['status']}</td>
                        <td class='px-6 py-4 whitespace-nowrap'>
                            <button class='bg-green-700 text-white px-3 py-1 rounded'>Borrow</button>
                        </td>
                    </tr>";
            }
            ?>
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
            const isVisible = Array.from(cells).some(cell => cell.textContent.toLowerCase().includes(filterValue));

            row.style.display = isVisible ? '' : 'none';
        });
    });
</script>