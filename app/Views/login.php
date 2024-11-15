<style>
.login-main-container {
    background-color: #0B3612;
}

.login-form-container {
    background-color: #f2f2f2;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.feu-tech-logo {
    height: 60px;
}
</style>

<div class="d-flex align-items-center justify-content-center vh-100 login-main-container font-regular">
    <div class="container">
        <div class="login-form-container mx-auto p-4 p-md-5" style="max-width: 500px;">
            <!-- Logo and Title -->
            <div class="itso-logo d-flex align-items-center mb-4">
                <img src="public/images/header-logo.png" alt="FEU Tech Logo" class="feu-tech-logo me-2">
                <p class="m-0 fs-4">IT Services Office</p>
            </div>

            <!-- User Type Selection Heading -->
            <div>
                <p class="fs-5 text-center py-2">SELECT USER TYPE</p>
            </div>

            <!-- Buttons for User Types -->
            <div class="d-flex flex-column">
                <a class="btn btn-outline-success my-2" href="<?= base_url('itso-personnel-login') ?>">ITSO
                    Personnel</a>
                <a class="btn btn-outline-success my-2" href="<?= base_url('associate-login') ?>">Associate</a>
            </div>
        </div>
    </div>

</div>