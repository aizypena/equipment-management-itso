<body class="bg-gray-100">
    <div class="container mx-auto mt-12">
        <div class="max-w-lg mx-auto bg-white rounded-lg shadow-lg">
            <div class="bg-blue-500 text-white text-center py-4 rounded-t-lg">
                <h3 class="text-xl font-semibold">Edit User</h3>
            </div>
            <div class="p-6">
                <form id="editUserForm" action="<?= base_url('itso-personnel/users/update/' . $user['id']) ?>"
                    method="post">
                    <div class="mb-4">
                        <label for="first_name" class="block text-gray-700">First Name</label>
                        <input type="text"
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="first_name" name="first_name" value="<?= $user['first_name'] ?>" required>
                    </div>
                    <div class="mb-4">
                        <label for="middle_name" class="block text-gray-700">Middle Name</label>
                        <input type="text"
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="middle_name" name="middle_name" value="<?= $user['middle_name'] ?>">
                    </div>
                    <div class="mb-4">
                        <label for="last_name" class="block text-gray-700">Last Name</label>
                        <input type="text"
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="last_name" name="last_name" value="<?= $user['last_name'] ?>" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email"
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="email" name="email" value="<?= $user['email'] ?>" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700">Password</label>
                        <input type="password"
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="password" name="password">
                    </div>
                    <div class="mb-4">
                        <label for="birthdate" class="block text-gray-700">Birthdate</label>
                        <input type="date"
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="birthdate" name="birthdate" value="<?= $user['birthdate'] ?>" required>
                    </div>
                    <div class="mb-4">
                        <label for="gender" class="block text-gray-700">Gender</label>
                        <select
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="gender" name="gender" required>
                            <option value="male" <?= $user['gender'] == 'male' ? 'selected' : '' ?>>Male</option>
                            <option value="female" <?= $user['gender'] == 'female' ? 'selected' : '' ?>>Female</option>
                            <option value="other" <?= $user['gender'] == 'other' ? 'selected' : '' ?>>Other</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="department" class="block text-gray-700">Department</label>
                        <input type="text"
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="department" name="department" value="<?= $user['department'] ?>" required>
                    </div>
                    <div class="mb-4">
                        <label for="role" class="block text-gray-700">Role</label>
                        <select
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="role" name="role" required>
                            <option value="itso_personnel" <?= $user['role'] == 'itso_personnel' ? 'selected' : '' ?>>
                                ITSO Personnel</option>
                            <option value="associate" <?= $user['role'] == 'associate' ? 'selected' : '' ?>>Associate
                            </option>
                            <option value="student" <?= $user['role'] == 'student' ? 'selected' : '' ?>>Student</option>
                        </select>
                    </div>
                    <button type="submit"
                        class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Update
                        User</button>
                </form>
            </div>
        </div>
    </div>
</body>