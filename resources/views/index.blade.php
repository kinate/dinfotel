@extends('Layouts.MasterPage')
@section('page_title','Home')
@section('page_contents')

<!-- Slider Start -->
<div id="rs-slider" class="rs-slider rs-slider-style2">
    <div class="bend niceties">
        <div id="nivoSlider" class="slides">
            <img src="assets/images/slider/style1/din1.jpg" alt="" title="#slide-1" />
            <img class="slies-img" src="assets/images/slider/style1/din2.jpg" alt="" title="#slide-22" />
        </div>
        <!-- Slide 1 -->
        <div id="slide-1" class="slider-direction">
           <div class="container">
                   <div class="content-part">
                       
                       <h1 class="sl-title">
                           We build something<br>
                           new and consistent.<br>
                       </h1>
                       <p class="sl-desc">
                           No matter where or what you want to build, we mobilize the right experts<br> 
                           to drive value and realize your project consistent goals. 		
                       </p>
                          <div class="slider-bottom">
                              <a class="readon more" href="{{ URL::to('services') }}">Discover More</a>
                          </div>
                   </div>
                   <div class="animation-wrap">
                       <div class="animate-style one">
                           <img class="sl-icons1" src="assets/images/slider/style1/shapes/icons1-1.png" alt="Images">
                       </div>
                       <div class="animate-style two">
                           <img class="sl-icons1" src="assets/images/slider/style1/shapes/icons2-1.png" alt="Images">
                       </div>
                       <div class="animate-style three">
                           <img class="sl-icons1" src="assets/images/slider/style1/shapes/icons2-1.png" alt="Images">
                       </div>
                   </div>
           </div>
        </div>
        <!-- Slide 2 -->
        <div id="slide-22" class="slider-direction">
            <div class="container-side-slide2">
                <div class="content-part">
                    <span class="sl-subtitle1">
                        <img class="sl-icons" src="assets/images/slider/style1/shapes/icons3.png" alt="Images">
                        Engineering Works
                    </span>
                    <h1 class="sl-title1">
                        We build something<br>
                        new and consistent.<br>
                    </h1>
                    <p class="sl-desc1">
                        No matter where or what you want to build, we mobilize the right experts<br> 
                        to drive value and realize your project consistent goals.
                    </p>
                       <div class="slider-bottom">
                           <a class="readon more" href="{{ URL::to('services') }}">Discover More</a>
                       </div>
                </div>
                <div class="animation-wrap2">
                    <div class="animate-style one">
                        <img class="sl-icons2" src="assets/images/slider/style1/shapes/icons1-1.png" alt="Images">
                    </div>
                    <div class="animate-style two">
                        <img class="sl-icons2" src="assets/images/slider/style1/shapes/icons1-1.png" alt="Images">
                    </div>
                    <div class="animate-style three">
                        <img class="sl-icons2" src="assets/images/slider/style1/shapes/icons1-1.png" alt="Images">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider End -->

<!-- About Start -->
<div class="rs-about about-style1 bg1 pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-6 md-mb-50">
                <div class="images-part">
                    <img src="assets/images/about/image1.jpeg" alt="About">
                </div>
            </div>
            <div class="col-lg-6 pl-50 md-pl-15">
                <div class="sec-title">
                    <span class="sub-text">
                        {{-- <img src="assets/images/shape-1.png" alt="Images"> --}}
                        Who We Are
                    </span>
                    <h2 class="title pb-20">
                        Dinfotel focused future ready
                    </h2>
                    <p class="desc pb-37" style="text-align:justify !important" >
                        Dinfotel Solutions Company Limited is an Engineering and Technological 
                        Company which deals with Design, Supply, Installation,
                        Testing and Commissioning of Electronics, Telecommunications, 
                        Computers Systems, Mechanical, Electrical,
                        Infrastructures of the Construction Industry for ICT Systems and Networks,
                        Security Systems 
                        ,HVAC, Digital Marketing and Engineering Project Management Services.	
                    </p>
                  
                    <div class="row mt-47 md-mt-25">
                        <div  class="col-lg-6 col-md-4 sm-mb-30">
                            <div class="btn-part">
                                <a class="readon more know" href="{{ URL::to('about') }}">Read More</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Project Section Start -->
