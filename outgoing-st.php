<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("location:emplogin.php");
}
?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Student Home</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">


  <link href="img/job.png" rel="icon">
  <link href="img/job.png" rel="apple-touch-icon">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">


  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/bootstrap-v3/css/bootstrap.css">
  <link rel="stylesheet" href="assets/bootstrap-v3/css/bootstrap.css">
  <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons" />
  <link href="css/style.css" rel="stylesheet">

  <style>
    body {
      background-image: linear-gradient(to bottom right, rgb(4, 85, 85), cyan);
      height: 100%;
      width: 100%;
      overflow: hidden;
    }

    header{
      position: sticky !important;
    }
    /* ************ Particle JS ************ */
    #particles-js {
      position: absolute;
      height: 100%;
      width: 100%;
      z-index: -10 !important;
    }

    .findinternbtn button {
      background: white;
      border-radius: 30px;
      margin-top: 230px;
      font-weight: bold;
    }

    .findinternbtn button:hover {
      background: transparent;
      border: 2px solid white;
      color: white;
    }

    .parent{
      margin-top: 50px;
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      text-align; center;
    }

    .content{
      height: 100%;
      background: rgb(0, 0, 0, 0.6);
      border-radius: 0px;
      color: #fff ;
    }

    .btn-get-started{
      font-family: "Montserrat", sans-serif;
      font-weight: 500;
      font-size: 16px;
      letter-spacing: 1px;
      display: inline-block;
      padding: 8px 32px;
      border-radius: 50px;
      transition: 0.5s;
      margin: 10px;
      color: #fff;
      background: #18d26e;
    }

    .btn-get-started:hover {
      background: #fff;
      color: #18d26e;
    }

    .content-2{
      width: 80%;
      height: 70%;
      display: flex;
      justify-content: space-evenly;
      align-items: center;
    }


    .msg-btns{
      height: 100%;
      width: 20%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .msg-btns a{
      width: 100%;
    }

.active{
      background: #fff;
      color: #18d26e;
    }


form{
  height: 100%;
  width: 60%;
  display: flex;
  align-items: center;
  justify-content: center;
}

form input, form select{
  background-color: rgb(255, 255, 255, 0.2);
  border-radius: 10px;
  width:100%;
  
}

#coordinator{
  height: 8%
}

#text{
  margin-top:5px;
  height: 50%
}

h1{
  margin-bottom: 100px; 
  border-bottom: solid 2px #fff;
}
.new-coming:hover{
    color: black;
    cursor: pointer;
    background-color: #18d26e;
    border: none;
    border-radius:5px;
}

.coming{
  padding-top: 5px;
  margin-right: 5px;
  display: flex;
  flex-direction: column;
  width: 35%;
  height: 80%;
  background-color: rgb(255, 255, 255, 0.2);
  border-radius: 10px;
  overflow-y: scroll;
}

.show-coming{
  display: flex;
  flex-direction: column;
  width: 65%;
  height: 80%;
  background-color: rgb(255, 255, 255, 0.2);
  border-radius: 10px;
}

.msgs{
  margin: 0 auto;
  padding: 5px;
  padding-bottom: 30px;
  margin-bottom: 10px;
  width: 90%;

  display: flex;
  align-content: center;
  justify-content: space-around;
  height: 30px;
  color: rgb(0,0,0);
  border-bottom: solid 1px rgb(41, 41, 41);
}

.msgs:hover{
  background-color: #18d26e;
  border-radius: 10px;
  cursor: pointer;
}

.msgs img{
  width: 30px;
  height: 30px;
}

.msgs p{
    display: inline;

}

::-webkit-scrollbar {
  width: 10px;
}

::-webkit-scrollbar-thumb {
  box-shadow: inset 0px 0 30px rgba(0, 0, 0, 1);
  border-radius: 5px;
}
  </style>

</head>


<body>
  <!-- <div id="particles-js"></div> -->
  <header id="header">

    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Welcome Student</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="welcomestudent.php">Home</a></li>
          <li><a href="new-application.php">New Application</a></li>
          <li><a href="mainjobs.php">Find Internship</a></li>
          <li><a href="appliedjobs.php">Applied Internships</a></li>
          <li class="menu-active"><a href="inbox-st.php">Inbox</a></li>
          <li><a href="logout2.php">Logout</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="findinternbtn text-center parent">


    <div class="content content-2">
      <div class="msg-btns">
      <h1>Inbox</h1>
        <a href="inbox-st.php" class="btn-get-started scrollto">Incoming</a>
        <a href="outgoing-st.php" class="btn-get-started scrollto active">Outgoing</a>
        <a href="new-msg-st.php" class="btn-get-started scrollto">New Message</a>
      </div>

      <form action="">
        <div class="coming">
          <div class="msgs">
            <img src="img/mail.png" alt="mail">
            <p>Coordinator 1</p>
          </div>

          <div class="msgs">
            <img src="img/mail.png" alt="mail">
            <p>Coordinator 2</p>
          </div>
        </div>

        <div class="show-coming"></div>
      </form>

    </div>

  </div>

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/particles/particles.js"></script>
  <script src="lib/particles/app.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="js/main.js"></script>


</body>

</html>