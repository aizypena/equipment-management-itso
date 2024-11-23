<section class="bg-light-custom vh-100 d-flex align-items-center py-5 font-regular">
    <div class="container">
        <div class="row gx-lg-5 align-items-center">
            <!-- Left Column -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h1 class="my-5 display-4 fw-bold ls-tight text-white">
                    FEU Tech <br />
                    <span class="text-warning-custom">Equipment Management</span>
                </h1>
            </div>

            <!-- Right Column: Registration Form -->
            <div class="col-lg-6">
                <div class="card shadow-lg">
                    <div class="card-body py-5 px-md-5">
                        <!-- Flashdata Messages -->
                        <?php $success = session()->getFlashdata('success') ?>
                        <?php $error = session()->getFlashdata('error') ?>

                        <?php if ($success): ?>
                        <div class="alert alert-success">
                            <?= $success ?>
                        </div>
                        <?php endif; ?>

                        <?php if ($error): ?>
                        <div class="alert alert-danger">
                            <?= $error ?>
                        </div>
                        <?php endif; ?>

                        <script>
                        // Set a timeout to auto-hide the alert messages after a few seconds
                        setTimeout(() => {
                            document.querySelectorAll('.alert').forEach(el => el.style.display = 'none');
                        }, 5000); // Adjust the time as per your requirement

                        // Clear flashdata when the page is unloaded
                        window.addEventListener('beforeunload', function() {
                            fetch('<?= base_url('auth/clear_flashdata') ?>', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-Requested-With': 'XMLHttpRequest'
                                },
                                body: JSON.stringify({})
                            });
                        });
                        </script>

                        <form action="<?= base_url('/register') ?>" method="post">
                            <!-- Department Field -->
                            <div class="mb-4" id="departmentField">
                                <label for="department" class="form-label">Department</label>
                                <select id="department" name="department" class="form-select" required>
                                    <option value="" disabled selected>Select department</option>
                                    <option value="Computer Engineering">Computer Engineering</option>
                                    <option value="Computer Science">Computer Science</option>
                                    <option value="Humanities and Social Sciences">Humanities and Social Sciences
                                    </option>
                                    <option value="Information Technology">Information Technology</option>
                                    <option value="Mathematics and Physical Sciences">Mathematics and Physical Sciences
                                    </option>
                                </select>
                            </div>

                            <!-- Name Fields -->
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <label for="first_name" class="form-label">First name</label>
                                    <input type="text" id="first_name" name="first_name"
                                        class="form-control border-color" required />
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label for="middle_name" class="form-label form-label-optional">Middle name</label>
                                    <input type="text" id="middle_name" name="middle_name"
                                        class="form-control border-color" placeholder="(Optional)" />
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label for="last_name" class="form-label">Last name</label>
                                    <input type="text" id="last_name" name="last_name" class="form-control border-color"
                                        required />
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="mb-4">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" id="email" name="email" class="form-control border-color"
                                    required />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="password">Password</label>

                                <div class="input-group">
                                    <input type="password" id="password" name="password"
                                        class="form-control border-color" required />
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="peekBtn">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Confirm Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="confirm_password">Confirm Password</label>
                                <input type="password" id="confirm_password" name="confirm_password"
                                    class="form-control border-color" required />
                            </div>

                            <!-- Birthdate and Gender -->
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="birthdate" class="form-label">Birthdate</label>
                                    <input type="date" id="birthdate" name="birthdate" class="form-control border-color"
                                        required />
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select id="gender" name="gender" class="form-select border-color" required>
                                        <option value="" disabled selected>Select gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block w-100 mb-4">
                                Register
                            </button>

                            <!-- Social Media Sign-Up Options -->
                            <div class="text-center">
                                <p>Already have an account?</p>
                                <a href="<?= base_url('login') ?>" class="login-txt"
                                    style="color: #0b3612; text-decoration: none;">Login</a>
                                <span class="arrow-icon">
                                    <i class="fa-solid fa-arrow-right" style="color: #0b3612;"></i>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FontAwesome for eye icon -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>
