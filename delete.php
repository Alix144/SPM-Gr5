<?php
$conn = mysqli_connect("localhost", "root", "", "intern") or die(mysqli_connect_error());

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (isset($_POST["studentid"])) {
      $studentid = $_POST["studentid"];
      
      // Veritabanından ilgili satırı silme işlemi
      $sql = "DELETE FROM newapp WHERE studentid = '$studentid'";
      if (mysqli_query($conn, $sql)) {
         echo "deleted.";
      } else {
         echo "could not be deleted: " . mysqli_error($conn);
      }
   }
}

mysqli_close($conn);
?>