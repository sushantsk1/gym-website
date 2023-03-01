<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GYMSTER - Gym HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body>
    
    <?php include('include/header.php');?>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Gallery</h1>
                <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                
            </div>
        </div>
    </div>
    <!-- Hero End -->


<!-- Gallery Section Begin -->
    <div class="gallery-section spad">
        <div class="container">
           
            <div class="row gallery-filter">
                <div class="col-lg-6 mix all fitness">
                    <img src="img/gallery/gallery-1.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 mix all fitness coaching">
                            <img src="img/gallery/gallery-2.jpg" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-12 mix all coaching">
                                    <img src="img/gallery/gallery-3.jpg" alt="">
                                </div>
                                <div class="col-lg-12 mix all coaching">
                                    <img src="img/gallery/gallery-4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 mix all other">
                            <img src="img/gallery/gallery-5.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mix all other">
                            <img src="img/gallery/gallery-6.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mix all event">
                    <img src="img/gallery/gallery-7.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->

     <?php include ('include/footer.php');?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>