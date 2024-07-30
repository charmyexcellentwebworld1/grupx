</main>
<footer class="position-relative start-0 bottom-0 h-auto w-100 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="copyright d-flex align-items-center justify-content-between">
                    <p class="mb-0">© 2024 Grupx. All Rights Reserved.</p>
                    <ul class="footer-menu d-flex flex-wrap align-items-center m-0 p-0 gap-xl-5 gap-md-4">
                        <li><a href="terms-conditions.php">Terms & Conditions</a></li>
                        <li><a href="privacy-policies.php">Privacy Policies</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="modal login-modal fade" id="loginmodal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 bgWhite">
            <div class="modal-header flex-wrap justify-content-center border-0 pb-2 py-5 px-5">
                <a href="index.php" class="logo-img mx-auto mb-2 h-auto">
                    <img src="assets/images/logo.svg" alt="logo" />
                </a>
                <h2 class="modal-title w-100 text-center">Welcome <span class="yellowColor">Back</span></h1>
                    <p class="greyColor mb-0 text-center w-100">Please enter your details</p>
                    <button type="button" class="btn-close position-absolute p-0 m-0 opacity-100" data-bs-dismiss="modal" aria-label="Close"><img
                            src="assets/images/close-circle.svg" alt="" /></button>
            </div>
            <div class="modal-body pt-4 py-5 px-5">
                <form>
                    <div class=" input-group mb-4">
                        <span class="fpAreaCode position-absolute">+91</span>
                        <input type="tel" id="phone" name="phone" placeholder="Phone Number" class="formatphone"
                            areaCode="+91" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                        <span class="call-icon"><img src="assets/images/call.svg" /></span>
                    </div>
                    <div class="input-group mb-4">
                        <input id="password-field" type="password" placeholder="Passwod" class="form-control"
                            name="password" value="secret">
                        <span toggle="#password-field" class="toggle-password"><img src="assets/images/eye.svg"
                                class="eye" alt="" /><img src="assets/images/eye-hide.svg" class="eye-slash"
                                alt="" /></span>
                    </div>
                    <button class="forgot-link" type="button" data-bs-toggle="modal"
                        data-bs-target="#forgotmodal">Forgot Password</button>
                    <button type="submit" class="btn">Login <span><img src="assets/images/curve-arrow.svg"
                                alt="" /></span></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--login – Forgot Password Modal -->
<div class="modal forgot-modal fade" id="forgotmodal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 bgWhite">
            <div class="modal-header flex-wrap justify-content-center border-0 pb-2 py-5 px-5">
                <a href="#" class="logo-img mx-auto mb-2 h-auto">
                    <img src="assets/images/logo.svg" alt="logo" />
                </a>
                <h2 class="modal-title w-100 text-center">Forgot Your <span class="yellowColor">Password</span></h1>
                    <p class="greyColor mb-0 text-center w-100">Enter your phone number we'Il send you a text verification code.</p>
                    <button type="button" class="btn-close position-absolute p-0 m-0 opacity-100" data-bs-dismiss="modal" aria-label="Close"><img
                            src="assets/images/close-circle.svg" alt="" /></button>
            </div>
            <div class="modal-body pt-4 py-5 px-5">
                <form>
                    <div class="input-group mb-2">
                    <span class="fpAreaCode position-absolute">+91</span>
                        <input type="tel" id="phone1" name="phone" placeholder="Phone Number" class="formatphone"
                            areaCode="+91" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                        <span class="call-icon"><img src="assets/images/call.svg" /></span>
                    </div>
                    <button class="btn submit mt-4" type="button" data-bs-toggle="modal" data-bs-target="#otpverify">Get OTP
                        <span><img src="assets/images/curve-arrow.svg" alt="" /></span></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- login –  Forgot Password – Enter OTP Modal -->
<div class="modal otpverify-modal fade" id="otpverify" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 bgWhite">
            <div class="modal-header flex-wrap justify-content-center border-0 pb-2 py-5 px-5">
                <a href="#" class="logo-img mx-auto mb-2 h-auto">
                    <img src="assets/images/logo.svg" alt="logo" />
                </a>
                <h2 class="modal-title w-100 text-center">Verification <span class="yellowColor">Code</span></h1>
                    <p class="greyColor mb-0 text-center w-100">Enter the OTP sent to +91 234567895</p>
                    <button type="button" class="btn-close position-absolute p-0 m-0 opacity-100" data-bs-dismiss="modal" aria-label="Close"><img
                            src="assets/images/close-circle.svg" alt="" /></button>
            </div>
            <div class="modal-body pt-4 py-5 px-5">
                <form>
                    <div id="otp" class="inputs d-flex flex-row justify-content-center mb-4 gap-3">
                        <input class="text-center form-control rounded" type="text" id="first1" maxlength="1" />
                        <input class="text-center form-control rounded" type="text" id="second2" maxlength="1" />
                        <input class="text-center form-control rounded" type="text" id="third3" maxlength="1" />
                        <input class="text-center form-control rounded" type="text" id="fourth4" maxlength="1" />
                        <input class="text-center form-control rounded" type="text" id="fifth5" maxlength="1" />
                        <input class="text-center form-control rounded" type="text" id="sixth6" maxlength="1" />
                    </div>
                    <p class="receive-otp text-center">Don't Receive OTP? <a href="#" class="fw-medium">Resend OTP</a></p>
                    <button class="btn submit" type="button" data-bs-toggle="modal"
                        data-bs-target="#setnewpassword">Reset Password <span><img src="assets/images/curve-arrow.svg"
                                alt="" /></span></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- login – set new password Modal -->
