<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Blood Donation</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">


        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- PrettyPhoto -->
        <link rel="stylesheet" href="assets/css/prettyPhoto.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>


    </head>
    <body>
    <!-- NAVBAR
    ================================================== -->

    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">
                    


                  </div>
              </div>

            </div>

            <div class="navbar-main">
              
              <div class="container">

                <span class="navbar-header"><a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="" height="48"></a></span>
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li class="has-child">
                      <ul class="submenu">
                        <li class="submenu-item"><a href="causes.html">Causes list </a></li>
                         <li class="submenu-item"><a href="causes-single.html">Single cause </a></li>
                         <li class="submenu-item"><a href="causes-single.html">Single cause </a></li>
                         <li class="submenu-item"><a href="causes-single.html">Single cause </a></li>
                      </ul>

                    </li>
                    <li></li>
                    <li></li>

                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->


	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">Blood Donation <span class="title-under"></span></h1>
			<p class="page-description">
				Donating Blood makes you stronger!
			</p>
			
	      
	      <p>&nbsp;</p>
		</div>

	</div>




<div class="container">
    <h2>Blood group Combinations</h2>
    <p>The following information will help you in getting a clear view about the donor and recpeint of every Blood Group:</p>
  <table class="table table-responsive table-bordered table-striped">
        <thead>
            <tr>
                <th>Blood Group</th>
                <th>Donor To</th>
                <th>Recepient of</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>A+</td>
                <td>A+ , AB+</td>
                <td>A+ , A- , O+ , O- </td>
            </tr>
            <tr>
                <td>A-</td>
                <td>O+ , A+ , B+ , AB+</td>
                <td>O+ , O-</td>
            </tr>
            <tr>
                <td>B+</td>
                <td>B+ , AB+</td>
                <td>B+ , B-, O+ , O-</td>
            </tr>
            <tr>
                <td>B-</td>
                <td>B+ , B- , AB+, AB-</td>
                <td>B- , O-</td>
            </tr>
            <tr>
                <td>O+</td>
                <td>O+ , A+ , B+ , AB+</td>
                <td>O+ , O- </td>
            </tr>
            <tr>
                <td>O-</td>
                <td>EVERYONE</td>
                <td>O-</td>
            </tr>

            <tr>
                <td>AB+</td>
                <td>AB+</td>
                <td>EVERYONE</td>
            </tr>
            <tr>
                <td>AB-</td>
                <td>AB+ , AB-</td>
                <td>AB- , A- , B- , O-</td>
            </tr>
        </tbody>
    </table>
</div>

<br /><br />
<h3 style="text-align:center">Please Select your Respective Blood Group</h3>
<br /><br />
<div class="row-md-offset-10"  >
  <div class="row-md-offset-1">
    <select name="ddlStudents" class="form-control dropdown " id="ddlStudents">
      <option>Select</option>
      <option value="1st">A+</option>
      <option value="2nd">A-</option>
      <option value="3rd">B+</option>
      <option value="4th">B-</option>
      <option value="5th">O-</option>
      <option value="6th">O+</option>
      <option value="7th">AB+</option>
      <option value="8th">AB-</option>
    </select>
  </div>
        
    
     
</div>

<div style="color:darkblue">
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <hr />
    <h3 style="text-align:center">~Support our cause~</h3>
</div>




	<div class="main-container">

		<div class="container gallery fadeIn animated">

			<div class="row"></div>
			
		</div>


	</div> <!-- /.main-container  -->


    <footer class="main-footer">
      <div class="footer-main">
          <div class="container">
                
                <div class="row">
                  <div class="clearfix"></div>



                </div>
                
                
        </div>

            
      </div>

        <div class="footer-bottom">

            <div class="container text-right">
                 <p>e-Health UMT @ 2018</p>
            </div>
        </div>
        
    </footer>



<script>
    var videoSource = new Array();
    videoSource[0] = '@Url.Content("~/Content/BloodTypesWhomY-Download-From-YTPak.com.mp4")';
    videoSource[1] = '@Url.Content("~/Content/Blood_Donation_Awareness.mp4")';
    var videoCount = videoSource.length;
    var i = 0;
    $(document).ready(function () {

        document.getElementById("myVideo").setAttribute("src", videoSource[0]);

        document.getElementById('myVideo').addEventListener('ended', myHandler, false);




    });

    function videoPlay(videoNum) {
        document.getElementById("myVideo").setAttribute("src", videoSource[videoNum]);
        document.getElementById("myVideo").load();
        document.getElementById("myVideo").play();
    }

    function myHandler() {
        i++;
        if (i == (videoCount)) {
            i = 0;
            videoPlay(i);
        }
        else {
            videoPlay(i);
        }

    }


    //$(document).ready(function () {

    //    $("#btnBloodDll").click(function (e) {
    //        $("#dropdown-menu").dropdown('toggle');
    //    });
    //});


    $("#ddlStudents").change(function () {

        var selectedValue = $("#ddlStudents").val();

        alert("Value is: " + selectedValue);
    });
</script>

       
        
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- PrettyPhoto javascript file -->
        <script src="assets/js/jquery.prettyPhoto.js"></script>

        <!-- Template main javascript -->
        <script src="assets/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
