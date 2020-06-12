<!DOCTYPE html>
<html>
  <head>

    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>A Little Bit Kneady</title>
    <?php include('styling.php'); ?>




    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
      <div class= "container-fluid">
        <a href="index.html"><img class="navbar-brand" id="gif" height="100px" width="200px"  src="images/logo.gif" alt="logo" ></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="gallery.html">Gallery</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="weddings.php">Weddings  </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="events.php">Event & Party Orders<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
          
          
      </ul>
    </div>
    </div>
  </nav>




</head>





<?php
require('SQL/db.php');

//again used isset to make sure all variables have been entered before continuing
if(isset($_REQUEST['submit'])){

     
    
  //Retrieve the field values from our registration form.
  //form validation
  $customer_name = ($_REQUEST['customer_name']);
  $customer_email =($_REQUEST['customer_email']);
  $customer_phone = ($_REQUEST['customer_phone']);
  $order_type = ($_REQUEST['order_type']) ;
  $order_quantity = ($_REQUEST['order_quantity']) ;
  $order_description = ($_REQUEST['order_description']);
  

  //INSERT statement.
  $query = "INSERT INTO events (customer_name, customer_email, customer_phone, order_type, order_quantity, order_description) VALUES ('$customer_name', '$customer_email', '$customer_phone',  '$order_type', '$order_quantity', '$order_description')";
  


  $result = mysqli_query($con, $query);
  

  if($result){
    
      echo "<div class='regsuccess'><p class='lead'>Your information has been sent, we will reply as soon as possible!.<br/>Click here to</p><a href='index.html'>Go Home</a></div>";
  }
 
}else{


  ?>




<body>
<hr>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<h4 class="wedding">Event & Party Orders for Every Occasion!</h4>

<div class="wedding-container text-center mt-5">

  <div class="row">
    <div class="col-md-12 col-lg-4">
      <div class="rounded img-responsive mt-5">
        <a href="images/cupcake4.jpg">
          <img src="images/kinder.jpg" alt="kinder" width="300" height="300">
        
        </a>
      </div>
    </div>
    <div class="col-md-12 col-lg-4">
      <div class="rounded img-responsive mt-5">
        <a href="images/cupcake.JPEG">
          <img src="images/cupcake.JPEG" alt="cupcake" width="300" height="300">
        
        </a>
      </div>
    </div>
    <div class="col-md-12 col-lg-4">
      <div class="rounded img-responsive mt-5">
      <a href="images/brownie.jpg">
          <img src="images/buns.jpg" alt="buns" width="300" height="300">
          
        </a>
      </div>
    </div>
  </div>
</div>
 
<div class="cake-text text-center">
<p class="lead"> I also create party packages for customer's for all events, whether you want a tray of brownies, a box
    of cupcakes or simply just a party cake, you're guaranteed to love every bite!
</p>
<h2 class="wedding2 text-center">Order Now!</h2>

<p class = "lead"> Are you looking for tailor made delicacies for your event?
  <br>
  If so, fill out the form below and we'll contact you asap!
  </p>
  <br>
</div>


<div class="container-original2 ">
    <div class="row text-center">
      <div class="col-md-12 col-lg-4 ">
            <div class="card   mt-5">
              <p class="cursive">Check out out Wedding section!</p>
              <img class="rounded img-responsive" src="images/fiona.jpg" width="400" height="500" alt="baker">
                  <div class="card-body">
                    
                        <a href="weddings.php" class="btn btn-light mt-2">View More</a>
                 </div>
           </div>
          </div>


<!-- Wedding form contact -->

<div class="log mt-4">

<div class="col-md-12 col-lg-4 ">
<div class="pure-g">


<form class="pure-form pure-form-stacked" name="enquire" action="" method="post">
<div class="pure-u-1 pure-u-md-1-3">
<p class="lead">Enter your full name</p>
<input type="text" class="pure-u-23-24" name="customer_name" placeholder="Name" required />
</div>
<div class="pure-u-1 pure-u-md-1-3">
<p class="lead">Enter your email address</p>
<input type="email" class="pure-u-23-24" name="customer_email" placeholder="Email" required />
</div>

<div class="pure-u-1 pure-u-md-1-3">
<p class="lead">Enter your phone number</p>
<input type="number" class="pure-u-23-24" name="customer_phone" placeholder="Phone" required />
</div>

<div class="pure-u-1 pure-u-md-1-3">
<p class="lead">What would you like to order?</p>
<select id="product_type"class="pure-input-1-2"  name="order_type" required> 
                  <option value="">Select</option>
                  <option value="brownies">Brownies</option>
                  <option value="cupcakes">Cupcakes</option>
                  <option value="partycakes">Party Cakes</option>
                  <option value="cakepops">Cake Pops</option>
                  <option value="meringuenests">Meringue Nests</option>
                  <option value="cheesecakes">Cheesecakes</option>
                  <option value="trifle">Trifles</option>
                  <option value="tiramisu">Tiramisu</option>
                  
                 </select>
</div>
                 <br>
 <div class="pure-u-1 pure-u-md-1-3">
<p class="lead">How many would you like?</p>
<input type="number" name="order_quantity" placeholder="Quantity" required />
</div>

<div class="pure-u-1 pure-u-md-1-3">
<p class="lead">Please add specifics about what you would like</p>
<textarea rows="4" cols="50" type="text" name="order_description" placeholder="Type here..." required></textarea>
</div>

<br>
<div class="pure-u-1 pure-u-md-1-3 mb-3 mt-3">
<input class="pure-button pure-button-primary" style="background-color: rgb(143, 109, 156);" type="submit" name="submit" value="Submit" />
</div>
</div>
</div>
</div>
</div>
</div>
</form>



<?php } ?>

<!-- Form goes here!-->



</body>
<hr>
<footer>

<div class="text-center mt-5">

<p class="lead">
  Check out my social media for some inspiration!
</p>

<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-pinterest"></a>

</div>


<div class ="content mt-5">
    &copy; A Little Bit Kneady
    <a title="content" href="https://www.linkedin.com/in/michaelwilliamwhelan/">Developed By MikeW</a>
</div>
 
</footer>
<?php include('javascript.php'); ?>

</html>