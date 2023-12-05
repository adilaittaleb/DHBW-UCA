
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
                    <h1 class="display-4 text-white animated zoomIn">Achievements</h1>
                    <a href="/" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="/achievements" class="h5 text-white">Achievements</a>
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
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        
                        <h1 class="mb-0">Maker Space</h1>
                    </div>
                    <p>This space is an opportunity for students and teachers to learn by doing, bringing their ideas into reality through experimentation, innovating and creating objects that allow students to understand design processes, how things are made and how different materials behave, which also contributes to the academic development of our students. A Fab Lab is an open platform for creating and prototyping physical objects, smart or not. In this ingenious space, students are able to experience the learn-by-doing philosophy first hand, exploring different digital and analog design processes using a broad variety of tools. The principal aim of this cooperation is to introduce this new teaching technique in the Moroccan universities and give moroccan students access to the environment, materials, and advanced technology that can allow that spark of an idea to ignite.</p>
                </div>
                <div class="col-lg-5" >
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('img/achievements.jpg') }}" style="object-fit: contain;">
                    </div>
                </div>
                
            </div><br>


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