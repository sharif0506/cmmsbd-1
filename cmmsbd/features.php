<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CMMS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
        <style>
            #publications{
                background: url(img/background/citylight.jpeg) no-repeat center center;
                opacity: .9;

            }
           
            .test{
                margin-top:70px;
                padding:30px;
                border-radius:50%;
            }
            
        </style>
    </head>
    <body >
        <?php
        include "header.php";
        //include "createPublication.php";
        ?>
        <div class="container">
            <br /><br /><br />
            <div align="center"  id="publications" class="span12"  >
                
                <div class="span4" style="background-color:lightgrey; height: 400px; opacity: 0.7;margin-top: 10px;margin-bottom:  10px;">
                    <i class="btn btn-danger test fa fa-5x fa-book" aria-hidden="true"></i>
                    <h1 class="test">Photo Diary</h1>
                </div>
               
                <div class="span3" style="background-color:lightblue; height: 400px; opacity: 0.7;margin-top: 10px;margin-bottom:  10px;">
                     <i class="btn btn-info test fa fa-5x fa-mobile" aria-hidden="true"></i>
                     <h1 class="test">Challenger Mamu Mobile App</h1>
                </div>
                <div class="span4" style="background-color:lightcyan; height: 400px;opacity: 0.7;margin-top: 10px;">
                     <i class="btn btn-primary test fa fa-5x fa-television" aria-hidden="true"></i>
                    <h1 class="test">Community Activism</h1>
                </div>
                    <br />

                 
            </div>

            <?php //include "footer.php";  ?>
        </div>


        <!-- /container -->
        <!--
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
        -->



    </body>
</html>
