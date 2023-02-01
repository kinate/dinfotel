@extends('Layouts.MasterPage')
@section('page_title', 'About us')
@section('page_contents')

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img1">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    Gallery
                </h1>
                <span class="sub-text">Design, Supply, Installation, Testing and Commissioning of IT and Telecommunications
                    Systems<br>
                    With more than 2+ Years in service.</span>
                <ul class="breadcrumbs-area">
                    <li title="Go to dinfotel">
                        <a class="active" href="{{ URL::to('index') }}">Home</a>
                    </li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->


    <div class="rs-gallery gallery-style1 pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="gallery-item">
                        <div class="gallery-icon">
                            <a class="image-popup" href="assets/images/about/image1.jpeg"><img src="assets/images/about/image1.jpeg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="gallery-item">
                        <div class="gallery-icon">
                            <a class="image-popup" href="assets/images/about/tower.jpg"><img src="assets/images/about/tower.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="gallery-item">
                        <div class="gallery-icon">
                            <a class="image-popup" href="assets/images/about/image3.jpeg"><img src="assets/images/about/image3.jpeg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="gallery-item">
                        <div class="gallery-icon">
                            <a class="image-popup" href="assets/images/about/image6.jpeg"><img src="assets/images/about/image6.jpeg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sm-mb-30">
                    <div class="gallery-item">
                        <div class="gallery-icon">
                            <a class="image-popup" href="assets/images/about/image7.jpeg"><img src="assets/images/about/image7.jpeg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 md-mb-30">
                    <div class="gallery-item">
                        <div class="gallery-icon">
                            <a class="image-popup" href="assets/images/about/fiber.jpg"><img src="assets/images/about/fiber.jpg" alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="gallery-item">
                        <div class="gallery-icon">
                            <a class="image-popup" href="assets/images/about/image2.jpeg"><img src="assets/images/about/image2.jpeg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="gallery-item">
                        <div class="gallery-icon">
                            <a class="image-popup" href="assets/images/about/image8.jpeg"><img src="assets/images/about/image8.jpeg" alt=""></a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6 mb-30">
                    <div class="gallery-item">
                        <div class="gallery-icon">
                            <a class="image-popup" href="assets/images/about/image3.jpeg"><img src="assets/images/about/image3.jpeg" alt=""></a>
                        </div>
                    </div>
                </div> --}}

               
            </div>
        </div>
 </div>



    @endsection