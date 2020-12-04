
<!-- < ?php include "header_navbar_footer/header_if_login.php"?> -->
<?php include "header_navbar_footer/Get_usernameProfile.php"?>
<title>Jobs</title>
<?php include "header_navbar_footer/header.php"?>


      <!-- Main content -->
      <section class="content-header">
        <div class="row mb-2">
          <div class="col-3">
            <h3>Jobs</h3>
          </div>
          <div class="col-9">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="http://localhost:80/Blog_nyarwanda_CMS/home.php">Home</a></li>
                <li class="breadcrumb-item"><span id="messagePopup" class="more" data-user="61"><a href="javascript:void(0);"><i class="fa fa-envelope-o"></i> Message </a></span></li>
                <li class="breadcrumb-item active"><i><a href="javascript:void(0);" class="price-jobs" data-pricejob="1"> Post a jobs</a></i></li>
            </ol>
          </div>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">

          <div class="col-md-3 mb-3">
            <!-- Profile Image -->
            <div class="info-box mb-3">
              <div class="info-inner message-color">
                <div class="info-in-head">
                  <!-- PROFILE-COVER-IMAGE -->
                  <img src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/702caus.jpg"
                    alt="User Image">
                </div>
                <!-- info in head end -->
                <div class="info-in-body">
                  <div class="in-b-box">
                    <div class="in-b-img">
                      <!-- PROFILE-IMAGE -->
                      <img src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/112baby3.png"
                        alt="User Image">
                    </div>
                  </div><!--  in b box end-->
                  <div class="info-body-name">
                    <div class="in-b-name">
                      <div><a href="http://localhost:80/Blog_nyarwanda_CMS/fayzo">faysal shema</a></div>
                      <!-- Nina Mcintire -->
                      <span><small><a href="http://localhost:80/Blog_nyarwanda_CMS/fayzo">engineering</a></small></span>
                    </div><!-- in b name end-->
                  </div><!-- info body name end-->
                </div><!-- info in body end-->
                <div class="info-in-footer">
                  <div class="number-wrapper">
                    <div class="num-box">
                      <div class="num-head">
                        <a href="http://localhost:80/Blog_nyarwanda_CMS/fayzo.posts"> POSTS</a>
                      </div>
                      <div class="num-body">
                        40 </div>
                    </div>
                    <div class="num-box">
                      <div class="num-head">
                        <a href="http://localhost:80/Blog_nyarwanda_CMS/fayzo.following"> FOLLOWING</a>
                      </div>
                      <div class="num-body">
                        <span class="count-following">7</span>
                      </div>
                    </div>
                    <div class="num-box">
                      <div class="num-head">
                        <a href="http://localhost:80/Blog_nyarwanda_CMS/fayzo.followers">FOLLOWERS</a>
                      </div>
                      <div class="num-body">
                        <span class="count-followers">9</span>
                      </div>
                    </div>
                  </div><!-- mumber wrapper-->
                </div><!-- info in footer -->
              </div><!-- info inner end -->
            </div><!-- info box -->

            <div class="card card-primary mb-3">
              <div class="card-header main-active p-1">
                <h5 class="card-title text-center"><i> HashTags</i></h5>
              </div>
              <div class="card-body text-center message-color">
                <!-- /.card-header -->
                <strong><a href="http://localhost:80/Blog_nyarwanda_CMS/amakuru.hashtag">#amakuru</a></strong>

                <p class="text-muted">
                  4 Posts </p>

                <!-- <hr> -->
                <!-- /.card-header -->
                <strong><a href="http://localhost:80/Blog_nyarwanda_CMS/bite.hashtag">#bite</a></strong>

                <p class="text-muted">
                  4 Posts </p>

                <!-- <hr> -->
              </div> <!-- /.card-body -->
            </div>

            <div class="sticky-top" style="top: 52px;z-index:1000;">
              <div class="card card-primary mb-3 ">
                <div class="card-header main-active p-1">
                  <h5 class="card-title text-center"><i> Jobs</i></h5>
                </div>
                <!-- /.card-header -->
                <div class="card-body message-color pt-0 pb-0">
                  <div class="row">

                    <div class="col-12 px-0 border-bottom jobHovers mt-2 more" data-job="34" data-business="61">
                      <div class="user-block mb-2 jobHover">
                        <div class="user-jobImgBorder">
                          <div class="user-jobImg">
                            <img
                              src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/112baby3.png"
                              alt="User Image">
                          </div>
                        </div>
                        <span class="username">
                          <!-- Job Title:  -->
                          <a style="padding-right:3px;" href="#">Clinical Data Analyst</a>
                        </span>
                        <span class="description">publish - Sep 12, 2019</span>
                        <span class="description">Deadline - 2019-09-12</span>
                      </div>
                    </div>
                    <hr>

                  </div>
                </div> <!-- /.card-body -->
                <div class="card-footer text-center">
                  <a href="http://localhost:80/Blog_nyarwanda_CMS/jobs0.php">View all Jobs</a>
                </div> <!-- /.card-footer -->
              </div>
              <!-- /.card -->

            </div>
          </div>

          <div class="col-md-6 mb-4">
            <div class="row">

              <div class="col-md-12 mb-4" id="jobs-hides">
                <!-- jobs -->
                <div class="card card-primary mb-1 ">
                  <div class="card-header main-active p-1">
                    <h5 class="card-title float-left pl-2"><i> Jobs to Search</i></h5>
                    <form class="form-inline float-right">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon2"><i class="fa fa-search"
                              aria-hidden="true"></i> </span>
                        </div>
                        <input type="text" class="form-control search0" aria-describedby="helpId"
                          placeholder="Search Accountant, finance ,enginneer">
                      </div>
                    </form>

                    <div class="nav-scroller py-0" style="clear:right;height:2rem;">
                      <nav class="nav d-flex justify-content-between pb-0">
                        <a class="p-2" href="javascript:void(0)" onclick="jobsCategories('Featured',1);">Featured<span
                            class="badge badge-primary">4</span></a>
                        <a class="p-2" href="javascript:void(0)" onclick="jobsCategories('Tenders',1);">Tenders<span
                            class="badge badge-primary">1</span></a>
                        <a class="p-2" href="javascript:void(0)"
                          onclick="jobsCategories('Consultancy',1);">Consultancy<span
                            class="badge badge-primary">2</span></a>
                        <a class="p-2" href="javascript:void(0)"
                          onclick="jobsCategories('Internships',1);">Internships<span
                            class="badge badge-primary">1</span></a>
                        <a class="p-2" href="javascript:void(0)" onclick="jobsCategories('Public',1);">Public<span
                            class="badge badge-primary">0</span></a>
                        <a class="p-2" href="javascript:void(0)" onclick="jobsCategories('Training',1);">Training<span
                            class="badge badge-primary">0</span></a>
                      </nav>
                    </div> <!-- nav-scroller -->
                  </div> <!-- /.card-header -->

                  <div class="card-body message-color">
                    <span class="job-show"></span>
                    <div class="job-hide">

                      <div class="col-12 px-0 py-2 jobHover jobHovers more" data-job="33" data-business="61">
                        <div class="user-block mb-2">
                          <div class="row">
                            <div class="col-3 col-md-2">
                              <div class="user-jobImgall">
                                <img
                                  src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/112baby3.png"
                                  alt="User Image">
                              </div>
                            </div>
                            <div class="col-9 col-md-10 pl-4">
                              <span>Job Title: Data Analyst</span><br>
                              <span>rwanda</span> ||
                              <i class="flag-icon flag-icon-br h4 mb-0" id="br" title="us"></i><br>
                              <span>Shared public - Sep 12, 2019</span><br>
                              <span>Deadline - 2019-09-12</span>
                            </div> <!-- col-10 -->
                          </div> <!-- row -->
                        </div> <!-- user-block -->
                      </div> <!-- col-12 -->
                      <hr class="bg-info mt-0 mb-1" style="width:95%;">

                      <div class="col-12 px-0 py-2 jobHover jobHovers more" data-job="31" data-business="61">
                        <div class="user-block mb-2">
                          <div class="row">
                            <div class="col-3 col-md-2">
                              <div class="user-jobImgall">
                                <img
                                  src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/112baby3.png"
                                  alt="User Image">
                              </div>
                            </div>
                            <div class="col-9 col-md-10 pl-4">
                              <span>Job Title: finance</span><br>
                              <span>rwanda</span> ||
                              <i class="flag-icon flag-icon-br h4 mb-0" id="br" title="us"></i><br>
                              <span>Shared public - Sep 9, 2019</span><br>
                              <span>Deadline - 2019-09-09</span>
                            </div> <!-- col-10 -->
                          </div> <!-- row -->
                        </div> <!-- user-block -->
                      </div> <!-- col-12 -->
                      <hr class="bg-info mt-0 mb-1" style="width:95%;">

                      <div class="col-12 px-0 py-2 jobHover jobHovers more" data-job="34" data-business="61">
                        <div class="user-block mb-2">
                          <div class="row">
                            <div class="col-3 col-md-2">
                              <div class="user-jobImgall">
                                <img
                                  src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/112baby3.png"
                                  alt="User Image">
                              </div>
                            </div>
                            <div class="col-9 col-md-10 pl-4">
                              <span>Job Title: Clinical Data Analyst</span><br>
                              <span>rwanda</span> ||
                              <i class="flag-icon flag-icon-br h4 mb-0" id="br" title="us"></i><br>
                              <span>Shared public - Sep 12, 2019</span><br>
                              <span>Deadline - 2019-09-12</span>
                            </div> <!-- col-10 -->
                          </div> <!-- row -->
                        </div> <!-- user-block -->
                      </div> <!-- col-12 -->
                      <hr class="bg-info mt-0 mb-1" style="width:95%;">

                      <div class="col-12 px-0 py-2 jobHover jobHovers more" data-job="32" data-business="61">
                        <div class="user-block mb-2">
                          <div class="row">
                            <div class="col-3 col-md-2">
                              <div class="user-jobImgall">
                                <img
                                  src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/112baby3.png"
                                  alt="User Image">
                              </div>
                            </div>
                            <div class="col-9 col-md-10 pl-4">
                              <span>Job Title: finance</span><br>
                              <span>rwanda</span> ||
                              <i class="flag-icon flag-icon-br h4 mb-0" id="br" title="us"></i><br>
                              <span>Shared public - Sep 9, 2019</span><br>
                              <span>Deadline - 2019-09-09</span>
                            </div> <!-- col-10 -->
                          </div> <!-- row -->
                        </div> <!-- user-block -->
                      </div> <!-- col-12 -->
                      <hr class="bg-info mt-0 mb-1" style="width:95%;">
                    </div>
                  </div> <!-- /.card-body -->
                </div> <!-- /.card -->


                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
              <!-- /.row -->
          </div>
              <!-- /.col -->

          <div class="col-md-3">
            <div class="card mb-3">
              <div class="card-header main-active text-center">
                <i> WHO TO FOLLOW </i>
              </div>
              <div class="card-body message-color pt-0 pb-0">
                <div class="row">
                  <div class="col-12 px-0 border-bottom jobHovers mt-2 more" data-job="33" data-business="61">
                    <div class="user-block mb-2 jobHover">
                      <div class="user-jobImgBorder">
                        <div class="user-jobImg">
                          <img
                            src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/112baby3.png"
                            alt="User Image">
                        </div>
                      </div>
                      <span class="username">
                        <!-- Job Title:  -->
                        <a href="http://localhost:80/Blog_nyarwanda_CMS/shema" id="80">shema shema</a>
                      </span>
                      <div class="my-0 ml-2"><small style="font-size: 12px;">no career</small>
                      </div>

                      <div class="my-0 ml-2">
                        <button type="button" class="btn btn-secondary btn-sm follow-btn" data-follow="80"
                          data-profile="61"><span class="fa fa-user-plus"></span> Follow</button>
                      </div>
                    </div>
                  </div><!-- END OF EACH WHOTOFOLLOW -->
                </div><!-- ROW -->
              </div><!-- CARD-BODY -->
              <div class="card-footer text-center">
                <a href="http://localhost:80/Blog_nyarwanda_CMS/network.php">View more &gt;&gt;&gt;</a>
              </div>
            </div> <!-- CARD -->

            <div class="sticky-top " style="top: 52px;z-index:1000;">
              <div class="card text-center">
                <div class="card-header main-active p-1">
                  <h5 class="card-title"><i> Options</i></h5>
                </div>
                <div class="card-body options-list message-color">
                  <ul>
                    <li>
                      <h5 class="card-title"><a href="crowfund.php">GushoraStartUp</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="fundraising.php"> Fundraising</a></h5>
                    </li>
                    <li>
                      <h5><a href="Unemployment.php"> Unemployment</a></h5>
                    </li>
                    <li>
                      <h5><a href="career_profession.php">Professional</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="sale.php">Sale</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="gurisha.php">Gurisha</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="blog.php">Blog</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="jobs0.php">Jobs</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="events.php">Events</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="movies.php">Movies</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="sports.php">Sports</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="news.php">news</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="entertainment.php">Entertainment</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="rwandaPhotos.php">Rwanda-Landscape</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="Tembera.php">Tembera-ltd</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="hotelbooking.php">Hotel-booking</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="motel.php">motel</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="house.php">House</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="car.php">Car</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="icyamunara.php">Cyamunara</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="food.php">Foodzana</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="domestic.php">domestic Helpers</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="school.php">school</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="members_earning.php">members earning</a></h5>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- col- -->
        </div>
        <!-- row- -->

      </section>
      <!-- /.content -->



<?php include "header_navbar_footer/footer.php"?>