<div class="modal setnew-password fade" id="setnewpassword" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 bgWhite">
            <div class="modal-header flex-wrap justify-content-center border-0 pb-2 py-5 px-5">
                <a href="#" class="logo-img mx-auto mb-2 h-auto">
                    <img src="assets/images/logo.svg" alt="logo" />
                </a>
                <h2 class="modal-title w-100 text-center">Set Your <span class="yellowColor">New Password</span></h1>
                    <p class="greyColor mb-0 text-center w-100">Your new password should be different from previously used</p>
                    <button type="button" class="btn-close position-absolute p-0 m-0 opacity-100" data-bs-dismiss="modal" aria-label="Close"><img
                            src="assets/images/close-circle.svg" alt="" /></button>
            </div>
            <div class="modal-body pt-4 py-5 px-5">
                <form>
                    <div class="input-group mb-4">
                        <input id="password-field1" type="password" placeholder="Passwod" class="form-control"
                            name="password" value="secret">
                        <span toggle="#password-field1" class="toggle-password"><img src="assets/images/eye.svg"
                                class="eye" alt="" /><img src="assets/images/eye-hide.svg" class="eye-slash"
                                alt="" /></span>
                    </div>
                    <div class="input-group mb-4">
                        <input id="password-field2" type="password" placeholder="Confirm New Password"
                            class="form-control" name="password" value="secret">
                        <span toggle="#password-field2" class="toggle-password"><img src="assets/images/eye.svg"
                                class="eye" alt="" /><img src="assets/images/eye-hide.svg" class="eye-slash"
                                alt="" /></span>
                    </div>
                    <button type="button" class="btn submit mt-4 px-3" data-bs-toggle="modal"
                        data-bs-target="#passwordReset">Updated Password <span><img src="assets/images/curve-arrow.svg"
                                alt="" /></span></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Password Reset Modal -->
<div class="modal password-reset fade" id="passwordReset" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 bgWhite">
            <div class="modal-header flex-wrap justify-content-center border-0 pb-2 py-5 px-5">
                <a href="#" class="logo-img mx-auto mb-2 h-auto">
                    <img src="assets/images/reset-icon.svg" alt="reset-icon" />
                </a>
                <h2 class="modal-title w-100 text-center">Password <span class="yellowColor">Reset!</span></h1>
                    <p class="greyColor mb-0 text-center w-100">Your password has benn successfully reset, click below to continue your acess</p>
            </div>
            <div class="modal-body pt-3 py-5 px-5">
                <button type="button" class="btn submit">Continue<span><img src="assets/images/curve-arrow.svg"
                            alt="" /></span></button>
            </div>
        </div>
    </div>
</div>
<!-- Sign up - mobile number Modal -->
<div class="modal signup-modal fade" id="signupmodal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 bgWhite">
            <div class="modal-header flex-wrap justify-content-center border-0 pb-2 py-5 px-5">
                <a href="#" class="logo-img mx-auto mb-2 h-auto">
                    <img src="assets/images/logo.svg" alt="logo" />
                </a>
                <h2 class="modal-title w-100 text-center">Create <span class="yellowColor">New Account</span></h1>
                    <p class="greyColor mb-0 text-center w-100">Already a member? <a href="#" class="darkYellow">Login</a></p>
                    <button type="button" class="btn-close position-absolute p-0 m-0 opacity-100" data-bs-dismiss="modal" aria-label="Close"><img
                            src="assets/images/close-circle.svg" alt="" /></button>
            </div>
            <div class="modal-body pt-4 py-5 px-5">
                <form> 
                    <div class=" input-group">
                       <span class="fpAreaCode position-absolute">+91</span>
                        <input type="tel" id="phone3" name="phone" placeholder="Phone Number" class="formatphone"
                            areaCode="+91" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                        <span class="call-icon"><img src="assets/images/call.svg" /></span>
                    </div>
                    <button type="button" class="btn submit mt-4" data-bs-toggle="modal"
                        data-bs-target="#signupverifymodal">Get OTP<span><img src="assets/images/curve-arrow.svg"
                                alt="" /></span></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Signup – Enter OTP Modal -->
