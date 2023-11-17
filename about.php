<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ABOUT</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Why Choose Us?</h3>
         <p>Having excellent, competent and knowledgeable teachers is important. We make sure that our students have access to the best teaching they can possibly have by only using highly-qualified, experienced teachers.
            They are subject experts, with proven experience in boosting students performance. Students find it easy to engage with our teachers as they are friendly, good communicators & passionate about teaching.</p>
         <a href="courses.html" class="inline-btn">Our Courses</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+1.5k</h3>
            <span>Online Courses</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+30k</h3>
            <span>Brilliants Students</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+2k</h3>
            <span>Expert Teachers</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>Placement Rate</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">Student's Reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>Great E-learning Platform, good environment and best faculty. Here at E-learn you can get each & everything what you want. </p>
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Rohan Malik</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>All the trainers are very friendly here. Big thanks to my trainer who always motivated and encouraged me.

Really wants to say thanks to E-Learn.</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Davneet Kaur</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>It was a great experience to be at E-Learn. It was the best journey in terms of learning because the way of teaching is excellent here.</p>
         <div class="user">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>Anand Singh</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Several situations and proper exposures are given, which encourages a person to come out of their comfort zone.
         Moreover, some unique and exciting activities are allotted daily, so as to bring enjoyment while learning, which helps a person to think outside the box.
         </p>
         <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Diksha Bhardwaj</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>It was a great experience in E-Learn. After completing Public Speaking Course from here, I have seen many changes in my personality. Now I am more confident.

In this institute trainers are very much supportive and friendly. I have improved a lot.</p>
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Ruchi Sejwal</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>This is really a good platform for learning Programming languages. I had a great time here. It was a great journey with E-Learn.

I got individual attention. Time to time activities were arranged which boosted my confidence level.  

I would like to thank E-Learn team.</p>
         <div class="user">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>Shubham Jha</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>