<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Trugeny Page Card Display</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
<style>
.button5
{
position:relative;
top:-17px;
}
.button4 {
  border-color: #4169E1;  
}
.button {
  background-color: white; /* Green */
  border: 2px solid #4169E1;
  color: #4169E1 ;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
/* 
  ##Device = Desktops
  ##Screen = 1281px to higher resolution desktops
*/

@media (min-width: 1281px) {
.a {
position:relative;
text-align:center;
font-size:30px;
color:#4169E1;
right:111px;
}
.b {
position:relative;
right:-166px;
font-size:18.5px;
}
.c {
position:relative;
width:81px;
text-align:center;
font-size:30px;
color:#4169E1;
}
.d {
position:relative;
text-align:center;
font-size:28px;
right:100px;
font-weight:bold;
}
.e {
position:relative;
text-align:center;
font-size:18px;
right:100px;
}
.f {
position:relative;
text-align:center;
font-size:20px;
color:#4169E1;
right:111px;
}
.container {
position:relative;
margin-left:111px;
}
#g {
position:relative;
width:220px;
margin-left:16px;
margin-top:10px;
height:172px;
margin-right:16px;
}
.h {
position:relative;
text-align:center;
font-size:30px;
}
.i {
position:relative;
text-align:center;
font-size:16px;
}
.j {
position:relative;
text-align:center;
color:#4169E1;
}
#k {
position:relative;
font-size:11px;
}
#l {
position:relative;
width:220px;
margin-left:16px;
margin-top:10px;
height:172px;
margin-right:16px;
}
#m {
position:relative;
bottom:-44px;
}
.n {
position:relative;
text-align:center;
font-size:16px;
}
.o {
position:relative;
text-align:center;
color:#4169E1;
}
#p {
position:relative;
font-size:11px;
}
}

/* 
  ##Device = Laptops, Desktops
  ##Screen = B/w 1025px to 1280px
*/

@media (min-width: 1025px) and (max-width: 1280px) {
.a {
position:relative;
text-align:center;
font-size:30px;
color:#4169E1;
right:111px;
}
.b {
position:relative;
right:-166px;
font-size:18.5px;
}
.c {
position:relative;
width:81px;
text-align:center;
font-size:30px;
color:#4169E1;
}
.d {
position:relative;
text-align:center;
font-size:28px;
right:100px;
font-weight:bold;
}
.e {
position:relative;
text-align:center;
font-size:18px;
right:100px;
}
.f {
position:relative;
text-align:center;
font-size:20px;
color:#4169E1;
right:111px;
}
.container {
position:relative;
margin-left:111px;
}
#g {
position:relative;
width:220px;
margin-left:16px;
margin-top:10px;
height:172px;
margin-right:16px;
}
#h {
position:relative;
text-align:center;
font-size:30px;
}
.i {
position:relative;
text-align:center;
font-size:16px;
}
.j {
position:relative;
text-align:center;
color:#4169E1;
}
#k {
position:relative;
font-size:11px;
}
#l {
position:relative;
width:220px;
margin-left:16px;
margin-top:10px;
height:172px;
margin-right:16px;
}
#m {
position:relative;
bottom:-44px;
}
.n {
position:relative;
text-align:center;
font-size:16px;
}
.o {
position:relative;
text-align:center;
color:#4169E1;
}
#p {
position:relative;
font-size:11px;
}
}

/* 
  ##Device = Tablets, Ipads (portrait)
  ##Screen = B/w 768px to 1024px
*/

@media (min-width: 768px) and (max-width: 1024px) {

}

* 
  ##Device = Tablets, Ipads (landscape)
  ##Screen = B/w 768px to 1024px
*/

@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {

}

/* 
  ##Device = Low Resolution Tablets, Mobiles (Landscape)
  ##Screen = B/w 481px to 767px
*/

@media (min-width: 481px) and (max-width: 767px) {

}

