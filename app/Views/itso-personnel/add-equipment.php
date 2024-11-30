<a href="javascript:history.back()"
    class="m-5 text-yellow-500 dark:text-yellow-400 hover:text-yellow-700 dark:hover:text-yellow-500 mb-5 inline-block border border-yellow-500 dark:border-yellow-300 rounded-md px-2 py-1">
    <svg class="inline-block w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
    </svg>
    Back
</a>

<div class="container mx-auto mt-10 p-5 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-gray-100">Add New Equipment</h2>
    <form id="addEquipmentForm" action="<?= base_url('equipment/add') ?>" method="post">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-900 dark:text-gray-100">Equipment
                Name</label>
            <input type="text"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100"
                id="name" name="name" required>
        </div>
        <div class="mb-4">
            <label for="category" class="block text-sm font-medium text-gray-900 dark:text-gray-100">Category</label>
            <input type="text"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100"
                id="category" name="category" required>
        </div>
        <div class="mb-4">
            <label for="notes" class="block text-sm font-medium text-gray-900 dark:text-gray-100">Notes</label>
            <textarea
                class="mt-1 block w-full p-2 border border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100"
                id="notes" name="notes"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Add
            Equipment</button>
    </form>
</div>

<!-- Modal -->
<div class="fixed z-10 inset-0 overflow-y-auto hidden" id="successModal">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div
            class="inline-block align-bottom bg-white dark:bg-gray-800 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white dark:bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100"
                            id="successModalLabel">Success</h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500 dark:text-gray-400">Equipment successfully added.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-gray-700 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button"
                    class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white dark:bg-gray-600 text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-500 focus:outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
                    data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function() {
    $('#addEquipmentForm').on('submit', function(event) {
        event.preventDefault();

        $.ajax({
            url: '<?= base_url('equipment/add') ?>',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#successModal').removeClass('hidden');
                $('#addEquipmentForm')[0].reset();
            },
            error: function(xhr, status, error) {
                alert('Failed to add equipment. Please try again.');
            }
        });
    });

    $('[data-dismiss="modal"]').on('click', function() {
        $('#successModal').addClass('hidden');
    });

    // Check for dark mode and apply background color
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        $('body').addClass('dark');
    }
});
</script>

<style>
body {
    background-color: white;
    /* Light mode background color */
}

body.dark {
    background-color: #0b3612;
    /* Dark mode background color */
}
</style>