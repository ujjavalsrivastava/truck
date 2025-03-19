<!doctype html>
<html lang="en">



<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/jquery-ui.css')}}" rel="stylesheet">
    <!-- Bootstrap Icon CSS -->
    <link href="{{asset('assets/css/bootstrap-icons.css')}}" rel="stylesheet">
    <!-- Fontawesome all CSS -->
    <link href="{{asset('assets/css/all.min.css')}}" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet">
    <!-- FancyBox CSS -->
    <link href="{{asset('assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fontawesome CSS -->
    <link href="{{asset('assets/css/fontawesome.min.css')}}" rel="stylesheet">
    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
    <!-- Slick slider CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}">
    <!-- Magnific-popup CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- BoxIcon  CSS -->
    <link href="{{asset('assets/css/boxicons.min.css')}}" rel="stylesheet">
    <!-- Select2  CSS -->
    <link href="{{asset('assets/css/nice-select.css')}}" rel="stylesheet">
    <!--  Style CSS  -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Title -->
    <title>  @yield('title')</title>
    <link rel="icon" href="{{asset('assets/img/sm-logo.svg')}}" type="image/gif" sizes="20x20">
    <style>
.alert {
    z-index: 9999999;
    top: 3px;
    position: absolute;
    right: 3px;
    width: 31%;
}

.small-popup {
  max-width: 300px !important;
  padding: 10px !important;
  font-size: 9px !important;
}
        </style>
  
</head>

