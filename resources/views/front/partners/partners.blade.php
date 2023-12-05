
<!DOCTYPE html>
<html lang="en">
    
    <!-- head Start -->
    @include('front.partials.head')
    <!-- head End -->


<body>
   <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->

    

    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        @include('front.partials.navbar')

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Partners</h1>
                    <a href="/" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="/partners" class="h5 text-white">Partners</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    @include('front.partials.screen_search')
    <!-- Full Screen Search End -->


    <!-- Features Start -->
       
       <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
             <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Partners</h5>
                <h1 class="mb-0">Meet Our Partners </h1>
                 
            </div>
            <div class="row g-5">
                 <p class="mb-4 p-size">The purpose of this cooperation between these two universities is to collaborate with several companies in different fields to create opportunities for students to explore the professional universe.<br>Working and studying abroad are key elements that can enhance a graduate CV, demonstrating an ability to adapt to different locations and adopt intercultural skills. Thanks to more than 100 agreements that Cadi Ayyad University has signed with several German companies, students can now experience a new way of learning, learning through experimentation.<br>We collaborate with businesses and organisations from all sectors. Our business development team will work with you to match your needs to our academics expertise and manage the contracts and IP, as well as advising on funding opportunities.</p>
     
            </div>
            
        </div>
    </div>
    
 
       
    <!-- Features Start -->



    
    

    <!-- Footer Start -->
    @include('front.partials.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
     <script src="js/scripts.js"></script>
</body>

</html>