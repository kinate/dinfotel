@extends('Layouts.MasterPage')
@section('page_title', 'About us')
@section('page_contents')

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img1">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    About Dinfotel
                </h1>
                <span class="sub-text">Design, Supply, Installation, Testing and Commissioning of IT and Telecommunications
                    Systems<br>
                    With more than 2+ Years in service.</span>
                <ul class="breadcrumbs-area">
                    <li title="Go to konstruk">
                        <a class="active" href="{{ URL::to('index') }}">Home</a>
                    </li>
                    <li>About</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->


    <!-- About Start -->
    <div class="rs-about about-style1 bg1 pt-120 pb-120 md-pt-80 md-pb-75">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-50">
                    <div class="images-part">
                        <img src="assets/images/about/cap.jpg" alt="About">
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
                        <p class="desc pb-37" style="text-align: justify">
                            Dinfotel Solutions Company Limited is an Engineering and Technological Company which deals with Design, Supply, Installation, Testing and Commissioning of Electronics, Telecommunications, Computers Systems, Mechanical, Electrical, Infrastructures of the Construction Industry for ICT Systems and Networks, Security Systems ,HVAC, Digital Marketing and Engineering Project Management Services.
                        </p>

                        <h5>Mission</h5>
                        <p style="text-align: justify" >
                            To achieve excellence in project execution, quality, reliability, safety and operational
                            efficiency.
                        </p>
                        <h5>Vision</h5>
                        <p>
                            To be a leading company provider in creating value through Engineering and Technological
                            Convergence.
                        </p>
                        <h5>Quality Policy </h5>
                        <p>
                            Committed to provide quality services in compliance with local and international standards that
                            will meet stakeholders preferences.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection
