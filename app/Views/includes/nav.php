<style>
.header-logo {
    height: 50px;
}

.custom-navbar {
    background-color: #009900 !important;
}

.color-fff {
    color: #fff;
}

.color-000 {
    color: #000;
}

.dropdown-item:hover {
    background-color: #009900;
    color: #fff;
}
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary custom-navbar font-regular sticky-top" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('/') ?>">
            <img src="public/images/header-logo.png" alt="FEU Tech logo" class="header-logo">
            <span class="m-0">ITSO EQUIPMENT MANAGEMENT</span>
        </a>
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link color-fff m-0" aria-current="page" href="<?= base_url('/')?>">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-fff" href="<?= base_url('about-us')?>">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-fff" href="<?= base_url('contact-us')?>">CONTACT US</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle color-fff" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        ACCOUNT
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url('register')?>">Register</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('login')?>">Login</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>