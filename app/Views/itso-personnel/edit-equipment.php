<a href="javascript:history.back()"
    class="m-5 text-yellow-500 dark:text-yellow-400 hover:text-yellow-700 dark:hover:text-yellow-500 mb-5 inline-block border border-yellow-500 dark:border-yellow-300 rounded-md px-2 py-1">
    <svg class="inline-block w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
    </svg>
    Back
</a>

<div class="container mx-auto mt-10 p-5 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-gray-100">Edit Equipment</h2>
    <form id="editEquipmentForm" action="<?= base_url('equipment/update/' . $equipment['equipment_id']) ?>"
        method="post">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-900 dark:text-gray-100">Equipment Name</label>
            <input type="text"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100"
                id="name" name="name" value="<?= htmlspecialchars($equipment['name']) ?>" required>
        </div>
        <div class="mb-4">
            <label for="category" class="block text-sm font-medium text-gray-900 dark:text-gray-100">Category</label>
            <input type="text"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100"
                id="category" name="category" value="<?= htmlspecialchars($equipment['category']) ?>" required>
        </div>
        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-900 dark:text-gray-100">Status</label>
            <select
                class="mt-1 block w-full p-2 border border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100"
                id="status" name="status" required>
                <option value="available" <?= $equipment['status'] == 'available' ? 'selected' : '' ?>>Available
                </option>
                <option value="under maintenance" <?= $equipment['status'] == 'under maintenance' ? 'selected' : '' ?>>
                    Under Maintenance</option>
                <option value="out of service" <?= $equipment['status'] == 'out of service' ? 'selected' : '' ?>>Out of
                    Service</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="notes" class="block text-sm font-medium text-gray-900 dark:text-gray-100">Notes</label>
            <textarea
                class="mt-1 block w-full p-2 border border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100"
                id="notes" name="notes"><?= htmlspecialchars($equipment['notes']) ?></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Save
            Changes</button>
    </form>
</div>

<script>
// Example of theme dynamic change
document.documentElement.style.setProperty('--bg-color', '#ffffff');
document.documentElement.style.setProperty('--text-color', '#000000');
</script>