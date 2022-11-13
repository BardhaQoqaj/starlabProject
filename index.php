
<?php include 'php/functions.php';?>
<?php



if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<?php include 'php/header.php';?>


   <!-- home -->
   <section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/me2.png" alt="">
      <img src="images/me2.png" alt="">
      <img src="images/me2.png" alt="">
   </div>
   <div class="content">
      <h3 data-aos="fade-up">hiii, I'm Fatbardha 👋</h3>
      <span data-aos="fade-up">Web designer & developer</span>
      <p data-aos="fade-up">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis labore recusandae minima molestias aliquam nostrum.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>


<section class="about" id="about">



<div class="row-1">

    <div class="image">
        <img src="images/abbout.jpg" alt="">
    </div>

    <div class="content">
        <h3> Here's a bit about me</h3>
        <p>I am currently a third-year student at UBT University, majoring in computer science, specializing in Web programming. 
         <br>I am able to work in a team environment as well as using personal initiative, adaptable to challenging situations,I have a creative mind, dedicated to continuous learning, always ready for new challenges.</br></p>
        <div class="box-container">
            <div class="box">
                <p> <span> age : </span> 20 </p>
                <p> <span> gender : </span> female </p>
                <p> <span> language : </span> albanian,english,german</p>
               
            </div>
            <div class="box">
                <p> <span> phone : </span> 044-814-280 </p>
                <p> <span> email : </span> bardha.qoqaj123@gmail.com </p>
                <p> <span> country : </span> Kosova </p>
            </div>
        </div>
        <a href="#" class="btn">download CV</a>
        <a href="#" class="btn">hire me</a>
    </div>

</div>

<h1 class="heading"> <span> My </span> skills </h1>

<div class="row-2">

    <div class="skills">
        <div class="progress">
            <h3> web design <span> 95% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> web development <span> 90% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> UI design <span> 90% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> Database Management <span> 95% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> Project management  <span> 95% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> Microsoft Office Suite and Google <span> 95% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
    </div>

    <div class="box-container">

        <div class="box">
            <h3> >> 2+ </h3>
            <p>years in computer science</p>
        </div>
       
        <div class="box">
            <h3> >> 6+ </h3>
            <p>projects completed</p>
        </div>
        <div class="box">
            <h3> >> 5 </h3>
            <p>certifications earned</p>
        </div>

    </div>
    <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & training</span> </h1>

      <div class="row">

         <div class="box-container">

            

            <div class="box" data-aos="fade-right">
               <span>( 2017 - 2019 )</span>
               <h3>High School - Xhevdet Doda	</h3>
               <p>Good student with an average grade of 5.0 out of 5.0</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2020 )</span>
               <h3>University of Business and Technology , UBT</h3>
               <p>Third year student - computer science with
                  average grade 8.44</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2020  )</span>
               <h3>AUK- American University of Kosovo</h3>
               <p>Introduction to Cybersecurity: This course covers topics such as: Global implications of cyber threats, Cisco's approach to threat detection and protection.</p>
            </div>

         </div>

         <div class="box-container">

            

            <div class="box" data-aos="fade-left">
               <span>( 2022  )</span>
               <h3>XAMK South Eastern Finland University</h3>
               <p>Introduction to Video Games Creation 2022-cont
                This course covers topics such as: History of Games, Ideation and Value Creation,
                 Artificial Intelligence for Games, Game Concept Design, Unity, game programming.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2022)</span>
               <h3>Udemy</h3>
               <p>This course covers topics such as: Introduction to .Net Core, creating Cruds, Routing, User Interface styling, Image Upload..</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2021 - 2022 )</span>
               <h3>AUK- American University of Kosovo</h3>
               <p>Cybersecurity Essentials
               This course covers topics such as: principles of confidentiality, integrity, technologies, procedures used to protect confidentiality.</p>
            </div>

         </div>

      </div>

   </div>

</div>

</section>

<!-- portfolio   -->

<section class="portfolio" id="portfolio">

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/BootStrap.png" alt="">
         <h3>BootStrap</h3>
        
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/css.png" alt="">
         <h3>Css</h3>
     
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/html.jpg" alt="">
         <h3>Html</h3>
        
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/Java.jpg" alt="">
         <h3>Java</h3>
       
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/JavaScript.png" alt="">
         <h3>Java Script</h3>
        
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/MySQL-Logo.png" alt="">
         <h3>MySQL</h3>
        
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/net.png" alt="">
         <h3>.Net Core</h3>
         
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/Python.png" alt="">
         <h3>Python</h3>
       
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/uiux.png" alt="">
         <h3>Ui/Ux Design </h3>
         
      </div>

   </div>

</section>

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>044 814 280</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>bardha.qoqaj123@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Prishtine , Kosova</p>
      </div>

   </div>

</section>













<script src="js/script.js"></script>

</body>
</html>
