<?php
 session_start();
//  $_SESSION['redirect']=$_SERVER['HTTP_REFERER'];
 ?>
<!DOCTYPE html > 
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="nav.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Kanit&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="logo.jpeg" type="image/x-icon">
  <script>
    $(document).ready(function(){
        $(".search-icon").click(function(){
          console.log("pressed");
            var what=document.querySelector(".search").value;
            window.location.replace('destinations.php?data='+what);
            console.log(what)
            document.querySelector(".popular").innerHTML="Popular destination near "+what;
            $(".locations").load("destination_search.php",{
              search:what
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
      <li><a href="home.php">Home</a></li>
      <li><a href="destinations.php">Destinations</a></li>
      <!-- <li><a href="#">Services</a></li> -->
      <li class="scroll_about"><a onclick="scrollToAbout()"  style="cursor: pointer;">About us</a></li>
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

  <section></section>
  <main>

    <!-- <=======================================================SCROLLING IMAGES=================================================> -->
    <div style="width:100%;position: relative;margin: 1px;overflow-y: hidden;">
      <img src="backbutton.png" alt="" width="70px" height="70px" class="bckbtn">
      <div class="scroll">
        <div> <video src="incrideble india cropped.mp4" class="scroll_items" autoplay controls muted loop style="object-fit: fill;"></video></div>
        <div style="height: 485px;"><img src="image1.webp" class="scroll_items">
          <div class="on_image font">
            <p class="heading_font" style="font-size: 130px; color: whitesmoke;margin: 0px;"> explore the unknow</p>
            <p style="color:whitesmoke;margin: 0px;font-size:30px;position:absolute;left: 284px;bottom:-2px"
              class="font">Discover the world beyond</p>
          </div>
        </div>
        <div style="height: 480px;"><img src="traveller_image2.jpg" class="scroll_items"></div>
        <div><img src="scroll-4.jpg" class="scroll_items"></div>
        <div><img src="scroll-3.jpg" class="scroll_items"></div>
        <div><img src="scroll-2.jpeg" class="scroll_items"></div>
        <div><img src="scroll-1.jpeg" class="scroll_items"></div>
      </div>
      <img src="frontbutton.png" alt="" width="70px" height="70px" class="fntbtn">
    </div>
    <!-- <=======================================================SCROLLING IMAGES=================================================> -->
    <!-- <=======================================================GALLERY IMAGES=================================================> -->
    <div style="margin-top: 70px;">
      <center>
        <p style="font-size: 60px;margin-bottom: 0px;margin-top: 10px;" class="heading_font">Treasure of India</p>
        <p style="font-size: 60px;margin-bottom: 0px;margin-top: 10px;" class="heading_font">Discover it</p>

        <div class="gallery">
          <div class="gallery_image1"><img src="tajmahal.jpg" style="width: 100%; height:100%;object-fit: cover;">
            <div class="gallery_content1">
              <p class="heading_font" style="color:yellow;font-size: 70px;font-weight: 500;">Taj Mahal</p>
            </div>
          </div>
          <div class="gallery_image2"><img src="jogfalls.jpeg"
              style="object-fit: cover;width: 100%;height: 100%;object-position:0% 24%;">
            <div class="gallery_content1">
              <P class="heading_font" style="color:yellow;font-size: 70px;font-weight: 500;">Jog falls</P>
            </div>
          </div>
          <div style="width:30%;height: 30%;" class="gallery_image3"><img src="srinagar.jpg"
              style="object-fit: cover;width: 100%;height: 100%;">
            <div class="gallery_content1">
              <P class="heading_font" style="color:yellow;font-size: 70px;font-weight: 500;">Srinagar</P>
            </div>
          </div>
          <div style="width:30%;height: 30%;" class="gallery_image4"><img src="mysore.jpg"
              style="object-fit: cover;width: 100%;height: 100%;">
            <div class="gallery_content1">
              <P class="heading_font" style="color:yellow;font-size: 70px;font-weight: 500;">Mysore Palace</P>
            </div>
          </div>
          <div style="width:30%;height: 30%;" class="gallery_image5"><img src="kasi.jpg"
              style="object-fit: cover;width: 100%;height: 100%;">
            <div class="gallery_content1" style="bottom: -30px;">
              <P class="heading_font" style="color:yellow;font-size: 70px;font-weight: 500;">Kasi</P>
            </div>
          </div>
        </div>
      </center>
    </div>
    <!-- <=======================================================iMAGES GALLERY=================================================> -->
    <!-- <=======================================================ABOUT US =================================================> -->
    <div class="tohere"></div>
    <div class="about" style="margin-bottom: 50px;">
      <div class="typing">
        <p class="heading_font" style="font-size: 60px;margin: 0px; width: 200px;color:var(--heading);;">About us</p>
      </div>
      <div class="image"><img src="aboutbanner.png" alt="" srcset=""
          style="width:100%;height: 100%;object-fit:contain;">
        </div>
        <div class="about_content">
          <p class="heading_font" style="margin: 0px;font-size: 42px;">Explore the India with us</p>
          <p style="width: 450px;" class="font">At Memfull, we believe that travel isn’t just about reaching a
            destination; it’s about the journey, the stories, and the connections you make along the way. Our passion lies
            in curating unforgettable experiences that ignite your sense of wonder and leave you with memories to cherish
          forever</p>
          <!-- <img src="compass.svg" alt="" srcset="" width="30px" height="30px"> -->
          <p class="heading_font" style="font-size: 40px;margin: 0px;color:var(--heading)">Tour guide</p>
          <p class="font" style="width: 450px;">We believe that the best way to understand a place is through the eyes of
            a local. Our guides are passionate about their regions, and they’ll share insider tips, shortcuts, and
          lesser-known gems that won’t appear on mainstream navigation apps.</p>
        <p class="heading_font" style="font-size: 40px;margin: 0px;color:var(--heading)">Accurate</p>
        <p class="font" style="width: 450px;">We don’t take shortcuts. Our team of meticulous fact-checkers dives deep
          into data, cross-referencing sources, and validating information. When you read our content, you can trust
          that it’s accurate and up-to-date</p>
        </div>
      </div>
      <!-- <=======================================================ABOUT US =================================================> -->
    </main>
    <!-- <=======================================================FOOTER =================================================> -->
    <footer style="position: relative;">
      <label class="logo font" style="color:white;position:absolute;top:160px">Memfull</label>
       <div class="contact_us">
        <h1 style="color:white;font-size: 45px;" class="heading_font">Contact US</h1>
        <p>Feel free to contact us<br>and reach  us!! </p>
        <p>Instagram</p>
        <p>Facebook</p>
        <p>Twiter</p>
       </div>
       <div class="feedback" >
        <h1 style="color: white;font-size: 45px;" class="heading_font">Feedback</h1>
        <input type="text" name="" id="" placeholder="Name"><br><br>
        <input type="email" name="" id="" placeholder="Email"><br><br>
        <textarea type="text" name="" id="" style="width: 300px;height: 100px;resize: none;" class="font" placeholder="your feedback is very important to us please give us your genuine feedback "></textarea><br>
        <input type="submit" value="Submit" style="width: 306px;">
       </div>
    </footer>
    <!-- <=======================================================FOOTER=================================================> -->
  <script>
    b = document.querySelector(".bckbtn")
    f = document.querySelector(".fntbtn")
    let c=0;
    s = document.querySelector('.scroll')
    b.addEventListener("click", () => {
      s.scrollLeft -= 1000;
      // console.log("clicked back button");
    });
    f.addEventListener("click", () => {
      s.scrollLeft += 1000;
      c++;
      if(c==7){
        s.scrollLeft -= 6000;
        c=0;
        
      }
      // console.log("clicked front button");
    });
    function scrollToAbout(){  
      document.querySelector(".tohere").scrollIntoView();
  }
  </script>
</body>

</html>