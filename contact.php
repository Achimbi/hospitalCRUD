<?php   include('includes/header.php');    ?>

        <div class="custom-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Contact us</h2>
                    </div>
                </div>
            </div>
        </div><!--breadcrumb-->
        <!--g map start-->
        <div id="map-canvas" style="width: 100%; height: 400px;"></div>
        <!--g map end-->
        <div class="divide70"></div>

        <div class="container">
            <div class="row">
                <div class="contact-info">
                    <div class="col-md-4">
                    <div class="media">
                        <div class="media-left">
                            <i class="glyphicon glyphicon-home"></i>
                        </div>
                        <div class="media-body">
                            <p>31452 8th Ave, New York, NY 10022</p>
                        </div>
                    </div>
                    </div><!--media-->
                    <div class="col-md-4">
                    <div class="media">
                        <div class="media-left">
                            <i class="glyphicon glyphicon-envelope"></i>
                        </div>
                        <div class="media-body">
                            <p>support@sitename.com</p>
                        </div>
                    </div>
                    </div><!--media-->
                    <div class="col-md-4">
                       <div class="media">
                        <div class="media-left">
                            <i class="glyphicon glyphicon-phone"></i>
                        </div>
                        <div class="media-body">
                            <p>+1 234 567 8910</p>
                        </div>
                    </div>
                    </div><!--media-->                    
                </div>
                
                <!-- Contact Form -->
                <div class="col-md-12"> 
                  <!-- IMPORTANT: change the email address at the top of the mail/mail.php file to the email address that you want this form to send to -->
                  <form class="form-style validate-form clearfix" action="mail/mail.php" method="POST" role="form">
                    
                    <!-- Left Column -->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="text-field form-control validate-field required" data-validation-type="string" 
                                                    id="form-name" placeholder="Full Name" name="name">
                        </div>
                        <div class="form-group">
                          <input type="email" class="text-field form-control validate-field required" data-validation-type="email" 
                                                    id="form-email" placeholder="Email Address" name="email">
                        </div>
                        <div class="form-group">
                          <input type="tel" class="text-field form-control validate-field phone" data-validation-type="phone" 
                                                    id="form-contact-number" placeholder="Contact Number" name="contact_number">
                        </div>
                        <div class="form-group text-right"> 
                          <img id="form-captcha-img" src="mail/captcha/captcha.php">
                          <span id="form-captcha-refresh" class="fa fa-refresh" title="Reload"></span> 
                          <input type="text" class="text-field form-control validate-field required" data-validation-type="captcha" 
                                                    id="form-captcha" placeholder="Enter text" name="captcha">
                        </div>
                      </div>
                    
                    <!-- END: Left Column --> 
                    
                    
                      <!-- Right Column -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <textarea placeholder="Message..." class="form-control validate-field required" name="message"></textarea>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-lg btn-outline-inverse  submit">Submit</button>
                        </div>
                        <div class="form-group form-general-error-container"></div>
                      </div>
                      <!-- END: Right Column -->
                    </div>
                  </form>
                </div>
                <!-- END: Contact Form --> 
     
            </div>
        </div>
		<div class="divide30"></div>
       
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
        <script src="js/contact.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <!--gmap js-->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript">
            var myLatlng;
            var map;
            var marker;

            function initialize() {
                myLatlng = new google.maps.LatLng(40.712784, -74.005941);

                var mapOptions = {
                    zoom: 13,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                    draggable: false
                };
                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                var contentString = '<p style="line-height: 20px; margin-bottom:4px;"><strong style="font-size:20px;text-transform:uppercase;"></strong></p><p style=" margin-bottom:4px;"></p>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'Marker'
                });

                google.maps.event.addListener(marker, 'click', function () {
                    infowindow.open(map, marker);
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </body>
</html>