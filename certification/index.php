<!DOCTYPE html>
<html lang="en">




<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../../../cdn-cgi/apps/head/OkbNSnEV_PNHTKP2_EYPrFNyZ8Q.js"></script>
   <link rel="icon" href="/images/favicon.png" sizes="32x32" />
  
    <title>UPES-CSI | CERTIFICATION</title>


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/flipclock.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/dark.css">
  

</head>

<body class="dark">
    
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="https://upescsi.in">
            <img src="images/logo.png" style="height: 60px; width: 170px" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        </div>
    </nav>
    <div class="site-header  d-flex flex-column align-items-center justify-content-between">
        <div class="hero">
            <h1>Maintaining the<span class="highlight"> environmental integrity</span> <br> is more of a human deed</h1>
            <p class="lead mt-3 mx-auto">We at UPES-CSI have been instrumental in making such strides ahead. Our initiative of developing E-Certificates as an alternative to paper certificates has been one of the key steps we have taken.</p>
            <a href="download.php" class="btn btn-primary mt-3">Download
                <img src="images/right-arrow.svg" alt="arrow">
            </a>
        </div>
        <div class="graph">
            <img src="images/graph-dark.svg" alt="graph" class="img-fluid">
        </div>
        <div class="container">
            <div class="section-title mini-title">
                <h4>Features</h4>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="feature-item">
                        <img src="images/feature-one.svg" alt="icon" class="featured-item-icon">
                        <h4 class="featured-item-title">Expert Designs</h4>
                        <p>Certificates are designed by our professionals who strive at making them look attractive.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="feature-item">
                        <img src="images/feature-three.svg" alt="icon" class="featured-item-icon">
                        <h4 class="featured-item-title">Core Commitee Support</h4>
                        <p>Our team of helpful induviduals are always on call to figure out any issue you may have in obtaining your copy of the certificate</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="feature-item">
                        <img src="images/feature-two.svg" alt="icon" class="featured-item-icon">
                        <h4 class="featured-item-title">Secure Server</h4>
                        <p>Only you will be the rightful viewer for the certificates you earn and NO one else will be able to access it without your grant</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section section-highlight">
        <div class="container">
            <div class="row align-items-center justify-content-between mt-5">
                <div class="col-12 col-md-6">
                    <img src="images/a.png" alt="illustration" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 text-center">
                    <h2 class="mb-4">Privacy-based authentication</h2>
                    <p class="lead mb-4">

                        By encrypting your communications — emails, logins credentials — digital certificates protect your private data and prevent the information from being seen by unintended eyes
                    </p>
                    <p>


                        of course, saving paper is the most important accomplishment but bravo! the above-mentioned gain is also a significant one.</p>
                   
                </div>
            </div>

        </div>

    </section>

    <section class="section">
        <div class="container">
            <div class="row align-items-center justify-content-between mt-5">

                <div class="col-12 col-md-6 text-center">

                    <h2 class="mb-4"> Be the change that you want to see in the world!</h2>
                    <p class="lead mb-4">


                        Each progression set forth has been a challenge for us and hence it completely relies on the hands of our clients to make it a triumph. Moreover, we take pride in declaring that this step has been one of our major accomplishments.</p>
             
                </div>
                <div class="col-12 col-md-6 text-right">

                    <img src="images/b.png" alt="illustration" class="img-fluid">
                </div>
            </div>

        </div>

    </section>

    <section class="section section-highlight ">
        <div class="container">
            <div class="section-title max-title text-center">
                <h3>Total Certificates Generated
                </h3>
            </div>



            <div class="row text-center">

                <div class="col">
               
                    <a class="btn btn-primary mt-3">	<h1><strong><?php
																require_once 'config.php';
																$count= mysql_fetch_array(mysql_query("SELECT SUM(TABLE_ROWS) FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA IN (DATABASE())"));
																echo $count[0];
																 ?></strong></h1></a>
                </div>

            </div>



        </div>

    </section>



    <footer class="section section-separated py-lg">
        <div class="container">
      
                <div class="text-center mt-5">
                  
                    <p class="footer__info--text">	Gaurvendra : +91-8920086773.</p>
                  
                </div>
                <div class="text-center mt-5" >
                    <p class="footer-col--text"><a href=" https://chat.whatsapp.com/2KSPMR59SwwBmkKQjNLoCe">Join this WhatsApp group if there's a spelling error in Certificate</a></p>
                   
                </div>
         
            <div class="text-center mt-5">
                <p class="copyright__text mb-0"><small>Copyright ©2020. <a href="https://www.upescsi.in/">UPES-CSI</a></small></p>
            </div>
        </div>

    </footer>




    <script src="js/jquery-3.3.1.slim.min.js"></script>
    
    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/plugins/flipclock.min.js"></script>
    <script src="js/plugins/chart.min.js"></script>
    <script src="js/plugins/owl.carousel.min.js"></script>

    <script src="js/script.js"></script>
</body>
</html>
