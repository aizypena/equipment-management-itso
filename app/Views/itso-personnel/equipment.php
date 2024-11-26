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
            <button class="bg-blue-700 text-white px-3 py-1 rounded" onclick="showForm('create')">Add Equipment</button>
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
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button class="bg-green-700 text-white px-3 py-1 rounded"
                            onclick="showForm('update', <?= $item['equipment_id'] ?>)">Edit</button>
                        <button class="bg-red-700 text-white px-3 py-1 rounded"
                            onclick="deleteEquipment(<?= $item['equipment_id'] ?>)">Delete</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- MODAL FOR CRUD -->
<div id="crud-modal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center">
    <div class="bg-white dark:bg-gray-800 rounded-lg p-8 w-1/3">
        <h2 id="crud-title" class="text-xl font-bold mb-4">Add Equipment</h2>
        <form id="crud-form">
            <input type="hidden" id="crud-id" name="equipment_id">
            <div class="mb-4">
                <label for="crud-name" class="block text-gray-700 dark:text-gray-300">Name</label>
                <input type="text" id="crud-name" name="name"
                    class="w-full px-4 py-2 rounded bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-300 border border-gray-300 dark:border-gray-600 focus:outline-none">
            </div>
            <div class="mb-4">
                <label for="crud-category" class="block text-gray-700 dark:text-gray-300">Category</label>
                <input type="text" id="crud-category" name="category"
                    class="w-full px-4 py-2 rounded bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-300 border border-gray-300 dark:border-gray-600 focus:outline-none">
            </div>
            <div class="mb-4">
                <label for="crud-status" class="block text-gray-700 dark:text-gray-300">Status</label>
                <select id="crud-status" name="status"
                    class="w-full px-4 py-2 rounded bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-300 border border-gray-300 dark:border-gray-600 focus:outline-none">
                    <option value="available">Available</option>
                    <option value="borrowed">Borrowed</option>
                </select>
            </div>
            <div class="flex justify-end">
                <button type="button"
                    class="mr-4 px-4 py-2 rounded bg-gray-300 dark:bg-gray-600 text-gray-700 dark:text-gray-300"
                    onclick="hideForm()">Cancel</button>
                <button type="submit" class="px-4 py-2 rounded bg-blue-700 text-white">Save</button>
            </div>
        </form>
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

// JavaScript functions to handle CRUD operations
function showForm(action, id = null) {
    const modal = document.getElementById('crud-modal');
    const form = document.getElementById('crud-form');
    const title = document.getElementById('crud-title');

    if (action === 'create') {
        form.reset();
        title.textContent = 'Add Equipment';
    } else if (action === 'update') {
        // Fetch and populate the form with data for the given id
        fetch(`<?= base_url('personnel/equipment/get') ?>/${id}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('crud-id').value = data.equipment_id;
                document.getElementById('crud-name').value = data.name;
                document.getElementById('crud-category').value = data.category;
                document.getElementById('crud-status').value = data.status;
                title.textContent = 'Edit Equipment';
            });
    }

    modal.classList.remove('hidden');
}

function hideForm() {
    const modal = document.getElementById('crud-modal');
    modal.classList.add('hidden');
}

function deleteEquipment(id) {
    if (confirm('Are you sure you want to delete this equipment?')) {
        fetch(`<?= base_url('personnel/equipment/delete') ?>/${id}`, {
                method: 'DELETE'
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Equipment deleted successfully!');
                    location.reload(); // Refresh the page to update the equipment list
                } else {
                    alert('Failed to delete equipment. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            });
    }
}

// Handle form submission
document.getElementById('crud-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(this);
    const id = document.getElementById('crud-id').value;
    const url = id ? `<?= base_url('personnel/equipment/update') ?>/${id}` :
        '<?= base_url('personnel/equipment/add') ?>';
    const method = id ? 'PUT' : 'POST';

    fetch(url, {
            method: method,
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Equipment saved successfully!');
                hideForm();
                location.reload(); // Refresh the page to update the equipment list
            } else {
                alert('Failed to save equipment. Please try again.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again.');
        });
});
</script>