
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
                    <h1 class="display-4 text-white animated zoomIn">Interchanges</h1>
                    <a href="/exchange_students" class="h5 text-white">Exchange Students</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="/students_profiles" class="h5 text-white">Students Profiles</a>
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
                
                <h5 class="fw-bold text-primary text-uppercase">Meet Our Students</h5>
                <h1 class="mb-0">Exchange Students Profiles</h1>
                 
            </div>
            <div class="row g-5">
                 <p class="mb-4 p-size">View available exchange student profiles. Students who may study at the host institution and/or complete an internship or project for one semester or one academic year.
                Explore Exchange students below. You can narrow your search by which university they come from, by date, by type of exchange which defines the type of exchange whether internship or exchange program</p>
                
                
            </div>
             <h5 class="fw-bold text-primary text-uppercase">Refine your Searsh</h5>
            
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
                            <option disabled selected>Type Exchange</option>
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