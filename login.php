<?php
   $con = mysqli_connect('localhost','root','','memfull');
   if(isset($_POST['login'])){
   $username=$_POST['email'];
   $password=$_POST['pass'];
   $query="select * from login where email='$username' and password='$password'";
   $result=mysqli_query($con,$query);
   $row=mysqli_num_rows($result);
   if($row==1)
   {
      session_start();
      $_SESSION['username']=$username;
      $user=$_SESSION['username'];
   ?>
   <!-- <script> alert("<?php echo $_SERVER['HTTP_REFERER']; ?>");</script> -->
   <?php
     echo $_SERVER['HTTP_REFERER'];
     if(isset($_SESSION['redirect']))
      header("Location:".$_SESSION['redirect']);
      else
      header("Location:home.php");
      exit();
   }
   else
   {
      echo "<script>alert('You must Signup FIrst !')</script>";
      echo"<script>window.location.href='home.php'</script>";
      exit();
   }
}
   mysqli_close($con);
   ?>

