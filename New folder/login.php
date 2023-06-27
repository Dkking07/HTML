<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <!--<img src="images/frontImg.jpg" alt="">-->
        <div class="text">
          
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
        <div class="text">
          
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
            <form method="POST" action="deshbord.php">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" id="email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
              </div>
              
              <div class="button input-box">
                <input type="submit" value="Sumbit" name="submit1">
              </div>
              <?php
                        if (isset($_POST['submit1']))
                        {     
                        $conn=mysqli_connect("localhost","root","","login");
                        session_start();
                            $email=$_POST['email'];  
                            $password=$_POST['password'];  
                        
                            $check_user="select * from login WHERE email='$email'AND password='$password'";  
                        
                            $run=mysqli_query($conn,$check_user);  
                        
                            if(mysqli_num_rows($run))  
                            {  
                                echo "<script>window.open('index.php','_self')</script>";  
                        
                                $_SESSION['email']=$email;//here session is used and value of $user_email store in $_SESSION.  
                        
                            }  
                            else  
                            {  
                            echo "<script>alert('Email or password is incorrect!')</script>";  
                            }  
                        }  
                        ?>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
      </div>
      <form method="POST">
        <div class="signup-form">
          <div class="title">Signup</div>
        <form method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="name" id="name" placeholder="Enter your name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
              
                <input type="email" name="email" id="email" placeholder="Enter your email" pattern="[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
               <input type="password" name="password" id="password" placeholder="Enter your password" pattern="[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)" required>
                </div>
              <div class="button input-box">
                <input type="submit" value="Sumbit" name="submit">
              </div>
              
            </div>
            <?php
              if(isset($_POST['submit']))
                                {
                                    $conn=mysqli_connect("localhost","root","","login");
                                    $qry="insert into login values('','".$_POST['name']."','".$_POST['email']."','".$_POST['password']."')";
                                    mysqli_query($conn,$qry) or die(mysqli_error());
                                    echo "Insert Successfully";
                                }
                                ?>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
      </form>
    </div>
    </div>
    </div>
  </div>
  <!-- <script src="main.js"></script> -->
</body>
</html>
