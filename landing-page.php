<?php include('include/header.php')?>
<section class="login-screen d-flex align-items-center">
    <div class="container py-4">
        <div class="screen-wrapper d-flex flex-wrap justify-content-center flex-row">
            <a href="#" class="h-auto d-inline-block">
                <img src="assets/images/logo.svg" alt="logo" />
            </a>
            <div class="btn-group d-flex flex-wrap justify-content-center gap-xxl-3 gap-sm-2 gap-xs-2 w-100" role="group">
                <button type="button" class="btn w-100" data-bs-toggle="modal" data-bs-target="#loginmodal">Login</button>
                <button type="button" class="btn border-btn w-100" data-bs-toggle="modal" data-bs-target="#signupmodal">Sign
                    up</button>
            </div>
        </div>
    </div>
</section>
<?php include('include/footer.php') ?>