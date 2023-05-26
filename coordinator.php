<?php
// session_start();
// if (!isset($_SESSION['username'])) {
//   header("location:coordinator.php");
// }
?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Coordinator Home</title>
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
      background-image: linear-gradient(to bottom right, #543380, #2f96d6);
      height: 100%;
      width: 100%;
      overflow: ;
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

    .info *{
      color: #fff;
      font-weight: bold;
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
      margin: 20px 0 20px;
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

    .content-1{
      margin-right: 5px;
      display: flex;
      flex-direction: column;
      width: 20%;
      justify-content: space-evenly;
      align-items: center;
    }

    .content-1 img{
      width: 70%;
      border-radius: 100%;
      border: solid 3px #18d26e;
    }

    .profile{
      display: flex;
      flex-direction: column;
      width: 100%;
      height: 70%;
      justify-content: space-around;
      align-items: center;
    }

    .side-btns{
      display: flex;
      flex-direction: column;
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
      width: 60%;
      display: flex;
      flex-direction: column;
      justify-content: space-evenly;
      align-items: center;
    }

    .content-2-1{
      width: 100%;
      height: 45%;
      display: flex;
      justify-content: space-evenly;
      align-items: center;
    }



    .content-2-1 .content-2-children{
      width: 45%;
      height: 90% ;
      max-height: 366px
    }

    .content-2-2{
      width: 100%;
      height: 45%;
      display: flex;
      justify-content: space-evenly;
      align-items: center;
    }

    .content-2-2 .content-2-children{
      width: 45%;
      height: 90% ;
      max-height: 366px
    }

    .doc a{
      width: 75%;
    }

    .content-2-children h3{
      border-bottom: solid 1px white;
      width:70%;
      margin: 0 auto;
      margin-bottom: 10px;
    }

  .incoming{
    margin: auto;
    padding: 5px;
    width: 95%;
    height: 75%;
    overflow-y: scroll;
    }


    .incoming-full{
    margin: auto;
    padding: 5px;
    width: 95%;
    height: 100%;
    overflow-y: scroll;
}

.new-coming{
    padding: 5px;
    margin-bottom: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #fff;
    font-weight: bold;
    border-bottom: solid 1px black;
}

.new-coming img{
    width: 30px;
}

.new-coming p{
    display: inline;

}

.new-coming:hover{
    color: black;
    cursor: pointer;
    background-color: #18d26e;
    border: none;
    border-radius:5px;
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
        <h1><a href="#intro" class="scrollto">Coordinator</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="coordinator.php">Home</a></li>
          <li><a href="view-app-coo.php">View Applications</a></li>
          <li><a href="announce-co.php">Announce</a></li>
          <li><a href="inbox-co.php">Inbox</a></li>
          <li><a href="logout2.php">Logout</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="findinternbtn text-center parent">

    <div class="content content-1">
      <div class="profile">
        <img src="img/coordinator.png" alt="">
        <div class="info">
          <h3>Murat</h3>
          <h5>ID: 200000000</h5>
          <h5>Instructor</h5>
        </div>
      </div>

      <div class="side-btns">
        <a href="view-app-coo.php" class="btn-get-started scrollto">View Applications</a>
        <a href="inbox-co.php" class="btn-get-started scrollto">Inbox</a>
      </div>

    </div>

    <div class="content content-2">

      <div class="content-2-1">

        <div class="my-application content-2-children">
          <h3>Incoming Applications</h3>
          <div class="incoming">

          <div class="new-coming">
              <div class="new-coming-child">
                  <img src="img/doc.png" alt="Document">
                  <p>Application 1</p>
              </div>
              <div>
                  <p>04/12</p>
              </div>
          </div>

          <div class="new-coming">
              <div class="new-coming-child">
                  <img src="img/doc.png" alt="Document">
                  <p>Application 2</p>
              </div>
              <div>
                  <p>01/05</p>
              </div>
          </div>

          <div class="new-coming">
              <div class="new-coming-child">
                  <img src="img/doc.png" alt="Document">
                  <p>Application 3</p>
              </div>
              <div>
                  <p>04/12</p>
              </div>
          </div>

          <div class="new-coming">
              <div class="new-coming-child">
                  <img src="img/doc.png" alt="Document">
                  <p>Application 4</p>
              </div>
              <div>
                  <p>29/9</p>
              </div>
          </div>

          <div class="new-coming">
              <div class="new-coming-child">
                  <img src="img/doc.png" alt="Document">
                  <p>Application 5</p>
              </div>
              <div>
                  <p>04/12</p>
              </div>
          </div>

          <div class="new-coming">
              <div class="new-coming-child">
                  <img src="img/doc.png" alt="Document">
                  <p>Application 6</p>
              </div>
              <div>
                  <p>04/12</p>
              </div>
          </div>

          <div class="new-coming">
              <div class="new-coming-child">
                  <img src="img/doc.png" alt="Document">
                  <p>Application 7</p>
              </div>
              <div>
                  <p>23/1</p>
              </div>
          </div>

          <div class="new-coming">
              <div class="new-coming-child">
                  <img src="img/doc.png" alt="Document">
                  <p>Application 8</p>
              </div>
              <div>
                  <p>07/2</p>
              </div>
          </div>

           
          </div>
    

        </div>
        <div class="new-opportunities content-2-children">
                    <h3>Official Letter Requests</h3>
                    <div class="incoming">

                        <div class="new-coming job-btn" onclick="navigate()">
                            <div class="new-coming-child">
                                <img src="img/doc.png" alt="Document">
                                <p>Leo Messi</p>
                            </div>
                            <div>
                                <p>08/03</p>
                            </div>
                        </div>

                        <div class="new-coming job-btn" onclick="navigate()">
                            <div class="new-coming-child">
                                <img src="img/doc.png" alt="Document">
                                <p>Ali</p>
                            </div>
                            <div>
                                <p>20/12</p>
                            </div>
                        </div>

                    </div>
        </div>

      </div>

      <div class="content-2-2">

        <div class="announcements content-2-children">
                    <h3>Announcements</h3>
                    <div class="incoming">

                        <div class="new-coming Announcement-btn" onclick="navigateAnnouncement()">
                            <div class="new-coming-child">
                                <img src="img/Announcementt.png" alt="Document">
                                <p>About the dea..</p>
                            </div>
                            <div>
                                <p>08/03</p>
                            </div>
                        </div>

                        <div class="new-coming Announcement-btn" onclick="navigateAnnouncement()">
                            <div class="new-coming-child">
                                <img src="img/Announcementt.png" alt="Document">
                                <p>Documents required</p>
                            </div>
                            <div>
                                <p>10/17</p>
                            </div>
                        </div>

                        <div class="new-coming Announcement-btn" onclick="navigateAnnouncement()">
                            <div class="new-coming-child">
                                <img src="img/Announcementt.png" alt="Document">
                                <p>The new dates</p>
                            </div>
                            <div>
                                <p>08/03</p>
                            </div>
                        </div>

                        <div class="new-coming Announcement-btn" onclick="navigateAnnouncement()">
                            <div class="new-coming-child">
                                <img src="img/Announcementt.png" alt="Document">
                                <p>Attention..</p>
                            </div>
                            <div>
                                <p>12/09</p>
                            </div>
                        </div>

                        <div class="new-coming Announcement-btn" onclick="navigateAnnouncement()">
                            <div class="new-coming-child">
                                <img src="img/Announcementt.png" alt="Document">
                                <p>Last date to..</p>
                            </div>
                            <div>
                                <p>08/08</p>
                            </div>
                        </div>

                        <div class="new-coming Announcement-btn" onclick="navigateAnnouncement()">
                            <div class="new-coming-child">
                                <img src="img/Announcementt.png" alt="Document">
                                <p>About the dea..</p>
                            </div>
                            <div>
                                <p>08/03</p>
                            </div>
                        </div>

                        <div class="new-coming Announcement-btn" onclick="navigateAnnouncement()">
                            <div class="new-coming-child">
                                <img src="img/Announcementt.png" alt="Document">
                                <p>New system</p>
                            </div>
                            <div>
                                <p>08/03</p>
                            </div>
                        </div>

                        <div class="new-coming Announcement-btn" onclick="navigateAnnouncement()">
                            <div class="new-coming-child">
                                <img src="img/Announcementt.png" alt="Document">
                                <p>About the dea..</p>
                            </div>
                            <div>
                                <p>08/03</p>
                            </div>
                        </div>

                    </div>
        </div>

        <div class="announcements content-2-children">
                    <h3>Messages</h3>
                    <div class="incoming">

                        <div class="new-coming Announcement-btn" onclick="navigateToInbox()">
                            <div class="new-coming-child">
                                <img src="img/email.png" alt="Document">
                                <p>About the dea..</p>
                            </div>
                            <div>
                                <p>08/03</p>
                            </div>
                        </div>

                        <div class="new-coming Announcement-btn" onclick="navigateToInbox()">
                            <div class="new-coming-child">
                                <img src="img/email.png" alt="Document">
                                <p>Documents required</p>
                            </div>
                            <div>
                                <p>10/17</p>
                            </div>
                        </div>

                        <div class="new-coming Announcement-btn" onclick="navigateToInbox()">
                            <div class="new-coming-child">
                                <img src="img/email.png" alt="Document">
                                <p>The new dates</p>
                            </div>
                            <div>
                                <p>08/03</p>
                            </div>
                        </div>

                        <div class="new-coming Announcement-btn" onclick="navigateToInbox()">
                            <div class="new-coming-child">
                                <img src="img/email.png" alt="Document">
                                <p>Attention..</p>
                            </div>
                            <div>
                                <p>12/09</p>
                            </div>
                        </div>

                        <div class="new-coming Announcement-btn" onclick="navigateToInbox()">
                            <div class="new-coming-child">
                                <img src="img/email.png" alt="Document">
                                <p>Last date to..</p>
                            </div>
                            <div>
                                <p>08/08</p>
                            </div>
                        </div>

                        <div class="new-coming Announcement-btn" onclick="navigateToInbox()">
                            <div class="new-coming-child">
                                <img src="img/email.png" alt="Document">
                                <p>About the dea..</p>
                            </div>
                            <div>
                                <p>08/03</p>
                            </div>
                        </div>

                        <div class="new-coming Announcement-btn" onclick="navigateToInbox()">
                            <div class="new-coming-child">
                                <img src="img/email.png" alt="Document">
                                <p>New system</p>
                            </div>
                            <div>
                                <p>08/03</p>
                            </div>
                        </div>

                        <div class="new-coming Announcement-btn" onclick="navigateToInbox()">
                            <div class="new-coming-child">
                                <img src="img/email.png" alt="Document">
                                <p>About the dea..</p>
                            </div>
                            <div>
                                <p>08/03</p>
                            </div>
                        </div>

                    </div>
        </div>

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
  <script src="index2.js"></script>
  <script src="index3.js"></script>

  <script>function navigate(){
    window.location.href = "official-letter-co.php";
    }
  </script>

</body>

</html>