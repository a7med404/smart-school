<template>
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      

      <div class="col col-xl-12 order-xl-2 col-lg-12 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
          

                <!-- ... end Preloader -->
      <div class="container">
        <div class="row">
          <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
            <h2 class="presentation-margin">Form Elements</h2>

            <div class="ui-block">

              <div class="ui-block-content">
                <div class="row">
                  <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group is-empty">
                      <label class="control-label">Default Input</label>
                      <input class="form-control" type="text" placeholder="">
                    </div>
                    <div class="form-group has-success">
                      <label class="control-label">Success Input</label>
                      <input type="text" class="form-control form-control-success">
                    </div>
                    <div class="form-group has-error">
                      <label class="control-label">Error Input</label>
                      <input type="text" class="form-control form-control-danger">
                    </div>
                    <fieldset disabled>
                      <div class="form-group has-disabled">
                        <input type="text" class="form-control" placeholder="Disabled input">
                      </div>
                    </fieldset>

                    <label class="control-label">Dropdown Field</label>
                    <fieldset class="form-group">
                      <select class="form-control select2">
                        <option value="AL">Alabama</option>
                        <option value="2">Oklahoma</option>
                        <option value="WY">Wyoming</option>
                      </select>
                    </fieldset>

                    <h6>Completed Input V2</h6>
                    <div class="form-group">
                      <input class="form-control" type="text" placeholder="James Spiegel">
                    </div>

                    <div class="form-group">
                      <label class="control-label">Input with Icon</label>
                      <input class="form-control" type="text">
                      <i class="fab fa-facebook-f c-facebook" aria-hidden="true"></i>
                    </div>


                    <label class="control-label">Calendar Field</label>
                    <div class="form-group">
                      <input type="text" name="datetimepicker" value="10/24/1984"/>
                      
                        <svg class="olymp-month-calendar-icon icon"><use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-month-calendar-icon"></use></svg>
                      </span>
                    </div>

                    <h6>Switch On</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>

                    <div class="togglebutton">
                      <label class="control-label">
                        <input type="checkbox" checked="">
                      </label>
                    </div>

                    <h6>Switch Off</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    <div class="togglebutton">
                      <label class="control-label">
                        <input type="checkbox">
                      </label>
                    </div>

                  </div>
                </div>
                <div class="row">
                  <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                    <h6>Checkboxes</h6>
                    <div class="form-group">
                      <label class="control-label">
                        <input type="checkbox" name="optionsCheckboxes">
                        Unchecked
                      </label>
                    </div>
                    <div class="form-group">
                      <label class="control-label">
                        <input type="checkbox" name="optionsCheckboxes" checked>
                        Checked
                      </label>
                    </div>
                    <div class="form-group">
                      <label class="control-label">
                        <input type="checkbox" name="optionsCheckboxes" disabled>
                        Disabled Unchecked
                      </label>
                    </div>
                    <div class="form-group">
                      <label class="control-label">
                        <input type="checkbox" name="optionsCheckboxes" disabled checked>
                        Disabled Checked
                      </label>
                    </div>
                  </div>
                  <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                    <h6>Radio Buttons</h6>

                    <div class="radio">
                      <label class="control-label">
                        <input type="radio" name="optionsRadios">
                        Radio is off
                      </label>
                    </div>
                    <div class="radio">
                      <label class="control-label">
                        <input type="radio" name="optionsRadios" checked>
                        Radio is on
                      </label>
                    </div>
                    <div class="radio">
                      <label class="control-label">
                        <input type="radio" name="optionsRadiosDisabled" disabled>
                        Disabled Radio is off
                      </label>
                    </div>
                    <div class="radio">
                      <label class="control-label">
                        <input type="radio" name="optionsRadiosDisabled" checked disabled>
                        Disabled Radio is on
                      </label>
                    </div>

                  </div>

                  <div class="col col-lg-4 col-md-4 col-sm-12 col-12">

                    <h6>Tooltips</h6>
                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                      Tooltip on top
                    </button>
                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                      Tooltip on right
                    </button>
                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                      Tooltip on left
                    </button>
                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                      Tooltip on bottom
                    </button>
                  </div>

                </div>

                <div class="row mb30">
                  <div class="col col-lg-12 col-12">
                    <h6>Upload Buttons</h6>
                  </div>
                  <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="file-upload">
                      <label for="upload" class="file-upload__label">Upload Button</label>
                      <input id="upload" class="file-upload__input" type="file" name="file-upload">
                    </div>
                  </div>
                  <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="file-upload">
                      <label for="upload" class="file-upload__label bg-blue">Upload Button</label>
                      <input id="upload3" class="file-upload__input" type="file" name="file-upload">
                    </div>
                  </div>
                  <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="file-upload">
                      <label for="upload" class="file-upload__label bg-breez">Upload Button</label>
                      <input id="upload1" class="file-upload__input" type="file" name="file-upload">
                    </div>
                  </div>
                  <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="file-upload">
                      <label for="upload" class="file-upload__label bg-green">Upload Button</label>
                      <input id="upload2" class="file-upload__input" type="file" name="file-upload">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col col-lg-12 col-12">
                    <h6>Quantity Input Field</h6>
                  </div>

                  <div class="col col-lg-3 col-md-6 col-sm-12 col-12 mb30">
                    <div class="input-group number-spinner">
                      <span class="input-group-btn data-dwn input-group-prepend">
                        <button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                      </span>
                      <input type="text" class="form-control text-center" value="1" min="0" max="100">
                      <span class="input-group-btn data-up input-group-append">
                        <button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                      </span>
                    </div>
                  </div>

                  <div class="col col-lg-3 col-md-6 col-sm-12 col-12 mb30">
                    <div class="input-group number-spinner number-spinner--secondary">
                      <span class="input-group-btn data-dwn input-group-prepend">
                        <button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                      </span>
                      <input type="text" class="form-control text-center" value="-10" min="-50" max="50">
                      <span class="input-group-btn data-up input-group-append">
                        <button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                      </span>
                    </div>
                  </div>

                  <div class="col col-lg-3 col-md-6 col-sm-12 col-12 mb30">
                    <div class="input-group number-spinner number-spinner--breez">
                      <span class="input-group-btn data-dwn input-group-prepend">
                        <button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                      </span>
                      <input type="text" class="form-control text-center" value="10" min="-40" max="40">
                      <span class="input-group-btn data-up input-group-append">
                        <button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                      </span>
                    </div>
                  </div>

                  <div class="col col-lg-3 col-md-6 col-sm-12 col-12 mb30">
                    <div class="input-group number-spinner number-spinner--green">
                      <span class="input-group-btn data-dwn input-group-prepend">
                        <button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                      </span>
                      <input type="text" class="form-control text-center" value="5" min="0" max="10">
                      <span class="input-group-btn data-up input-group-append">
                        <button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col col-xl-12 col-12">
            <h2 class="presentation-margin">Registration Login Form</h2>
          </div>

          <div class="col col-lg-6 col-md-12 col-sm-12 col-12">


            <!-- Login-Registration Form  -->

            <div class="registration-login-form">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                    <svg class="olymp-login-icon"><use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-login-icon"></use></svg>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                    <svg class="olymp-register-icon"><use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-register-icon"></use></svg>
                  </a>
                </li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
                  <div class="title h6">Register to Olympus</div>
                  <form class="content">
                    <div class="row">
                      <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                          <label class="control-label">First Name</label>
                          <input class="form-control" placeholder="" type="text">
                        </div>
                      </div>
                      <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Last Name</label>
                          <input class="form-control" placeholder="" type="text">
                        </div>
                      </div>
                      <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Your Email</label>
                          <input class="form-control" placeholder="" type="email">
                        </div>
                        <div class="form-group">
                          <label class="control-label">Your Password</label>
                          <input class="form-control" placeholder="" type="password">
                        </div>

                        <div class="form-group">
                          <label class="control-label">Your Birthday</label>
                          <input name="datetimepicker" value="10/24/1984" />
                          
                                  <svg class="olymp-calendar-icon"><use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
  
                        </div>

                        <div class="form-group">
                          <label class="control-label">Your Gender</label>
                          <select class="form-control select2">
                            <option value="MA">Male</option>
                            <option value="FE">Female</option>
                          </select>
                        </div>

                        <div class="remember">
                          <div class="form-group">
                            <label class="control-label">
                              <input name="optionsCheckboxes" type="checkbox">
                              I accept the <a href="#">Terms and Conditions</a> of the website
                            </label>
                          </div>
                        </div>

                        <a href="#" class="btn btn-purple btn-lg full-width">Complete Registration!</a>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="tab-pane" id="profile" role="tabpanel" data-mh="log-tab">
                  <div class="title h6">Login to your Account</div>
                  <form class="content">
                    <div class="row">
                      <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Your Email</label>
                          <input class="form-control" placeholder="" type="email">
                        </div>
                        <div class="form-group">
                          <label class="control-label">Your Password</label>
                          <input class="form-control" placeholder="" type="password">
                        </div>

                        <div class="remember">

                          <div class="form-group">
                            <label class="control-label">
                              <input name="optionsCheckboxes" type="checkbox">
                              Remember Me
                            </label>
                          </div>
                          <a href="#" class="forgot" data-toggle="modal" data-target="#restore-password">Forgot my Password</a>
                        </div>

                        <a href="#" class="btn btn-lg btn-primary full-width">Login</a>

                        <div class="or"></div>

                        <a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fab fa-facebook-f" aria-hidden="true"></i>Login with Facebook</a>

                        <a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fab fa-twitter" aria-hidden="true"></i>Login with Twitter</a>


                        <p>Don’t you have an account? <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <!-- ... end Login-Registration Form  -->
          </div>
          <div class="col col-lg-6 col-md-12 col-sm-12 col-12">


            <!-- Login-Registration Form  -->

            <div class="registration-login-form">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                    <svg class="olymp-login-icon"><use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-login-icon"></use></svg>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                    <svg class="olymp-register-icon"><use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-register-icon"></use></svg>
                  </a>
                </li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
                  <div class="title h6">Register to Olympus</div>
                  <form class="content">
                    <div class="row">
                      <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                          <label class="control-label">First Name</label>
                          <input class="form-control" placeholder="" type="text">
                        </div>
                      </div>
                      <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Last Name</label>
                          <input class="form-control" placeholder="" type="text">
                        </div>
                      </div>
                      <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Your Email</label>
                          <input class="form-control" placeholder="" type="email">
                        </div>
                        <div class="form-group">
                          <label class="control-label">Your Password</label>
                          <input class="form-control" placeholder="" type="password">
                        </div>

                        <div class="form-group">
                          <label class="control-label">Your Birthday</label>
                          <input name="datetimepicker" value="10/24/1984" />
                          
                                  <svg class="olymp-calendar-icon"><use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
  
                        </div>

                        <div class="form-group">
                          <label class="control-label">Your Gender</label>
                          <select class="form-control select2">
                            <option value="MA">Male</option>
                            <option value="FE">Female</option>
                          </select>
                        </div>

                        <div class="remember">
                          <div class="form-group">
                            <label class="control-label">
                              <input name="optionsCheckboxes" type="checkbox">
                              I accept the <a href="#">Terms and Conditions</a> of the website
                            </label>
                          </div>
                        </div>

                        <a href="#" class="btn btn-purple btn-lg full-width">Complete Registration!</a>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="tab-pane" id="profile" role="tabpanel" data-mh="log-tab">
                  <div class="title h6">Login to your Account</div>
                  <form class="content">
                    <div class="row">
                      <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Your Email</label>
                          <input class="form-control" placeholder="" type="email">
                        </div>
                        <div class="form-group">
                          <label class="control-label">Your Password</label>
                          <input class="form-control" placeholder="" type="password">
                        </div>

                        <div class="remember">

                          <div class="form-group">
                            <label class="control-label">
                              <input name="optionsCheckboxes" type="checkbox">
                              Remember Me
                            </label>
                          </div>
                          <a href="#" class="forgot" data-toggle="modal" data-target="#restore-password">Forgot my Password</a>
                        </div>

                        <a href="#" class="btn btn-lg btn-primary full-width">Login</a>

                        <div class="or"></div>

                        <a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fab fa-facebook-f" aria-hidden="true"></i>Login with Facebook</a>

                        <a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fab fa-twitter" aria-hidden="true"></i>Login with Twitter</a>


                        <p>Don’t you have an account? <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <!-- ... end Login-Registration Form  -->
          </div>

          <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
            <h2 class="presentation-margin">News feed form</h2>
            <div class="ui-block">


              <!-- News Feed Form  -->

              <div class="news-feed-form">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active inline-items" data-toggle="tab" href="#home-1" role="tab" aria-expanded="true">

                      <svg class="olymp-status-icon"><use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-status-icon"></use></svg>

                      <span>Status</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link inline-items" data-toggle="tab" href="#profile-1" role="tab" aria-expanded="false">

                      <svg class="olymp-multimedia-icon"><use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-multimedia-icon"></use></svg>

                      <span>Multimedia</span>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link inline-items" data-toggle="tab" href="#blog" role="tab" aria-expanded="false">
                      <svg class="olymp-blog-icon"><use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-blog-icon"></use></svg>

                      <span>Blog Post</span>
                    </a>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="home-1" role="tabpanel" aria-expanded="true">
                    <form role="form">
                      <div class="author-thumb">
                        <img src="modules/master/images/author-page.jpg" alt="author">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Share what you are thinking here...</label>
                        <textarea class="form-control" placeholder=""></textarea>
                      </div>
                      <div class="add-options-message">
                        <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD PHOTOS">
                          <svg class="olymp-camera-icon" data-toggle="modal" data-target="#update-header-photo"><use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-camera-icon"></use></svg>
                        </a>
                        <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
                          <svg class="olymp-computer-icon"><use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>
                        </a>

                        <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD LOCATION">
                          <svg class="olymp-small-pin-icon"><use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-small-pin-icon"></use></svg>
                        </a>

                        <button class="btn btn-primary">Post Status</button>
                        <button   class="btn btn-default">Preview</button>

                      </div>

                    </form>
                  </div>

                  <div class="tab-pane" id="profile-1" role="tabpanel" aria-expanded="true">
                    <form role="form">
                      <div class="author-thumb">
                        <img src="modules/master/images/author-page.jpg" alt="author">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Share what you are thinking hexxddddddre...</label>
                        <textarea class="form-control" placeholder=""  ></textarea>
                      </div>
                      <div class="add-options-message">
                        <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD PHOTOS">
                          <svg class="olymp-camera-icon" data-toggle="modal" data-target="#update-header-photo"><use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-camera-icon"></use></svg>
                        </a>
                        <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
                          <svg class="olymp-computer-icon"><use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>
                        </a>

                        <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD LOCATION">
                          <svg class="olymp-small-pin-icon"><use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-small-pin-icon"></use></svg>
                        </a>

                        <button class="btn btn-primary">Post Status</button>
                        <button   class="btn btn-default">Preview</button>

                      </div>

                    </form>
                  </div>

                  <div class="tab-pane" id="blog" role="tabpanel" aria-expanded="true">
                    <form role="form">
                      <div class="author-thumb">
                        <img src="modules/master/images/author-page.jpg" alt="author">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Share what you are thinking here  ...</label>
                        <textarea class="form-control" placeholder=""  ></textarea>
                      </div>
                      <div class="add-options-message">
                        <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD PHOTOS">
                          <svg class="olymp-camera-icon" data-toggle="modal" data-target="#update-header-photo"><use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-camera-icon"></use></svg>
                        </a>
                        <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
                          <svg class="olymp-computer-icon"><use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>
                        </a>

                        <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD LOCATION">
                          <svg class="olymp-small-pin-icon"><use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-small-pin-icon"></use></svg>
                        </a>

                        <button class="btn btn-primary">Post Status</button>
                        <button   class="btn btn-default">Preview</button>

                      </div>

                    </form>
                  </div>
                </div>
              </div>

              <!-- ... end News Feed Form  -->
            </div>
          </div>

          <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
            <h2 class="presentation-margin">Comments form</h2>
            <div  class="ui-block">


              <!-- Comment Form  -->

              <form class="comment-form inline-items">

                <div class="post__author author vcard inline-items">
                  <img src="modules/master/images/author-page.jpg" alt="author">

                  <div class="form-group with-icon-right ">
                    <textarea class="form-control" placeholder=""></textarea>
                    <div class="add-options-message">
                      <a href="#" class="options-message" data-toggle="modal" data-target="#update-header-photo">
                        <svg class="olymp-camera-icon">
                          <use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-camera-icon"></use>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>

                <button class="btn btn-md-2 btn-primary">Post Comment</button>

                <button class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>

              </form>

              <!-- ... end Comment Form  -->
            </div>
          </div>

          <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
            <h2 class="presentation-margin">Widget form</h2>
            <div class="ui-block">
              <div class="ui-block-content">

                <form role="form">
                  <div class="row">
                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                      <fieldset class="form-group">
                        <label class="control-label">Country and Timezone</label>
                        <select class="form-control select2">
                          <option value="AL">United States (UTC-8)</option>
                          <option value="2">Ontario (UTC−6)</option>
                          <option value="WY">Alberta (UTC−6)</option>
                        </select>
                      </fieldset>

                      <fieldset class="form-group">
                        <label class="control-label">Extended Forecast Days</label>
                        <select class="form-control select2">
                          <option value="AL">Show Next 7 days</option>
                          <option value="2">Show Next 10 days</option>
                          <option value="WY">Show Next 14 days</option>
                        </select>
                      </fieldset>

                      <a href="#" class="btn btn-default full-width">Restore all Attributes</a>
                    </div>

                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                      <fieldset class="form-group">
                        <label class="control-label">Temperature Unit</label>
                        <select class="form-control select2">
                          <option value="AL">F° (Farenheit)</option>
                          <option value="2">C° (Celsius)</option>
                        </select>
                      </fieldset>

                      <div class="switcher-block">
                        <div class="h6 title">Show Extended Forecast on Widget</div>
                        <div class="togglebutton blue">
                          <label class="control-label">
                            <input type="checkbox" checked="">
                          </label>
                        </div>
                      </div>

                      <a href="#" class="btn btn-blue btn-md full-width">حفــظ</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>




      <a class="back-to-top" href="#">
        <img src="modules/master/svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
      </a>


      <!-- Window-popup Restore Password -->

      <div class="modal fade" id="restore-password" tabindex="-1" role="dialog" aria-labelledby="restore-password" aria-hidden="true">
        <div class="modal-dialog window-popup restore-password-popup" role="document">
          <div class="modal-content modal-content-box">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
              <svg class="olymp-close-icon"><use xlink:href="modules/master/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
            </a>

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h6 class="title">Restore your Password</h6>
            </div>

            <div class="modal-body">
              <form  method="get">
                <p>Enter your email and click the send code button. You’ll receive a code in your email. Please use that
                  code below to change the old password for a new one.
                </p>
                <div class="form-group">
                  <label class="control-label">Your Email</label>
                  <input class="form-control" placeholder="" type="email" value="james-spiegel@yourmail.com">
                </div>
                <button class="btn btn-purple btn-lg full-width">Send me the Code</button>
                <div class="form-group">
                  <label class="control-label">Enter the Code</label>
                  <input class="form-control" placeholder="" type="text" value="">
                </div>
                <div class="form-group">
                  <label class="control-label">Your New Password</label>
                  <input class="form-control" placeholder="" type="password" value="olympus">
                </div>
                <button class="btn btn-primary btn-lg full-width">Change your Password!</button>
              </form>

            </div>
          </div>
        </div>
      </div>

        </div>

    </div>
  </div>
  <!-- /page content -->
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
