<header id="rs-header" class="rs-header">
    <!-- Toolbar Area Start -->
    <div class="toolbar-area topbar-style1 hidden-md">
        <div class="container">
            <div class="row rs-vertical-middle">
               <div class="col-lg-7">
                    <div class="toolbar-contact">
                        <ul class="rs-contact-info">                   
                            <li>
                                <i class="fi fi-rr-envelope-plus"></i>                  
                                <a href="mailto:info@konstruk.com">info@dinfotel.co.tz</a>               
                            </li>
                            <li>
                                  <i class="fi fi-rr-phone-call"></i>                                      
                                <a href="tel:(+1)7854-333-222"> +255 747 236 250</a>                   
                            </li>
                            <li>
                                  <i class="fi-rr-map-marker-home"></i>                                      
                                Tanzanite Park Building, Ursino street         
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="toolbar-sl-share">
                        <ul class="clearfix">
                            <li class="opening"> <em><i class="fi fi-rr-time-add"></i> Hours: Mon-Fri: 9.00 am - 7.00 pm</em> </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Toolbar Area End -->
    
    <!-- Menu Start -->
    <div class="menu-area menu-sticky">
        <div class="container">
            <div class="row-table">
                <div class="col-cell header-logo">                                  
                    <div class="logo-area">
                        <a href="index.html">
                            <img class="normal-logo" src="assets/images/logo-dark.png" alt="logo">  
                            <img class="sticky-logo" src="assets/images/logo-dark.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-cell">
                    <div class="rs-menu-area">
                        <div class="main-menu">
                            <nav class="rs-menu hidden-md">
                                <ul class="nav-menu">
                                    {{-- <li class="menu-item-has-children current-menu-item"> --}}
                                    <li class="current-menu-item">
                                        <a href="{{ URL::to('index') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('about') }}">About</a>
                                    </li>
                                   
                                    <li>
                                        <a href="{{ URL::to('services') }}">Services</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('contact') }}">Contact</a>
                                    </li>
                                </ul> <!-- //.nav-menu -->
                            </nav>
                        </div> <!-- //.main-menu -->
                    </div>
                </div>
                <div class="col-cell">
                    <div class="expand-btn-inner">
                        <ul>
                            <li class="search-parent">
                                <a class="hidden-xs rs-search" href="#">
                                    <i class="fi fi-rr-search"></i>
                                </a>
                                <div class="sticky_form">
                                    <form role="search" class="bs-search search-form" method="get">
                                        <div class="search-wrap">
                                             <label class="screen-reader-text active">
                                                 Search for:     </label>
                                             <input type="search" placeholder="Searching..." name="s" class="search-input" value="">
                                             <button type="submit" value="Search"><i class="fi fi-rr-search"></i></button>
                                         </div>
                                     </form>
                                 </div>
                            </li>
                            <li class="btn-quote"><a class="quote-button" href="{{ URL::to('contact') }}">Let's Talk</a></li>
                            <li class="humburger">
                                <a id="nav-expander" class="nav-expander bar" href="#">
                                    <div class="bar">
                                        <span class="dot1"></span>
                                        <span class="dot2"></span>
                                        <span class="dot3"></span>
                                        <span class="dot4"></span>
                                        <span class="dot5"></span>
                                        <span class="dot6"></span>
                                        <span class="dot7"></span>
                                        <span class="dot8"></span>
                                        <span class="dot9"></span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->

    <!-- Canvas Mobile Menu start -->
    <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
        <div class="close-btn">
            <a id="nav-close2" class="nav-close">
                <div class="line">
                    <span class="line1"></span>
                    <span class="line2"></span>
                </div>
            </a>
        </div>
        <ul class="nav-menu">
            <li class="current-menu-item">
                <a href="{{ URL::to('index') }}">Home</a>
               
            </li>
            <li>
                <a href="{{ URL::to('about') }}">About</a>
            </li>
            <li class="">
                <a href="{{ URL::to('services') }}">Services</a>
            </li>
            <li>
                <a href="{{ URL::to('contact') }}">Contact</a>
            </li>
           
        </ul> <!-- //.nav-menu -->
        <!-- //.nav-menu -->
       
        <!-- //.nav-menu -->
        <div class="canvas-contact">
              <div class="address-area">
                  <div class="address-list">
                      <div class="info-icon">
                          <i class="fi fi-rr-map-marker-home"></i>
                      </div>
                      <div class="info-content">
                          <h4 class="title">Location</h4>
                          <em>Tanzanite Park Building, Ursino street </em>
                      </div>
                  </div>
                  <div class="address-list">
                      <div class="info-icon">
                          <i class="fi fi-rr-envelope-plus"></i>
                      </div>
                      <div class="info-content">
                          <h4 class="title">Email</h4>
                          <em><a href="mailto:info@konstruk.com">Info@dinfotel.co.tz</a></em>
                      </div>
                  </div>
                  <div class="address-list">
                      <div class="info-icon">
                          <i class="fi fi-rr-phone-call"></i>
                      </div>
                      <div class="info-content">
                          <h4 class="title">Call us</h4>
                          <em>+255 747 236 250</em>
                      </div>
                  </div>
              </div>
        </div>
    </nav>
    <!-- Canvas Menu end -->                             
</header>