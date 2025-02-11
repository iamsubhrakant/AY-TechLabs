<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>N Ravi Shankar : Your Trusted Legal Partner</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">

    <!--CARTER ONE Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">



    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        body {
            background-color: black;
        }
    </style>


</head>




<body>
    <div class="wrapper">
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="index.html">
                                <h1>N Ravi Shankar</h1>
                                <!-- <img src="img/logo.jpg" alt="Logo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="top-bar-right">
                            <div class="text">
                                <p>Opening Hour Mon - Fri</p>
                            </div>
                            <div class="text">
                                <h2>+91 9731893764</h2>
                                <p>Call Us For Free Consultation</p>
                            </div>
                            <div class="social">
                                <!-- <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a> -->
                                <a href="https://wa.me/9556875714?text=Can%20I%20get%20a%20quote?"><i
                                        class="fa-brands fa-whatsapp"></i></a>
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=subhrakantbiswal2003@gmail.com&su=GET+FREE+CONSULTATION
                                    "><i class="fa-regular fa-envelope"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="about.html" class="nav-item nav-link">About</a>
                            <a href="service.html" class="nav-item nav-link">Service</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->




    </div>


    <!-- form starts  -->

    <div class="wrapperform glow">


        <div class="formcontent">


            <form action="sendmail.php" method="POST">



                <div class="mainform">

                    <label for="fullname" class="mainformlabel">
                        Full Name
                    </label>

                    <input type="text" name="full_name" id="fullname" required class="form-control" />

                </div>




                <div class="mainform">

                    <label for="email_address" class="mainformlabel">Email Address</label>

                    <input type="email" name="email" id="email_address" required class="form-control" />

                </div>




                <div class="mainform">

                    <label for="subject" class="mainformlabel">Subject</label>

                    <input type="text" name="subject" id="subject" required class="form-control" />

                </div>




                <div class="mainform">

                    <label for="message" class="mainformlabel"> Message</label>

                    <textarea name="message" id="message" required class="form-control" rows="3" required></textarea>

                </div>



                <div class="mainform">

                    <button type="submit" name="submitContact" class="btn btn-primary">Send Mail</button>

                </div>




            </form>
        </div>
    </div>


    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">



                <div class="col-md-6 col-lg-4">
                    <div class="footer-link">
                        <h2>Useful Pages</h2>
                        <a href="index.html">Home</a>
                        <a href="about.html">About Us</a>
                        <a href="service.html">Service</a>
                        <a href="contact.php">Contact Us</a>
                    </div>
                </div>



                <div class="col-md-6 col-lg-4">
                    <div class="footer-link">
                        <h2>Know your Bharat</h2>




                        <a href="https://timesofindia.indiatimes.com/topic/supreme-court-of-india/news">Supreme
                            Court of India</a>

                        <a href="https://timesofindia.indiatimes.com/blogs/lawtics/">Lawtics Blog</a>


                        <a href="https://timesofindia.indiatimes.com/topic/Legal/news">Legal News</a>

                        <a href="https://timesofindia.indiatimes.com/topic/property/news">Property News</a>


                        <a href="https://timesofindia.indiatimes.com/topic/criminal/blogs">Crime Scenes</a>


                    </div>
                </div>




                <div class="col-md-6 col-lg-4">
                    <div class="footer-contact">
                        <h2>Get In Touch</h2>
                        <p><i class="fa fa-map-marker-alt"></i>Citizen Genie Centre, No 3, Krishnamachari
                            Building, C/o, Whitefield - Hoskote Rd, opposite Sterling Villa Grande, Seegehalli,
                            Bengaluru, Karnataka 560067</p>
                        <p><i class="fa fa-phone-alt"></i>+91 973 189 3764</p>
                        <p><i class="fa fa-envelope"></i>adv.nravi1@gmail.com</p>
                    </div>
                </div>




            </div>
        </div>
    </div>
    </div>




    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        var messageText = "<?= $_SESSION['status'] ?? ''; ?>'";
        if (messageText !='') {

            Swal.fire({
                title: "Thank you for your message! Kindly bear with us, and we will get back to you shortly regarding your inquiry.",
                text: messageText,
                icon: "success"
            });

            <?php unset($_SESSION['status']); ?>
        }
    </script>

</body>

</html>
