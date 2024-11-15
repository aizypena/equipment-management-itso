<style>
body {
    background-color: #0b3612;
}

.bg-light-custom {
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
</style>

<!-- Section: Registration Form -->
<section class="bg-light-custom vh-100 d-flex align-items-center py-5">
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
                        <form>

                            <!-- User Role Selection -->
                            <!-- <div class="mb-4">
                                <label for="userRole" class="form-label">Register as</label>
                                <select id="userRole" class="form-select" required onchange="toggleFields()">
                                    <option value="" disabled selected>Select role</option>
                                    <option value="associate">Associate</option>
                                    <option value="student">Student</option>
                                </select>
                            </div> -->

                            <!-- Additional Fields for Student -->
                            <div class="mb-4" id="courseField" style="display: none;">
                                <label for="course" class="form-label">Course</label>
                                <select id="course" class="form-select">
                                    <option value="" disabled selected>Select course</option>
                                    <option value="course1">BSCpE</option>
                                    <option value="course2">BSCS AI</option>
                                    <option value="course3">BSCS DS</option>
                                    <option value="course4">BSCS SE</option>
                                    <option value="course5">BSIT AGD</option>
                                    <option value="course6">BSIT BA</option>
                                    <option value="course7">BSIT CST</option>
                                    <option value="course8">BSIT WMA</option>
                                </select>
                            </div>

                            <!-- Additional Fields for Associate -->
                            <div class="mb-4" id="departmentField">
                                <label for="department" class="form-label">Department</label>
                                <select id="department" class="form-select">
                                    <option value="" disabled selected>Select department</option>
                                    <option value="department1">Computer Engineering</option>
                                    <option value="department2">Computer Science</option>
                                    <option value="department3">Humanities and Social Sciences</option>
                                    <option value="department4">Information Technology</option>
                                    <option value="department5">Mathematics and Physical Sciences</option>
                                </select>
                            </div>

                            <!-- Name Fields -->
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <label for="firstName" class="form-label">First name</label>
                                    <input type="text" id="firstName" class="form-control" required />
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label for="middleName" class="form-label form-label-optional">Middle name</label>
                                    <input type="text" id="middleName" class="form-control" placeholder="(Optional)" />
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label for="lastName" class="form-label">Last name</label>
                                    <input type="text" id="lastName" class="form-control" required />
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="mb-4">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" id="email" class="form-control" required />
                            </div>

                            <!-- Password input -->
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" class="form-control" required />
                            </div>

                            <!-- Birthdate and Gender -->
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="birthdate" class="form-label">Birthdate</label>
                                    <input type="date" id="birthdate" class="form-control" required />
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select id="gender" class="form-select" required>
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

<script>
// will disable the sendCodeButton if the sendCode input is empty or the entered email is not valid
function toggleFields() {
    var userRole = document.getElementById('userRole').value;
    var courseField = document.getElementById('courseField');
    var departmentField = document.getElementById('departmentField');

    if (userRole === 'student') {
        courseField.style.display = 'block';
        departmentField.style.display = 'none';
    } else if (userRole === 'associate') {
        courseField.style.display = 'none';
        departmentField.style.display = 'block';
    } else {
        courseField.style.display = 'none';
        departmentField.style.display = 'none';
    }
}
</script>