<style>
body {
    background-color: #f0f0f0;
    /* Light mode background color */
}

body.dark {
    background-color: #0b3612;
    /* Dark mode background color */
}
</style>

<div class="p-4 sm:ml-64">
    <div class="p-4 text-center">
        <div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900 rounded-lg">
            <div class="text-center bg-white dark:bg-gray-800 p-8 shadow-lg rounded-lg">
                <?php if (isset($user) && !empty($user)): ?>
                <?php
                    // Set default image URL
                    $defaultImageUrl = 'https://static.vecteezy.com/system/resources/previews/003/337/584/large_2x/default-avatar-photo-placeholder-profile-icon-vector.jpg';
                    // Use user's picture URL if available, otherwise use default image URL
                    $imageUrl = !empty($user['picture_url']) ? htmlspecialchars($user['picture_url']) : $defaultImageUrl;
                    ?>
                <img class="mx-auto rounded-full w-32 h-32 border-4 border-gray-300 dark:border-gray-700"
                    src="<?= $imageUrl ?>" alt="Associate Picture">
                <h1 class="mt-4 text-3xl font-bold text-gray-800 dark:text-white">
                    <?= htmlspecialchars($user['first_name'] . ' ' . $user['last_name']) ?></h1>
                <p class="mt-2 text-lg text-gray-600 dark:text-gray-300">Associate Number:
                    <?= htmlspecialchars($user['school_id']) ?></p>
                <p class="mt-1 text-lg text-gray-600 dark:text-gray-300">Department:
                    <?= htmlspecialchars($user['department']) ?></p>
                <?php else: ?>
                <p class="text-lg text-gray-700 dark:text-gray-300">User not found.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<script>
// Add 'dark' class to body if the user prefers dark mode
if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    document.body.classList.add('dark');
}

// Listen for changes in the user's color scheme preference
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
    if (event.matches) {
        document.body.classList.add('dark');
    } else {
        document.body.classList.remove('dark');
    }
});
</script>