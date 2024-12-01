<div class="container mx-auto max-w-lg mt-12 p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md">
    <a href="javascript:history.back()" class="btn btn-secondary mb-3 text-blue-500 hover:text-blue-700">Back</a>
    <h2 class="text-2xl font-bold mb-6">Add User</h2>
    <form action="<?= base_url('itso-personnel/users/add') ?>" method="post">
        <div class="form-group mb-4">
            <label for="first_name" class="block text-sm font-medium mb-2">First Name:</label>
            <input type="text"
                class="form-control w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                id="first_name" name="first_name" required>
        </div>
        <div class="form-group mb-4">
            <label for="middle_name" class="block text-sm font-medium mb-2">Middle Name:</label>
            <input type="text"
                class="form-control w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                id="middle_name" name="middle_name">
        </div>
        <div class="form-group mb-4">
            <label for="last_name" class="block text-sm font-medium mb-2">Last Name:</label>
            <input type="text"
                class="form-control w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                id="last_name" name="last_name" required>
        </div>
        <div class="form-group mb-4">
            <label for="email" class="block text-sm font-medium mb-2">Email:</label>
            <input type="email"
                class="form-control w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                id="email" name="email" required>
        </div>
        <div class="form-group mb-4">
            <label for="birthdate" class="block text-sm font-medium mb-2">Birthdate:</label>
            <input type="date"
                class="form-control w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                id="birthdate" name="birthdate" required>
        </div>
        <div class="form-group mb-4">
            <label for="gender" class="block text-sm font-medium mb-2">Gender:</label>
            <select
                class="form-control w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group mb-4">
            <label for="department" class="block text-sm font-medium mb-2">Department:</label>
            <input type="text"
                class="form-control w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                id="department" name="department" required>
        </div>
        <div class="form-group mb-4">
            <label for="role" class="block text-sm font-medium mb-2">Role:</label>
            <select
                class="form-control w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                id="role" name="role" required>
                <option value="">Select a Role</option>
                <option value="itso_personnel">ITSO Personnel</option>
                <option value="associate">Associate</option>
                <option value="student">Student</option>
            </select>
        </div>
        <button type="submit"
            class="btn btn-primary w-full py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Add
            User</button>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        $('body').addClass('dark-mode');
    }
});
</script>