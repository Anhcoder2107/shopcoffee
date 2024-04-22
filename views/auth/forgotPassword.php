<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="views/styles/scss/login.css">
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
            <div class="authentication-inner py-4">
                <!-- Forgot Password -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-2">Forgot Password? 🔒</h4>
                        <p class="mb-4">Enter your email and we'll send you instructions to reset your password</p>
                        <form id="formAuthentication" class="mb-3" action="" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter your email" autofocus="">
                            </div>
                            <button class="btn btn-primary d-grid w-100" id="submit" type="submit" name="submit">Send Code</button>
                        </form>
                        <div class="text-center">
                            <a href="<?php APPURL ?>login" class="d-flex align-items-center justify-content-center">
                                <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                                Back to login
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Forgot Password -->
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



	<!-- Main JS -->
	<script src="views/styles/js/auth/main.js"></script>
	<script src="views/styles/js/auth/main-auth.js"></script>


	<!-- Page JS -->



	<!-- Place this tag in your head or just before your close body tag. -->
	<script async="" defer="" src="views/styles/js/auth/buttons.js"></script>

</html>