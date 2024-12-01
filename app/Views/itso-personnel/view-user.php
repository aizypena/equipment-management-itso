<div class="container mx-auto p-4">
    <div class="flex justify-between items-center mb-4">
        <button onclick="history.back()"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Go
            Back</button>
    </div>
    <form class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4">
        <?php
        $fields = [
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'birthdate' => 'Birthdate',
            'gender' => 'Gender',
            'department' => 'Department',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
            'role' => 'Role',
            'school_id' => 'School ID'
        ];
        foreach ($fields as $field => $label) {
            echo "
            <div class='mb-4'>
                <label class='block text-gray-700 text-sm font-bold mb-2' for='{$field}'>{$label}</label>
                <input
                    class='shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline'
                    id='{$field}' type='text' value='{$user[$field]}' readonly>
            </div>";
        }
        ?>
    </form>
</div>