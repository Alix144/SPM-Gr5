<?php
// session_start();
// if (!isset($_SESSION['username'])) {
//   header("location:emplogin.php");
// }
?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Admin Assign Employee</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">


  <link href="img/job.png" rel="icon">
  <link href="img/job.png" rel="apple-touch-icon">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">


  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
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
      background-image: linear-gradient(to bottom right, #34104a, #c251b3);
      height: 100%;
      width: 100%;
      overflow: hidden;
    }

    header{
      position: sticky !important;
    }    
    

    ::selection{
  color: #fff;
  background: #B3B3B3;
}
   .wrapper{
  width: 370px;
  margin: 85px auto 0;
}
.select-btn, li{
  display: flex;
  align-items: center;
  cursor: pointer;
}
.select-btn{
    margin-top:-150px;
  height: 60px;
  padding: 0 20px;
  font-size: 22px;
  background:#18d26e;
  border-radius: 7px;
  justify-content: space-evenly;
  box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}
.select-btn i{
  font-size: 31px;
  transition: transform 0.3s linear;
}
.wrapper.active .select-btn i{
  transform: rotate(-180deg);
}
.cont{
  display: none;
  padding: 20px;
  margin-top: 15px;
  background:  #203737;
  border-radius: 7px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}
.wrapper.active .cont{
  display: block;
}
.cont .search{
  position: relative;
}
.search i{
  top: 50%;
  left: 15px;
  color: #999;
  font-size: 20px;
  pointer-events: none;
  transform: translateY(-50%);
  position: absolute;
}
.search input{
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 17px;
  border-radius: 5px;
  padding: 0 20px 0 43px;
  border: 1px solid #B3B3B3;
}
.search input:focus{
  padding-left: 42px;
  border: 2px solid #4285f4;
}
.search input::placeholder{
  color: #bfbfbf;
}
.cont .options{
  margin-top: 10px;
  max-height: 250px;
  overflow-y: auto;
  padding-right: 7px;
  
}
.options::-webkit-scrollbar{
  width: 7px;
}
.options::-webkit-scrollbar-track{
  background: #f1f1f1;
  border-radius: 25px;
}
.options::-webkit-scrollbar-thumb{
  background: #ccc;
  border-radius: 25px;
}
.options::-webkit-scrollbar-thumb:hover{
  background: #b3b3b3;
}
.options li{
  height: 50px;
  padding: 0 13px;
  font-size: 21px;
}
.options li:hover, li.selected{
  border-radius: 5px;
  background:#18d26e ;
}
    .content-2{
      width: 80%;
      height: 70%;
      display: flex;
      justify-content: space-evenly;
      align-items: center;
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
    
  

  
  </style>

</head>


<body>
  <!-- <div id="particles-js"></div> -->
  <header id="header">

    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Assign Employee</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="adminhome.php">Home</a></li>
          <li><a href="assignins.php">Assign Instructor</a></li>
          <li class="menu-active">><a href="assignemp.php">Assign Employee</a></li>
          
          <li><a href="logout2.php">Logout</a></li>
        </ul>
      </nav>
    </div>
  </header>

   <div class="findinternbtn text-center parent">


    <div class="content content-2">

      
  <div class="wrapper">
      <div class="select-btn">
        <span>Select Employee</span>
        <i class="uil uil-angle-down"></i>
      </div>
      <div class="cont">
        <div class="search">
          <i class="uil uil-search"></i>
          <input spellcheck="false" type="text" placeholder="Search">
        </div>
        <ul class="options"></ul> 
        
      </div>

     
      <input type="submit" value="Save" class="btn-get-started">
     
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
  <script src="Script2.js"></script>
  
  

</body>

</html>