// Toggle password visibility
const peekBtn = document.getElementById('peekBtn');
const passwordInput = document.getElementById('password');
const confirmPasswordInput = document.getElementById('confirm_password');
const emailInput = document.getElementById('email');
const firstNameInput = document.getElementById('first_name');
const middleNameInput = document.getElementById('middle_name');
const lastNameInput = document.getElementById('last_name');
let passwordVisible = false;

peekBtn.addEventListener('click', function() {
    if (passwordVisible) {
        passwordInput.type = 'password';
        peekBtn.innerHTML = '<i class="fa fa-eye"></i>';
    } else {
        passwordInput.type = 'text';
        peekBtn.innerHTML = '<i class="fa fa-eye-slash"></i>';
    }
    passwordVisible = !passwordVisible;
});

// Add input event listeners to password fields
const handlePasswordInput = () => {
    const password = passwordInput.value;
    const confirmPassword = confirmPasswordInput.value;

    if (confirmPassword.length > 0) {
        if (password === confirmPassword) {
            confirmPasswordInput.classList.remove('border-red');
            confirmPasswordInput.classList.add('border-green');
        } else {
            confirmPasswordInput.classList.remove('border-green');
            confirmPasswordInput.classList.add('border-red');
        }
    } else {
        confirmPasswordInput.classList.remove('border-red', 'border-green');
    }
};

passwordInput.addEventListener('input', handlePasswordInput);
confirmPasswordInput.addEventListener('input', handlePasswordInput);

// Add focus and blur event listeners to remove border colors
confirmPasswordInput.addEventListener('blur', () => {
    confirmPasswordInput.classList.remove('border-green', 'border-red');
});
emailInput.addEventListener('blur', () => {
    emailInput.classList.remove('border-green', 'border-red');
});

// Add input event listener to email field
const handleEmailInput = () => {
    const email = emailInput.value;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email.length > 0) {
        if (emailRegex.test(email)) {
            emailInput.classList.remove('border-red');
            emailInput.classList.add('border-green');
        } else {
            emailInput.classList.remove('border-green');
            emailInput.classList.add('border-red');
        }
    } else {
        emailInput.classList.remove('border-red', 'border-green');
    }
};

emailInput.addEventListener('input', handleEmailInput);

// Function to capitalize the first letter of each word
const capitalizeWords = (str) => {
    return str.replace(/\b\w/g, char => char.toUpperCase());
};

// Add input event listeners to name fields
const handleNameInput = (event) => {
    event.target.value = capitalizeWords(event.target.value);
};

firstNameInput.addEventListener('input', handleNameInput);
middleNameInput.addEventListener('input', handleNameInput);
lastNameInput.addEventListener('input', handleNameInput);
</script>
<style>
/* General Styles */
body {
    background-color: #0b3612;
}

.text-warning-custom {
    color: #FCBD13;
}

.login-txt {
    color: #0b3612;
    text-decoration: none;
    font-weight: bold;
    position: relative;
    transition: color 0.3s ease;
}

/* Styling for the arrow icon */
.arrow-icon {
    display: inline-block;
    margin-left: 5px;
    position: relative;
    transition: transform 0.3s ease;
}

/* Hover effect to move the arrow to the right */
.login-txt:hover+.arrow-icon {
    transform: translateX(5px);
}

/* Button and Input Styles */
#peekBtn {
    background-color: transparent;
    border-left: none;
    color: #0B3612;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    border-color: #0B3612;
}

#peekBtn:hover {
    background-color: transparent;
}

#password {
    border-right: none;
}

/* Outline color for inputs */
.border-color:focus {
    outline: none;
    box-shadow: 0 0 0 0.25rem rgba(255, 165, 0, 0.5);
    border-color: rgba(255, 165, 0, 0.5);
}

/* Dynamic border colors */
.border-red:focus,
.border-red:valid {
    outline: none;
    box-shadow: 0 0 0 0.25rem rgba(255, 0, 0, 0.5);
    /* Red shadow */
    border-color: rgba(255, 0, 0, 0.5);
}

.border-green:focus,
.border-green:valid {
    outline: none;
    box-shadow: 0 0 0 0.25rem rgba(11, 99, 18, 0.5);
    /* Green shadow */
    border-color: rgba(11, 99, 18, 0.5);
}
</style>