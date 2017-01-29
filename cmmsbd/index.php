<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CMMS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php
        include "header.php";
        /*
          session_start();
          if(empty($_SESSION["name"]))
          $_SESSION["name"] = "ab";
         */
        ?>


        <div class="container">
            <!--Start Carousel-->
            <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                    <div class="item active"> <img src="img/featured/1.jpg" alt=""></div>
                    <div class="item"> <img src="img/featured/2.jpg" alt=""></div>
                    <div class="item"> <img src="img/featured/10.jpg" alt=""></div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><img src="img/arrow.png" alt=""></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><img src="img/arrow2.png" alt=""></a> </div>
            <!--End Carousel-->
            <hr>
            <div class="fontChange"> </div>

            <div class="span5" >
                <h2>Features</h2>
                <hr />

                <img class="mySlides" src="img/home/6.JPG" style="width:100%">
                <img class="mySlides" src="img/home/7.JPG" style="width:100%">

                <script>
                    var myIndex = 0;
                    carousel();

                    function carousel() {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";
                        }
                        myIndex++;
                        if (myIndex > x.length) {
                            myIndex = 1
                        }
                        x[myIndex - 1].style.display = "block";
                        setTimeout(carousel, 2000);
                    }
                </script>
            </div>


            <div class="span6" >
                <h2>Publications</h2>
                <hr />     
                <div class="span2"><a  href="#" style="text-decoration: none"><img src="img/home/pub2.PNG" height="200"  /><br /> Publication 1</a></div>                

                <div class="span2"><a  href="#" style="text-decoration: none"><img src="img/home/pub3.PNG" height="200"  /><br /> Publication 2</a></div> 
                
                <div class="span1"><a  href="#" style="text-decoration: none"><img src="img/home/pub1.PNG" height="200"  /><br />  Publication 3</a></div> 
                
            </div>


            <div class="span5" >
                <h2>Read More</h2>
                <hr />
                <p style="font-size: 16px;"> CMMS have been working towards establishing human rights... <a href="#" style="font-size: 18px;">View Details</a></p>
                <hr />  
                <p style="font-size: 16px;"> Gender based Violence is strongly rooted in the society...<a href="#" style="font-size: 18px;">View Details</a></p>
                <hr />  
                <p style="font-size: 16px;">Stop violence is an out of reach concern... <a href="#" style="font-size: 18px;">View Details</a></p>
                <hr />  

            </div>


            <div class="span6"  >
                <h2>News</h2>
                <hr />
                <div>
                    <marquee height="220" direction="up" >
                        <p class="text-justify" style="font-size: 18px;" > 
                            CMMS together with Department of Women’s Affairs, Government of Bangladesh and CARE Bangladesh jointly organized a National Lesson Learning Work-shop On 27 - 28 March 2014 .
                        </p>
                        <hr />  
                        <p class="text-justify" style="font-size: 18px;" > 
                            The day long work-shop was held at Nabab Nawab Ali Chowdhury Senate Bhaban of Dhaka university premise, Dhaka on 11th December, 2014.
                        </p>
                        <p class="text-justify" style="font-size: 18px;" > 
                            The day long work-shop was held at Nabab Nawab Ali Chowdhury Senate Bhaban of Dhaka university premise, Dhaka on 11th December, 2014.
                        </p>
                    </marquee>
                </div>
            </div>

            <?php //include "footer.php"; ?>
        </div>
        <!-- /container -->
        <script src="js/jquery-1.7.1.min.js"></script>
        <script src="js/bootstrap-transition.js"></script>
        <script src="js/bootstrap-carousel.js"></script>
        <script src="js/bootstrap-alert.js"></script>
        <script src="js/bootstrap-modal.js"></script>
        <script src="js/bootstrap-dropdown.js"></script>
        <script src="js/bootstrap-scrollspy.js"></script>
        <script src="js/bootstrap-tab.js"></script>
        <script src="js/bootstrap-tooltip.js"></script>
        <script src="js/bootstrap-popover.js"></script>
        <script src="js/bootstrap-button.js"></script>
        <script src="js/bootstrap-collapse.js"></script>
        <script src="js/bootstrap-typeahead.js"></script>
        <script src="js/jquery-ui-1.8.18.custom.min.js"></script>
        <script src="js/jquery.smooth-scroll.min.js"></script>
        <script src="js/lightbox.js"></script>
        <script>
                    $('.carousel').carousel({
                        interval: 3000
                    })
        </script>
    </body>
</html>