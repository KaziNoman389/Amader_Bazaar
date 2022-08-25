<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p> Amader_Bazaar is a cornerstone of Bangladesh’s thriving e-commerce sector, building upon the capabilities and reputation of Meena Bazar, one of the largest retail chains in the country with a diverse range of product offerings, a committed 90 minutes home delivery service. The brick-and-mortar Amader Bazaar stores are the delivery dispatch points for Amader_Bazaar. This is both a unique sales proposition and a point of difference for the brand. In addition to being a popular destination for groceries. <br><br>

         Time is a finite and invaluable resource. Our goal with Amader_Bazaar is to help save our customers’ time and effort by providing a thoroughly streamlined digital shopping experience. We achieve that with the help of our enhanced e-commerce compatible website interface. We aim to make the user experience as effortless and simplified as possible by driving business awareness in order to uncover untapped consumer pain points through analytics, data and insights as part of our Omni Channel Strategy..</p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>The way we grow our products is more important than the way it look. We provide you the best products with delivery support country-wide with 13x7 live support online and offline both!.</p>
         <a href="shop.php" class="btn">Our Shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Best Customer Service.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Fariya Tabassum</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Quality Products and fresh as promised</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Abrar Faiaz khan</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Very Fast Delivery </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Naharin Siddiqui</h3>
      </div>

   </div>

</section>


<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>