/* 
  ##Device = Most of the Smartphones Mobiles (Portrait)
  ##Screen = B/w 320px to 479px
*/

@media (min-width: 320px) and (max-width: 480px) {

}
</style>
</head>
<h4 class="a">Order your truGeny Test Kit</h4>
<div class="b">
<img src="assets/biology.png" class="c">&nbsp;&nbsp;Understand your genes and evaluate your risk for cancer and cardiac conditions.
  </div>
  <br>
  <!-- Navigation -->
 <body>
 <div>
<h4 class="d">truGeny brings you a new kind of DNA TEST</h4>
<p class="e">Discover insights from your DNA. Take actions for a healthier and longer life.</p>
  <h4 class="f">Be PROACTIVE</h4>
  <br>
  </div>
  <!-- Page Content -->
  <div class="container">
    <div class="row">

      
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" id="g" src="assets/cancer.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <h1 id="h">TruFind</h1>
				  <?php
$emp_query2 = "SELECT * FROM toolkit WHERE ID='1'";
$emp_query3 = mysqli_query($con,$emp_query2);
$rowcount=mysqli_num_rows($emp_query3);
       if($rowcount > 0){
          
          while($emp_query6 = mysqli_fetch_assoc($emp_query3)){
			  $planname=$emp_query6['Planname'];
			  $amount=$emp_query6['Amount'];
		  }
	   }
	   
	   ?>
				 <h1 class="i"><?php echo $planname; ?></h1> 
                </h4>
               <h5 class="j">&#8377; <?php echo $amount; ?> /-</h5>
				
                <p class="card-text" id="k">A detailed analysis of over 90 genes your genes to help you learn your risks for developing cancers of the breast, ovarian, uterine, colorectal, prostrate, pancreatic and stomach cancers.</p>
              <button class="button button4">ORDER NOW &#8594;</button>
			  </div>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" id="l" src="assets/carrierscreeningtest.png" alt=""></a>
              <div class="card-body" id="m">
                <h4 class="card-title">
				  <?php
$emp_query2 = "SELECT * FROM toolkit WHERE ID='2'";
$emp_query3 = mysqli_query($con,$emp_query2);
$rowcount=mysqli_num_rows($emp_query3);
       if($rowcount > 0){
          
          while($emp_query6 = mysqli_fetch_assoc($emp_query3)){
			  $planname=$emp_query6['Planname'];
			  $amount=$emp_query6['Amount'];
		  }
	   }
	  
	   ?>
				<h1 class="n"><?php echo $planname; ?></h1> 
                </h4>
               <h5 class="o">&#8377; <?php echo $amount; ?> /-</h5>
                <p id="p" class="card-text">Planning for your future family’s health matters. Knowledge about your risk Of passing on a genetic condition to your Child can make a difference to the well being of your future children.</p>
              <button class="button button4">ORDER NOW &#8594;</button>
			  </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="assets/coroneryarterytest.png" id="l" alt=""></a>
              <div class="card-body" id="m">
                <h4 class="card-title">
                   <?php
$emp_query2 = "SELECT * FROM toolkit WHERE ID='3'";
$emp_query3 = mysqli_query($con,$emp_query2);
$rowcount=mysqli_num_rows($emp_query3);
       if($rowcount > 0){
          
          while($emp_query6 = mysqli_fetch_assoc($emp_query3)){
			  $planname=$emp_query6['Planname'];
			  $amount=$emp_query6['Amount'];
		  }
	   }
	  
	   ?>
				<h1 class="n"><?php echo $planname; ?></h1> 
                </h4>
               <h5 class="o">&#8377; <?php echo $amount; ?> /-</h5>
                <p id="p" class="card-text">A next generation Polygenic Risk Score (PRS) based genetic test to you help you evaluate your risks for developing heart conditions such as familial Hypercholestrolemia, cardiomyopathy, Arrythmia.</p>
              <button class="button button5">ORDER NOW &#8594;</button>
			  </div>
            </div>
          </div>

          

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
