<style>
body {
    background-color: #0b3612;
    color: #f4f4f4;
}

.card {
    border: none;
    border-radius: 15px;
    background-color: #223843 !important;
}

.btn-reset {
    background-color: #f4b942;
    border: none;
}

.btn-reset:hover {
    background-color: #e5a632;
}
</style>

<div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="col-12 col-sm-8 col-md-6 col-lg-5">
        <div class="card shadow-lg p-4 bg-secondary bg-opacity-10">
            <div class="card-header bg-transparent text-center py-4 rounded-top">
                <!-- Logo -->
                <img src="public/images/tamaraw-logo.png" alt="School Logo" class="img-fluid mb-3"
                    style="max-width: 80px;">
                <h2 class="text-light">Reset Password</h2>
            </div>

            <div class="card-body">
                <form action="/reset-password" method="POST">
                    <!-- Email Address -->
                    <div class="mb-3">
                        <label for="email" class="form-label text-light">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control"
                            placeholder="Enter your registered email" required>
                    </div>
                    <!-- Code -->
                    <div class="mb-3">
                        <label for="sendCode" class="form-label text-light">Enter Code</label>
                        <div class="input-group">
                            <input type="text" id="sendCode" name="sendCode" class="form-control"
                                placeholder="Enter the verification code" required>
                            <button type="button" id="sendCodeButton" class="btn btn-secondary" disabled>Send
                                Code</button>
                        </div>
                    </div>

                    <!-- New Password -->
                    <div class="mb-3">
                        <label for="newPassword" class="form-label text-light">New Password</label>
                        <input type="password" id="newPassword" name="newPassword" class="form-control"
                            placeholder="Enter your new password" required>
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-4">
                        <label for="confirmPassword" class="form-label text-light">Confirm Password</label>
                        <input type="password" id="confirmPassword" name="confirmPassword" class="form-control"
                            placeholder="Confirm your new password" required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-reset w-100 py-2 mt-4 text-dark">Reset Password</button>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
const emailInput = document.getElementById('email');
const sendCodeButton = document.getElementById('sendCodeButton');

// Regular expression for validating email
const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

// Enable the "Send Code" button only if a valid email is entered
emailInput.addEventListener('input', function() {
    if (emailPattern.test(emailInput.value.trim())) {
        sendCodeButton.disabled = false;
    } else {
        sendCodeButton.disabled = true;
    }
});
</script>