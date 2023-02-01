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
   

    <!-- Contact Icons Section End -->
    <div class="rs-contact pt-120 md-pt-80 mb-80">
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

    <!--office Location -->
    <div class="row no-gutters">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.4813481681308!2d39.25214032905957!3d-6.778934834703899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4d2747a3120f%3A0x379bdab20f55e898!2sTanzanite%20park%20victoria!5e0!3m2!1sen!2stz!4v1675172305755!5m2!1sen!2stz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-2"></div>
        </div>
       
    </div>
</div>

@endsection