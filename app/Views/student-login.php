<section class="vh-100 font-regular" style="background-color: #0b3612;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="public/images/tamaraw.png" alt="login form" class="img-fluid"
                                style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form>

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <img src="public/images/header-logo.png" alt="FEU Tech Logo"
                                            style="max-height: 46px; padding-right: 10px;">
                                        <span class="h3 fw-bold mb-0">FEU Tech ITSO Student</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account
                                    </h5>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="studentNumber" class="form-control form-control" />
                                        <label class="form-label" for="studentNumber">Student Number</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="password" id="form2Example27" class="form-control form-control" />
                                        <label class="form-label" for="form2Example27">Password</label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button data-mdb-button-init data-mdb-ripple-init
                                            class="btn login-btn btn-lg btn-block" type="button"
                                            style="background-color: #0b3612; color: #fff;">Login</button>
                                    </div>

                                    <a class="small text-muted" href="#!">Forgot password?</a>
                                    <p class="mb-5 pb-lg-2 text-success">Don't have an account? <a
                                            href="<?= base_url('register')?>" class="text-success">Register here</a>
                                    </p>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>