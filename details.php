  <?php
  $place = $_GET['p'];
  $con = mysqli_connect('localhost', 'root', '', 'memfull');
  $row = mysqli_query($con, "select * from places where name='$place'");
  $res = mysqli_fetch_assoc($row);
  $heading = $res['filename'];
  $lat = $res['latitude'];
  $lon = $res['longitude'];
  session_start();
  $_SESSION['redirect']=$_SERVER['HTTP_REFERER'];
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $place ?></title>
    <link rel="shortcut icon" href="logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="details.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Kanit&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="logo.jpeg" type="image/x-icon">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      $(document).ready(function() {
        $(".search-icon").click(function() {
          console.log("pressed");
          var what = document.querySelector(".search").value;
          window.location.replace('destinations.php?data=' + what);
          console.log(what)
          document.querySelector(".popular").innerHTML = "Popular destination near " + what;
          $(".locations").load("destination_search.php", {
            search: what
          });
        });
      });
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
        <li><input type="search" placeholder="Search" class="search"><img src="search.svg" width="10px" height="10px"
            class="search-icon"></li>
        <li><a href="home.php" target="_blank">Home</a></li>
        <li><a href="destinations.php" target="_blank">Destinations</a></li>
        <li><a href="contribution.php" target="_blank">Contribute</a></li>
        <!-- <li class="scroll_about"><a onclick="scrollToAbout()">About us</a></li> -->
        <?php 
             if(isset($_SESSION['username'])){
              ?>
            <li><a href="logout.php" target="_blank">Logout</a></li>
            <?php
             }
             else{
                 ?>
                 <li><a href="login.html" target="_blank">Login</a></li>
                <?php
             }
             ?>
      </ul>
    </nav>
    <!-- <=======================================================NAVIGATION BAR=================================================> -->
    <!-- <=======================================================place image=================================================> -->
    <center>
      <div class="details-images">
        <img src="images/<?php echo $heading ?>" alt="" srcset="" style="">
        <h1 class="details-title heading_font"><?php echo $place ?></h1>
      </div>
    </center>
    <!-- <script>alert("<?php echo $lat . "+" . $lon ?>");</script> -->
    <!-- <=======================================================place image=================================================> -->
    <!-- <=======================================================SPECIATLITY=================================================> -->
    <div class="content">
      <p class="heading_font" style="text-transform: capitalize;font-size: 40px;">the Beauty Of the <?php echo $place ?></p>
      <p class="font"><?php echo $res['speciality'] ?></p>
    </div>
    <div class="content">
      <p class="heading_font" style="text-transform: capitalize;font-size: 40px;">the history of the <?php echo $place ?></p>
      <p class="font"><?php echo $res['history'] ?></p>
    </div>
    <div class="content">
      <p class="heading_font" style="text-transform: capitalize;font-size: 40px;">route form famous places to <?php echo $place ?></p>
      <p class="font"><?php echo $res['way'] ?></p>
    </div>
    <!-- <=======================================================SPECIATLITY=================================================> -->
    <center>
      <iframe src="https://www.google.com/maps?q=<?php echo $res['latitude'] . ',' . $res['longitude'] ?>&hl=ez;z=14&output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </center>
    <div style="width: 100%;display:flex;justify-content:space-between;height:fit-content">
      <!-- <=======================================================comment box =================================================> -->
      <div class="commentbox">
        <div class="write">
          <p class="font"><?php if(isset($_SESSION['username'])) 
          echo $_SESSION['username'];
          else 
          echo "username";
          ?></p>
          <form method="post" id="comment">
            <textarea name="comment" id="" class="data" placeholder="leave a experince of you here so other can have glipse of the happiness of the place"></textarea>
            <input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" hidden>
            <input type="text" name="place" value="<?php echo $place ?>" hidden>
            <button type="submit" class="comment_button">comment</button>
          </form>
        </div>
        <p style="color: red; display:none;" class="font" id="comment_warning">please login before posting the comment</p>
        <div class="comments">
          <?php
          $comment = mysqli_query($con, "select * from comments where place='$place';");
          while ($crow = mysqli_fetch_assoc($comment)) {
            
            ?>
            <div class="user">
              <p><?php echo $crow['username'] ?></p>
              <p><?php echo $crow['comment'] ?></p>
            </div>
            <?php
          }
          ?>
        </div>
      </div>
      <!-- <=======================================================comment box =================================================> -->
      <!-- <=======================================================user images=================================================> -->
      <div class="userimages">
        <div class="images">
          <?php 
           $ires=mysqli_query($con,"select * from image_user where place='$place';");
           while($irow=mysqli_fetch_assoc($ires)){
             ?>
           <img src="<?php echo "user_images/".$irow['filename']; ?>" alt="" srcset="" class="userimage">
           <?php
           }
           ?>
        </div>
        <form  method="post" enctype="multipart/form-data" id="userimages_form">
          <input type="file" name="userimage" id="file" >
          <input type="text" name="place" id="" value="<?php echo $place; ?>" hidden>
          <button type="submit" id="userimage_button">submit</button>
        </form>
        <p style="color: red; display:none;" class="font" id="image_warning">please login before uploading the image</p>
      </div>
      <!-- <=======================================================user images=================================================> -->
    </div>
    <!-- <=======================================================FOOTER =================================================> -->
    <footer style="position: relative;">
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
        <textarea type="text" name="" id="" style="width: 300px;height: 100px;resize:none" class="font" placeholder="your feedback is very important to us please give us your genuine feedback "></textarea><br>
        <input type="submit" value="Submit" style="width: 306px;">
      </div>
    </footer>
    <!-- <=======================================================FOOTER=================================================> -->
    <script>
      <?php 
      if(isset($_SESSION['username'])){
      ?>
      $(document).ready(function() {
        $(".comment_button").click(function(event) {
            event.preventDefault();
            document.getElementById("comment_warning").style.display = "none";
            $.ajax({
              type: 'POST',
              url: 'insert_comment.php',
              data:$("#comment").serialize(),
            })
            $(".data").val("");
          })
        })
        $(document).ready(function(){
          $("#userimage_button").click(function(event){
            event.preventDefault();
            var form=new FormData(document.getElementById('userimages_form'))
            $.ajax({
              type:'POST',
              url:'insert_images.php',
              data: form,
              processData:false,
              contentType:false,
              })
              $("#file").val("")
          })
        })
        <?php
      }
      else{
      ?>
      $(document).ready(function(){
        $(".comment_button").click(function(event){
          event.preventDefault();
          document.getElementById('comment_warning').style.display='block';
        })
      })
      $(document).ready(function(){
        $("#userimage_button").click(function(event){
          event.preventDefault();
          document.getElementById('image_warning').style.display='block';
          
        })
      })
      <?php 
      }
      ?>
    </script>
  </body>

  </html>