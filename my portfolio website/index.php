<!DOCTYPE html>
<html lang="en">

<?php include "server.php" ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="contact.css">

</head>
<body>
<div class="menu">
    <header>
<!--here we are going to learn how to creat and style your header-->
<div class="user">
 <img src="images/jude.jpg" alt="">

 <h2 class="name">FONYUY JUDE</h2>
 <p class="post">Student</p>

</div>
<nav class="navbar">
    <li><a href="home.html">home</a></li>
    <li><a href="#about">about</a></li>
    <li><a href="#role model">role models</a></li>
    <li><a href="#education">education</a></li>
    <li><a href="best quotes">best quotes</a></li>
    <li><a href="#contact">contact</a></li>

</nav>



    </header>
    </div>
<div class="success">
    
<div class="home">
    <h4>WELCOME TO BH.com</h4>
</div>
<div class="content">
    <?php  if(isset($_SESSION['success'])):?>
        <div class="errors success">
            <?php echo $_SESSION['success']; 
unset($_SESSION['success']);
            ?>

</div>
<?php endif ?>
<!-- <?php?> you only put  end if when the else statement is not there -->
<div class="welcome">
<?php if(isset($_SESSION['username'])): ?>
    <p style="margin-top: 120px;">welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php unset($_SESSION['username']); ?>
<a href="login.php?logout='1'" style="color: white; background-color: green; margin-top: 100px;" >logout</a>
</div>
<?php endif ?>

</div>


    <div class="bars">&#9776;menu</div>
    <div class="close">&times</div>



    <script src="portfolio.js"></script>
</body>
</html>