<style>
/* Additional styling for aesthetics */
body {
    background-color: #f8f9fa;
}

.registration-container {
    max-width: 600px;
    margin: auto;
    padding: 40px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}
</style>

<div class="container d-flex align-items-center min-vh-100">
    <div class="registration-container">
        <!-- Back Button -->
        <button onclick="history.back()" class="btn btn-outline-secondary mb-4">
            &larr; Back
        </button>

        <!-- Registration Form -->
        <h2 class="text-primary mb-4">Create an Account</h2>
        <p class="text-muted mb-4">Register to access the Equipment Management System for FEU Institute of Technology.
        </p>

        <form action="register_process.php" method="POST">
            <div class="mb-3">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" required>
            </div>
            <div class="mb-3">
                <label for="middleName" class="form-label">Middle Name (Optional)</label>
                <input type="text" class="form-control" id="middleName" name="middleName">
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" required>
            </div>
            <div class="mb-3">
                <label for="birthdate" class="form-label">Birthdate</label>
                <input type="date" class="form-control" id="birthdate" name="birthdate" required>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phoneNumber" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>

        <footer class="text-center mt-4 text-muted">
            &copy; <script>
            document.write(new Date().getFullYear());
            </script> FEU Institute of Technology. All rights reserved.
        </footer>
    </div>
</div>