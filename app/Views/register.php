<style>
/* Additional styling for aesthetics */
.bg-light-custom {
    background-color: #0b3612;
}

.text-primary-custom {
    color: #007bff;
}

.form-label-optional::after {
    font-weight: normal;
    color: #6c757d;
}
</style>

<section class="bg-light-custom vh-100 d-flex align-items-center py-5">
    <div class="container">
        <div class="row gx-lg-5 align-items-center">
            <!-- Left Column -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h1 class="my-5 display-4 fw-bold ls-tight text-fff">
                    FEU Tech <br />
                    <span class="text-warning-custom">Equipment Management</span>
                </h1>
            </div>

            <!-- Right Column: Registration Form -->
            <div class="col-lg-6">
                <div class="card shadow-lg">
                    <div class="card-body py-5 px-md-5">
                        <form>
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
                                Sign up
                            </button>

                            <!-- Social Media Sign-Up Options -->
                            <div class="text-center">
                                <p>or sign up with:</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>