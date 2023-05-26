<?php
$conn = mysqli_connect("localhost", "root", "", "intern") or die(mysqli_connect_error());

// Veritabanından verileri al
$sql = "SELECT * FROM newapp";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>
<!doctype html>
<html>

<html>
<head>
   <title>Application Status</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="" name="keywords">
   <meta content="" name="description">

   <link href="img/job.png" rel="icon">
   <link href="img/job.png" rel="apple-touch-icon">

   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

   <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   <link href="css/style.css" rel="stylesheet">

   <style>
    
      body{
         background: #134920;
         background-size:cover;
         background-repeat:no-repeat;
         color:white;
      }

      #particles-js {
         position: absolute;
         height: 100%;
         width: 100%;
         z-index: -10 !important;
      }

      table, th, td{
         margin: auto;
         border: none;
         /* border-radius: 20px; */
         border-collapse: collapse;
         text-align: center;
         font-size: 19px;
         table-layout: auto;
         background: rgb(0, 0, 0, 0.5);
         color: black;
       
         margin: 0 auto;
      }

      thead tr{
         background: rgb(0, 0, 0, 0.6);
      }

      th, td{
         padding: 20px;
         opacity: 0.9;
         color: #fff;
      }

      th{
         border-bottom: solid 1px #fff;
         color: white;
      }

      td:hover{
         background-color: rgb(174, 175, 177);
         color: black;
      }

      tr:hover{
         background-color: black;
      }

      .pic{
         width: 250px;
         height: 250px;
      }

      .picbig{
         position: relative;
         width: 0px;
         -webkit-transition: width 0.3s linear 0s;
         transition: width 0.3s linear 0s;
         z-index: 10;
      }

      .pic:hover + .picbig{
         width: 500px;
         height: 500px;
      }
   </style>
</head>
<body id="back">
<header id="header">
   <div class="container-fluid">
      <div id="logo" class="pull-left">
      <h1><a href="#intro" class="scrollto" >View Applications</a></h1>
      </div>
      <nav id="nav-menu-container">
         <ul class="nav-menu">
            <li><a href="empwelcome.php">Home</a></li>
            <li><a href="jobpost.php">Post Internship</a></li>
            <li class="menu-active"><a href="empjobstatus.php">Application Status</a></li>
            <li><a href="view-applications.php">View Applications</a></li>
            <li><a href="inbox-cc.php">Inbox</a></li>
            <li><a href="logout.php">Logout</a></li>
         </ul>
      </nav>
   </div>
</header>

<table style="margin: 0 auto; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);width: 90%;">

   <thead>
      <tr>
         <th>Name</th>
         <th>Department</th>
         <th>Current Year</th>
         <th>Email</th>
         <th>Student ID</th>
         <th>Action</th>
      </tr>
   </thead>
   <tbody>
      <?php
      while ($row = mysqli_fetch_assoc($result)) {
         echo "<tr>";
         echo "<td>" . $row['Namee'] . "</td>";
         echo "<td>" . $row['Department'] . "</td>";
         echo "<td>" . $row['currentyear'] . "</td>";
         echo "<td>" . $row['Email'] . "</td>";
         echo "<td>" . $row['studentid'] . "</td>";
         echo "<td><button class='cancel-btn' onclick='cancel(" . $row['studentid'] . ")'>Cancel</button></td>";
         echo "</tr>";
      }
      ?>
   </tbody>
</table>

<script>
   function cancel(studentid) {
      var ajx = new XMLHttpRequest();
      ajx.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
            location.reload(); // Sayfayı yenile
         }
      };
      ajx.open("POST", "delete.php", true);
      ajx.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      ajx.send("studentid=" + studentid);
   }
</script>

</body>
</html>