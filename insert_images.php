<?php
$con=mysqli_connect("localhost","root","","memfull");
$file=$_FILES['userimage']['name'];
$temp=$_FILES['userimage']['tmp_name'];
$place=$_POST['place'];
$folder="user_images/".$file;
if(mysqli_query($con,"insert into image_user (filename,place) values('$file','$place');")){
    move_uploaded_file($temp,$folder);
    ?>
    <script>alert("uploded");</script>
    <?php
}
else{
    ?>
    <script>alert("not uploded");</script>
    <?php

}
?>