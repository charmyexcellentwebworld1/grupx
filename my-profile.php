<?php include('include/header.php')?>
<section class="myprofile-sec">
    <div class="container">
        <div class="title text-center mb-4">
            <h2>My <span class="yellowColor">Profile</span></h2>
        </div>      
        <div class="row p-5 m-0 bgWhite">
            <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="upload-box p-0 mb-5">
                        <div class="upload-img-wrap d-flex flex-wrap gap-2">
                            <div class="upload-img-box position-relative overflow-hidden d-inline-block w-100">
                                <div class="img-bg position-relative h-100">
                                    <img src="assets/images/img-1.png" class="img-fluid w-100" alt="" />
                                </div>
                            </div>
                            <div class="upload-img-box position-relative overflow-hidden d-inline-block w-100">
                                <div class="img-bg position-relative h-100">
                                    <img src="assets/images/img-2.png" class="img-fluid w-100" alt="" />
                                </div>
                            </div>
                            <div class="upload-img-box position-relative overflow-hidden d-inline-block w-100">
                                <div class="img-bg position-relative h-100">
                                    <img src="assets/images/img-3.png" class="img-fluid w-100" alt="" />
                                </div>
                            </div>
                            <div class="upload-img-box position-relative overflow-hidden d-inline-block w-100">
                                <div class="img-bg position-relative h-100">
                                    <img src="assets/images/img-4.png" class="img-fluid w-100" alt="" />
                                </div>
                            </div>
                            <div class="upload-img-box position-relative overflow-hidden d-inline-block w-100">
                                <div class="img-bg position-relative h-100">
                                    <img src="assets/images/img-5.png" class="img-fluid w-100" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8">
                <div class="detail-wrapper d-inline-block mw-100 w-100 ps-lg-4 ps-md-0 me-auto ms-0">
                    <form class="d-flex flex-wrap position-relative gap-0">
                        <div class="edit-btn position-absolute end-0 ">
                            <a href="edit-profile.php" class="btn border-0 d-flex align-items-center gap-2 yellowColor px-3 py-2"><img src="assets/images/edit.svg" alt="" />Edit</a>
                        </div>
                       <div class="d-flex flex-wrap">
                        <div class="input-group flex-wrap">
                            <label class="w-100 d-block greyDark pb-1">First Name</label>
                            <input type="text" class="form-control border-0" placeholder="Jennifer" readonly>
                        </div>
                        <div class="input-group flex-wrap">
                            <label class="w-100 d-block greyDark">First Name</label>
                            <input type="text" class="form-control border-0" placeholder="Russell" readonly>
                        </div>
                        <div class="input-group flex-wrap">
                            <label class="w-100 d-block greyDark">Birthdate</label>
                            <input type='text' class="form-control border-0" id="datepicker" placeholder="06-02-1998" readonly />
                        </div>
                        <div class="input-group flex-wrap">
                            <label class="w-100 d-block greyDark">Email</label>
                            <input type="email" class="form-control border-0" placeholder="Jennir569@Gmail.Com" readonly>
                        </div>
                        <div class="input-group flex-wrap">
                            <label class="w-100 d-block greyDark">Phone Number</label>
                            <input type="tel" class="form-control border-0" placeholder="1234567892" readonly>
                        </div>
                        <div class="input-group flex-wrap">
                        <label class="w-100 d-block greyDark">City</label>
                            <input type="text" class="form-control border-0" placeholder="Chicago" readonly>
                        </div>
                        <div class="input-group flex-wrap">
                            <label class="w-100 d-block greyDark">Where Do You Live?</label>
                            <input type="text" class="form-control border-0" placeholder="Gold Coast" readonly>
                        </div>
                        <div class="input-group flex-wrap">
                            <label class="w-100 d-block greyDark">Where Do You Work?</label>
                            <input type="text" class="form-control border-0" placeholder="Gold Coast" readonly>
                        </div>
                        <div class="input-group flex-wrap">
                            <label class="w-100 d-block greyDark">Location</label>
                            <input type="text" class="form-control border-0" placeholder="Gold Coast" readonly>
                        </div>
                        <div class="input-group flex-wrap">
                            <label class="w-100 d-block greyDark">What’s Your Job Title?</label>
                            <input type="text" class="form-control border-0" placeholder="Developer" readonly>
                        </div>
                        </div>
                        <div class="d-flex flex-wrap gender-row mw-100 w-100">
                            <div class="input-group flex-wrap w-100">
                                <label class="w-100 d-block greyDark">Gender</label>
                                <input type="text" class="form-control border-0" placeholder="Male" readonly>
                            </div>
                            <div class="input-group flex-wrap w-100">
                                <label class="w-100 d-block greyDark">Looking For</label>
                                <input type="text" class="form-control border-0" placeholder="Female" readonly>
                            </div>
                            <div class="input-group flex-wrap w-100">
                                <label class="w-100 d-block greyDark">Age Group</label>
                                <input type="text" class="form-control border-0" placeholder="20-29" readonly>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap w-100">
                        <div class="input-group w-100 mw-100">
                            <label class="w-100 d-block greyDark pb-1">Your Hobby</label>
                            <div class="select-hobby d-flex flex-wrap w-100 gap-1">
                                
                                <div class="form-check position-relative p-0 m-0 d-flex align-items-center justify-content-center overflow-hidden">
                                    <input class="form-check-input border-0 m-0 d-flex align-items-center position-absolute top-0 bottom-0 start-0 end-0 opacity-0" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Movies
                                    </label>
                                </div>
                                <div class="form-check position-relative p-0 m-0 d-flex align-items-center justify-content-center overflow-hidden">
                                    <input class="form-check-input border-0 m-0 d-flex align-items-center position-absolute top-0 bottom-0 start-0 end-0 opacity-0" type="checkbox" value="" id="defaultCheck2" checked>
                                    <label class="form-check-label" for="defaultCheck2">
                                        Travel
                                    </label>
                                </div>
                                <div class="form-check position-relative p-0 m-0 d-flex align-items-center justify-content-center overflow-hidden">
                                    <input class="form-check-input border-0 m-0 d-flex align-items-center position-absolute top-0 bottom-0 start-0 end-0 opacity-0" type="checkbox" value="" id="defaultCheck3">
                                    <label class="form-check-label" for="defaultCheck3">
                                        Sports
                                    </label>
                                </div>
                                <div class="form-check position-relative p-0 m-0 d-flex align-items-center justify-content-center overflow-hidden">
                                    <input class="form-check-input border-0 m-0 d-flex align-items-center position-absolute top-0 bottom-0 start-0 end-0 opacity-0" type="checkbox" value="" id="defaultCheck4">
                                    <label class="form-check-label" for="defaultCheck4">
                                        Cooking
                                    </label>
                                </div>
                                <div class="form-check position-relative p-0 m-0 d-flex align-items-center justify-content-center overflow-hidden">
                                    <input class="form-check-input border-0 m-0 d-flex align-items-center position-absolute top-0 bottom-0 start-0 end-0 opacity-0" type="checkbox" value="" id="defaultCheck8">
                                    <label class="form-check-label" for="defaultCheck8">
                                        Photography
                                    </label>
                                </div>
                                <div class="form-check position-relative p-0 m-0 d-flex align-items-center justify-content-center overflow-hidden">
                                    <input class="form-check-input border-0 m-0 d-flex align-items-center position-absolute top-0 bottom-0 start-0 end-0 opacity-0" type="checkbox" value="" id="defaultCheck10">
                                    <label class="form-check-label" for="defaultCheck10">
                                        Dancing
                                    </label>
                                </div>
                                <div class="form-check position-relative p-0 m-0 d-flex align-items-center justify-content-center overflow-hidden">
                                    <input class="form-check-input border-0 m-0 d-flex align-items-center position-absolute top-0 bottom-0 start-0 end-0 opacity-0" type="checkbox" value="" id="defaultCheck11">
                                    <label class="form-check-label" for="defaultCheck11">
                                        Painting
                                    </label>
                                </div>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('include/footer.php') ?>