<body class="tt-magic-cursor">
    <!-- Preloader Start -->
   

    <!-- Modals -->
    <div class="modal signUp-modal fade" id="signUpModal01" tabindex="-1" aria-labelledby="signUpModal01Label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="signUpModal01Label">Sign Up</h4>
                    <p>Already have an account? <button type="button" data-bs-toggle="modal" id="signUpModal" data-bs-target="#logInModal01">Log In</button></p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="bi bi-x"></i></button>
                </div>
                <div class="modal-body">
                    <form id="signupFrom">
                        <div class="row g-4">
                            <div class="col-md-12">
                                <div class="form-inner">
                                    <label>Full Name*</label>
                                    <input type="text" name="name" placeholder="Daniel">
                                </div>
                            </div>
                          
                            <div class="col-md-12">
                                <div class="form-inner">
                                    <label>Enter your email address*</label>
                                    <input type="email" name="email" placeholder="Type email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-inner"> 
                                    <label>Password*</label>
                                    <input id="password" type="password" name="password" placeholder="*** ***">
                                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-inner">
                                    <label>Confirm Password*</label>
                                    <input id="password2" type="password" name="password_confirmation" placeholder="*** ***">
                                    <i class="bi bi-eye-slash" id="togglePassword2"></i>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-inner">
                                    <button class="primary-btn2" type="submit">Sign Up Now</button>
                                </div>
                            </div>
                            
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <div class="modal signUp-modal fade" id="resetPasswordModal01" tabindex="-1" aria-labelledby="resetPasswordModal01Label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="logInModal01Label">Reset Password </h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="bi bi-x"></i></button>
                </div>
                <div class="modal-body">
                    <form id="resetPasswordFrom">
                        <div class="row g-4">
                            <div class="col-md-12">
                                <div class="form-inner">
                                    <label>Enter your email address*</label>
                                    <input type="email" name="email" placeholder="Type email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-inner">
                                    <label>OTP</label>
                                    <input type="number" name="resetCode" placeholder="Type OTP">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-inner">
                                    <label>Password</label>
                                    <input type="text" name="password" placeholder="Type password">
                                </div>
                            </div>
                             <div class="col-md-12">
                                <div class="form-inner">
                                    <button class="primary-btn2" type="submit">Log In</button>
                                </div>
                            </div>
                            
                        </div>
                        
                       
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal signUp-modal fade" id="ForgotModal01" tabindex="-1" aria-labelledby="ForgotModal01Label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="logInModal01Label">Forgot </h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="bi bi-x"></i></button>
                </div>
                <div class="modal-body">
                    <form id="forgotFrom">
                        <div class="row g-4">
                            <div class="col-md-12">
                                <div class="form-inner">
                                    <label>Enter your email address*</label>
                                    <input type="email" name="email" placeholder="Type email">
                                </div>
                            </div>
                            <input type="hidden" name="resetCode" value="{{rand(100000,999999)}}">
                         
                            <div class="col-md-12">
                                <div class="form-inner">
                                    <button class="primary-btn2" type="submit">Log In</button>
                                </div>
                            </div>
                            
                        </div>
                        
                       
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal signUp-modal fade" id="logInModal01" tabindex="-1" aria-labelledby="logInModal01Label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="logInModal01Label">Log In</h4>
                    <p>Don’t have any account? <button type="button" id="logInModal" data-bs-toggle="modal" data-bs-target="#signUpModal01">Sign Up</button></p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="bi bi-x"></i></button>
                </div>
                <div class="modal-body">
                    <form id="loginFrom">
                        <div class="row g-4">
                            <div class="col-md-12">
                                <div class="form-inner">
                                    <label>Enter your email address*</label>
                                    <input type="email" name="email" placeholder="Type email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-inner"> 
                                    <label>Password*</label>
                                    <input id="password3" type="password" name="password" placeholder="*** ***">
                                    <i class="bi bi-eye-slash"  id="togglePassword3"></i>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                    <div class="form-group">
                                        <input type="checkbox" id="html">
                                        <label for="html">Remember Me</label>
                                    </div>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#ForgotModal01" class="forgot-pass">Forget Password?</a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-inner">
                                    <button class="primary-btn2" type="submit">Log In</button>
                                </div>
                            </div>
                            
                        </div>
                        
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal signUp-modal sell-with-us fade" id="sellUsModal01" tabindex="-1" aria-labelledby="sellUsModal01Label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="sellUsModal01Label">Sell Your Car</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="bi bi-x"></i></button>
                </div>
                <div class="modal-body">
                    <form id="sell-my-car" enctype="multipart/form-data">
                        <!-- <div class="row">
                            <div class="col-lg-12 mb-15">
                                <h5>Your Personal Info</h5>
                            </div>
                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label>Full Name*</label>
                                    <input type="text" placeholder="Full Name*">
                                </div>
                            </div>
                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label>Phone*</label>
                                    <input type="text" placeholder="+880- 123 234 ***">
                                </div>
                            </div>
                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label>Email (Optional)</label>
                                    <input type="text" placeholder="Enter your email address">
                                </div>
                            </div>
                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label>Location*</label>
                                    <input type="text" placeholder="Enter your address">
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-lg-12 mb-15 mt-25">
                                <h5>Your Car Info</h5>
                            </div>
                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label>Car Brand Name*</label>
                                    <input type="text" name="name" placeholder="Toyota">
                                </div>
                            </div>
                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label>Model*</label>
                                    <input type="text" name="model" placeholder="RS eTN 80">
                                </div>
                            </div>
                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label>Reg. Year*</label>
                                    <input type="text" name="year" placeholder="2022">
                                </div>
                            </div>
                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label>make*</label>
                                    <input type="text" name="make" placeholder="Q23">
                                </div>
                            </div>
                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label>Truck Type*</label>
                                    <select name="truckType">
                                        <option value="">select otion</option>
                                        

                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label>Condition*</label>
                                    <select name="condition">
                                        <option value="">select option</option>
                                        <option value="new">new</option>
                                        <option value="used">used</option>
                                        

                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label>Selling Price*</label>
                                    <input type="number" name="price" placeholder="Ex- 23,342.000">
                                </div>
                            </div>
                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label>vin*</label>
                                    <input type="text" name="vin" placeholder="45254354">
                                </div>
                            </div>

                            <div class="col-md-12 mb-20">
                                <div class="form-inner">
                                    <label>Image*</label>
                                    <input type="file" id="images" name="images"  multiple placeholder="45254354">
                                </div>
                            </div>
                          
                            <div class="col-lg-12">
                                <div class="form-inner">
                                    <button class="primary-btn2" type="submit">Submit Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Advance-search-modal -->
    <div class="modal adSearch-modal fade" id="adSearchModal01" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="bi bi-x"></i></button>
                <div class="modal-body">
                    <form>
                        <h5 class="main-title">Advanced Option</h5>
                        <div class="row">
                            <div class="col-md-12 mb-30">
                                <div class="form-inner">
                                    <select>
                                        <option value="1">Sydne City, Australia</option>
                                        <option value="2">Dhaka, Bangladesh</option>
                                        <option value="3">Tokyo, Japan</option>
                                    </select>
                                </div>
                            </div>
                            <h5>More Filter</h5>
                            <div class="row mb-10">
                                <div class="col-md-6 mb-20">
                                    <div class="form-inner">
                                        <label>Select Brand </label>
                                        <select>
                                            <option value="1"> Mercedes Benz</option>
                                            <option value="2">Volkswagen</option>
                                            <option value="3">Mitsubishi</option>
                                            <option value="4 ">Tesla</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <div class="form-inner">
                                        <label>Select Body Type</label>
                                        <select>
                                            <option value="1">Hatchback</option>
                                            <option value="2">Covertible</option>
                                            <option value="3">Coupe </option>
                                            <option value="4 ">Truck</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <div class="form-inner">
                                        <label>Select Fuel Type </label>
                                        <select>
                                            <option value="1"> Petrol + Gas</option>
                                            <option value="2">Petrol</option>
                                            <option value="3">Gas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <div class="form-inner">
                                        <label>Steering Side</label>
                                        <select>
                                            <option value="1">Left</option>
                                            <option value="2">Right</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <div class="form-inner">
                                        <label>Select Color</label>
                                        <select>
                                            <option value="1">Yellow</option>
                                            <option value="2">Brown</option>
                                            <option value="3">Red</option>
                                            <option value="4">Silver</option>
                                            <option value="5">Orange</option>
                                            <option value="6">Blue</option>
                                            <option value="7">Gray</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <div class="form-inner">
                                        <label>Select Doors</label>
                                        <select>
                                            <option value="1">03 doors</option>
                                            <option value="2">04 doors</option>
                                            <option value="3">06 doors</option>
                                            <option value="4 ">08 doors</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <h5>Year & Mileage</h5>
                            <div class="row">
                                <div class="col-md-6 mb-20">
                                    <div class="form-inner">
                                        <label>Select Year </label>
                                        <select>
                                            <option value="1">2021</option>
                                            <option value="2">2020</option>
                                            <option value="3">2019</option>
                                            <option value="4 ">2018</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-20">
                                    <div class="form-inner">
                                        <label>Select Min (miles)</label>
                                        <select>
                                            <option value="1">800 miles</option>
                                            <option value="2">1500 miles</option>
                                            <option value="3">2000 miles</option>
                                            <option value="4 ">2500 miles</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-20">
                                    <div class="form-inner">
                                        <label>Select Max (miles)</label>
                                        <select>
                                            <option value="1">1200 miles</option>
                                            <option value="2">3000 miles</option>
                                            <option value="3">3500 miles</option>
                                            <option value="4 ">4000 miles</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mb-20">Price Range</h5>
                            <div class="row">
                                <div class="col-lg-6 mb-20">
                                    <div class="range-wrapper2">
                                        <div class="slider-wrapper">
                                          <div id="eg-range-slider"></div>
                                        </div> 
                                        <div class="valus">
                                            <div class="min-value">
                                                <span>$</span>
                                                <input type="text" class="from" value="200"/>
                                            </div>
                                            <div class="min-value">
                                                <span>$</span>
                                                <input type="text" class="to" value="2000"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-20">
                                    <div class="form-inner">
                                        <label>Min (Price)</label>
                                        <select>
                                            <option value="1">$2,234</option>
                                            <option value="2">$3,234</option>
                                            <option value="3">$4,234</option>
                                            <option value="4 ">$5,234</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-20">
                                    <div class="form-inner">
                                        <label>Max (Price)</label>
                                        <select>
                                            <option value="1">$12,234</option>
                                            <option value="2">$13,234</option>
                                            <option value="3">$14,234</option>
                                            <option value="4 ">$15,234</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="apply-btn pt-30">
                            <button class="primary-btn2" type="submit">Apply Filter</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <div class="sidebar-menu">
        <div class="mobile-logo-area d-flex justify-content-between align-items-center">
            <div class="mobile-logo-wrap">
                <a href="index.html"><img alt="image" src="{{asset('assets/img/sb-logo.svg')}}"></a>
            </div>
            <div class="menu-button menu-close-btn">
                <i class="bi bi-x"></i>
            </div>
        </div>
        <ul class="menu-list">
            <li class="menu-item-has-children active">
                <a href="{{url('/')}}" class="drop-down">Home</a><i class="bi bi-plus dropdown-icon"></i>
                <!-- <ul class="sub-menu">
                    <li><a href="index.html">Home 01</a></li>
                    <li><a href="index2.html">Home 02</a></li>
                    <li><a href="index3.html">Home 03</a></li>
                    <li><a href="index4.html">Home 04</a></li>
                    <li><a href="index5.html">Home 05</a></li>
                    <li><a href="index6.html">Home 06</a></li>
                </ul> -->
            </li>
            <li class="position-inherit">
                <a href="{{url('/sell-my-car')}}" >Inventory</a>
                
            </li>
            <li class="position-inherit">
                <a href="{{url('/price')}}" class="drop-down">Pricing Plans</a>
     
            </li>
            <li class="menu-item-has-children">
                <a href="#" class="drop-down">Dealers List</a><i class="bi bi-plus dropdown-icon"></i>
          
            </li>
           
        </ul>
        <div class="topbar-right">
            <button class="sell-btn" type="button" data-bs-toggle="modal" data-bs-target="#sellUsModal01">
                <svg width="16" height="16" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.5588 0C17.447 0.00287726 17.3409 0.0492946 17.2629 0.129351L15.4245 1.97099L14.8707 1.4164C14.5627 1.10919 14.2078 0.938606 13.8585 0.928904C13.6483 0.923245 13.4543 0.953158 13.2231 0.985496L10.2237 1.40265C9.12021 1.55626 8.55995 2.02839 7.84852 2.69132L0.470643 9.56715C0.467641 9.5698 0.464677 9.5725 0.46175 9.57523C0.142414 9.89053 0.00416943 10.3206 0.000127199 10.7442C-0.00472348 11.1679 0.12867 11.6166 0.484386 11.9205L0.460133 11.8971L6.10309 17.5417L6.08045 17.5174C6.38443 17.8731 6.8323 18.0057 7.25674 18.0009C7.68036 17.9968 8.11127 17.8586 8.42575 17.54C8.42849 17.5368 8.43119 17.5336 8.43384 17.5303L8.94073 16.9863L10.9586 17.7381C11.1627 17.8161 11.3805 17.8522 11.5988 17.8442C11.8172 17.8361 12.0317 17.7841 12.2295 17.6912C12.6135 17.5109 12.9474 17.2062 13.101 16.7858L15.3161 10.1452C15.9758 9.4378 16.4455 8.87674 16.5983 7.77725L17.0155 4.77792C17.0478 4.5467 17.0777 4.35186 17.0721 4.14248C17.0624 3.79323 16.8926 3.43913 16.5846 3.1303L16.03 2.57652L17.87 0.736494C17.932 0.676327 17.9743 0.598838 17.9915 0.51419C18.0086 0.429542 17.9998 0.341686 17.9661 0.262143C17.9325 0.182601 17.8756 0.115085 17.8029 0.0684494C17.7302 0.0218141 17.6451 -0.00176348 17.5588 0.000808484V0ZM13.8351 1.78505C14.0032 1.78909 14.0372 1.79394 14.2643 2.02192L14.8189 2.57571L13.8351 3.5604C13.6631 3.47636 13.4743 3.43241 13.2829 3.43185C12.5779 3.43185 11.9967 4.01393 11.9967 4.71809C11.9967 5.42306 12.5779 6.00352 13.2821 6.00352C13.9871 6.00352 14.5683 5.42306 14.5683 4.71809C14.5683 4.52083 14.5214 4.33408 14.4406 4.16592L15.4245 3.18123L15.9783 3.73583C16.2062 3.963 16.2111 3.99696 16.2151 4.16431C16.2104 4.33015 16.1942 4.49547 16.1666 4.65907L15.7503 7.65841C15.6209 8.58812 15.342 8.85976 14.6831 9.56796L7.81537 16.9369C7.70462 17.0493 7.47583 17.1407 7.24704 17.1431C7.01825 17.1463 6.8226 17.0647 6.73286 16.9596C6.72537 16.9512 6.71755 16.9431 6.70942 16.9353L1.06647 11.2908C1.05869 11.2826 1.0506 11.2748 1.04221 11.2673C0.937116 11.1784 0.854655 10.9819 0.857888 10.7531C0.860314 10.5252 0.951668 10.2956 1.06404 10.1848L8.43303 3.31786C9.14123 2.65817 9.41286 2.38006 10.3426 2.25071L13.3419 1.83356C13.5731 1.80122 13.7348 1.78181 13.8351 1.78505ZM13.2829 4.28881C13.5246 4.28881 13.7114 4.47637 13.7114 4.71809C13.7114 4.95982 13.5246 5.14657 13.2829 5.14657C13.0404 5.14657 12.8544 4.95982 12.8544 4.71809C12.8544 4.47637 13.0404 4.28881 13.2829 4.28881ZM5.99314 8.99881C5.90784 8.99872 5.82446 9.0241 5.75367 9.07168C5.68288 9.11926 5.6279 9.18689 5.59578 9.2659C5.56365 9.34492 5.55584 9.43172 5.57334 9.5152C5.59084 9.59868 5.63286 9.67504 5.69401 9.7345L8.26568 12.3054C8.6699 12.7096 9.27624 12.1032 8.87201 11.699L6.30035 9.12816C6.26038 9.08717 6.2126 9.05461 6.15984 9.03239C6.10707 9.01017 6.05039 8.99876 5.99314 8.99881ZM4.70771 10.2834C4.62224 10.2832 4.53865 10.3085 4.46769 10.3561C4.39672 10.4037 4.34161 10.4715 4.30945 10.5507C4.27729 10.6299 4.26955 10.7168 4.28721 10.8005C4.30488 10.8841 4.34714 10.9605 4.40858 11.0199L6.98025 13.5908C7.38447 14.0217 8.01749 13.3879 7.58658 12.9845L5.01573 10.4144C4.9758 10.373 4.92795 10.3401 4.87503 10.3176C4.82212 10.2951 4.76521 10.2835 4.70771 10.2834ZM13.9094 11.6537L12.2958 16.4907C12.2408 16.6386 12.071 16.8181 11.8641 16.9151C11.6571 17.0121 11.4493 17.0097 11.32 16.9612L9.57213 16.3072L13.9094 11.6537Z" />
                </svg> SELL WITH US                 
            </button>
            <a href="#">
                <svg width="16" height="16" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z"></path>
                </svg>
                SAVE
            </a>
            <div >
            <button type="button" class="primary-btn3" data-bs-toggle="modal" data-bs-target="#signUpModal01">
                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M14.4311 12.759C15.417 11.4291 16 9.78265 16 8C16 3.58169 12.4182 0 8 0C3.58169 0 0 3.58169 0 8C0 12.4182 3.58169 16 8 16C10.3181 16 12.4058 15.0141 13.867 13.4387C14.0673 13.2226 14.2556 12.9957 14.4311 12.759ZM13.9875 12C14.7533 10.8559 15.1999 9.48009 15.1999 8C15.1999 4.02355 11.9764 0.799983 7.99991 0.799983C4.02355 0.799983 0.799983 4.02355 0.799983 8C0.799983 9.48017 1.24658 10.8559 2.01245 12C2.97866 10.5566 4.45301 9.48194 6.17961 9.03214C5.34594 8.45444 4.79998 7.49102 4.79998 6.39995C4.79998 4.63266 6.23271 3.19993 8 3.19993C9.76729 3.19993 11.2 4.63266 11.2 6.39995C11.2 7.49093 10.654 8.45444 9.82039 9.03206C11.5469 9.48194 13.0213 10.5565 13.9875 12ZM13.4722 12.6793C12.3495 10.8331 10.3188 9.59997 8.00008 9.59997C5.68126 9.59997 3.65049 10.8331 2.52776 12.6794C3.84829 14.2222 5.80992 15.2 8 15.2C10.1901 15.2 12.1517 14.2222 13.4722 12.6793ZM8 8.79998C9.32551 8.79998 10.4 7.72554 10.4 6.39995C10.4 5.07444 9.32559 3.99992 8 3.99992C6.6744 3.99992 5.59997 5.07452 5.59997 6.40003C5.59997 7.72554 6.67449 8.79998 8 8.79998Z" />
                </svg>
                SIGN UP                    
            </button>
           </div>
        </div>
        <div class="hotline-area d-flex">
            <div class="icon">
                <svg width="26" height="27" viewBox="0 0 26 27" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.5365 14.7303C12.5652 14.7257 11.6003 14.5735 10.6748 14.2788C9.94838 14.0358 9.29948 13.6044 8.79429 13.0286C8.28911 12.4529 7.94573 11.7534 7.79922 11.0016C7.47293 9.43032 8.06788 7.76895 9.43026 6.44297C9.57662 6.30051 9.7287 6.16404 9.88612 6.03391C10.5733 5.45852 11.3903 5.05903 12.2664 4.86992C13.1425 4.6808 14.0515 4.70775 14.9149 4.94843C15.7429 5.21282 16.4688 5.72699 16.9929 6.42036C17.5171 7.11374 17.8138 7.95233 17.8424 8.82106C17.906 9.84579 17.572 10.8556 16.9099 11.6403C16.6595 11.9557 16.3269 12.196 15.9488 12.3349C15.5708 12.4737 15.1617 12.5056 14.7667 12.4272C14.6037 12.3934 14.4491 12.327 14.3124 12.2321C14.1756 12.1371 14.0594 12.0156 13.9707 11.8747C13.891 11.7379 13.8399 11.5863 13.8202 11.4292C13.8006 11.2721 13.8128 11.1127 13.8563 10.9604C14.2354 9.52782 14.6206 7.35079 14.6245 7.32912C14.6344 7.27307 14.6553 7.21952 14.6859 7.17152C14.7165 7.12353 14.7562 7.08203 14.8029 7.04939C14.8495 7.01676 14.9021 6.99363 14.9577 6.98133C15.0133 6.96903 15.0707 6.96779 15.1268 6.97769C15.1828 6.9876 15.2364 7.00844 15.2844 7.03904C15.3324 7.06964 15.3739 7.10939 15.4065 7.15602C15.4391 7.20266 15.4623 7.25527 15.4746 7.31084C15.4869 7.36641 15.4881 7.42387 15.4782 7.47992C15.4622 7.57048 15.0826 9.71458 14.6943 11.1818C14.6806 11.2221 14.6753 11.2647 14.6787 11.3071C14.682 11.3495 14.694 11.3908 14.7138 11.4284C14.7738 11.5112 14.8642 11.5669 14.9651 11.5831C15.2071 11.6235 15.4554 11.597 15.6834 11.5065C15.9114 11.416 16.1103 11.2649 16.2586 11.0696C16.7728 10.4546 17.0303 9.66518 16.9779 8.86526C16.9573 8.17371 16.7231 7.5055 16.3075 6.95233C15.892 6.39916 15.3155 5.98813 14.657 5.77565C13.9317 5.57612 13.1686 5.55608 12.4338 5.71726C11.6989 5.87843 11.0143 6.21599 10.439 6.7008C10.2999 6.8165 10.1643 6.93739 10.0343 7.06393C9.36093 7.71912 8.28498 9.07889 8.64767 10.8252C8.76741 11.4247 9.04172 11.9826 9.44341 12.4435C9.8451 12.9044 10.3602 13.2524 10.9378 13.4529C12.9701 14.1011 15.8907 14.1796 17.429 12.2664C17.5019 12.1798 17.6058 12.1251 17.7185 12.114C17.8312 12.103 17.9438 12.1365 18.0321 12.2074C18.1203 12.2783 18.1774 12.381 18.1909 12.4934C18.2045 12.6058 18.1735 12.7191 18.1046 12.809C16.9667 14.2242 15.2351 14.7303 13.5365 14.7303Z" />
                    <path
                        d="M12.0531 12.4839C11.595 12.4919 11.1481 12.3418 10.7878 12.0588C9.9562 11.3933 9.93324 10.2367 10.1664 9.44935C10.2452 9.18719 10.3505 8.93369 10.4814 8.69319C10.8065 8.03717 11.3264 7.49763 11.9699 7.14839C12.3602 6.94593 12.8052 6.87437 13.2393 6.94429C13.6734 7.0142 14.0735 7.22188 14.3805 7.53665C14.6932 7.87932 14.9287 8.28509 15.0712 8.72656C15.107 8.83416 15.0992 8.95151 15.0495 9.05343C14.9998 9.15536 14.9121 9.23373 14.8052 9.27173C14.6984 9.30972 14.5809 9.30432 14.478 9.25668C14.3751 9.20903 14.295 9.12295 14.2548 9.01689C14.1521 8.69084 13.9813 8.39029 13.7539 8.13507C13.5751 7.95216 13.3414 7.83271 13.0884 7.79492C12.8354 7.75714 12.577 7.80309 12.3525 7.92577C11.8699 8.19795 11.4821 8.61118 11.241 9.11005C11.1398 9.29704 11.058 9.49394 10.9971 9.69765C10.8285 10.267 10.8658 11.0106 11.3303 11.3824C11.8381 11.7906 12.6953 11.6181 13.1776 11.2022C13.5368 10.8785 13.8454 10.5029 14.0932 10.0876C14.1232 10.0393 14.1624 9.99729 14.2087 9.96409C14.2549 9.93089 14.3073 9.90712 14.3627 9.89414C14.4181 9.88117 14.4756 9.87923 14.5317 9.88845C14.5879 9.89768 14.6417 9.91787 14.6901 9.94789C14.7384 9.97791 14.7804 10.0172 14.8136 10.0634C14.8468 10.1096 14.8706 10.162 14.8836 10.2174C14.8966 10.2728 14.8985 10.3303 14.8893 10.3864C14.88 10.4426 14.8598 10.4964 14.8298 10.5448C14.5361 11.0339 14.1705 11.4761 13.7452 11.8565C13.2714 12.2563 12.673 12.4782 12.0531 12.4839Z" />
                    <path
                        d="M24.7001 26.0015H1.30047C0.955797 26.0012 0.625342 25.8641 0.381624 25.6204C0.137905 25.3767 0.00083252 25.0462 0.000488366 24.7015V8.66847C0.000436861 8.58609 0.0238662 8.50541 0.0680306 8.43587C0.112195 8.36634 0.175264 8.31083 0.249847 8.27586C0.32443 8.24089 0.407436 8.2279 0.489137 8.23842C0.570838 8.24893 0.647849 8.28252 0.711144 8.33524L11.3432 17.1716C11.8096 17.557 12.3957 17.7678 13.0007 17.7678C13.6057 17.7678 14.1918 17.557 14.6582 17.1716L25.2894 8.33481C25.3527 8.28206 25.4298 8.24847 25.5115 8.23797C25.5933 8.22747 25.6763 8.24049 25.7509 8.27552C25.8255 8.31054 25.8886 8.36612 25.9327 8.43571C25.9768 8.50531 26.0002 8.58606 26.0001 8.66847V24.7015C25.9997 25.0462 25.8627 25.3767 25.6189 25.6204C25.3752 25.8641 25.0448 26.0012 24.7001 26.0015ZM0.867141 9.59189V24.7015C0.867141 24.9407 1.06127 25.1349 1.30047 25.1349H24.7001C24.815 25.1349 24.9252 25.0892 25.0065 25.008C25.0878 24.9267 25.1334 24.8165 25.1334 24.7015V9.59189L15.2111 17.8381C14.5891 18.3521 13.8075 18.6334 13.0007 18.6335C12.1938 18.6337 11.412 18.3527 10.7899 17.839L0.867141 9.59189Z" />
                    <path
                        d="M0.434172 9.10179C0.342147 9.10197 0.252454 9.07285 0.178087 9.01864C0.103719 8.96444 0.0485401 8.88797 0.020542 8.8003C-0.00745601 8.71264 -0.00681877 8.61834 0.0223615 8.53106C0.0515417 8.44379 0.10775 8.36807 0.182842 8.31487L4.08278 5.55025C4.17656 5.48377 4.29291 5.45726 4.40623 5.47656C4.51955 5.49586 4.62057 5.55939 4.68705 5.65316C4.75354 5.74694 4.78005 5.86329 4.76075 5.97662C4.74145 6.08994 4.67792 6.19095 4.58414 6.25744L0.684201 9.02206C0.611181 9.074 0.52378 9.10187 0.434172 9.10179ZM25.5662 9.10179C25.4766 9.10187 25.3892 9.074 25.3162 9.02206L21.4163 6.25744C21.3235 6.19062 21.2609 6.08984 21.242 5.97706C21.2232 5.86427 21.2498 5.74862 21.3159 5.65531C21.382 5.56201 21.4823 5.4986 21.5949 5.47892C21.7075 5.45924 21.8234 5.48488 21.9172 5.55025L25.8171 8.31487C25.8922 8.36802 25.9483 8.44367 25.9775 8.53086C26.0067 8.61805 26.0075 8.71227 25.9796 8.79989C25.9517 8.88751 25.8966 8.96399 25.8224 9.01826C25.7482 9.07253 25.6582 9.10179 25.5662 9.10179ZM17.0041 3.03522C16.9144 3.0353 16.8269 3.00744 16.7537 2.95549L14.6824 1.48651C14.2165 1.09272 13.6271 0.874976 13.0171 0.871254C12.4071 0.867532 11.8151 1.07807 11.3445 1.46615L9.24716 2.95549C9.15339 3.02198 9.03704 3.04848 8.92371 3.02918C8.81039 3.00988 8.70937 2.94635 8.64289 2.85258C8.57641 2.7588 8.5499 2.64245 8.5692 2.52912C8.5885 2.4158 8.65203 2.31479 8.74581 2.2483L10.8171 0.779325C11.4376 0.271931 12.2154 -0.00360176 13.017 3.55561e-05C13.8186 0.00367287 14.5938 0.286253 15.2097 0.799258L17.255 2.2483C17.3301 2.3015 17.3863 2.37722 17.4155 2.46449C17.4447 2.55177 17.4453 2.64607 17.4173 2.73373C17.3893 2.8214 17.3342 2.89787 17.2598 2.95207C17.1854 3.00628 17.0957 3.0354 17.0037 3.03522H17.0041ZM0.715401 25.7675C0.626173 25.7677 0.539066 25.7403 0.465979 25.6891C0.392892 25.638 0.337387 25.5655 0.307046 25.4815C0.276706 25.3976 0.273008 25.3064 0.296459 25.2203C0.31991 25.1342 0.369366 25.0575 0.438072 25.0005L10.3266 16.7847C10.3704 16.7483 10.4209 16.7209 10.4753 16.7041C10.5296 16.6873 10.5868 16.6813 10.6435 16.6865C10.7001 16.6918 10.7552 16.7082 10.8056 16.7347C10.8559 16.7612 10.9006 16.7974 10.9369 16.8412C10.9733 16.885 11.0007 16.9355 11.0175 16.9899C11.0343 17.0443 11.0403 17.1014 11.0351 17.1581C11.0298 17.2148 11.0134 17.2699 10.9869 17.3202C10.9604 17.3706 10.9242 17.4152 10.8804 17.4516L0.991863 25.6674C0.914246 25.7321 0.816424 25.7675 0.715401 25.7675ZM25.2846 25.7675C25.1835 25.7676 25.0857 25.7322 25.0081 25.6674L15.1196 17.4516C15.0747 17.4156 15.0374 17.371 15.0099 17.3204C14.9824 17.2699 14.9652 17.2143 14.9594 17.1571C14.9536 17.0998 14.9593 17.042 14.9761 16.9869C14.9929 16.9319 15.0205 16.8807 15.0573 16.8365C15.0941 16.7922 15.1393 16.7557 15.1903 16.7291C15.2414 16.7025 15.2972 16.6863 15.3546 16.6816C15.4119 16.6768 15.4697 16.6835 15.5244 16.7013C15.5791 16.719 15.6298 16.7475 15.6734 16.7851L25.5619 25.001C25.6306 25.0579 25.6801 25.1347 25.7035 25.2207C25.727 25.3068 25.7233 25.3981 25.6929 25.482C25.6626 25.5659 25.6071 25.6384 25.534 25.6896C25.4609 25.7408 25.3738 25.7677 25.2846 25.7675Z" />
                    <path
                        d="M21.667 12.343C21.5521 12.343 21.4419 12.2974 21.3606 12.2161C21.2793 12.1348 21.2337 12.0246 21.2337 11.9097V3.03864C21.2324 3.0473 21.2151 3.03517 21.186 3.03517H4.81495C4.80548 3.0346 4.79598 3.03595 4.78704 3.03916C4.77811 3.04236 4.76991 3.04734 4.76295 3.0538L4.76729 11.9097C4.76729 12.0246 4.72163 12.1348 4.64037 12.2161C4.5591 12.2974 4.44889 12.343 4.33396 12.343C4.21904 12.343 4.10882 12.2974 4.02755 12.2161C3.94629 12.1348 3.90063 12.0246 3.90063 11.9097V3.03517C3.90744 2.79916 4.00747 2.57546 4.17883 2.41303C4.35019 2.25061 4.57892 2.16269 4.81495 2.16852H21.186C21.4221 2.16269 21.6508 2.25061 21.8222 2.41303C21.9935 2.57546 22.0935 2.79916 22.1003 3.03517V11.9097C22.1003 12.0246 22.0547 12.1348 21.9734 12.2161C21.8922 12.2974 21.7819 12.343 21.667 12.343Z" />
                </svg>
            </div>
            <div class="content">
                <span>To More Inquiry</span>
                <h6><a href="tel:+990737621432">+990-737 621 432</a></h6>
            </div>
        </div>
    </div>

    <!-- Preloader End -->
    <!-- <div class="topbar-header">
        <div class="top-bar style-2">
            <div class="company-logo">
                <a href="{{url('/')}}"><img src="{{asset('assets/img/home2/icon/home2-logo.svg')}}" alt=""></a>
            </div>
            <div class="top-bar-items">
                <ul>
                    <li>
                        <a href="#">Newly Listed Car</a>
                    </li>
                    <li>
                        <a href="#">Lowest Mileage</a>
                    </li>
                    <li>
                        <a href="#">Offer</a>
                    </li>
                </ul>
            </div>
            <div class="search-area">
                <form>
                    <div class="form-inner">
                        <input type="text" placeholder="Search for cars">
                        <button type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="topbar-right">
                <div class="hotline-area d-xl-flex d-none">
                    <div class="icon">
                        <svg width="28" height="28" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M27.2653 21.5995L21.598 17.8201C20.8788 17.3443 19.9147 17.5009 19.383 18.1798L17.7322 20.3024C17.6296 20.4377 17.4816 20.5314 17.3154 20.5664C17.1492 20.6014 16.9759 20.5752 16.8275 20.4928L16.5134 20.3196C15.4725 19.7522 14.1772 19.0458 11.5675 16.4352C8.95784 13.8246 8.25001 12.5284 7.6826 11.4893L7.51042 11.1753C7.42683 11.0269 7.39968 10.8532 7.43398 10.6864C7.46827 10.5195 7.56169 10.3707 7.69704 10.2673L9.81816 8.61693C10.4968 8.08517 10.6536 7.1214 10.1784 6.40198L6.39895 0.734676C5.91192 0.00208106 4.9348 -0.21784 4.18082 0.235398L1.81096 1.65898C1.06634 2.09672 0.520053 2.80571 0.286612 3.63733C-0.56677 6.74673 0.0752209 12.1131 7.98033 20.0191C14.2687 26.307 18.9501 27.9979 22.1677 27.9979C22.9083 28.0011 23.6459 27.9048 24.3608 27.7115C25.1925 27.4783 25.9016 26.932 26.3391 26.1871L27.7641 23.8187C28.218 23.0645 27.9982 22.0868 27.2653 21.5995ZM26.9601 23.3399L25.5384 25.7098C25.2242 26.2474 24.7142 26.6427 24.1152 26.8128C21.2447 27.6009 16.2298 26.9482 8.64053 19.3589C1.0513 11.7697 0.398595 6.75515 1.18669 3.88421C1.35709 3.28446 1.75283 2.77385 2.2911 2.45921L4.66096 1.03749C4.98811 0.840645 5.41221 0.93606 5.62354 1.25397L7.67659 4.3363L9.39976 6.92078C9.60612 7.23283 9.53831 7.65108 9.24392 7.88199L7.1223 9.53232C6.47665 10.026 6.29227 10.9193 6.68979 11.6283L6.85826 11.9344C7.45459 13.0281 8.19599 14.3887 10.9027 17.095C13.6095 19.8012 14.9696 20.5427 16.0628 21.139L16.3694 21.3079C17.0783 21.7053 17.9716 21.521 18.4653 20.8753L20.1157 18.7537C20.3466 18.4595 20.7647 18.3918 21.0769 18.5979L26.7437 22.3773C27.0618 22.5885 27.1572 23.0128 26.9601 23.3399ZM15.8658 4.66809C20.2446 4.67296 23.7931 8.22149 23.798 12.6003C23.798 12.858 24.0069 13.0669 24.2646 13.0669C24.5223 13.0669 24.7312 12.858 24.7312 12.6003C24.7257 7.7063 20.7598 3.74029 15.8658 3.73494C15.6081 3.73494 15.3992 3.94381 15.3992 4.20151C15.3992 4.45922 15.6081 4.66809 15.8658 4.66809Z" />
                            <path
                                d="M15.8658 7.46749C18.699 7.47083 20.995 9.76681 20.9983 12.6001C20.9983 12.7238 21.0475 12.8425 21.135 12.93C21.2225 13.0175 21.3412 13.0667 21.4649 13.0667C21.5887 13.0667 21.7073 13.0175 21.7948 12.93C21.8823 12.8425 21.9315 12.7238 21.9315 12.6001C21.9276 9.25163 19.2142 6.53816 15.8658 6.53433C15.608 6.53433 15.3992 6.74321 15.3992 7.00091C15.3992 7.25862 15.608 7.46749 15.8658 7.46749Z" />
                            <path
                                d="M15.8658 10.2671C17.1536 10.2686 18.1972 11.3122 18.1988 12.6001C18.1988 12.7238 18.2479 12.8425 18.3354 12.93C18.4229 13.0175 18.5416 13.0667 18.6653 13.0667C18.7891 13.0667 18.9078 13.0175 18.9953 12.93C19.0828 12.8425 19.1319 12.7238 19.1319 12.6001C19.1298 10.7971 17.6687 9.33594 15.8658 9.33392C15.608 9.33392 15.3992 9.54279 15.3992 9.8005C15.3992 10.0582 15.608 10.2671 15.8658 10.2671Z" />
                        </svg>
                    </div>
                    <div class="content">
                        <span>To More Inquiry</span>
                        <h6><a href="tel:+990737621432">+990-737 621 432</a></h6>
                    </div>
                </div>
            </div>
        </div>


      <div class="modal signUp-modal sell-with-us fade" id="sellUsModal01" tabindex="-1"
            aria-labelledby="sellUsModal01Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="sellUsModal01Label">Sell Your Car</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="bi bi-x"></i></button>
                </div>
                <div class="modal-body">
                    <form id="sell-my-car">
                        <div class="row">
                            <div class="col-lg-12 mb-15">
                                <h5>Your Personal Info</h5>
                            </div>
                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label>Full Name*</label>
                                    <input type="text" placeholder="Full Name*">
                                </div>
                            </div>
                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label>Phone*</label>
                                    <input type="text" placeholder="+880- 123 234 ***">
                                </div>
                            </div>
                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label>Email (Optional)</label>
                                    <input type="text" placeholder="Enter your email address">
                                </div>
                            </div>
                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label>Location*</label>
                                    <input type="text" placeholder="Enter your address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-15 mt-25">
                                <h5>Your Car Info</h5>
                            </div>
                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label>Car Brand Name*</label>
                                    <input type="text" name="name" placeholder="Toyota">
                                </div>
                            </div>
                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label>Model*</label>
                                    <input type="text" name="model" placeholder="RS eTN 80">
                                </div>
                            </div>
                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label>Reg. Year*</label>
                                    <input type="text" name="year" placeholder="2022">
                                </div>
                            </div>
                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label>Mileage*</label>
                                    <input type="text" placeholder="23,456 miles">
                                </div>
                            </div>
                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label>Fuel Type*</label>
                                    <input type="text" placeholder="Petrol">
                                </div>
                            </div>
                            <div class="col-md-6 mb-20">
                                <div class="form-inner">
                                    <label>Selling Price*</label>
                                    <input type="text" placeholder="Ex- $23,342.000">
                                </div>
                            </div>
                            <div class="col-md-12 mb-35">
                                <div class="form-inner">
                                    <label>Your Car Note*</label>
                                    <textarea placeholder="Write somethings"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-inner">
                                    <button class="primary-btn2" type="submit">Submit Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
      
      @include('comman.header')
    
    </div>
    @yield('content')
 
    <!-- End Blog Section -->
 @include('comman.footer')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!--  Main jQuery  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js')}}"></script>
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <!-- Popper and Bootstrap JS -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <!-- Swiper slider JS -->
    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.js')}}"></script>
    <!-- Waypoints JS -->
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <!-- WOW JS -->
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <!-- Counterup JS -->
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <!-- Isotope  JS -->
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <!-- Magnific-popup  JS -->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- GSAP  JS -->
    <script src="{{asset('assets/js/gsap.min.js')}}"></script>
    <script src="{{asset('assets/js/simpleParallax.min.js')}}"></script>
    <script src="{{asset('assets/js/TweenMax.min.js')}}"></script>
    <!-- Marquee  JS -->
    <script src="{{asset('assets/js/jquery.marquee.min.js')}}"></script>
    <!-- Select2  JS -->
    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <!-- Select2  JS -->
    <script src="{{asset('assets/js/jquery.fancybox.min.js')}}"></script>
    <!-- Custom JS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script>

     function successAlert(msg){
        Swal.fire({
        position: "top-end",
        icon: "success",
        title: msg,
        showConfirmButton: false,
        timer: 1500,
        width: "300px", // Decrease popup width
  customClass: {
    popup: "small-popup",
  }
     });

     }
     function errorAlert(msg){
        Swal.fire({
        position: "top-end",
        icon: "warning",
        title: msg,
        showConfirmButton: false,
        timer: 1500,
        width: "300px", // Decrease popup width
  customClass: {
    popup: "small-popup",
  }
     });
     
     }

        $(".marquee_text").marquee({
            direction: "left",
            duration: 25000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });
        $(".marquee_text2").marquee({
            direction: "left",
            duration: 25000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });
    </script>
    <script>
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
        $(document).ready(function () {
            document.getElementById("loginFrom").addEventListener("submit", async function (e) {
           e.preventDefault(); // Prevent form from reloading the page

    const form = e.target;
    const formData = new FormData(form);

    const serializeData = {};
    formData.forEach((value, key) => {
        serializeData[key] = value;
    });

    try {
        const response = await axios.post("{{ env('BASEURL').'auth/login' }}", serializeData, {
            headers: { 'Content-Type': 'application/json' }
        });

        console.log(response);

        if (response.status === 200) {
            
            
            const getDealer = await axios.get("{{ env('BASEURL').'dealer/profile' }}", {
            headers: { 'Content-Type': 'application/json',"Authorization": `Bearer ${response.data.token}` }
        });
             var token = response.data.token;
            localStorage.setItem("access_token", token);
            localStorage.setItem("user",  JSON.stringify(getDealer.data));
            updateUserName();
            document.getElementById("sell-my-car").reset();
            document.getElementById("signUpModal").click(); // Trigger modal close
            successAlert(response.data.message);
            window.location = "{{url('login-form')}}/"+token;

        } else {
            errorAlert(response.data.message);
        }
    } catch (error) {
        console.error(error);
        errorAlert(error.response.data.message);
    }
});

// async function fetchDealer(token) {
//     try {
      
//         const getDealer = await axios.post("{{ url('/login-from') }}", 
//             { token: token}, 
//             {
//                 headers: { 
//                     'Content-Type': 'application/json',
//                     // Add other headers if needed
//                 }
//             }
//         );

//         console.log(getDealer.data); // Handle the response
//     } catch (error) {
//         console.error('Error:', error); // Handle errors
//     }
// }





function updateUserName() {
    const userName = localStorage.getItem("user");
    var userdetails = JSON.parse(userName);
         console.log('userName '+ JSON.stringify(userdetails))
         
    if (userName) {
        $('#signUpBtn').html(`<button type="button" class="primary-btn3" >
                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M14.4311 12.759C15.417 11.4291 16 9.78265 16 8C16 3.58169 12.4182 0 8 0C3.58169 0 0 3.58169 0 8C0 12.4182 3.58169 16 8 16C10.3181 16 12.4058 15.0141 13.867 13.4387C14.0673 13.2226 14.2556 12.9957 14.4311 12.759ZM13.9875 12C14.7533 10.8559 15.1999 9.48009 15.1999 8C15.1999 4.02355 11.9764 0.799983 7.99991 0.799983C4.02355 0.799983 0.799983 4.02355 0.799983 8C0.799983 9.48017 1.24658 10.8559 2.01245 12C2.97866 10.5566 4.45301 9.48194 6.17961 9.03214C5.34594 8.45444 4.79998 7.49102 4.79998 6.39995C4.79998 4.63266 6.23271 3.19993 8 3.19993C9.76729 3.19993 11.2 4.63266 11.2 6.39995C11.2 7.49093 10.654 8.45444 9.82039 9.03206C11.5469 9.48194 13.0213 10.5565 13.9875 12ZM13.4722 12.6793C12.3495 10.8331 10.3188 9.59997 8.00008 9.59997C5.68126 9.59997 3.65049 10.8331 2.52776 12.6794C3.84829 14.2222 5.80992 15.2 8 15.2C10.1901 15.2 12.1517 14.2222 13.4722 12.6793ZM8 8.79998C9.32551 8.79998 10.4 7.72554 10.4 6.39995C10.4 5.07444 9.32559 3.99992 8 3.99992C6.6744 3.99992 5.59997 5.07452 5.59997 6.40003C5.59997 7.72554 6.67449 8.79998 8 8.79998Z" />
                </svg>
                ${userdetails.name}            
            </button>`);
        // document.getElementById("signUpBtn").innerHTML = ;
        // document.getElementById("signUpBtn").style.display = "block"; // Show name if hidden
    }
}

document.getElementById("signupFrom").addEventListener("submit", async function (e) {
           e.preventDefault(); // Prevent form from reloading the page

    const form = e.target;
    const formData = new FormData(form);


    try {
        const response = await axios.post("{{ env('BASEURL').'auth/register' }}", formData, {
            headers: { 'Content-Type': 'application/json'}
        });

        console.log(response);

        if (response.status === 200) {
           // Trigger modal close
            successAlert(response.data.message);
        } else {
            errorAlert(response.data.message);
        }
    } catch (error) {
        console.error(error);
        errorAlert(error.response.data.message);
    }
});


          
        });

        document.getElementById("sell-my-car").addEventListener("submit", async function (e) {
           e.preventDefault(); // Prevent form from reloading the page

    const form = e.target;
    const formData = new FormData(form);


    try {
        const response = await axios.post("{{ env('BASEURL').'dealer/trucks' }}", formData, {
            headers: { 'Content-Type': 'multipart/form-data',"Authorization": `Bearer ${localStorage.getItem("access_token")}` }
        });

        console.log(response);

        if (response.status === 200) {
           // Trigger modal close
            successAlert(response.data.message);
        } else {
            errorAlert(response.data.message);
        }
    } catch (error) {
        console.error(error);
        errorAlert(error.response.data.message);
    }
});

      
document.getElementById("forgotFrom").addEventListener("submit", async function (e) {
           e.preventDefault(); // Prevent form from reloading the page

    const form = e.target;
    const formData = new FormData(form);


    try {
        const response = await axios.post("{{ env('BASEURL').'auth/forgot-password' }}", formData, {
            headers: { 'Content-Type': 'application/json' }
        });

        console.log(response);

        if (response.status === 200) {
           // Trigger modal close
           var formEmail = $('#resetPasswordFrom').find('input[name="email"]').val()
           
           $('#ForgotModal01').modal('hide');
           $('#resetPasswordModal01').modal('show')
            successAlert(response.data.message);
        } else {
            errorAlert(response.data.message);
        }
    } catch (error) {
        console.error(error);
        errorAlert(error.response.data.message);
    }
});

      
document.getElementById("resetPasswordFrom").addEventListener("submit", async function (e) {
           e.preventDefault(); // Prevent form from reloading the page

    const form = e.target;
    const formData = new FormData(form);


    try {
        const response = await axios.post("{{ env('BASEURL').'auth/reset-password' }}", formData, {
            headers: { 'Content-Type': 'application/json' }
        });

        console.log(response);

        if (response.status === 200) {
           // Trigger modal close
           
             
           $('#resetPasswordModal01').modal('hide');
           $('#logInModal01').modal('show')
            successAlert(response.data.message);
        } else {
            errorAlert(response.data.message);
        }
    } catch (error) {
        console.error(error);
        errorAlert(error.response.data.message);
    }
});


function LogOut(){



localStorage.clear();

window.location.replace("{{url('log-out')}}");
}     
    </script>

       @yield('script')


</body>



</html>