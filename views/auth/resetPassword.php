<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="views/styles/scss/login.css">
    <!-- Core CSS -->
    <link rel="stylesheet" href="views/styles/css/auth/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="views/styles/css/auth/theme-default.css" class="template-customizer-theme-css">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="views/styles/css/auth/perfect-scrollbar.css">
    <link rel="stylesheet" href="views/styles/css/auth/form-validation.css">
    <link rel="stylesheet" href="views/styles/css/auth/boxicons.css">

    <!-- Page -->
    <link rel="stylesheet" href="views/styles/css/auth/page-auth.css">
    <link rel="stylesheet" href="views/styles/css/auth/fontawesome.css">

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
            <div class="authentication-inner py-4">

                <!-- Reset Password -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-2">Reset Password 🔒</h4>
                        <form id="formAuthentication" class="mb-3" method="POST" action="http://localhost/shopcoffee/resetPassword">
                            <div class="mb-3">
                                <label for="InputCode" class="form-label">Code</label>
                                <input type="text" name="code" class="form-control" id="InputCode">
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">New Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="············" aria-describedby="password">
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="confirm-password">Confirm Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="confirm-password" class="form-control"
                                        name="confirm-password" placeholder="············" aria-describedby="password">
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <button class="btn btn-primary d-grid w-100 mb-3" id="submit" type="submit" name="submit">
                                Set new password
                            </button>
                            <div class="text-center">
                                <a href="<?php APPURL ?>login">
                                    <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                                    Back to login
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Reset Password -->`
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
    <!-- <script src="views/styles/js/auth/popular.js"></script> -->
    <script src="views/styles/js/auth/bootstrap5.js"></script>
    <script src="views/styles/js/auth/auto-focus.js"></script>

    <!-- Main JS -->
    <script src="views/styles/js/auth/main.js"></script>
    

    <!-- Page JS -->
    <script src="views/styles/js/auth/pages-auth.js"></script>
    



	<!-- Place this tag in your head or just before your close body tag. -->
	<script async="" defer="" src="views/styles/js/auth/buttons.js"></script>
    <script>
        document.getElementById("email").value="<?php $_SESSION['email'] ?>";


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