<div class="modal otpverify-modal fade" id="signupverifymodal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 bgWhite">
            <div class="modal-header flex-wrap justify-content-center border-0 pb-2 py-5 px-5">
                <a href="#" class="logo-img mx-auto mb-2 h-auto">
                    <img src="assets/images/logo.svg" alt="logo" />
                </a>
                <h2 class="modal-title w-100 text-center">Verification <span class="yellowColor">Code</span></h1>
                    <p class="greyColor mb-0 text-center w-100">Enter the OTP sent to +91 234567895</p>
                    <button type="button" class="btn-close position-absolute p-0 m-0 opacity-100" data-bs-dismiss="modal" aria-label="Close"><img
                            src="assets/images/close-circle.svg" alt="" /></button>
            </div>
            <div class="modal-body pt-4 py-5 px-5">
                <form>
                    <div id="otp" class="inputs d-flex flex-row justify-content-center mb-4 gap-3">
                        <input class="text-center form-control rounded" type="text" id="first" maxlength="1" />
                        <input class="text-center form-control rounded" type="text" id="second" maxlength="1" />
                        <input class="text-center form-control rounded" type="text" id="third" maxlength="1" />
                        <input class="text-center form-control rounded" type="text" id="fourth" maxlength="1" />
                        <input class="text-center form-control rounded" type="text" id="fifth" maxlength="1" />
                        <input class="text-center form-control rounded" type="text" id="sixth" maxlength="1" />
                    </div>
                    <p class="receive-otp text-center mb-4">Don't Receive OTP? <a href="#" class="fw-medium">Resend OTP</a></p>
                    <button class="btn submit" type="button" data-bs-toggle="modal"
                        data-bs-target="#setnewpassword">Continue <span><img src="assets/images/curve-arrow.svg"
                                alt="" /></span></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Sign up completed Modal -->
<div class="modal application fade" id="applicationSubmit" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 bgWhite">
            <div class="modal-header flex-wrap justify-content-center border-0 pb-5 py-5 px-5">
                <a href="#" class="logo-img mx-auto mb-2 h-auto">
                    <img src="assets/images/reset-icon.svg" alt="reset-icon" />
                </a>
                <h2 class="modal-title w-100 text-center mb-2">Application <span class="yellowColor">Submitted!</span></h1>
                    <p class="greyColor mb-0 text-center w-100">We’ve received your application and will get back to you as soon as we can.</p>
            </div>
        </div>
    </div>
</div>
<!-- Email confirmation Modal -->
<div class="modal email-verify fade" id="emailVerify" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 bgWhite">
            <div class="modal-header flex-wrap justify-content-center border-0 pb-2 py-5 px-5">
                <h2 class="modal-title w-100 text-center">Email <span class="yellowColor">Confirmation!</span></h1>
                    <p class="text-center mb-0 mw-100 pb-4">Please confirm your email address for verification and account recovery.</p>
                    <p class="greyColor mb-0 text-center w-100 mw-100">Email Address<a href="mailto:jennir569@gmail.com" class="darkYellow w-100 d-block m-0 mt-2">jennir569@gmail.com</a></p>
            </div>
            <div class="modal-body pt-4 py-5 px-5">
                <button type="button" class="btn submit">verify<span><img src="assets/images/curve-arrow.svg"
                            alt="" /></span></button>
            </div>
        </div>
    </div>
</div>
<!-- Clear chat pop-up Modal -->
<div class="modal fade clear-modal" id="clearModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 bgWhite">
      <div class="modal-header flex-wrap justify-content-center border-0 pb-2 py-5 px-5">
        <h5 class="modal-title w-100 text-center mb-4 pt-5" id="exampleModalLabel">Are you sure you want to <strong>Delete chat</strong> messages?</h5>
        <button type="button" class="btn-close position-absolute p-0 m-0 opacity-100" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close-circle.svg" alt=""></button>
      </div>
      <div class="modal-footer justify-content-center gap-3 border-0 pt-0 py-5 px-5">
        <button type="button" class="btn border-btn w-100 m-0" data-bs-dismiss="modal">Cancle</button>
        <button type="button" class="btn w-100 m-0">Yes</button>
      </div>
    </div>
  </div>
</div>
<!-- Block pop-up Modal -->
<div class="modal fade clear-modal" id="blockModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 bgWhite">
      <div class="modal-header flex-wrap justify-content-center border-0 pb-2 py-5 px-5">
        <h5 class="modal-title w-100 text-center mb-4 pt-5" id="exampleModalLabel">Are you sure you want to <strong>Block</strong> Smith Salim?</h5>
        <button type="button" class="btn-close position-absolute p-0 m-0 opacity-100" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close-circle.svg" alt=""></button>
      </div>
      <div class="modal-footer justify-content-center gap-3 border-0 pt-0 py-5 px-5">
        <button type="button" class="btn border-btn w-100 m-0" data-bs-dismiss="modal">Cancle</button>
        <button type="button" class="btn w-100 m-0">Block</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="assets/js/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/slick.min.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
</body>

</html>