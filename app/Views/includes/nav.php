<style>
.header-logo {
    height: 50px;
}

.custom-navbar {
    background-color: #009900 !important;
}

.login-button {
    background-color: #ffffff;
    color: #009900;
    border: 1px solid #009900;
    padding: 5px 10px;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
}

.login-button:hover {
    background-color: #009900;
    color: #ffffff;
}
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary custom-navbar font-regular" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="public/images/header-logo.png" alt="FEU Tech logo" class="header-logo">
            <span class="m-0">FEU TECH</span>
        </a>
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT US</a>
                </li>
            </ul>
        </div>
    </div>
</nav>