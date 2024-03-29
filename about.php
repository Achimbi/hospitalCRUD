<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
         <title>E-Hospital</title>

        <!-- CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- -->
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.css" rel="stylesheet">
        <link href="css/flexslider.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        
        <link href="css/style.css" type="text/css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="top-bar">
                <div class="row">
                    <div class="col-md-7 hidden-xs hidden-sm">
                        <span><i class="glyphicon glyphicon-phone"></i> +1 324 567 8910</span>
                    </div>
                    <div class="col-md-5 text-right">
                        <div class="top-bar-right">
                            <a href="#" class="appointment">make an appointment</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
       <!-- Static navbar -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt=""></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="about.php">What we do</a></li>
                                <li><a href="about.php">Our Hisrory</a></li>
                                <li><a href="about.php">Our Leadership</a></li>
                                <li><a href="about.php">Press about us</a></li>

                            </ul>
                        </li>
                        <li><a href="team.php">Our Team</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="services.php">Cancer Center</a></li>
                                <li><a href="services.php">Rehabilitation Center</a></li>
                                <li><a href="services.php">Gastro Labs</a></li>
                                <li><a href="services.php">Emergency Room</a></li>

                            </ul>
                        </li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>



        <div class="custom-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>About us</h2>
                    </div>
                </div>
            </div>
        </div><!--breadcrumb-->
        <div class="parallax" data-stellar-background-ratio="0.5"></div>
        <div class="divide70"></div>

        <div class="container about-page">
            <div class="row">
                <div class="col-md-12">
                    <h1>Welcome to <strong>E-Hospital</strong></h1>
                    <p class="lead">
                        If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. Ut volutpat eros adipiscing nonummy.
                    </p>
                </div>
            </div><!--end row-->
            <div class="row">
                <div class="col-md-7 margin30">
                    <!--bootstrap carousel slider-->
                    <div id="about-carousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#about-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#about-carousel" data-slide-to="1"></li>
                            <li data-target="#about-carousel" data-slide-to="2"></li>
                            <li data-target="#about-carousel" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/medical/equp-1.jpg" alt="img">
                            </div>

                            <div class="item">
                                <img src="img/medical/equp-2.jpg" alt="img">
                            </div>

                            <div class="item">
                                <img src="img/medical/equp-3.jpg" alt="img">
                            </div>

                            <div class="item">
                                <img src="img/medical/equp-4.jpg" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <p>
                        Lorem ipsum dolor amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check-square"></i>Dental Specialists.</li>
                        <li><i class="fa fa-check-square"></i>X-Ray and Laboratory exams.</li>
                        <li><i class="fa fa-check-square"></i>Traumatology emergency services.</li>
                        <li><i class="fa fa-check-square"></i>Gastroenterology diseases.</li>
                        <li><i class="fa fa-check-square"></i>People virus prevention methods.</li>
                        <li><i class="fa fa-check-square"></i>Cancer and AIDS Specialists</li>
                    </ul>
                    <p>
                    	Euismod nec nunc et, luctus viverra mauris. Vestibulum dictum nunc a diam bibendum tempus. Etiam odio ligula, luctus et ante bibendum, rhoncus rhoncus lorem. Proin at euismod nunc. Integer sagittis lorem at lorem rhoncus placerat. Praesent tellus metus, molestie non feugiat in, suscipit vitae arcu. Sed a justo rutrum, interdum turpis quis, imperdiet est. Cras nec dolor vitae metus molestie lacinia dignissim ut nisl. Praesent finibus quis ligula vel molestie. Ut condimentum lacus nec dolor pulvinar blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec semper dui. Maecenas vulputate, lacus eu facilisis suscipit, erat augue malesuada lorem, efficitur efficitur arcu quam eget dolor.
                    </p>
                </div>
            </div><!--end row-->
        </div>
        <div class="divide30"></div>
        
       <div class="team-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="center-title">
                            <i class="glyphicon glyphicon-education"></i>
                            <h2>Meet our <strong>Specialists</strong></h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-3 margin30">
                        <div class="team-col wow animated fadeInLeft" data-wow-delay="0.1s">
                            <a href="#"><img src="img/medical/team-1.jpg" class="img-responsive" alt=""></a>
                            <div class="divide20"></div>
                            <h3>Dr. Lorem</h3>
                            <em>Gastro Specialist</em>
                            <div class="divide20"></div>
                            <ul class="list-inline">
                                <li>
                                    <a href="#" class="social-icon social-icon-sm social-ico-border-round social-ico-facebook">
                                        <i class="fa fa-facebook"></i>
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-icon social-icon-sm  social-ico-border-round social-ico-twitter">
                                        <i class="fa fa-twitter"></i>
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-icon social-icon-sm  social-ico-border-round social-ico-linkedin">
                                        <i class="fa fa-linkedin"></i>
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div><!--team col-->
                    </div><!--col-md-3 col-sm-6--> 
                    <div class="col-sm-6 col-sm-3 margin30">
                        <div class="team-col wow animated fadeInLeft" data-wow-delay="0.2s">
                            <a href="#"><img src="img/medical/team-3.jpg" class="img-responsive" alt=""></a>
                            <div class="divide20"></div>
                            <h3>Dr. Ipsum</h3>
                            <em>Cancer Specialist</em>
                            <div class="divide20"></div>
                            <ul class="list-inline">
                                <li>
                                    <a href="#" class="social-icon social-icon-sm social-ico-border-round social-ico-facebook">
                                        <i class="fa fa-facebook"></i>
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-icon social-icon-sm  social-ico-border-round social-ico-twitter">
                                        <i class="fa fa-twitter"></i>
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-icon social-icon-sm  social-ico-border-round social-ico-linkedin">
                                        <i class="fa fa-linkedin"></i>
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div><!--team col-->
                    </div><!--col-md-3 col-sm-6-->
                    <div class="col-sm-6 col-sm-3 margin30">
                        <div class="team-col wow animated fadeInLeft" data-wow-delay="0.3s">
                            <a href="#"><img src="img/medical/team-2.jpg" class="img-responsive" alt=""></a>
                            <div class="divide20"></div>
                            <h3>Dr. Dallar</h3>
                            <em>Dental Specialist</em>
                            <div class="divide20"></div>
                            <ul class="list-inline">
                                <li>
                                    <a href="#" class="social-icon social-icon-sm social-ico-border-round social-ico-facebook">
                                        <i class="fa fa-facebook"></i>
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-icon social-icon-sm  social-ico-border-round social-ico-twitter">
                                        <i class="fa fa-twitter"></i>
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-icon social-icon-sm  social-ico-border-round social-ico-linkedin">
                                        <i class="fa fa-linkedin"></i>
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div><!--team col-->
                    </div><!--col-md-3 col-sm-6-->
                    <div class="col-sm-6 col-sm-3 margin30">
                        <div class="team-col wow animated fadeInLeft" data-wow-delay="0.4s">
                            <a href="#"><img src="img/medical/team-4.jpg" class="img-responsive" alt=""></a>
                            <div class="divide20"></div>
                            <h3>Dr. Inpost</h3>
                            <em>Diet Specialist</em>
                            <div class="divide20"></div>
                            <ul class="list-inline">
                                <li>
                                    <a href="#" class="social-icon social-icon-sm social-ico-border-round social-ico-facebook">
                                        <i class="fa fa-facebook"></i>
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-icon social-icon-sm  social-ico-border-round social-ico-twitter">
                                        <i class="fa fa-twitter"></i>
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-icon social-icon-sm  social-ico-border-round social-ico-linkedin">
                                        <i class="fa fa-linkedin"></i>
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div><!--team col-->
                    </div><!--col-md-3 col-sm-6-->
                </div>
            </div>
        </div><!--team section end-->


        <section class="know-more">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 margin30">
                        <h3>Video Presentation</h3>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="http://player.vimeo.com/video/133170635"></iframe>
                        </div>
                    </div>
                    <div class="col-sm-6 margin30">
                        <h3>Medical Departments</h3>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                        <div class="panel-group collapse-colored-col" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading active">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            Primary doctors
                                        </a>
                                    </h4>
                                </div><!-- /.panel-heading -->

                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio augue, scelerisque eget erat vel, hendrerit feugiat dui. Quisque velit erat, eleifend sed ligula vel, bibendum accumsan justo. Sed in justo ac massa suscipit tincidunt. Integer ac mauris ut dolor lobortis ullamcorper. Duis facilisis vitae odio ut commodo. Etiam et enim est. Sed ultrices hendrerit euismod. Aliquam lobortis rutrum adipiscing.
                                    </div><!-- /.panel-body -->
                                </div><!-- /.panel-heading -->
                            </div><!-- /.panel -->

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            Dental center
                                        </a>
                                    </h4>
                                </div><!-- /.panel-heading -->

                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Praesent rutrum arcu lacus, nec consectetur mauris pellentesque sit amet. Nulla facilisi. Donec tempor nunc in varius fermentum. Nulla eget vulputate neque. Sed ultricies viverra augue, ut accumsan metus malesuada id. Cras ultrices arcu nec mauris consequat, viverra accumsan enim vulputate. Nunc auctor, dolor et aliquet consequat, sapien leo viverra felis, ac gravida purus libero sit amet eros. Nam iaculis augue vitae rhoncus elementum. In hac habitasse platea dictumst. Morbi aliquet adipiscing elit, at convallis massa fringilla et.
                                    </div><!-- /.panel-body -->
                                </div><!-- /.panel-collapse -->
                            </div><!-- /.panel -->

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                            Gastro center
                                        </a>
                                    </h4>
                                </div><!-- /.panel-heading -->

                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Phasellus mattis dignissim neque vel tincidunt. Nam posuere nisl at erat mollis euismod. Cras diam diam, luctus vitae metus vitae, porttitor porttitor lorem. Integer feugiat justo in lectus dignissim consectetur. Aliquam vel fringilla neque. Pellentesque eget arcu ac ante pulvinar malesuada et id erat. Praesent mattis porta arcu placerat pellentesque. Maecenas ullamcorper dui non est elementum aliquam.
                                    </div><!-- /.panel-body -->
                                </div><!-- /.panel-collapse -->
                            </div><!-- /.panel -->

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                            Cancer center
                                        </a>
                                    </h4>
                                </div><!-- /.panel-heading -->

                                <div id="collapseFour" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Cras sed nunc eu lectus feugiat ultricies lobortis eget mi. Nam et nulla venenatis, luctus lacus eget, pharetra lacus. Nam facilisis congue nibh et iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed vel commodo lectus. Curabitur tellus nunc, bibendum viverra quam sed, tempor posuere dui. Aliquam a lectus ligula. Mauris congue, urna ac ullamcorper dapibus, lacus sapien consectetur tortor, vel semper ligula eros ut urna. Quisque egestas et lectus in faucibus.
                                    </div><!-- /.panel-body -->
                                </div><!-- /.panel-collapse -->
                            </div><!-- /.panel -->
                        </div><!-- /.panel-group -->
                    </div>
                </div>
            </div>
        </section>
        <!--know more section end-->
        
        <section class="testimonials">
            <div class="container">
                <div class="center-title">
                    <i class="glyphicon glyphicon-volume-up"></i>
                    <h2>What people say<strong> about us</strong></h2>                        
                </div>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="testi-slides">
                            <ul class="slides">
                                <li>
                                    <img src="img/medical/testimonials-1.jpg" alt="">
                                    <h4>Garry McCleey</h4>
                                    <em>Software developer</em>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    </p>
                                </li>
                                <li>
                                    <img src="img/medical/testimonials-2.jpg" alt="">
                                    <h4>Sarah Brown</h4>
                                    <em>School teacher</em>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    </p>
                                </li>
                                <li>
                                    <img src="img/medical/testimonials-3.jpg" alt="">
                                    <h4>Donald Trump</h4>
                                    <em>Artist</em>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--testimonials end-->



        <div class="ads-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-center">
                        <h3>We offer full medical exam !!!</h3>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="#" class="btn btn-white-border btn-lg">Make an appointment</a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
        	 <div class="divide40"></div>
        	 <div class="socials-colored col-md-12 center">
                <a href="#" class="social-icon social-ico-dark social-ico-colored-facebook">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="#" class="social-icon social-ico-dark social-ico-colored-twitter">
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="#" class="social-icon social-ico-dark social-ico-colored-google-plus">
                    <i class="fa fa-google-plus"></i>
                    <i class="fa fa-google-plus"></i>
                </a>
                <a href="#" class="social-icon social-ico-dark social-ico-colored-youtube">
                    <i class="fa fa-youtube-play"></i>
                    <i class="fa fa-youtube-play"></i>
                </a>
                <a href="#" class="social-icon social-ico-dark social-ico-colored-linkedin">
                    <i class="fa fa-linkedin"></i>
                    <i class="fa fa-linkedin"></i>
                </a>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <span>Copyright &copy; 2015. All right reserved.</span>
                </div>
            </div>
        </footer>

        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="js/jquery.stellar.min.js" type="text/javascript"></script>
        <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script src="js/wow.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>

    </body>
</html>