<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['send']))
  {
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$phoneNum=$_POST['phoneNum'];
	$carBrand=$_POST['carBrand'];
	$carName=$_POST['carName'];
	$insuranceComp=$_POST['insuranceComp'];
	$insExpiry=$_POST['insExpiry'];
	$fuelType=$_POST['fuelType'];
	$modelYear=$_POST['modelYear'];
	$seat=$_POST['seat'];
	$rentPriceDay=$_POST['rentPriceDay'];
	$pickupLocation=$_POST['pickupLocation'];
	$returnLocation=$_POST['returnLocation'];
	$message=$_POST['message'];
	
	$sql="INSERT INTO  tblpartner(fullname,email,phoneNum,carBrand,carName,insuranceComp,insExpiry,fuelType,modelYear,seat,rentPriceDay,pickupLocation,returnLocation,message) VALUES(:fullname,:email,:phoneNum,:carBrand,:carName,:insuranceComp,:insExpiry,:fuelType,:modelYear,:seat,:rentPriceDay,:pickupLocation,:returnLocation,::message)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':phoneNum',$phoneNum,PDO::PARAM_STR);
$query->bindParam(':carBrand',$carBrand,PDO::PARAM_STR);
$query->bindParam(':carName',$carName,PDO::PARAM_STR);
$query->bindParam(':insuranceComp',$insuranceComp,PDO::PARAM_STR);
$query->bindParam(':insExpiry',$insExpiry,PDO::PARAM_STR);
$query->bindParam(':fuelType',$fuelType,PDO::PARAM_STR);
$query->bindParam(':modelYear',$modelYear,PDO::PARAM_STR);
$query->bindParam(':seat',$seat,PDO::PARAM_STR);
$query->bindParam(':rentPriceDay',$rentPriceDay,PDO::PARAM_STR);
$query->bindParam(':pickupLocation',$pickupLocation,PDO::PARAM_STR);
$query->bindParam(':returnLocation',$returnLocation,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);

	$result =mysqli_query($dbh,$sql) or die("could not");
	$lastInsertId = $dbh->lastInsertId();
	if($lastInsertId)
	{
			$msg="Application Sent. We will contact you shortly";	
	}
	else 
	{
		$error="Something wrong";
	}

	}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>TEECAR | Join Us</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
 <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>
</head>
<body>

        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Join Us</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Join Us</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

	
<!--Join-us-->
<section class="profit section-padding">
  <div class="container">
    <div  class="row">
      <div class="col-md-10">
        <h3>Fill the form below</h3>
          <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
        <div class="contact_form gray-bg">
          <form name="joinForm" method="post">
			  <h3>Personal Informations</h3>
            <div class="form-group">
              <label class="control-label">Full Name <span>*</span></label>
              <input type="text" name="fullname" class="form-control white_bg" id="fullname" required>
            </div>
            <div class="form-group">
              <label class="control-label">Email Address <span>*</span></label>
              <input type="email" name="email" class="form-control white_bg" id="emailaddress" required>
            </div>
            <div class="form-group">
              <label class="control-label">Phone Number <span>*</span></label>
              <input type="text" name="phoneNum" class="form-control white_bg" id="phoneNum" required>
            </div>
            
			  <h3>Vehicles Details</h3>
			  <div class="form-group">
              <label class="control-label">Car Brand<span>*</span></label>
              <input type="text" name="carBrand" class="form-control white_bg" id="carBrand" required>
            </div>
			   
			  <div class="form-group">
              <label class="control-label">Car Name<span>*</span></label>
              <input type="text" name="carName" class="form-control white_bg" id="carName" required>
			  </div>
			  <div class="form-group">
              <label class="control-label">Insurance Company For This Car<span>*</span></label>
              <input type="text" name="insuranceComp" class="form-control white_bg" id="insuranceComp" required>
            </div>
			  <div class="form-group">
              <label class="control-label">Insurance Expiry Date<span>*</span></label>
              <input type="text" name="insExpiry" class="form-control white_bg" id="insExpiry" required>
            </div>
				  
			  <div class="form-group">
              <label class="control-label">Fuel Type<span>*</span></label>
              <input type="text" name="fuelType" class="form-control white_bg" id="fuelType" required>
            </div>
			  <div class="form-group">
              <label class="control-label">Model Year<span>*</span></label>
              <input type="text" name="modelYear" class="form-control white_bg" id="modelYear" required>
            </div>
			  <div class="form-group">
              <label class="control-label">Seating capacity<span>*</span></label>
              <input type="text" name="seat" class="form-control white_bg" id="seat" required>
            </div>
			  <h3>Rental Details</h3>
			  <div class="form-group">
              <label class="control-label">Rental Price per Day<span>*</span></label>
              <input type="text" name="rentPriceDay" class="form-control white_bg" id="price" required>
            </div>
			  <div class="form-group">
              <label class="control-label">Pickup Location<span>*</span></label>
              <input type="text" name="pickupLocation" class="form-control white_bg" id="pick" required>
            </div>
			  <div class="form-group">
              <label class="control-label">Return Location<span>*</span></label>
              <input type="text" name="returnLocation" class="form-control white_bg" id="ret" required>
            </div>
			   <div class="form-group">
              <label class="control-label">Additional Message <span>*</span></label>
              <textarea class="form-control white_bg" name="message" rows="4" required placeholder="Let us know if you have anything more to add"></textarea>
            </div>
			  
			  
            <div class="form-group">
              <button class="btn" type="submit" name="send">Submit Form <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- /Contact-us--> 


<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>


</html>