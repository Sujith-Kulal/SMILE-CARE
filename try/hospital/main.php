
<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";

} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SMILECARE DENTAL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link
    href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap"
    rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">






</head>

<body>
    <div class="container-fluid sticky-top bg-white shadow-sm">
    
  

        <div class="container">
        

            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="index.html" class="navbar-brand">
                    
                    <h1 class="m-0 text-uppercase text-primary">Smile<span class="text-warning">Care</span></h1>



                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse"> 
                    <div class="navbar-nav ms-auto py-0">

                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#service" class="nav-item nav-link">Service</a>
                        <a href="hms/user-login.php" class="nav-item nav-link">Appointment</a>
                        <a href="contactus.html" class="nav-item nav-link">Contact</a>



                      
                      

                       
                     



                        <!-- <a href="#contact" class="nav-item nav-link">Contact</a>  -->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Login</a>
                            <div class="dropdown-menu m-0">
                                <a href="hms/admin" class="dropdown-item">Admin</a>
                                <a href="hms/doctor" class="dropdown-item">Doctor</a>
                                <a href="hms/user-login.php" class="dropdown-item">Patient</a>
                               
                            </div>
                            



                           



                        
                        
                    </div>

                    </div> 
                </div>
            </nav>
        </div>
    </div>


  
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                   
                </div>
            </div>
        </div>
    </div>  







    <div class="container-fluid py-5"  id="about"  >
        <div class="container"  >
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/project23.png" style="object-fit: cover;">
                    </div>
                </div> 


                 <div class="col-lg-7"  >
                    <div class="mb-4">
                        <h5  class="d-inline-block text-primary text-uppercase border-bottom border-5">About Us</h5>
                        <h1 class="display-4">Best Medical Care For Yourself and Your Family</h1>
                    </div>
                    <p>Welcome to our dental website, where we're dedicated to redefining the way you experience oral
                        healthcare. At our practice, we believe that exceptional dentistry goes hand in hand with
                        compassionate care and personalized attention. Our team of experienced professionals is
                        committed to providing you with the highest quality treatments in a welcoming and comfortable
                        environment. From routine cleanings to complex procedures, we strive to exceed your expectations
                        at every turn. But our commitment to your oral health doesn't end there. We're here to build
                        lasting relationships with our patients, supporting you on your journey to a healthier, happier
                        smile. Explore our website to learn more about our services, meet our team, and schedule your
                        appointment today. Welcome to a dental experience like no other – welcome to our practice.
                        .Discover a different kind of dental experience — one that creates lasting relationships with
                        our patients of all ages and backgrounds. Our dentists combine high-quality treatments and calm,
                        comfortable dental care with a knowledgeable team that treats you like family.Request an
                        appointment today and join our family of patients
                        for life.</p>
                    
                 </div>
                 
            </div>
            
        </div>
    </div>
</div>
   

   
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5" id="service">SmileCare Services</h5>
                <h1 class="display-4"></h1>
            </div>
            <div class="owl-carousel price-carousel position-relative" style="padding: 0 45px 45px 45px;">
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="img\project14.webp" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center"
                            style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-primary">Dental restoration</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top fw-normal"
                                    style="font-size: 22px; line-height: 45px;"></small><small
                                    class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;"></small>
                            </h1>
                        </div>
                    </div>
                    <div class="text-center py-5">
                       
                        <p>Dental restoration refers to the process of repairing or replacing damaged or missing teeth
                            to restore their function, aesthetics, and overall oral health.</p>
                        <a href="hms/user-login.php" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a>
                    </div>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="img\project14.jpg" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center"
                            style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-primary">Dental Extraction</h3>
                            
                        </div>
                    </div>
                    <div class="text-center py-5">
                       
                        <p> Dental extraction is a dental procedure where a tooth is removed from its socket in the
                            jawbone,instruments such as forceps or elevators.</p>
                        <a href="hms/user-login.php" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a>
                    </div>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="img/price-3.jpg" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center"
                            style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-primary">Dental Surgery</h3>
                        
                        </div>
                    </div>
                    <div class="text-center py-5">
                       
                        <p>Dental surgery refers to any surgical procedure performed in the oral cavity by a dentist or Dental surgery refers to any 
                            oral surgeon.Dental surgery </p>
                        <a href="hms/user-login.php" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a>
                    </div>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="img\project13.jpg" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center"
                            style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-primary">Crown placement</h3>
                          
                        </div>
                    </div>
                    <div class="text-center py-5">
                       
                        <p> dental crown installation is a common dental procedure used to restore shape, size, strength
                            and appearance of a damaged or weakened tooth</p>
                        <a href="hms/user-login.php" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>








         <div class="container-fluid bg-dark text-light mt-5 py-4">
    <div class="container py-3">
        <div class="row">
            <!-- Left-aligned content -->
            <div class="col-md-6 text-start">
                <h1 class="m-0 text-uppercase text-primary">Smile<span class="text-warning">Care</span></h1>
                <p>
                    <span > contact </span> 
                    <span> services </span>
                    <span> about </span>
                </p>
            </div>
            <!-- Right-aligned content -->
            <div class="col-md-6 text-end">
                <h6 class="text-primary text-uppercase mt-4 mb-3">Follow Us</h6>
                <div class="d-flex justify-content-end">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://freewebsitecode.com/"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://facebook.com/freewebsitecode/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://freewebsitecode.com/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="https://youtube.com/freewebsitecode/"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>







 -->







    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    
    <script src="js/main.js"></script>
</body>

</html>