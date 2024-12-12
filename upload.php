<?php
    if(isset($_POST['submit'])){
    $con=mysqli_connect("localhost","root","","memfull");
        echo "loading";
        $filename=$_FILES["file"]["name"];
        $temp=$_FILES["file"]["tmp_name"];
        $heading=$_POST["heading"];
        echo "heading";
        // $info=$_POST["info"];
        $history=$_POST['history'];
        $history=mysqli_escape_string($con,removeSpecialChars($history));
        echo "history";
        $speciality=$_POST['speciality'];
        $speciality=mysqli_escape_string($con,removeSpecialChars($speciality));
        echo "speciality";
        $near=$_POST['near'];
        $near=mysqli_escape_string($con,removeSpecialChars($near));
        $way=$_POST['way'];
        $way=mysqli_escape_string($con,removeSpecialChars($way));
        $cat=$_POST['catogery'];
        $lat=$_POST['latitude'];
        $lon=$_POST['longitude'];
        $folder='images/'.$filename;
        echo $folder;
        if(mysqli_query($con,"insert into places (filename,name,history,speciality,near,way,category,latitude,longitude) values ('$filename','$heading','$history','$speciality','$near','$way','$cat','$lat','$lon');")){
            move_uploaded_file($temp,$folder);
            header('location:home.php');
        }
        else{
            echo "<script>alert('data is not uploded please submit we appericiate your patience');</script>";
            header('location:contribution.html');

        }
        exit();
    }
    function removeSpecialChars($string) {
        $pattern = '/[^\p{L}\p{N}\s]/u'; // matches any character that is not a Unicode letter, number, or whitespace
        $pattern .= '|["\']'; // add single and double quotes to the pattern
        $replacement = ' '; // replace with a space
        $clean_string = mb_ereg_replace($pattern, $replacement, $string);
        return $clean_string;
      }
    
    ?>
    