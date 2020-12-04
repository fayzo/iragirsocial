            
            
            <div class="card card-primary card-outline card-tabs d-sm-block d-md-none">
              <div class="card-header p-0 pt-1 border-bottom-0">
                 <button class="btn btn-success btn-sm  float-right d-md-block d-lg-none"  onclick="togglePopup ( )">close</button>
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active"  data-toggle="pill" href="#login" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">
                        Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#signup" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">
                        Sign-up</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                    <div class="login-card-body">
                        <p class="login-box-msg">Sign in to start your session</p>

                            <div class="input-group mb-3">
                            <input type="email" class="form-control" name="usernameoremail" id="usernameoremail" placeholder="Username Or Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            </div>
                            <div class="input-group mb-3">
                            <input type="password" class="form-control" name="passwordlogin" id="passwordlogin" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-12">
                                <span id="response"></span>
                            </div>
                            <div class="col-8">
                                <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button onclick="javascript:manage('login')" type="button" id="myBtn" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                            <!-- /.col -->
                            </div>
                        <p class="mb-1">
                            <a href="forgot-password.html">I forgot my password</a>
                        </p>
                    </div> <!-- /.login-card-body -->
                  </div> <!-- /.lOGIN -->

                  <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                    
                    <div class="register-card-body">
                    <p class="login-box-msg">Register a new membership</p>

                        <div class="input-group mb-3">
                            <select class="form-control" name="register_as" id="register_as">
                             <option value="">- Who Are you -</option>
                             <option value="Buyer">Buyer</option>
                             <option value="Agent">Agent</option>
                           </select>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control"  id="firstname" placeholder="Firstname">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-user"></span>
                            </div>
                        </div>
                        </div>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" id="lastname" placeholder="Lastname">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-user"></span>
                            </div>
                        </div>
                        </div>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" id="username" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-user"></span>
                            </div>
                        </div>
                        </div>
                        <div class="input-group mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        </div>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" id="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        </div>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" id="verifypassword" placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-12">
                            <span id="responseSignup"></span>
                        </div>
                        <div class="col-8">
                            <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                            I agree to the <a href="#">terms</a>
                            </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button  onclick="javascript:signup('signup')" type="button" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                        </div>

                  </div>
                </div>
              </div>
              <!-- /.card-BODY -->
            </div> <!-- /.card -->
