<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple HTML HomePage</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <!-- Boxicons CSS -->
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');

    body {
      margin: 0;
      box-sizing: border-box;
    }

    /* CSS for header */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #f5f5f5;
    }

    .header .logo {
      font-size: 25px;
      font-family: 'Sriracha', cursive;
      color: #000;
      text-decoration: none;
      margin-left: 30px;
    }

    .header img{
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 50%;
            margin-right: 10px;
        }

    .nav-items {
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: #f5f5f5;
      margin-right: 20px;
    }

    .nav-items a {
      text-decoration: none;
      color: #000;
      padding: 35px 20px;
    }

    /* CSS for main element */

    .U1 {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 520px;
      background-color: #b7fe62;
    }

    .U1 h1 {
      font-family: sans-serif;
      font-size: 150px;
      color: #b7fe62;
      font-weight: bold;
      text-transform: uppercase;
      margin: 0;
    }

    .U1 h2 {
      font-family: sans-serif;
      font-size: 50px;
      font-weight: bold;
      text-transform: uppercase;
      margin: 0;
      
    }

    .U2 {
      float:left;
      justify-content: center;
      align-items: center;
      width: 50%;
      height: 420px;
      background-color: #3dfbf5;
    }

    .U2 h2 {
      font-family: sans-serif;
      font-size: 40px;
      font-weight: bold;
      text-transform: uppercase;
      margin: 10px;
    }

    .U2 ul {
      font-family: sans-serif;
      font-size: 25px;
      font-weight: bold;
      margin: 0;
      
    }

    li {
      margin: 5px;
    }

    .U3 {
      float:right;
      justify-content: center;
      align-items: center;
      width: 50%;
      height: 420px;
      background-color: #fbf13d;
    }

    .U3 h2 {
      font-family: sans-serif;
      font-size: 25px;
      font-weight: bold;
      text-transform: uppercase;
      margin: 0;
      
    }

    iframe{
      margin: 3% 12% 3% 12%
    }

    /* CSS for footer */
    .footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #302f49;
      padding: 40px 80px;
    }

    .footer .copy {
      color: #fff;
    }

    .bottom-links {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 0;
    }

    .bottom-links .links {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 40px;
    }

    .bottom-links .links span {
      font-size: 20px;
      color: #fff;
      text-transform: uppercase;
      margin: 10px 0;
    }

    .bottom-links .links a {
      text-decoration: none;
      color: #a1a1a1;
      padding: 10px 20px;
    }
  </style>
</head>

<body>
  <header class="header">
    <a href="#" class="logo"><img src="hi.png" alt="">Happiness Index</a>
    <nav class="nav-items">
    <a href="deshbord.php">Dashbord</a>
      <a href="contact.php">Contact us</a>
    </nav>
  </header>

  <main class="main">
    <div class="U1">
    <h1>👍</h1>
    <h2>You have Average score in our test.</h2>
    </div>

    <div class="U2">
      <h2>Some tips that You need to keep in your mind.</h2>
      <br>
      <br>
      <br>
      <ul>

        <li>Avoid Living In The Past.</li>
        <li> Change Your Self-Talk.</li>
        <li>Practice Gratitude.</li>
        <li>Improve Your Physical Health.</li>
        <li> Look For Opportunities To Be With Other People.</li>
        <li>Try Not To Anticipate The Future.</li>
      </ul>
    </div>

    <div class="U3">
      <h2>This is a recomended video from Us for You if You like to watch ! </h2>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/W7_lafxj8ok" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>


  </main>
 
  <footer class="footer">
    <div class="copy">&copy; 2023 Happiness Index</div>
    <div class="bottom-links">
      <div class="links">
        <span>More Info</span>
        <a href="#">Home</a>
        <a href="#">About us</a>
        <a href="#">Contact us</a>
      </div>
      <div class="links">
        <span>Social Links</span>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="https://happinessproject.com/?fbclid=PAAaaBp51_eORH_0TT0HtTfIX9IQwgzZ9RrREwUvYDGqdbxYGqkKjYw3vItDA"><i class="fab fa-google"></i></a>
        <a href="https://instagram.com/happinessproject?igshid=NTc4MTIwNjQ2YQ=="><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </footer>
</body>

</html>