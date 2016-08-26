<?php
if(isset($_GET['route']) && $_GET['route']!='')
{
	$file="pages/".$_GET['route'].".php";
	if(!file_exists($file))
	{
		$file="pages/home.php";
		$title="Home";
	}
	else
	{
		$file="pages/".$_GET['route'].".php";
		$title=ucwords(str_replace("_"," ",$_GET['route']));
	}
}
else
{
	$file="pages/home.php";
	$title="Home";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?php echo $title; ?> - Removal North London</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>


<div class="se-pre-con"></div>
<body>
<div class="container-fluid">

<header>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
          <a href="tel:020 8226 4240"><img src="images/phone.png" class="phone_img" /></a>
        <a href="index.php"><img src="images/logo.png" class="logo" /></a>
        <a class="manvan" href="index.php"><h1 class="main_title"><strong>Removal North London</h1>  </a>
      </div><!-- navbar-header -->
      <div class="collapse navbar-collapse" id="collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php"<?php if(!isset($_GET['route']) || $_GET['route']=="home"){echo "class=\"active\"";} ?>>Home</a></li>
          <li><a href="index.php?route=home_removals" <?php if(isset($_GET['route']) && $_GET['route']=="home_removals"){echo "class=\"active\"";} ?>>Home Removals</a></li>
          <li><a href="index.php?route=office_removals" <?php if(isset($_GET['route']) && $_GET['route']=="office_removals"){echo "class=\"active\"";} ?>>Office Removals</a></li>
          <li><a href="index.php?route=storage" <?php if(isset($_GET['route']) && $_GET['route']=="storage"){echo "class=\"active\"";} ?>>Storage</a></li>
          <li><a href="index.php?route=quote" <?php if(isset($_GET['route']) && $_GET['route']=="quote"){echo "class=\"active\"";} ?>>Moving Quote</a></li>
            <li><a href="index.php?route=contact_us" <?php if(isset($_GET['route']) && $_GET['route']=="contact_us"){echo "class=\"active\"";} ?>>Contact Us</a></li>
        </ul>        
      </div><!-- collapse navbar-collapse -->
    </div><!-- container -->
  </nav>

</header><!-- HEADER -->

<div class="clearfix"></div>

<?php include($file); ?>

</div>


<div class="page" id="services">
    <div class="content container">
      <h2><strong>Our Services</strong></h2>
      <div class="row">

        <article class="service col-sm-4 fade-in">
          <img class="img-thumbnail" src="images/3.jpg" alt="Icon">
          <h3>Office Movers</h3>
          <p>ALways remember us if you need a reliable mover for your office</p>
                    <a href="index.php?route=office_removals"><button class="btn-primary">Learn More</button></a>

        </article>

        <article class="service col-sm-4 fade-in">
          <img class="img-thumbnail" src="images/2.jpg" alt="Icon">
          <h3>Home Movers</h3>
          <p>We move your stuffs very carefully. We make a list of everything before we move</p>

                    <a href="index.php?route=home_removals"><button class="btn-primary">Learn More</button></a>

        </article>
        
        <article class="service col-sm-4 fade-in">
          <img class="img-thumbnail" src="images/1.jpg" alt="Icon">
          <h3>Storage</h3>
          <p>Here at Removal North London, we offer a fully containerised storage facility.</p>
         <a href="index.php?route=storage"><button class="btn-primary">Learn More</button></a>
        </article>
  
      </div><!-- row -->   
    </div><!-- content container -->
  </div><!-- services page -->


<div class="clearfix"></div>
<div class="container-fluid">
    <div class="row fade-in" style="background:#286090; text-align:center; color:#FFFFFF;"><!--Location-->
    
        <h2 style="padding:20px 0px 20px 0px;"> OUR LOCATION </h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1239.206689456076!2d-0.11001134308203771!3d51.59731389847162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761be258f1e8af%3A0x2e6c0dd4686				   dbfd3!2s734+Lordship+Ln%2C+Wood+Green%2C+London+N22+5JP%2C+UK!5e0!3m2!1sen!2sjp!4v1471929347976" class="fade-in" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div><!--row-location-->
</div><!--Container-Location-->
<div class="clearfix"></div>


<footer>
  <div class="content container">
  
    
      
      
      <div class="row" style="background:#286090; border-radius:10px;">

      <div class="container-fluid" >
       <div class="col-sm-3">
        <nav class="navbar navbar-default" role="navigation">
          <ul class="nav nav-pills nav-stacked">
          <li><a href="#">Home</a></li>
       
          <li><a href="#">Contact Us</a></li>
     
            <li><a href="#">Moving Quote</a></li>
         
            
            <li><a href="#">Home Removal</a></li>
            
             <li><a href="#">Office Removals</a></li>
           
            <li><a href="#">Storage</a></li>
          </ul>
        </nav>  
             </div><!--1st-col--->
             
             
              <div class="col-sm-4">
             <div class="fb-page" data-href="https://www.facebook.com/removalnorthlondon/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"  data-height="300px" style="width:100%" ><blockquote cite="https://www.facebook.com/removalnorthlondon/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/removalnorthlondon/">Removal North London</a></blockquote></div>
             </div>
             
             
              <div class="col-sm-3 ">
              <h3 style="text-align:center; padding:10px;">Contact Us</h3>
              <img class="img-responsive home_img" src="images/quote.png" />
        <nav class="navbar-text pull-right" role="navigation">
        <ul class="nav navbar-nav navbar-right">
         <li><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus fa-3x"></i></a></li>
	
<li><a href="#"><i class="fa fa-facebook-square fa-3x"></i></a></li>
        </ul>
        </nav>  
             </div>
             
             
      </div><!--container-->
    </div><!-- row -->
    
      <div class="clearfix"></div>
    
      <div class="row">
      <div class="container" style="text-align:center;">
        <p>Call us at <span class="phone"><a href="tel:020 8226 4240">020 8226 4240</a></span></p>
        <p>Copyright &copy; 2016 <a href="#">Removal North London</a>. All rights reserved.</p>    
      </div><!--container-->
      </div><!-- row -->
  </div><!-- content container -->
</footer>
<a href="#" class="go-top"><i></i></a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script src="js/myscript.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>
 
 
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
