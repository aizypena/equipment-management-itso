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
                        <form action="<?= base_url('register') ?>" method="post">
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
                                    <label for="firstName" class="form-label">First name</label>
                                    <input type="text" id="firstName" name="firstName" class="form-control" required />
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label for="middleName" class="form-label form-label-optional">Middle name</label>
                                    <input type="text" id="middleName" name="middleName" class="form-control"
                                        placeholder="(Optional)" />
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label for="lastName" class="form-label">Last name</label>
                                    <input type="text" id="lastName" name="lastName" class="form-control" required />
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="mb-4">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" id="email" name="email" class="form-control" required />
                            </div>

                            <!-- Password input -->
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control" required />
                            </div>

                            <!-- Birthdate and Gender -->
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="birthdate" class="form-label">Birthdate</label>
                                    <input type="date" id="birthdate" name="birthdate" class="form-control" required />
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select id="gender" name="gender" class="form-select" required>
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