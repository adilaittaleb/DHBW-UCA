
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
                    <h1 class="display-4 text-white animated zoomIn">Programs</h1>
                    <a href="/" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="/academic_programs" class="h5 text-white">Academic Programs</a>
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
                        
                        <h1 class="mb-0">Academic Programs</h1>
                    </div>
                    <p>At the heart of the cooperation between UCA & DHBW, there is a commitment to foster academic cooperation and exchange, thus enriching the academic curricula and our common understanding of human rights and the associated global challenges.The exchange of professors among our member universities has been one of our flagship activities since the establishment of the network.These programs are mutual, inter-institutional arrangements through which the proficiency and services of one institute's faculty are exchanged with the other institution for time-limited periods. The primary aim of an academic exchange program is to provide the opportunity for the exchanged personnel to serve as employees of the host institution, to encourage professional development through the stimulus of a different setting, and for the host organizations to benefit from the knowledge and skills of the exchanged personnel. It assists in the transformative internationalization of the university.</p>
                </div>
                <div class="col-lg-5" >
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('img/UCA.jpg') }}" style="object-fit: contain;">
                    </div>
                </div>
                
                 <div class="col-lg-7">
                 
                     <p>These faculty exchange programs in most cases international faculty exchange lead to some benefits that accrue to the organization like:</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Invigoration of school faculty by the addition of new colleagues directly involved in the similar practice arena.</p>
                    <p class="mb-3"><i class="fa fa-check text-primary me-3"></i>Creation of new opportunities for future school-agency collaboration on research, special projects and practicals.</p>
                    <p class="mb-3"><i class="fa fa-check text-primary me-3"></i>Acquisition or update of practice experience which can inform faculty teaching and research.</p>
                   
                </div>
                <div class="col-lg-5" >
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('img/DHBW.jpg') }}" style="object-fit: cover; ">
                    </div>
                </div>
            </div><br>
            
            <h5 class="fw-bold text-primary text-uppercase">Filter Programs</h5>
            
                <div class="box">
                        <select>
                            <option disabled selected>University</option>
                            <option>UCA</option>
                            <option>DHBW</option>
                        </select>
                        <select>
                            <option disabled selected>Year</option>
                            <option>2023</option>
                            <option>2022</option>
                            <option>2021</option>
                        </select>
                        <select>
                            <option disabled selected>Programs</option>
                        </select>
                        
                        <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Apply Filters</a>
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