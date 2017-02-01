<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CMMS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
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
		<div class="container-fluid"  >     
            <div  class="row" align="center" style="margin-left: 25px;margin-right: 25px">
                <div class="span4 column" style="background-color:#e04314; ">
                    <i class="btn btn-warning test fa fa-5x fa-file-text-o" aria-hidden="true"></i>
                    <h2 class="test">Upcoming Events</h2>
                </div>

                <div class="span4 column" style="background-color:lightseagreen; ">
                    <h2 class="test" >News Update</h2>
                    <i class="btn btn-info test  fa fa-5x fa-microphone" aria-hidden="true"></i>

                </div>
                <div class="span4 column" style="background-color:greenyellow; ">
                    <i class="btn btn-primary test fa fa-5x fa-users" aria-hidden="true"></i>
                    <h2 class="test">Find Us On Social Media</h2>
                </div>
            </div>
        </div>

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

    </body>
</html>