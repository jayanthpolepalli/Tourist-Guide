<?php
$con=mysqli_connect("localhost","root","","memfull");
if($con){
   echo "connected";
}
$username=$_POST['username'];
$comment=$_POST['comment'];
$place=$_POST['place'];
$sql="insert into  comments(username,comment,place) values('$username','$comment','$place');";
echo "done";
$res=mysqli_query($con,$sql);
if($res){
    echo "inserted";
}
else{
    echo "not inserted";
}

?>
