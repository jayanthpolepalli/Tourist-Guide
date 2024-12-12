<?php
session_start();
$_SESSION['redirect']=$_SERVER['HTTP_REFERER'];
if(!isset($_SESSION['username'])){
  header("location:login.html");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="contribution.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Kanit&display=swap" rel="stylesheet">
  <script src="https://cdn.maptiler.com/maptiler-sdk-js/v2.2.2/maptiler-sdk.umd.min.js"></script>
  <link href="https://cdn.maptiler.com/maptiler-sdk-js/v2.2.2/maptiler-sdk.css" rel="stylesheet" />
  <script src="https://cdn.maptiler.com/maptiler-geocoding-control/v1.3.3/maptilersdk.umd.js"></script>
  <link href="https://cdn.maptiler.com/maptiler-geocoding-control/v1.3.3/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="logo.jpeg" type="image/x-icon">\
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
      <li class="scroll_about"><a onclick="scrollToAbout()" style="cursor: pointer;">About us</a></li>
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
  <div class="contribute">
    <form  method="post" action="upload.php" enctype="multipart/form-data" class="taking">
      <center>
        <h1 class="heading_font" style="font-size: 50px;margin-top: 20px;margin-bottom: 20px;color: var(--heading);">
          Contribution</h1>
      </center>
      <p>Name of the location</p>
      <input type="text" name="heading" class="in" required><br>
      <p>breif description of the location</p>
      <textarea name="info" maxlength="4294967295" style="resize: none;" required></textarea><br>
      <p style="position: absolute;top: 275px;">History of the location</p>
      <textarea name="history" maxlength="4294967295" style="position: absolute; top: 320px;resize: none;"></textarea><br>
      <p style="position: absolute;top: 415px;">Speciality of the location</p>
      <textarea name="speciality" maxlength="4294967295" style="position: absolute; top: 455px;resize: none ;" required></textarea><br>
      <div id="map" style="position: absolute;top: 950px;"></div>
      <script>
        maptilersdk.config.apiKey = '5XqgoX7F4Dc20FOSp2iK';
        a=new maptilersdk.LngLat(79.43704226976661, 13.623087450903057)
    
    const map = new maptilersdk.Map({
      container: 'map', // container's id or the HTML element in which the SDK will render the map
      style: maptilersdk.MapStyle.HYBRID,
       geolocate:maptilersdk.GeolocationType.POINT
    });
    const gc = new maptilersdkMaptilerGeocoder.GeocodingControl({
        marker:false,
    });
    map.addControl(gc, 'top-left');
    marker=new maptilersdk.Marker({
        color:"#fcc603",
        draggable:true
    });
    map.on('click',(e)=>{
    if(marker){
        marker.remove()
    }
    marker.setLngLat(e.lngLat).addTo(map);
    document.querySelector("#latitude").value=marker.getLngLat().lat;
    document.querySelector("#longitude").value=marker.getLngLat().lng;
    });
    </script>
      <p style="position: absolute;top: 550px;">Famous place near it</p>
      <textarea name="near" maxlength="4294967295" style="position: absolute; top: 590px; resize: none;" required></textarea><br>
      <p style="position: absolute;top: 680px;">Way to reach it form a famous railway station</p>
      <textarea name="way" maxlength="4294967295" style="position: absolute; top: 720px;resize: none;" required></textarea><br>
      <p style="position: absolute;top: 813px;">Select the catogery</p>
      <select name="catogery" id="" required style="position: absolute; top: 850px;">
        <option value=""></option>
        <option value="waterfalls">waterfalls</option>
        <option value="temples">temples</option>
        <option value="beaches">beaches</option>
        <option value="picnicspot">picnicspot</option>
        <option value="trekking">trekking</option>
        <option value="historical">historical</option>
        <option value="hillstaion">hillstaion</option>
        <option value="hillstaion">Chruch</option>
        <option value="hillstaion">Mosque</option>
      </select>
      <p style="position: absolute;top: 865px;">Upload a image</p>
      <input type="file" name="file" id="" style="position: absolute;top: 900px;" class="in" required>
      <input type="text" name="latitude" id="latitude" hidden>
      <input type="text" name="longitude" id="longitude" hidden>
      <button type="submit" style="position: absolute;top: 1462px;" class="submit" name="submit">Contribute</button>
    </form>
  </div>
</table>
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
      <textarea type="text" name="" id="" style="width: 300px;height: 100px;" class="font" placeholder="your feedback is very important to us please give us your genuine feedback "></textarea><br>
      <input type="submit" value="Submit" style="width: 306px;" name="submit">
     </div>
  </footer>
  <!-- <=======================================================FOOTER=================================================> -->
   <script>
      document.querySelector("#map").addEventListener('DOMContentLoaded',()=>{
    document.firstElementChild.style.display='block';
  });
   </script>
</body>

</html>