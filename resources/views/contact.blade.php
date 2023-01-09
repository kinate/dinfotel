@extends('Layouts.MasterPage')
@section('page_title','Contact Us')
@section('page_contents')

<div class="rs-breadcrumbs img6">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
                   Contact Us
            </h1>
            <span class="sub-text">Don't Hesitate To Reach Out To Me With Any Questions Or Concerns <br> We Are Here To Help And We Are Happy To Address Any Issues You May Have.</span>
            <ul class="breadcrumbs-area">
               <li title="Go to konstruk">
                   <a class="active" href="{{ URL::to('index') }}">Home</a>
               </li>
              <li>Contact Us</li>
           </ul>
        </div>
    </div>
</div>


<div class="rs-contact contact-style6 pb-120 md-pb-80">
    {{-- <div class="row no-gutters">
        <div class="col-lg-4">
            <div class="contact-map">
                <iframe src="https://maps.google.com/maps?q=rstheme&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="contact-section">
                <div class="contact-wrap">
                    <div class="sec-title mb-60">
                        <h2 class="title title4 ser-style4">Get in touch</h2>
                    </div>
                    <div id="form-messages"></div>
                    <form id="contact-form" method="post" action="https://devsdesign.net/products/html/konstruk/mailer.php">
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
                                    <input class="readon more submit sub-con" type="submit" value="Submit Now">
                                </div>
                            </div> 
                        </fieldset>
                    </form> 
                </div>
            </div>
        </div>
        <div class="col-lg-4 contact-project"></div>
    </div> --}}
    <!-- Contact Icons Section End -->
    <div class="rs-contact pt-120 md-pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 md-mb-30">
                   <div class="contact-box">
                       <div class="contact-icon">
                           <img src="assets/images/contact/style1/icons/1.png" alt="images">
                       </div>
                       <div class="content-text">
                           <h4 class="title"><a href="#">Office address</a></h4>
                           <p class="services-txt"> Tanzanite Park Building<br> Ursino street </p>
                       </div>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 sm-mb-30">
                   <div class="contact-box">
                       <div class="contact-icon">
                           <img src="assets/images/contact/style1/icons/2.png" alt="images">
                       </div>
                       <div class="content-text">
                           <h4 class="title"><a href="#">Email us</a></h4>
                           <span><a href="mailto:support@devsdesign.net">info@dinfotel.co.tz</a></span><br>
                           <span><a href="mailto:info@codesless.com">sales@dinfotel.co.tz</a></span>
                       </div>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6">
                   <div class="contact-box">
                       <div class="contact-icon">
                           <img src="assets/images/contact/style1/icons/3.png" alt="images">
                       </div>
                       <div class="content-text">
                           <h4 class="title"><a href="#">Call us</a></h4>
                           <span><a href="tel:(+088)589-8745">+255 747 236 250</a></span><br>
                              <span> <a href="tel:(+088)222-9999">+255 747 236 250</a></span>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Icons Section End -->
</div>

@endsection