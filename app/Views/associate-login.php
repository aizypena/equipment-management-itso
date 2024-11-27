<style>
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
</style>

<section class="vh-100 font-regular" style="background-color: #0b3612;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="https://i.ibb.co/sgxbMhR/tamaraw.png" alt="login form" class="img-fluid"
                                style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <!-- Display Flashdata Messages -->
                                <?php if (session()->getFlashdata('error')): ?>
                                <div class="alert alert-danger">
                                    <?= session()->getFlashdata('error') ?>
                                </div>
                                <?php endif; ?>

                                <form action="<?= base_url('associateLogin') ?>" method="post">
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <img src="https://i.ibb.co/Kb787w4/header-logo.png" alt="FEU Tech Logo"
                                            style="max-height: 46px; padding-right: 10px;">
                                        <span class="h3 fw-bold mb-0">FEU Tech Associate</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account
                                    </h5>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="associateNumber" name="associateNumber"
                                            class="form-control border-color" />
                                        <label class="form-label" for="associateNumber">Associate Number</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <div class="input-group">
                                            <input type="password" id="password" name="password"
                                                class="form-control border-color" />
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button" id="peekBtn">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <label class="form-label" for="password">Password</label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button data-mdb-button-init data-mdb-ripple-init
                                            class="btn login-btn w-100 btn-block" type="submit"
                                            style="background-color: #0b3612; color: #fff;">Login</button>
                                    </div>

                                    <a class="small text-muted" href="<?= base_url('forgot-password') ?>">Forgot
                                        password?</a>
                                    <p class="mb-5 pb-lg-2 text-success">Don't have an account? <a
                                            href="<?= base_url('register') ?>" class="text-success">Register here</a>
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

<!-- FontAwesome for eye icon -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>
// Toggle password visibility
const peekBtn = document.getElementById('peekBtn');
const passwordInput = document.getElementById('password');
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
</script>