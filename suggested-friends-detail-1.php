<?php include('include/header.php')?>
<section class="suggest-frd-detail">
   <div class="container">
      <div class="row m-0">
         <div class="col col-xxl-5 col-md-6 col-sm-12 col-xs-12 p-0">
            <div class="img-wrap primary w-100 position-relative overflow-hidden" >
               <img src="assets/images/main-img.png" alt="" class="img-fluid" />
            </div>
         </div>
         <div class="col col-xxl-7 col-md-6 col-sm-12 col-xs-12 p-0">
            <div class="cnt-wrapper">
               <h1 class="whiteColor">Araman Jon</h1>
               <div class="d-flex align-items-center round-bg">
                  <div class="d-flex align-items-center">
                     <img src="assets/images/location.svg" alt="" /><span>1 km away</span>
                  </div>
                  <div class="d-flex align-items-center">
                     <span>29 years old</span>
                  </div>
               </div>
               <aside class="thumbnails gallery py-4 d-flex flex-wrap gap-2 gap-lg-3">
                  <a href="#" class="thumbnail mb-0 d-inline-block position-relative overflow-hidden" data-big="assets/images/gallery-1.png">
                     <div class="thumbnail-image" style="background-image: url(assets/images/gallery-1.png)"></div>
                  </a>
                  <a href="#" class="thumbnail mb-0 d-inline-block position-relative overflow-hidden" data-big="assets/images/gallery-2.png">
                     <div class="thumbnail-image" style="background-image: url(assets/images/gallery-2.png)"></div>
                  </a>
                  <a href="#" class="selected thumbnail mb-0 d-inline-block position-relative overflow-hidden" data-big="assets/images/gallery-3.png">
                     <div class="thumbnail-image" style="background-image: url(assets/images/gallery-3.png)"></div>
                  </a>
                  <a href="#" class="thumbnail mb-0 d-inline-block position-relative overflow-hidden" data-big="assets/images/gallery-4.png">
                     <div class="thumbnail-image" style="background-image: url(assets/images/gallery-4.png)"></div>
                  </a>
                  <a href="#" class="thumbnail mb-0 d-inline-block position-relative overflow-hidden" data-big="assets/images/gallery-5.png">
                     <div class="thumbnail-image" style="background-image: url(assets/images/gallery-5.png)"></div>
                  </a>
                  <a href="#" class="thumbnail mb-0 d-inline-block position-relative overflow-hidden" data-big="assets/images/gallery-6.png">
                     <div class="thumbnail-image" style="background-image: url(assets/images/gallery-6.png)"></div>
                  </a>
               </aside>
               <div class="d-flex w-100">
                  <div class="gender">
                     <p>Gender</p>
                     <div class="d-flex"><img src="assets/images/path-1.svg" alt="" />Male</div>
                  </div>
                  <div class="gender lt">
                     <p>Looking For</p>
                     <div class="d-flex"><img src="assets/images/path-1.svg" alt="" />Female</div>
                  </div>
               </div>
               <div class="select-hobby d-flex flex-wrap w-100 gap-1 mw-100 mt-4 mb-5">
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
                  <div class="form-check position-relative p-0 m-0 d-flex align-items-center justify-content-center overflow-hidden">
                     <input class="form-check-input border-0 m-0 d-flex align-items-center position-absolute top-0 bottom-0 start-0 end-0 opacity-0" type="checkbox" value="" id="defaultCheck12">
                     <label class="form-check-label" for="defaultCheck12">
                     Photography
                     </label>
                  </div>
               </div>
               <div class="btn-group w-100 d-flex align-items-center gap-3">
                  <button type="button" class="btn dir-btn" data-bs-toggle="modal" data-bs-target="#applicationSubmit">Accept Friend Request</button>
                  <button type="button" class="chat border borderBlack bg-transparent rounded-circle" onclick="window.location.href='chat.php'"><img src="assets/images/message.svg" alt="" /></button>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php include('include/footer.php') ?>