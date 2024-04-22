<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title> 
    <link rel="stylesheet" href="http://localhost/shopcoffee/views/styles/scss/login.css">
    <!-- Core CSS -->
    <link rel="stylesheet" href="views/styles/css/auth/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="views/styles/css/auth/theme-default.css" class="template-customizer-theme-css">
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="views/styles/css/auth/perfect-scrollbar.css"> 
    
    
    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="views/styles/css/auth/page-auth.css">
    <link rel="stylesheet" href="views/styles/css/auth/boxicons.css">

    <!-- Helpers -->
    <script src="views/styles/js/auth/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
        <script src="views/styles/js/auth/template-customizer.js"></script>
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="views/styles/js/auth/config.js"></script>
</head>

<body>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">

                <!-- Register Card -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-2">Adventure starts here 🚀</h4>
                        <p class="mb-4">Make your app management easy and fun!</p>

                        <form id="formAuthentication" class="mb-3" action="" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Username</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter your username">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter your email"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password1">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password password1" class="form-control" name="password"
                                        placeholder="············" aria-describedby="password" required>
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password2">Repeat Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password password2" class="form-control" 
                                        placeholder="" aria-describedby="password" required>
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <button class="btn btn-primary d-grid w-100" type="submit" name="submit">
                                Register
                            </button>
                        </form>

                        <p class="text-center">
                            <span>Already have an account?</span>
                            <a href="<?php APPURL ?>login">
                                <span>Sign in instead</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- Register Card -->
            </div>
        </div>
    </div>

</body>

    <script src="views/styles/js/auth/jquery.js"></script>
    <script src="views/styles/js/auth/popper.js"></script>
    <script src="views/styles/js/auth/bootstrap.js"></script>
    <script src="views/styles/js/auth/perfect-scrollbar.js"></script>
    <script src="views/styles/js/auth/hammer.js"></script>
    <script src="views/styles/js/auth/i18n.js"></script>
    <script src="views/styles/js/auth/typeahead.js"></script>
    <script src="views/styles/js/auth/menu.js"></script>
    
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="views/styles/js/auth/popular.js"></script>
    <script src="views/styles/js/auth/bootstrap5.js"></script>
    <script src="views/styles/js/auth/auto-focus.js"></script>

    <script src="views/styles/js/auth/main.js"></script>


	<!-- Page JS -->



	<!-- Place this tag in your head or just before your close body tag. -->
	<script async="" defer="" src="views/styles/js/auth/buttons.js"></script>

<script>

    // Check repeat password
    function checkPassword() {
        var password = document.getElementById("InputPassword1").value;
        var password2 = document.getElementById("InputPassword2").value;
        if (password != password2) {
            alert("Passwords do not match");
            document.getElementById("InputPassword2").value = "";
            return false;
        } else {
            return true;
        }
    }

    //call checkPassword when click submit 
    document.getElementById("submit").onclick = checkPassword;
</script>


</html>