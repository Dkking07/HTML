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
    .intro {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 520px;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url("https://cdn.pixabay.com/photo/2014/12/16/22/25/sunset-570881_1280.jpg");
      background-size:contain;
      background-position:center:
      background-repeat: no-repeat;
    }

    .intro h1 {
      font-family: sans-serif;
      font-size: 60px;
      color: #fff;
      font-weight: bold;
      text-transform: uppercase;
      margin: 0;
    }

    .intro p {
      font-size: 20px;
      color: #d1d1d1;
      text-transform: uppercase;
      margin: 20px 0;
    }

    .intro button {
      background-color: #5edaf0;
      color: #000;
      padding: 10px 25px;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)
    }

    .achievements {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 80px;
    }

    .achievements .work {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 40px;
    }

    .achievements .work i {
      width: fit-content;
      font-size: 50px;
      color: #333333;
      border-radius: 50%;
      border: 2px solid #333333;
      padding: 12px;
    }

    .achievements .work .work-heading {
      font-size: 20px;
      color: #333333;
      text-transform: uppercase;
      margin: 10px 0;
    }

    .achievements .work .work-text {
      font-size: 15px;
      color: #585858;
      margin: 10px 0;
    }

    .about-me {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px 80px;
      border-top: 2px solid #eeeeee;
    }

    .about-me img {
      width: 500px;
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .about-me-text h2 {
      font-size: 30px;
      color: #333333;
      text-transform: uppercase;
      margin: 0;
    }

    .about-me-text p {
      font-size: 15px;
      color: #585858;
      margin: 10px 0;
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
      <a href="home.php">Home</a>
      <a href="login.php">Login</a>
      <!-- <a href="deshbord.html">Dashbord</a> -->
      <a href="https://en.wikipedia.org/wiki/World_Happiness_Report#:~:text=The%20World%20Happiness%20Report%20is,six%20times%20in%20a%20row.">About us</a>
      <a href="con.php">Contact us</a>
    </nav>
  </header>
  <main>
    <div class="intro">
      <h1>HAPPINESS INDEX</h1>
      <p>WHERE YOU CAN MASURE YOUR HAPPINESS.</p>
      <button>Learn More</button>
    </div>
    <div class="achievements">
      <div class="work">
        <i class='bx bxs-user-check' ></i>
        <p class="work-heading">Use</p>
        <p class="work-text">This website is for evoluating your hapiness. It will use your given answers for evoluating your hapiness index.  </p>
      </div>
      <div class="work">
        <i class='bx bxs-notification' ></i>
        <p class="work-heading">features</p>
        <p class="work-text">It can calculate your hapiness index when all the questions are anserwed.</p>
      </div>
      <div class="work">
        <i class='bx bxs-bug' ></i>
        <p class="work-heading">wornigs</p>
        <p class="work-text">If younwant to get honest score then give all the questions honest answers.</p>
      </div>
    </div>
    
  </main>
  <footer class="footer">
    <div class="copy">&copy; 2023 Happiness Index</div>
    <div class="bottom-links">
      <div class="links">
        <span>More Info</span>
        <a href="home.html">Home</a>
        <a href="#">About us</a>
        <a href="con.html">Contact us</a>
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