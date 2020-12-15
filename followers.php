
<!-- < ?php include "header_navbar_footer/header_if_login.php"?> -->
<?php include "header_navbar_footer/Get_usernameProfile.php"?>
<title><?php echo $profileData['username'].' your followers'; ?></title>
<?php include "header_navbar_footer/header.php"?>


      <!-- Main content -->
      <section class="content">
        <div class="container-fuild">
          <div class="row">
              <div class="col-12">
                <div class="card card-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <?php if (!empty($profileData['cover_img'])) { ?>
                        <div class="widget-user-header text-white"
                            style="background: url('<?php echo BASE_URL_LINK."image/users_cover_profile/".$profileData['cover_img'] ;?>')no-repeat center center;background-size:cover;">
                    <?php }else{ ?>
                        <div class="widget-user-header text-white"
                            style="background: url('<?php echo BASE_URL_LINK.NO_COVER_IMAGE_URL ;?>')no-repeat center center;background-size:cover;">
                  <?php  } ?>
                        <h3 class="widget-user-username"><?php echo $profileData['username'] ;?></h3> <!-- Elizabeth Pierce -->
                        <h5 class="widget-user-desc">Web Designer</h5>
                    </div>
                    <div class="widget-user-image">
                        <?php if (!empty($profileData['profile_img'])) {?>
                        <img class="rounded-circle" src="<?php echo BASE_URL_LINK ;?>image/users_profile_cover/<?php echo $profileData['profile_img'];?>"
                            alt="User Avatar">
                        <?php  }else{ ?>
                        <img class="rounded-circle" src="<?php echo BASE_URL_LINK.NO_PROFILE_IMAGE_URL ;?>" alt="User Avatar">
                        <?php } ?>
                    </div>

                    <div class="widget-user-image-under">
                    </div>
                    <div class="card-footer">
                        <div class="description">
                            <h5 class="description-header count-followers"><?php echo $profileData['followers']; ?></h5>
                            <span class="description-text"><a href="<?php echo BASE_URL_PUBLIC.$profileData['username'].'.followers' ;?>">FOLLOWERS</a></span>
                        </div>
                        <!-- /.description-block -->
                        <div class="description ">
                            <h5 class="description-header count-following"><?php echo $profileData['following']; ?></h5>
                            <span class="description-text"><a href="<?php echo BASE_URL_PUBLIC.$profileData['username'].'.following' ;?>"> FOLLOWING</a></span>
                        </div>
                        <!-- /.description-block -->
                        <div class="description">
                            <h5 class="description-header"> <?php echo $home->countsPosts($profileData['user_id']);?></h5>
                            <span class="description-text"><a href="<?php echo BASE_URL_PUBLIC.$profileData['username'].'.posts' ;?>"> POSTS</a></span>
                        </div>
                        <!-- /.description-block -->
                        <!-- /.description-block -->
                        <div class="description">
                            <h5 class="description-header"> <?php echo $home->countsLike($profileData['user_id']);?></h5>
                            <span class="description-text">LIKES</span>
                        </div>
                        <!-- /.description-block -->
                        <div class="description">
                            <h5 class="description-header"><?php echo $profileData['countViewin_profile'] ;?></h5>
                            <span class="description-text">VIEWS</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.footer -->
                </div>
                <!-- /. card widget-user -->
            </div>
            <!-- column -->
          </div>
          <!-- row -->
      </div>
      </section>
      <section class="content-header">
        <div class="row">
            <div class="col-3">
                <h1><i>Followers</i></h1>
            </div>
            <div class="col-9">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php if (isset($_SESSION['key'])){ echo HOME ; }else{ echo LOGIN; } ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php if (isset($_SESSION['key'])){ echo BASE_URL_PUBLIC.$profileData['username'].'.album' ; }else{ echo LOGIN; } ?>">Photo</i></a></li>
                    <?php if (isset($_SESSION['key'])){ ?>
                      <?php if ($profileData['user_id'] != $_SESSION['key']) { ?>
                    <li class="breadcrumb-item"><span class="people-message more" data-user="<?php echo $profileData['user_id'];?>"><a href="javascript:void(0);" ><i style="font-size: 20px;" class="fa fa-envelope-o"></i> Message </a></span></li>
                    <?php } } ?>
                    <li class="breadcrumb-item active"><i> <?php echo $follow->followBtn($profileData['user_id'],$user_id,$profileData['user_id']) ;?></i></li>
                </ol>
            </div>
          </div>
      </section>
      <!-- Main content -->
      <section class="content">

        <div class="row">
          <div class="col-md-3 mb-3 d-none d-md-block">
            <?php echo $home->userProfile($profileData['user_id']); ?>

            
            <div class="sticky-tops" style="top: 52px;">
                  <?php echo $trending->trends(); ?>
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
          <div class="col-md-6">
                <div class="row">
                <?php $follow->FollowersLists($profileData['user_id'],$user_id,$profileData['user_id']); ?>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-md-6 -->

          <div class="col-md-3 d-none d-md-block">
            <?php $follow->whoTofollow($profileData['user_id'],$profileData['user_id'])?>

            <div class="sticky-top " style="top: 52px;">
              <!-- hastTag Me Box -->
                <!-- jobs -->
                <!-- < ?php echo $home->jobsfetch() ;?> -->
                <!-- jobs -->
            </div>
          </div>
          <!-- col -->
        </div>
        <!-- row -->

      </section>
      <!-- /.content -->

<?php include "header_navbar_footer/footer.php"?>