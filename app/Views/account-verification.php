<style>
/* Background for the page */
body {
    background-color: #0b3612;
    color: #f4f4f4;
    /* Light text for contrast */
}

/* Card Styling */
.card {
    border: none;
    border-radius: 15px;
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
    /* Subtle shadow */
    padding: 40px;
    background-color: #223843;
    /* Darker tone for card background */
}

/* Card Header */
.card-header {
    color: #fff;
    text-align: center;
}

.card-header img {
    width: 80px;
    margin-bottom: 10px;
}

/* Buttons */
.btn-verify {
    background-color: #f4b942;
    color: #0b3612;
    border: none;
    font-size: 1.2rem;
    padding: 15px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn-verify:hover {
    background-color: #e5a632;
}

/* Form Inputs */
.form-control {
    background-color: #e5e5e5;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    padding: 10px 15px;
    color: #333;
}

.form-control:focus {
    outline: none;
    box-shadow: 0px 0px 5px #91c788;
    border: 1px solid #91c788;
}

/* Form container */
.form-container {
    max-width: 700px;
    margin: auto;
    padding: 20px;
}
</style>

<div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="form-container">
        <div class="card">
            <div class="card-header">
                <img src="public/images/tamaraw-logo.png" alt="School Logo">
                <h2>Account Verification</h2>
            </div>
            <div class="card-body">
                <form action="/verify-account" method="POST">
                    <div class="mb-4">
                        <label for="verificationCode" class="form-label text-light">Verification Code</label>
                        <input type="text" class="form-control form-control-lg" id="verificationCode"
                            name="verificationCode" placeholder="Enter the code sent to your email" required>
                    </div>
                    <button type="submit" class="btn btn-verify w-100">Verify</button>
                </form>
            </div>
        </div>
    </div>
</div>