<div class="rs-project project-style1 gray-bg pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="sec-title text-center mb-45">
            <span class="sub-text">
                {{-- <img src="assets/images/shape-1.png" alt="Images"> --}}
                Projects
            </span>
            <h2 class="title">
                Completed projects
            </h2>
        </div>
        <div class="gridFilter gridfilter-style2 mb-47 text-center">
            
        </div>                    
        <div class="row grid">
            <div class="col-lg-4 col-md-6 mb-30 grid-item filter1">
                <div class="project-item">
                    <div class="project-img">
                        <a href="#"><img src="assets/images/about/image1.jpeg" alt="images"></a>
                    </div>
                    <div class="project-content">  
                        <div class="project-inner">
                            <h3 class="title"><a href="#">Electrical Installation</a></h3>
                            <span class="category"><a href="#">Engineering</a></span>
                        </div>
                        <div class="p-icon"><a href="#"><i class="flaticon-next"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30 grid-item filter2">
                <div class="project-item">
                    <div class="project-img">
                        <a href="#"><img src="assets/images/about/image3.jpeg" alt="images"></a>
                    </div>
                    <div class="project-content">  
                        <div class="project-inner">
                            <h3 class="title"><a href="#">Wireless Installation</a></h3>
                            <span class="category"><a href="#">Networking</a></span>
                        </div>
                        <div class="p-icon"><a href="#"><i class="flaticon-next"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30 grid-item filter2">
                <div class="project-item">
                    <div class="project-img">
                        <a href="#"><img src="assets/images/about/fiber.jpg" alt="images"></a>
                    </div>
                    <div class="project-content">  
                        <div class="project-inner">
                            <h3 class="title"><a href="#">Fiber splicing & termination</a></h3>
                            <span class="category"><a href="#">Networking</a></span>
                        </div>
                        <div class="p-icon"><a href="#"><i class="flaticon-next"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30 grid-item filter3">
                <div class="project-item">
                    <div class="project-img">
                        <a href=""><img src="assets/images/about/tower.jpg" alt="images"></a>
                    </div>
                    <div class="project-content">  
                        <div class="project-inner">
                            <h3 class="title"><a href="">Tower Maintenance</a></h3>
                            <span class="category"><a href="">Telecommnications</a></span>
                        </div>
                        <div class="p-icon"><a href=""><i class="flaticon-next"></i></a></div>
                    </div>
                </div>
            </div>
           
            <div class="col-lg-4 col-md-6 md-mb-30 grid-item filter3">
               <div class="project-item">
                   <div class="project-img">
                       <a href=""><img src="assets/images/about/Microwave.jpg" alt="images"></a>
                   </div>
                   <div class="project-content">  
                       <div class="project-inner">
                           <h3 class="title"><a href="">Microwave installation</a></h3>
                           <span class="category"><a href="">Telecommication</a></span>
                       </div>
                       <div class="p-icon"><a href=""><i class="flaticon-next"></i></a></div>
                   </div>
               </div>
            </div>

            <div class="col-lg-4 col-md-6 md-mb-30 grid-item filter3">
                <div class="project-item">
                    <div class="project-img">
                        <a href=""><img src="assets/images/about/netw.jpg" alt="images"></a>
                    </div>
                    <div class="project-content">  
                        <div class="project-inner">
                            <h3 class="title"><a href="">Network installation</a></h3>
                            <span class="category"><a href="">Telecommication</a></span>
                        </div>
                        <div class="p-icon"><a href=""><i class="flaticon-next"></i></a></div>
                    </div>
                </div>
             </div>
           
        </div>
    </div>
</div>
<!-- Project Section End -->

