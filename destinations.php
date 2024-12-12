<?php 
session_start();
$_SESSION['redirect']=$_SERVER['HTTP_REFERER'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Kanit&display=swap" rel="stylesheet">
    <!-- <=======================================================SHADOW INTO LIGHT=================================================> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Shadows+Into+Light&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="destinations.css">
    <script src="destinations.js"></script>
    <link rel="shortcut icon" href="logo.jpeg" type="image/x-icon">
    <script>
        $(document).ready(function(){
            $(".search_button").click(function(){
                var what=document.querySelector(".input_search").value;
                if(what==null||!isAlphaNumeric(what)||what==""){
                  $("#warning").css({"display":"block",});
                  return;
                }
                else{
                    $("#warning").css({"display":"none",});
                }
                // document.querySelector(".popular").innerHTML="Popular destination near "+what;
                $(".locations").load("destination_search.php",{
                          search:what
                });
            });
        });
        function isAlphaNumeric(str) {
  var code, i, len;

  for (i = 0, len = str.length; i < len; i++) {
    code = str.charCodeAt(i);
    if (!(code > 47 && code < 58) && // numeric (0-9)
        !(code > 64 && code < 91) && // upper alpha (A-Z)
        !(code > 96 && code < 123)&&
        !(code==32)) { // lower alpha (a-z)
      return false;
    }
  }
  return true;
};
    
    </script>
</head>

<body>
    <!-- <=======================================================NAVIGATION BAR=================================================> -->
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo font">Memfull</label>
        <ul>
            <li><input type="search" placeholder="Search" class="search"><img src="search.svg" width="10px" height="10px" class="search-icon"></li>
            <li><a href="home.php">Home</a></li>
            <li><a href="destinations.php">Destinations</a></li>
            <li><a href="contribution.php">Contribute</a></li>
            <!-- <li><a href="#">Services</a></li> -->
            <!-- <li class="scroll_about"><a onclick="scrollToAbout()">About us</a></li> -->
             <?php 
             if(isset($_SESSION['username'])){
              ?>
            <li><a href="logout.php">Logout</a></li>
            <?php
             }
             else{
                 ?>
                 <li><a href="login.html">Login</a></li>
                <?php
             }
             ?>
        </ul>
    </nav>
    <!-- <=======================================================NAVIGATION BAR=================================================> -->
    <!-- <=======================================================SEARCH BOX=================================================> -->
    <center>
        <div class="destination">
            <div class="dest_search">
                
                <input type="search" name="input" id="" class="input_search" placeholder="Where your soul want to wander?">
                <button class="search_button" name="search">SEARCH</button>
            </div>
            <p style="display: none;position:absolute;top:85px;left:70px;color:red" class="font" id="warning">search can't be empty</p>
            <div style="position: absolute; top: 100px; width: 100%;">
                <p class="heading_font popular" style="font-size: 60px;margin-bottom: 20px;">Popular Destinations</p>
            </div>
        </div>
    </center>
    <div class="locations"></div>
    <!-- <=======================================================SEARCH BOX=================================================>  -->
    <!-- <=======================================================FOOTER =================================================> -->
    <footer style="position: relative;">
        <!-- <script>createcard()</script> -->
        <label class="logo font" style="color:white;position:absolute;top:160px">Memfull</label>
        <div class="contact_us">
            <h1 style="color:white;font-size: 45px;" class="heading_font">Contact US</h1>
            <p>Feel free to contact us<br>and reach us!! </p>
            <p>Instagram</p>
            <p>Facebook</p>
            <p>Twiter</p>
        </div>
        <div class="feedback">
            <h1 style="color: white;font-size: 45px;" class="heading_font">Feedback</h1>
            <input type="text" name="" id="" placeholder="Name"><br><br>
            <input type="email" name="" id="" placeholder="Email"><br><br>
            <textarea type="text" name="" id="" style="width: 300px;height: 100px;resize:none" class="font"
            placeholder="your feedback is very important to us please give us your genuine feedback "></textarea><br>
            <input type="button" value="Submit" style="width: 306px;">
        </div>
    </footer>
    <!-- <=======================================================FOOTER=================================================> -->
<?php
    $con=mysqli_connect("localhost","root","","memfull");
    $sql="select * from popular;";
    $res=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($res)){
        $heading=$row["name"];
        $matter=$row["speciality"];
        $filename=$row["filename"];
        ?>
<script>
var h = "<?php echo"$heading"?>"; 
var m = "<?php echo"$matter"?>";
var pic="<?php echo"$filename"?>";
</script>
<?php
echo "<script type='text/javascript'>createcard()</script>";
}
?>
<?php
if(isset($_GET['data'])){?>
    <script>
    $(document).ready(function(){
            var what="<?php echo $_GET['data'];?>";
            $(".locations").load("destination_search.php",{
                      search:what
            });
    });


</script>
<?php } ?>
</body>

</html>