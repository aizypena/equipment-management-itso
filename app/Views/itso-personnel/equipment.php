<div class="py-5 sm:ml-64 font-regular">
    <div class="container mx-auto bg-white dark:bg-gray-900 shadow-md rounded-lg p-6 overflow-x-auto">
        <h1 class="text-3xl font-bold mb-6 text-gray-800 dark:text-white">Equipment List</h1>

        <!-- Flash Messages -->
        <?php if (session()->getFlashdata('error')): ?>
        <div class="bg-red-500 text-white p-4 rounded mb-4">
            <?= session()->getFlashdata('error') ?>
        </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('success')): ?>
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            <?= session()->getFlashdata('success') ?>
        </div>
        <?php endif; ?>

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
                        <span
                            class="<?= $item['status'] == 'deleted' ? 'text-red-500' : ($item['status'] == 'available' ? 'text-green-500' : '') ?>">
                            <?= ucfirst($item['status']) ?>
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-gray-100">
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
                            <a href="<?= base_url('itso-personnel/equipment/edit/' . $item['equipment_id']) ?>">
                                <svg class="hover:text-blue-500 w-6 h-6 text-gray-800 dark:text-white"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28" />
                                </svg>
                            </a>
                            <a href="javascript:void(0);"
                                onclick="showDeleteConfirmationModal(<?= $item['equipment_id'] ?>)">
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

<!-- Delete Confirmation Modal -->
<div id="deleteConfirmationModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-lg max-w-md w-full">
            <h2 class="text-lg font-bold mb-4 text-gray-900 dark:text-white">Confirm Deletion</h2>
            <p class="text-sm text-gray-500 dark:text-gray-300 mb-4">Enter your password to confirm deletion of the
                equipment.</p>
            <form id="deleteEquipmentForm" action="<?= base_url('itso-personnel/equipment/delete') ?>" method="post">
                <?= csrf_field() ?>
                <!-- CSRF Token -->
                <input type="hidden" id="deleteEquipmentId" name="equipment_id">
                <div class="mb-4">
                    <label for="personnelPassword"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                    <input type="password" id="personnelPassword" name="password"
                        class="block w-full mt-1 p-2 border rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100"
                        required>
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" onclick="closeModal()"
                        class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function showDeleteConfirmationModal(equipmentId) {
    document.getElementById('deleteEquipmentId').value = equipmentId;
    document.getElementById('deleteConfirmationModal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('deleteConfirmationModal').classList.add('hidden');
}
</script>