<!-- Why Choose Start -->
<div class="rs-choose choose-style1">
    <div class="row no-gutters">
        <div class="col-lg-6 md-mb-50 video-item">
        </div>
        <div class="col-lg-6">
            <div class="widget-wrap-content">
                <div class="sec-title mb-46 md-mb-25">
                    <span class="sub-text">
                        {{-- <img src="assets/images/shape-1.png" alt="Images"> --}}
                        Why Choose Us
                    </span>
                    <h2 class="title pb-20">
                        Engineering Project Management Services
                    </h2>
                    <p class="desc">
                        We are committed to providing affordable pricing, without compromising on the quality of our services. 
                        we believe that everyone deserves to have access to reliable and fast services, regardless of their budget.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-25">
                        <div class="rs-addon-services">
                            <div class="services-item">
                                <div class="serial-number">
                                    1 
                                </div>
                                <div class="services-text">
                                    <div class="services-title">				    		
                                        <h4 class="title"> Best sustainability</h4>
                                    </div>    	    						    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-25">
                        <div class="rs-addon-services">
                            <div class="services-item">
                                <div class="serial-number">
                                    2 
                                </div>
                                <div class="services-text">
                                    <div class="services-title">				    		
                                        <h4 class="title">Health and safety</h4>
                                    </div>    	    						    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 md-mb-25">
                        <div class="rs-addon-services">
                            <div class="services-item">
                                <div class="serial-number">
                                    3 
                                </div>
                                <div class="services-text">
                                    <div class="services-title">				    		
                                        <h4 class="title">Modern methods</h4>
                                    </div>    	    						    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="rs-addon-services">
                            <div class="services-item">
                                <div class="serial-number">
                                    4 
                                </div>
                                <div class="services-text">
                                    <div class="services-title">				    		
                                        <h4 class="title">Certified Engineers</h4>
                                    </div>    	    						    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- Why Choose End -->

<!-- Contact Section Start -->
<div class="rs-contact contact-style1 bg3">
       <div class="row">
           <div class="col-lg-4 offset-2 con-left-6">
               <div class="contact-section">
                   <div class="contact-wrap">
                       <div class="sec-title mb-45">
                           <span class="sub-text">
                               {{-- <img src="assets/images/shape-1.png" alt="Images"> --}}
                               Lets talk
                           </span>
                           <h2 class="title">
                               Have an upcoming project?
                           </h2>
                       </div>
                       <div id="form-messages"></div>
                       @include('Layouts.alert')
                       <form  method="post" action="{{ URL::to('submit_enquiry') }}">
                            @csrf
                           <fieldset>
                               <div class="row">
                                   <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                       <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                   </div> 
                                   <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                       <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                   </div>   
                                   <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                       <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                   </div>
                                   <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                       <input class="from-control" type="text" id="website" name="website" placeholder="Your Website" required="">
                                   </div>
                                   <div class="col-lg-12 mb-30">
                                       <textarea class="from-control" id="message" name="message" placeholder="Your Message Here" required=""></textarea>
                                   </div>
                               </div>
                               <div class="btn-part">                                            
                                   <div class="form-group mb-0">
                                       <input class="readon more submit" type="submit" value="Submit Now">
                                   </div>
                               </div> 
                           </fieldset>
                       </form> 
                   </div>
               </div>
           </div>
           <div class="col-lg-4 pr-50 md-pr-15 con-right-6 md-mt-50">
               <div class="contact-box-item">
                <div class="contact-box mb-20">
                    <div class="contact-icon">
                        <img src="assets/images/contact/style1/icons/1.png" alt="images">
                    </div>
                    <div class="content-text">
                        <h4 class="title"><a href="#">Our office</a></h4>
                        <p class="services-txt">Tanzanite Park Building,<br> Ursino street</p>
                    </div>
                </div>
                <div class="contact-box mb-20">
                    <div class="contact-icon">
                        <img src="assets/images/contact/style1/icons/2.png" alt="images">
                    </div>
                    <div class="content-text">
                        <h4 class="title"><a href="#">Email us</a></h4>
                        <p class="services-txt">
                            <a href="mailto:enquiry@dinfotel.co.tz">enquiry@dinfotel.co.tz</a>
                          
                        </p>
                    </div>
                </div>
                <div class="contact-box">
                    <div class="contact-icon">
                        <img src="assets/images/contact/style1/icons/3.png" alt="images">
                    </div>
                    <div class="content-text">
                        <h4 class="title"><a href="#">Call us</a></h4>
                        <p class="services-txt">
                            <a href="tel:+255 747 236 250">+255 747 236 250</a><br>
                            
                        </p>
                    </div>
                </div>
               </div>
           </div>
           <div class="col-lg-2 contact-right-img"></div>
       </div>
</div>
<!-- Contact Section End -->

<!-- Call To Action Choose End -->


@endsection